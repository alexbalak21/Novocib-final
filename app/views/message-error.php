<?php
global $title;
$title = "Error Sending Message";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/head.php";
?>

<?= Banner::gen("/app/img/error.jpg") ?>
<div class="container my-5">
    <div class="alert alert-warning text-center" role="alert">
        <h4>We’re sorry, but your message could not be sent at this time.</h4>
        <p>Please try again later, or contact us directly at
            <a href="mailto:contact@novocib.com">contact@novocib.com</a>.
        </p>
        <p>Thank you for your understanding.</p>
    </div>

    <div class="text-center mt-4">
        <a class="btn btn-outline-success btn-lg" href="/">
            Return to Homepage <i class="fa-solid fa-house"></i>
        </a>
    </div>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/foot.php";
?>