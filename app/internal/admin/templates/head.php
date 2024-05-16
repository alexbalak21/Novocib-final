<?php

// IF PAGE IS login.php don't request check_session
if (!str_ends_with(parse_url($_SERVER["REQUEST_URI"])["path"], 'login.php')) require_once __DIR__ . "/../session/check_session.php";
require_once __DIR__ . "/../components/autoLoader.php";
global $user;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <title>Admin</title>
</head>

<body>