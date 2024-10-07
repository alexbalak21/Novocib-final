<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/Secure.php";

$db = new Secure();
$cardInfo = $db->read("", "");
var_dump($cardInfo);
