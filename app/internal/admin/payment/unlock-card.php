<?php
$title = "Unlock Card";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/internal/admin/templates/base.php";

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CardRepository.php";

$card_id = $_GET['cid'];

?>
<main class="d-flex justify-content-center align-items-center" style="height: 94vh;">
    <form action="login.php" method="POST">
        <div class="mb-3">
            <label class="text-center">Card ID</label>
            <input autofocus required type="password" name="card_id" value="<?= $card_id ?>" readonly class="form-control">
            <label class="text-center">Key</label>
            <input autofocus required type="password" name="c_key" class="form-control">
        </div>
        <div class="text-center mb-3">
            <button class="btn btn-outline-success">Enter</button>
        </div>
    </form>
</main>