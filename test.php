<?php
session_start();
$_SESSION['username'] = 'JohnDoe';
var_dump($_SESSION);
header("Location: test2.php");
