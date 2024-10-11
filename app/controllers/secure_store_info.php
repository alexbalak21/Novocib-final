<?php
//CARD MODEL CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Card.php";
//CARD REPO
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CardRepository.php";
//CUSTOMER MODEL CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Customer.php";
//CUSTOMER REPO
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CustomerRepository.php";



function save_card_info(): void
{
    $url = "/save-info";
    // header("Location: /app/internal/admin/test.php?error=Missing Information");
    $key = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 23);
    $card = new Card(id: null, name: $_POST['card_name'], number: $_POST['card_number'], exp: $_POST['exp'], ccv: $_POST['valid']);
    $cardRepo = new CardRepository();
    $cardId = $cardRepo->save($card);
    $savedCard = $cardRepo->findById($cardId);
    var_dump($savedCard);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    save_customer_info($cardId);
}

function save_customer_info(string $card_id, ?string $key = null): void
{
    $customer = new Customer(null, $_POST['first_name'], $_POST['last_name'], $_POST['e_mail'], $card_id, $key, null);
    $customRepo = new CustomerRepository();
    $customerId = $customRepo->save($customer);
    $storedCustomer = $customRepo->findById($customerId);
    var_dump($storedCustomer);
    echo "<br>";
    echo "<br>";
    die;
}




if ($_SERVER['REQUEST_METHOD'] === "POST") save_card_info();
