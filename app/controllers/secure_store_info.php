<?php
//CARD MODEL CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Card.php";
//CARD REPO
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CardRepository.php";



function process_card_info(): void
{
    $url = "/save-info";

    // header("Location: /app/internal/admin/test.php?error=Missing Information");
    $key = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 23);
    $card = new Card(id: null, name: $_POST['card_name'], number: $_POST['card_number'], exp: $_POST['exp'], ccv: $_POST['valid']);
    $cardRepo = new CardRepository();
    $cardId = $cardRepo->save($card);
    $savedCard = $cardRepo->findById($cardId);
    var_dump($savedCard);
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === "POST") process_card_info();
