<?php
require_once "db_operations.php";

function logVisit()
{
    $time = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];
    logVisitToDB($time, $ip);
}
logVisit();
