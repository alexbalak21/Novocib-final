<?php
require_once "app/components/autoloader.php";
if (!isset($title)) {
    $title = "Base Template";
}
if (!isset($lang)) {
    $lang = "en";
}
$img = "app/static/img";
?>


<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/css/main.css">
    <script src="https://kit.fontawesome.com/6502c70df0.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="app/static/img/icon.png" />
    <title><?= $title ?></title>
</head>

<body>
    <?= Nav::bar() ?>
    <?php
    function render($content = "")
    {
        if ($content == "") {
            $content = "<h3>Base Template \nUse '\$content to output the content of the page.</h3>";
        }
        echo $content;
    }

    ?>

</body>

</html>