<?php
$title = "Inquiry";
require_once "app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen("/app/static/img/order.jpg"));
$content_title = UnderlinedTitle::get("Inquiry", "novoblue");


$product = isset($_GET['product']) ? $_GET['product'] : "";


$page_content = <<<Services
<div class="container mt-5 text-center">
$content_title
<p>You can place your oerder by sending us an <strong>Inquiry</strong>. We will confirm your order by sending you a mail.</p>
<p class="mb-5">You can also order directly by e-mail. Just write the inquiry at this adress : <a href="mailto:contact@novocib.com">contact@novocib.com</a> <a class="copy" onclick="copy_to_cipboard('contact@novocib.com')"><i class="fa-regular fa-copy"></i></a><span id="copied" class="text-success ms-2"></span> </p>

<form id="contact-page-form" action="/send" method="POST" name="contact-page-form">
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input name="name" required="true" type="text" class="form-control" id="nom" placeholder="Your Name" />
                <div class="valid-feedback">Ok</div>
                <div class="invalid-feedback">Enter your name (min: 4)</div>
                <label for="name">Your Name</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input
                    name="mail"
                    type="email"
                    required="true"
                    class="form-control"
                    id="email"
                    placeholder="your Email" />
                <div class="valid-feedback">Ok</div>
                <div class="invalid-feedback">Entrez your email (exemple@mail.fr)</div>
                <label for="email">Your Email</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input
                    name="need"
                    value="$product"
                    min="4"
                    required="true"
                    type="text"
                    class="form-control"
                    id="your-besoin"
                    placeholder="your-besoin" />
                <div class="valid-feedback">Good</div>
                <div class="invalid-feedback">Enter your need (min: 4)</div>
                <label for="your-besoin">Services & Products you need</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea
                    name="message"
                    required="true"
                    class="form-control"
                    placeholder="Leave a message here"
                    id="message"
                    style="height: 150px"></textarea>
                <div class="valid-feedback">Bon</div>
                <div class="invalid-feedback">Enter your message (min: 10)</div>
                <label for="message">Message</label>
            </div>
        </div>
    </div>
    <div class="my-5"><button type="submit" class="btn btn-primary">Submit</button></div>
</form>
</div>

Services;

addContent($page_content);
render();
