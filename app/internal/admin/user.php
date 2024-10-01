<?php
$title = "Modify User";
require_once __DIR__ . "/templates/head.php";
global $user;
?>

<?= Nav::gen() ?>
<main class="d-flex justify-content-center align-items-center" style="height: 93vh;">
    <div class="text-center mt-4">
        <h3 class="my-4">Modify User Profile</h3>
        <form action="updateUser.php" method="POST">
            <div class="mb-1">
                <label for="username" class="form-label">Username</label>
                <input name="username" type="text" value="<?= $user['username'] ?>" class="form-control" id="username">
            </div>
            <div class="mb-5">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" value="<?= $user['email'] ?>" class="form-control" id="email">
            </div>
            <div class="mb-1">
                <label for="old_password" class="form-label">Password</label>
                <input name="old_password" placeholder="Old password" type="password" class="form-control" id="old_password">
            </div>
            <div class="mb-1">
                <input name="new_password1" placeholder="New password" type="password" class="form-control" id="new_password1">
            </div>
            <div class="mb-3">
                <input name="new_password2" placeholder="Confirm new password" type="password" class="form-control" id="new_password2">
            </div>
            <button class="btn btn-success" <?php if (!empty($_GET)) { ?> disabled <?php } ?>>Update</button>
        </form>
    </div>
</main>

<?php
require_once __DIR__ . "/templates/foot.php";
?>