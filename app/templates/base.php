<?php
require_once "app/components/autoloader.php";
require_once "app/logic/logVisit.php";
if (!isset($title)) {
    $title = "Novocib";
}

define("DS", DIRECTORY_SEPARATOR);
define("__ROOT__", $_SERVER['DOCUMENT_ROOT']);
define("__APP__", __ROOT__ . DIRECTORY_SEPARATOR . "app");



if (!isset($lang)) {
    $lang = "en";
}

if (!isset($metas)) {
    $metas = "";
}
$fontAwesome_source = "https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.2-web/css/all.min.css";

function check_fontAwesome_local()
{
    global $fontAwesome_source;
    $local_fa6 = __APP__ . DS . "FA6" . DS . "css" . DS . "all.min.css";
    $local_fa6 = "app/FA6/css/all.min.css";
    if (file_exists($local_fa6)) $fontAwesome_source = $local_fa6;
}
check_fontAwesome_local();


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