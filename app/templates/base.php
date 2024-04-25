<?php
require_once "app/components/autoloader.php";
if (!isset($title)) {
    $title = "Base Template";
}
if (!isset($lang)) {
    $lang = "en";
}
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTAWASOME -->
    <!-- <script src="https://kit.fontawesome.com/6502c70df0.js" crossorigin="anonymous"></script> -->
    <!-- LOCAL -->
    <!-- <link href="/app/FA6/css/all.min.css" rel="stylesheet" /> -->
    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">
    <!-- BOOTSTRAP  -->
    <link rel="stylesheet" href="/app/css/bootstrap.min.css">
    <script src="/app/js/bootstrap.bundle.min.js" defer></script>
    <link rel="icon" type="image/x-icon" href="app/favicon.ico">
    <!-- CUSTOM -->
    <link rel="stylesheet" href="/app/css/main.css">
    <link rel="stylesheet" href="/app/css/nav.css">
    <script src="/app/js/app.js" defer></script>
    <?php
    if (!isset($additional_head)) {
        $additional_head = "";
    }
    echo $additional_head;

    ?>

    <title><?= $title ?></title>
</head>

<body>
    <?= Nav::bar() ?>
    <?php
    global $content;
    $content = "";
    function addContent($passedContent = "")
    {
        global $content;
        $content .= $passedContent;
    }
    function render()
    {
        global $content;
        echo $content;
        echo Footer::gen();
        echo "</body>
        </html>";
    }


    ?>