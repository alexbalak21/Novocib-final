<?php
$title = "Message sent successfully";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "Message Sent"];

addContent(Banner::gen("app/static/img/mail-header.jpg"));


$page_content = <<<CONTENT
<div class="container mt-5">
<h2 class="my-5 text-center">Your message has been sent.</h2>
<h4 class="my-5 text-center">Thank you for your order !</h4>
<h5 class="my-4 text-center">We will contact you shortly.</h5>
<div class="text-center my-5">
<a class="btn btn-primary" href="/"><h5>Return to the Homepage</h4></a>
</div>
</div>
CONTENT;

addContent($page_content);
render();
