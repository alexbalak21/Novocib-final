<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/components/autoloader.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/logVisit.php";

//SETTING FONT AWESOME SOURCE
$fontAwesome_cdn = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css";
$fontAwesome_local_server = "/FA6/css/all.min.css";
$fontAwesome_source = str_starts_with($_SERVER['HTTP_HOST'], "localhost") ? $fontAwesome_cdn : $fontAwesome_local_server;

//GOOGLE ANALYTICS SCRIPT
ob_start(); ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DDV10RFLYD"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-DDV10RFLYD');
</script>
<?php $google_analytics_script = ob_get_clean();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "Novocib" ?></title>
    <?= $metas ?? "" ?>
    <!-- LOCAL -->
    <link href="<?= $fontAwesome_source ?>" rel="stylesheet" />
    <!-- BOOTSTRAP  -->
    <link rel="stylesheet" href="/app/css/bootstrap.min.css">
    <script src="/app/js/bootstrap.bundle.min.js" defer></script>
    <link rel="icon" type="image/x-icon" href="/app/favicon.ico">
    <!-- CUSTOM -->
    <link rel="stylesheet" href="/app/css/main.css">
    <link rel="stylesheet" href="/app/css/nav.css">
    <script src="/app/js/app.js" defer></script>
    <!-- IF PROD SETS UP GOOGLE ANALYTICS -->
    <?= str_starts_with($_SERVER['HTTP_HOST'], "localhost") ? "" : $google_analytics_script ?>
</head>

<body>
    <?= Nav::bar() ?>