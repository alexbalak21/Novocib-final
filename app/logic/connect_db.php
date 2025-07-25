<?php
$config = require_once $_SERVER['DOCUMENT_ROOT'] . "/config/db_config";

function connect_db()
{
    global $config;
    $host = $config['host'];
    $username = $config['username'];
    $password = $config['password'];
    $database = $config['database'];
    try {
        $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo '$sql' . "<br>" . $e->getMessage();
    }
    return null;
}


if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    header("Location: /404");
    exit('Forbidden');
}
