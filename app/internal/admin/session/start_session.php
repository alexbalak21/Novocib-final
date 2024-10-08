<?php
function create_session(string $username, string $email, string $role): void
{
    if (isset($_SESSION)) session_destroy();
    ini_set("session.use_only_cookies", 1);
    ini_set("session.use_strict_mode", 1);
    session_set_cookie_params(["lifetime" => 1800, "path" => '/', "httponly" => true, "domain" => ""]);
    session_set_cookie_params(["secure" => true]);
    session_regenerate_id(true);
    session_start();
    $_SESSION['last_regeneration'] = time();
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['role'] = $role;
}
