<?php
require_once "app/components/autoloader.php";
if (!isset($title)) {
    $title = "Novocib";
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
    <link rel="icon" type="image/x-icon" href="/app/static/img/icon.png" />
    <!-- CUSTOM -->
    <link rel="stylesheet" href="/app/css/main.css">
    <script src="/app/js/app.js" defer></script>
    <!-- OWL CAROUSEL -->
    <link href="/app/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/app/lib/owlcarousel/assets/owl.theme.default.min.css" />
    <script src="/app/lib/owlcarousel/owl.carousel.min.js" defer></script>
    <script src="/app/lib/jquery/jquery-3.7.1.min.js"></script>
    <!-- CUSTOM PARAMETERS FOR OWLCAROUSEL -->
    <link rel="stylesheet" href="/app/css/owlcarousel.css" />
    <script src="/app/js/owlcarousel.js" defer></script>
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
    }

    ?>

</body>

</html>