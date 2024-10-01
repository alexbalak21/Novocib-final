<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/db_operations.php";
$title = "Modify User";
require_once __DIR__ . "/templates/head.php";
global $user;
?>

<?= Nav::gen() ?>
<main class="d-flex justify-content-center align-items-center" style="height: 93vh;">
    <div class="text-center mt-4 col-lg-4 col-sm-8">
        <h3 class="my-4">Modify User Profile</h3>
        <form class>
            <div class="mb-1">
                <label for="username" class="form-label">Username</label>
                <input type="text" value="<?= $user['username'] ?>" class="form-control" id="username">
            </div>
            <div class="mb-5">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="<?= $user['email'] ?>" class="form-control" id="email">
            </div>
            <div class="mb-1">
                <label for="old_password" class="form-label">Password</label>
                <input placeholder="Old password" type="password" class="form-control" id="old_password">
            </div>
            <div class="mb-1">
                <input placeholder="New password" type="password" class="form-control" id="new_password1">
            </div>
            <div class="mb-3">
                <input placeholder="Confirm new password" type="password" class="form-control" id="new_password2">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</main>

<?php
require_once __DIR__ . "/templates/foot.php";
?>