<?php
global $title;
$title = "Transmitted Successfully";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/head.php";
?>


<?= Banner::gen("/app/img/success.jpg") ?>
<div class="container mt-5">
    <h3 class="my-5 text-center text-success"><i class="fa-solid fa-lock"></i> Your payment Information has been securely transmitted. <i class="fa-solid fa-lock"></i></h3>
    <h4 class="my-5 text-center">Thank you for working with us !</h4>
    <h4 class="my-4 text-center">We will contact you shortly.</h4>
    <div class="text-center my-5">
        <a class="btn btn-success btn-lg" href="/">
            Return to the Homepage
        </a>
    </div>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/foot.php";
?>