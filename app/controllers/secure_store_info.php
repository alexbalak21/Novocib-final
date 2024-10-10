<?php
//CARD MODEL CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Card.php";
//CARD REPO
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CardRepository.php";

function serve(): void
{
    $url = "/save-info";
    if ($_SERVER['REQUEST_METHOD'] != "POST") echo "Bad Request";
    extract($_POST);
    if (empty($company_name) || empty($person_name) || empty($name) || empty($number) || empty($exp) || empty($valid)) echo "Missing info";
    // header("Location: /app/internal/admin/test.php?error=Missing Information");
    $key = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 23);
    $card = new Card(null, $card_name, $card_number, $exp, $valid);
    $cardRepo = new CardRepository();
}

serve();
