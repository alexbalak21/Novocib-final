<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/Secure.php";

function randString($length = 16)
{
    $range = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/()[],.:;=-_";
    $max = strlen($range) - 1;
    $output = "";
    for ($i = 0; $i < $length; $i++)
        $output .= $range[rand(0, $max)];
    return $output;
}

function serve(): void
{
    $url = "/secure/add-card";
    if ($_SERVER['REQUEST_METHOD'] != "POST") echo "Bad Request";
    // header("Location: /app/internal/admin/test.php?error=Bad Request");
    extract($_POST);
    if (empty($company_name) || empty($person_name) || empty($name) || empty($number) || empty($exp) || empty($valid)) echo "Missing info";
    // header("Location: /app/internal/admin/test.php?error=Missing Information");
    $key = randString();
    $db = new Secure();
    $storedId = $db->store($company_name, $person_name, $name, $number, $exp, $valid, $key);
    $card = $db->read($storedId, $key);
    var_dump($card);
    die;
    // header("Location: /app/internal/admin/test.php?id=$storedId&key=$key");
}

serve();
