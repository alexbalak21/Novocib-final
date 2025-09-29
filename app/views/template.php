<?php
global $title;
$title = "Title";

// META TAGS 
ob_start(); ?>
<meta name="description" content="">
<meta name="keywords" content="">
<?php $metas = ob_get_clean();


require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>

<?= Banner::gen() ?>
<main class="container mt-5">
    <!-- CONTENT HERE -->
</main>