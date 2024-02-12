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
    <link rel="stylesheet" href="app/css/main.css">
    <script src="https://kit.fontawesome.com/6502c70df0.js" crossorigin="anonymous"></script>
    <title><?= $title ?></title>
</head>

<body>
    <?= Nav::bar() ?>
    <?php
    if (!isset($content)) {
        $content = "<div>
        <h1>Base Template</h1>
        <p>Use '\$content to output the content of the page.</p>
        </div>";
    }
    echo $content;
    ?>

</body>

</html>