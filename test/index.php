    <h1>Work in progress</h1>
    <h2>Please come back later.</h2>
    <?php
    define('__ROOT__', dirname(dirname(__FILE__)) . "/www");
    print_r(__ROOT__);
    try {
        require_once "app/views/base.php";
    } catch (Exception $e) {
        echo "<h1>Catch</h1>";
        echo 'Message: ' . $e->getMessage();
    }
    ?>