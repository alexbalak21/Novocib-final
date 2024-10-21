<?php
$title = "Error";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/head.php";
?>


<?= Banner::gen("/app/static/img/error.jpg") ?>
<div class="container mt-5">
    <h2 class="my-5 text-center text-danger">There was an error transmitting your information.</h2>
    <h3 class="my-5 text-center">Please contact us as soon as you can.</h3>
    <h4 class="my-5 text-center text-primary">We work hard to solve the technical problem.</h4>
    <h4 class="my-5 text-center text-success">We are very sorry for the inconvenience.</h4>
    <div class="text-center my-5">
        <a class="btn btn-success btn-lg" href="/">
            Return to the Homepage
        </a>
    </div>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/foot.php";
?>