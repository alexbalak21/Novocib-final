<?php
require_once "app/components/autoloader.php";
if (!isset($title)) {
    $title = "Novocib";
}

if (!isset($lang)) {
    $lang = "en";
}

if (!isset($metas)) {
    $metas = "";
    echo "";
}
$fontAwasome_source = "https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.2-web/css/all.min.css";

function check_fontAwasome_local()
{
    global $fontAwasome_source;
    $local_fa6 = "app/FA6/css/all.min.css";
    if (file_exists($local_fa6)) {
        $fontAwasome_source = '/' . $local_fa6;
    }
}
check_fontAwasome_local();

?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <?= $metas ?>

    <!-- LOCAL -->
    <link href="<?= $fontAwasome_source ?>" rel="stylesheet" />
    <!-- BOOTSTRAP  -->
    <link rel="stylesheet" href="/app/css/bootstrap.min.css">
    <script src="/app/js/bootstrap.bundle.min.js" defer></script>
    <link rel="icon" type="image/x-icon" href="app/favicon.ico">
    <!-- CUSTOM -->
    <link rel="stylesheet" href="/app/css/main.css">
    <link rel="stylesheet" href="/app/css/nav.css">
    <script src="/app/js/app.js" defer></script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-57SQCQK2');
    </script>
    <!-- End Google Tag Manager -->
    <?php
    if (!isset($additional_head)) {
        $additional_head = "";
    }
    echo $additional_head;
    ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57SQCQK2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
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