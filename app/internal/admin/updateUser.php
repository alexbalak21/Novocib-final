<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/internal/admin/session/check_session.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/db_operations.php";

function updateUser(): void
{
    global $user;
    extract($_POST);
    $messages = array();
    if (!empty($old_password) && !empty($new_password1) && $new_password1 === $new_password2)
        array_push($messages, update_user_password($user['username'], $old_password, $new_password1));
    if (!empty($username))
        array_push($messages,  update_username($user['username'], $username));
    if (!empty($email))
        array_push($messages, update_email($user['username'], $email));
    $message = join(",", $messages);
    header("Location: user.php?message=$message");
}




if ($_SERVER['REQUEST_METHOD'] === 'POST') updateUser();
