<?php
$title = "Payment Information transmitted";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>
<?= Banner::gen("/app/static/img/db.jpg") ?>
<div class="container mt-5">
    <h3 class="mt-5 mb-5 text-center"><i class="fa fa-lock"></i> Your payment information has been securely transmitted <i class="fa fa-lock"></i></h3>
    <h4 class="text-center">Thank your for your trust.</h4>
    <h4 class="mt-4 mb-5 pb-2 text-center">We will contact you shortly.</h4>
    <div class="text-center my-5">
        <a class="btn btn-primary btn-lg" href="/">
            Return to the Homepage
        </a>
    </div>
</div>