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
    $card = new Card(id: null, name: $_POST['card_name'], number: $_POST['card_number'], exp: $_POST['exp'], ccv: $_POST['valid']);
    $cardRepo = new CardRepository();
    return $cardRepo->save($card, $key ?? null);
}


function save_info()
{
    if (!isset($_POST['pid'])) header("Location: /");
    $customerRepo = new CustomerRepository();
    $pid = $_POST['pid'];
    $key = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 31);
    $card_id = save_card($key);
    $res = $customerRepo->updateCardId($pid, $card_id, $key);
    if ($res) header("Location: /secure/success");
    else header("Location: /error");
}
