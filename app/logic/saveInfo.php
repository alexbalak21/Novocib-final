<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/Secure.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/utils/Encryption.php";


function randString($length = 23)
{
    $range = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/()[],.:;=-_";
    $max = strlen($range) - 1;
    $output = "";
    for ($i = 0; $i < $length; $i++)
        $output .= $range[rand(0, $max)];
    return $output;
}

serve();
