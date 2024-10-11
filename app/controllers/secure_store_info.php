<?php
//CARD MODEL CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Card.php";
//CARD REPO
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CardRepository.php";
//CUSTOMER MODEL CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Customer.php";
//CUSTOMER REPO
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CustomerRepository.php";
//UTILITY CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/utils/Utility.php";



function serve(): void
{
    if ($_SERVER['REQUEST_METHOD'] === "POST") save_card_info();
}



function save_card_info(?string $key): ?int
{

    if (!Utility::check_array($_POST, ["card_name", "card_number", "exp", "valid"])) return null;
    $url = "/save-info";
    // header("Location: /app/internal/admin/test.php?error=Missing Information");
    $card = new Card(id: null, name: $_POST['card_name'], number: $_POST['card_number'], exp: $_POST['exp'], ccv: $_POST['valid']);
    $cardRepo = new CardRepository();
    return $cardRepo->save($card, $key ?? null);
}

function save_customer_info(string $card_id, ?string $key = null): ?int
{
    if (!Utility::check_array($_POST, ["first_name", "last_name", "e_mail"])) return null;
    $customer = new Customer(null, $_POST['first_name'], $_POST['last_name'], $_POST['e_mail'], $card_id, $key, null);
    $customRepo = new CustomerRepository();
    return $customRepo->save($customer);
}

function save_info()
{
    $key = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 23);
}




serve();
