<?php
function connect_db(): PDO
{
    $serverName = "db68325-novo.sql-pro.online.net";
    $username = "db122969";
    $password = "5gZi&$1Mn!zw%8MlJXdrswK^#SCXJ%HnM6ezY#kIuTz9pVJ";
    $dbname = "db68325_novo";

    try {
        $conn = new PDO("mysql:host=$serverName;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo '$sql' . "<br>" . $e->getMessage();
    }

    return null;
}

connect_db();
