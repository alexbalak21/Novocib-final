<?php
define("__ROOT__", $_SERVER['DOCUMENT_ROOT'] . "\app");
function check_session()
{
    global $user;
    $user = "";
    if (!isset($_SESSION)) session_start();
    $lifeTime = 30 * 60;
    if (isset($_SESSION['last_regeneration'])) {
        if (time() - $_SESSION['last_regeneration'] > $lifeTime) {
            session_destroy();
            header("Location: login.php");
        } else {
            $user = $_SESSION['username'];
        }
    } else {
        session_destroy();
        header("Location: login.php");
    }
}
check_session();
