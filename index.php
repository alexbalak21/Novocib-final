<?php
include_once "autoloader.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Novocib</title>
</head>

<body>
    <?= Nav::bar() ?>
    <?php echo <<<SOME
    <div><h1>Home</h1></div>
    SOME;
    ?>
    <?= Tst::test() ?>
</body>

</html>