<?php

function connect_db(): PDO
{
    $serverName = "db68325-novo.sql-pro.online.net";
    $serverName = "localhost";
    $username = "db122969";
    $password = "40@Jsu47?zcI%1V0wJ9@@Rmd%YNSDLC";
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

$conn = connect_db();

if ($conn !== NULL)
    echo "connected";
else echo "NOT CONNECTED";
