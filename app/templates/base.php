<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/components/autoloader.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/logVisit.php";
if (!isset($title)) {
    global $title;
    $title = "Novocib";
}


if (!isset($lang)) {
    $lang = "en";
}

if (!isset($metas)) {
    $metas = "";
}
$fontAwesome_source = "/FA6/css/all.min.css";
$host = $_SERVER['HTTP_HOST'];
if (str_starts_with($host, "localhost"))
    $fontAwesome_source = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css";



?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <?= $metas ?>
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

    <?php
    if (!str_starts_with($_SERVER["HTTP_HOST"], "localhost") || !str_starts_with($_SERVER["HTTP_HOST"], ".alwaysdata.net"))
        echo <<<GA
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DDV10RFLYD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-DDV10RFLYD');
    </script>
    GA;
    if (!isset($additional_head)) {
        $additional_head = "";
    }
    echo $additional_head;
    ?>
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