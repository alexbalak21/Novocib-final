<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/internal/admin/session/check_session.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/db_operations.php";

function updateUser(): void
{
    global $user;
    extract($_POST);
    $messages = ["password" => "", "username" => "", "email" => ""];
    if (!empty($old_password) && !empty($new_password1) && $new_password1 === $new_password2)
        $messages['password'] = update_user_password($_SESSION['username'], $old_password, $new_password1);
    if (!empty($username) && $username !== $_SESSION['username']) {
        [$usernameUpdated, $messages['username']] = update_username($user['username'], $username);
        if ($usernameUpdated) $_SESSION['username'] = $username;
    }
    if (!empty($email) && $email !== $_SESSION['email'])
        [$emailUpdated, $messages["email"]] = update_email($user['username'], $email);
    if ($emailUpdated) $_SESSION['email'] = $email;

    $getRequest = "" . $messages['username'] ? "username=" . $messages['username'] . '&' : "";
    $getRequest .= $messages['email'] ? "email=" . $messages['email'] . '&' : "";
    $getRequest .= $messages['password'] ? "password=" . $messages['password'] : "";
    header("Location: user.php?$getRequest");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') updateUser();
