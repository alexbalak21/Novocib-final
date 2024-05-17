<?php
require_once "session/session.php";
require_once "templates/head.php";
session_start();
session_destroy();


if (isset($_POST['password']) &&  $_POST['password'] === '@3zRD#riFR596PfBN^Z7nle') {
    create_session('admin');
    header("Location: index.php");
}
?>
<main class="d-flex justify-content-center align-items-center" style="height: 99vh;">
    <form action="login.php" method="POST">
        <div class="mb-3">
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