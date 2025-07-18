<?php
global $title;
$title = "Contact Us";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

addContent(Banner::gen("/app/img/contact-us.jpg"));
$content_title = UnderlinedTitle::get("Contact Us", "novoblue");

ob_start(); ?>
<div class="col-12">
    <div class="form-floating">
        <input
            name="volume"
            value="<?= isset($_GET['volume']) ? $_GET['volume'] : ""  ?>"
            min="4"
            required="true"
            type="text"
            class="form-control"
            id="volume"
            placeholder="volume" />
        <div class="valid-feedback">Good</div>
        <div class="invalid-feedback">Enter your desired volume of product</div>
        <label for="your-need">Volume</label>
    </div>
</div>
<?php $volume_form = ob_get_clean();

$product = isset($_GET['product']) ? $_GET['product'] : "";

ob_start(); ?>
<div class="container mt-5 text-center">
    <?= $content_title ?>
    <p>You can contact us by e-mail or on this form and we will come back to you shortly.</p>
    <a class="fs-4" id="mailto" href="mailto:contact@novocib.com"><i class="fa-solid fa-envelope"></i> contact@novocib.com</a>
    <span id="copy" class="text-secondary copy" title="Copy"><i class="fa-solid fa-clipboard"></i><span></span></span>

    <form class="mt-5" id="contact-page-form" action="/send" method="POST" name="contact-page-form">
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
                    <div class="invalid-feedback">Enter your email (exemple@mail.com)</div>
                    <label for="email">Your Email</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input
                        name="need"
                        value="<?= $product ?>"
                        min="4"
                        required="true"
                        type="text"
                        class="form-control"
                        id="your-need"
                        placeholder="your-need" />
                    <div class="valid-feedback">Good</div>
                    <div class="invalid-feedback">Enter your the product or service you need (min: 4)</div>
                    <label for="your-need">Your need</label>
                </div>
            </div>
            <?php if (isset($_GET['volume'])) echo $volume_form; ?>

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
                    <label for="message">Your Message</label>
                </div>
            </div>
        </div>
        <div class="my-5"><button type="submit" class="btn btn-primary">Send message <i class="fa-regular fa-paper-plane"></i></button></div>
    </form>
</div>
<script src="/app/js/contact-inquiry.js"></script>
<?php $page_content = ob_get_clean();


addContent($page_content);
render();
