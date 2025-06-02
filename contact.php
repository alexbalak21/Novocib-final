<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<?php
ob_start(); ?>
<div class="col-12">
    <div class="form-floating">
        <input
            name="volume"
            value="<?= $_GET['volume'] ?>"
            min="4"
            required="true"
            type="text"
            class="form-control"
            id="volume"
            placeholder="volume" />
        <div class="valid-feedback">Good</div>
        <div class="invalid-feedback">Enter your need (min: 4)</div>
        <label for="your-need">Volume</label>
    </div>
</div>
<?php $volume_form = ob_get_clean();

?>

<body>
    <div class="container mt-5 text-center">
        <?= $content_title ?>
        <p>You can contact us by e-mail or on this form and we will come back to you shortly.</p>
        <a class="fs-4" id="mailto" href="mailto:contact@novocib.com"><i class="fa-solid fa-envelope"></i> contact@novocib.com</a>
        <p class="mb-5 mt-3"><a href="" onclick="copy_to_cipboard('contact@novocib.com')">Copy E-mail <i class="fa-regular fa-clone"></i></a> </p>
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
                <?php print_r($_GET) ?>
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
</body>

</html>