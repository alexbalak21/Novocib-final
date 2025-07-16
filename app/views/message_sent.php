<?php
global $title;
$title = "Message sent successfully";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/head.php";
?>


<?= Banner::gen("/app/static/img/mail-header.jpg") ?>
<div class="container mt-5">
    <h3 class="my-5 text-center">Your message has been sent.</h3>
    <h4 class="my-5 text-center">Thank you for your inquiry !</h4>
    <h4 class="my-4 text-center">We will contact you shortly.</h4>
    <div class="text-center my-5">
        <a class="btn btn-primary btn-lg" href="/">
            Return to the Homepage
        </a>
    </div>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/foot.php";
?>