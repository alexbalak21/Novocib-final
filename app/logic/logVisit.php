<?php
require_once $_SERVER['DOCUMENT_ROOT'] .  "/app/logic/db_operations.php";

function logVisit()
{
    $time = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];
    logVisitToDB($time, $ip);
}
logVisit();
