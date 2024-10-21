<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/db_operations.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/internal/admin/session/start_session.php";

if ($_SERVER['REQUEST_METHOD'] !== "POST") header("Location: ../login.php");
if (!isset($_POST['username']) || !isset($_POST['password'])) return "bad request";
$user = find_user($_POST['username']);
if (empty($user)) return "User not found";
//CHECK PASSWORD
if (password_verify($_POST['password'], $user['password_hash'])) {
    create_session($user["username"], $user["email"], $user['role']);
    header("Location: /app/internal/admin/");
    return "loggedIn";
} else return "Wrong password";
