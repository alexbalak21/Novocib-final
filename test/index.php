<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work in progress</title>
</head>

<body>
    <h1>Work in progress</h1>
    <h2>Please come back later.</h2>
    <?php
    try {
        require_once "test.php";
    } catch (Exception $e) {
        echo "<h1>Catch</h1>";
        echo 'Message: ' . $e->getMessage();
    }
    ?>
</body>

</html>