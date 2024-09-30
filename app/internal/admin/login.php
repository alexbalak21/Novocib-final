<?php
require_once "session/start_session.php";
if (!isset($_SESSION)) session_start();
session_destroy();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/db_operations.php";

function log_in(): string
{
    if (!isset($_POST['username']) || !isset($_POST['password'])) return "bad request";
    $user = find_user($_POST['username']);
    if (empty($user)) return "User not found";
    //CHECK PASSWORD
    if (password_verify($_POST['password'], $user['password_hash'])) {
        create_session('admin', "admin");
        header("Location: index.php");
        return "loggedIn";
    } else return "Wrong password";
}

$error_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST')
    $error_message = log_in();

require_once "templates/head.php";
?>
<main class="d-flex justify-content-center align-items-center" style="height: 99vh;">
    <form action="login.php" method="POST">
        <div class="mb-3">
            <h4 class="text-danger text-center"><?= $error_message ?></h4>
            <label class="text-center" for="username">Username</label>
            <input autofocus required type="text" name="username" id="username" class="form-control">
            <label class="text-center" for="username">Password</label>
            <input autofocus required type="password" name="password" id="password" class="form-control">
        </div>
        <div class="text-center mb-3">
            <button class="btn btn-outline-success">Enter</button>
        </div>
    </form>
</main>

<?php
require_once "templates/foot.php";
?>