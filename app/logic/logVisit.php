<?php
require_once $_SERVER['DOCUMENT_ROOT'] .  "/app/logic/db_operations.php";

function logVisit()
{
    $time = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // ⛔ IPs to exclude from logging
    $excluded_ips = [
        '2001:861:203:6750:a170:9335:eb9:2671',
        '127.0.0.1',
        '192.168.1.100',
        '::1',
    ];

    // 📁 Extensions to exclude from logging
    $excluded_extensions = ['png', 'jpg', 'svg'];

    // 🧩 Check conditions before logging
    $ext = strtolower(pathinfo($uri, PATHINFO_EXTENSION));

    if (
        !in_array($ip, $excluded_ips) &&
        strpos($uri, '/FA6/') === false &&
        !in_array($ext, $excluded_extensions)
    ) {

        logVisitToDB($time, $ip, $uri);
    }
}
logVisit();
