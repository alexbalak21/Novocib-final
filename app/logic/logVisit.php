<?php
require_once $_SERVER['DOCUMENT_ROOT'] .  "/app/logic/db_operations.php";

function logVisit()
{
    $time = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // Extract just the path
    logVisitToDB($time, $ip, $uri);
}
logVisit();
