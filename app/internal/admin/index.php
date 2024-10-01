<?php
require_once "db_logic.php";
require_once __DIR__ . "/templates/head.php";
?>

<?= Nav::gen() ?>
<main class="d-flex justify-content-center align-items-center" style="height: 93vh;">
    <div class="text-center mt-4 w-100">
        <h3>Database <?= connect_db() !== NULL  ? "<span class='badge text-bg-success'>Online</span>" : "<span class='badge text-bg-danger'>Offline</span>" ?></h3>
    </div>
</main>

<?php
require_once __DIR__ . "/templates/foot.php";
?>