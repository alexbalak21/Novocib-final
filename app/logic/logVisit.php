<?php
require_once $_SERVER['DOCUMENT_ROOT'] .  "/app/logic/db_operations.php";

function logVisit()
{
    $time = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // 🚫 Check for excluded extensions
    $excludedExtensions = ['png', 'jpg', 'svg'];
    $ext = strtolower(pathinfo($uri, PATHINFO_EXTENSION));

    // 🚫 Skip if URI contains '/FA6/' or ends with an excluded extension
    if (strpos($uri, '/FA6/') === false && !in_array($ext, $excludedExtensions)) {
        logVisitToDB($time, $ip, $uri);
    }
}
logVisit();
