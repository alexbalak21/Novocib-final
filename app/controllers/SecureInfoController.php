<?php
//CARD MODEL CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Card.php";
//CARD REPO
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CardRepository.php";
//CUSTOMER MODEL CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Customer.php";
//CUSTOMER REPO
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CustomerRepository.php";
//MAIL Service
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/Mail.php";
//UTILITY CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/utils/Utility.php";

function serve(): void
{
    if ($_SERVER['REQUEST_METHOD'] === "POST") save_info();
}



function save_card(?string $key): ?string
{

    if (!Utility::check_array($_POST, ["card_name", "card_number", "exp", "valid"])) return null;
    $url = "/save-info";
    // header("Location: /app/internal/admin/test.php?error=Missing Information");
    $card = new Card(id: null, name: $_POST['card_name'], number: $_POST['card_number'], exp: $_POST['exp'], ccv: $_POST['valid']);
    $cardRepo = new CardRepository();
    return $cardRepo->save($card, $key ?? null);
}

function save_customer(string $card_id): ?int
{
    if (!Utility::check_array($_POST, ["first_name", "last_name", "e_mail"])) return null;
    $customer = new Customer(null, $_POST['first_name'], $_POST['last_name'], $_POST['e_mail'], $card_id, null, null);
    $customRepo = new CustomerRepository();
    return $customRepo->save($customer);
}

function save_info()
{
    $key = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 31);
    $cardId = save_card($key);
    $customerId = save_customer($cardId);
    $firstName = ucfirst($_POST['first_name']);
    $lastName = strtoupper($_POST['last_name']);
    $email = $_POST['e_mail'];
    $subject = "A customer added payment Information";

    $message = "Hello, $firstName $lastName has uploaded payment information.
    The id of the customer is ID = $customerId;
    You can access it via admin.

    Code :

    $key
    
    Message  generated automatically by Novocib.com
    ";
    $sent = Mail::send($email, $subject, $message);
    echo $sent ? "Store and Send Successfully" : "FAILED";
}

serve();
