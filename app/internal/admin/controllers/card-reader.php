<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/internal/admin/session/check_session.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CardRepository.php";

if ($_SERVER['REQUEST_METHOD'] !== "POST") header("Location: /");
$card_id = $_POST['card_id'];
$c_key = $_POST['c_key'];

$cardRepo = new CardRepository();
$card = $cardRepo->findById($card_id, $c_key);
