<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/internal/admin/components/autoLoader.php";;
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/internal/admin/session/check_session.php";
$fontAwesome_source = str_starts_with($_SERVER['HTTP_HOST'], "localhost") ? "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" : "/FA6/css/all.min.css";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "Admin" ?></title>
    <!-- FONT AWESOME -->
    <link href="<?= $fontAwesome_source ?>" rel="stylesheet" />
    <!-- BOOTSTRAP  -->
    <link rel="stylesheet" href="/app/css/bootstrap.min.css" />
    <script src="/app/js/bootstrap.bundle.min.js" defer>
    </script>
    <link rel="icon" type="image/x-icon" href="/app/favicon.ico">
</head>

<body>
    <?= str_ends_with($_SERVER['REQUEST_URI'], "login.php") ? "" : Nav::bar($title ?? "Admin") ?>

    <?php
    function after_page_render()
    {
        echo "<div class='pt-5'></div> </body></html>";
    }
    register_shutdown_function("after_page_render");
    ?>