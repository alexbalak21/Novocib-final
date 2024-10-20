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


if ($_SERVER['REQUEST_METHOD'] === "POST") save_info();
else header("Location: /");




function save_card(?string $key): ?string
{

    if (!Utility::check_array($_POST, ["card_name", "card_number", "exp", "valid"])) return null;
    $url = "/save-info";
    // header("Location: /app/internal/admin/test.php?error=Missing Information");
    $card = new Card(id: null, name: $_POST['card_name'], number: $_POST['card_number'], exp: $_POST['exp'], ccv: $_POST['valid']);
    $cardRepo = new CardRepository();
    return $cardRepo->save($card, $key ?? null);
}



function save_info()
{
    if (isset($_POST['pid']) || empty($_POST['pid'])) header("Location: /");
    $customerRepo = new CustomerRepository();
    $pid = $_POST['pid'];
    $customer = $customerRepo->findByPrivateId($pid);
    $f_name = $customer->first_name;
    $l_name = $customer->last_name;
    $email = $customer->email;
    $key = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 31);
    $card_id = save_card($key);

    $customerRepo->updateCardId($pid, $card_id);
    echo $key;
    die;
    $subject = "A customer added payment Information";

    $message = "Hello, $f_name $l_name has uploaded payment information.

    You can access it via admin.

    Code :

    $key
    
    Message  generated automatically by Novocib.com
    ";
    $sent = Mail::send($email, $subject, $message);
    // echo $sent ? "Store and Send Successfully" : "FAILED";
    echo $key;
    die;
}
