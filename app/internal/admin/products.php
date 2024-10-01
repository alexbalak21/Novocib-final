<?php
global $title;
$title = "Products";
require_once __DIR__ . "/templates/head.php";
global $user;
?>

<?= Nav::gen() ?>
<main class="">
    <h1 class="text-center">Products</h1>

</main>

<?php
require_once __DIR__ . "/templates/foot.php";
?>