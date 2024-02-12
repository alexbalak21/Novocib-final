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
    <!-- BOOTSTRAP  -->
    <link rel="stylesheet" href="app/css/bootstrap.min.css">
    <script src="app/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://kit.fontawesome.com/6502c70df0.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="app/static/img/icon.png" />
    <link rel="stylesheet" href="app/css/main.css">

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
    }

    ?>

</body>

</html>