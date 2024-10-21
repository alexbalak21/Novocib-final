<?php
$title = "Login";
require_once __DIR__ . "/templates/base.php";




$error_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST')
    $error_message = "Error";

?>
<style>
    *:focus {
        box-shadow: none !important;
        border-color: #198754 !important;
    }
</style>
<main class="d-flex justify-content-center align-items-center" style="height: 94vh;">
    <form action="controllers/login.php" method="POST">
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