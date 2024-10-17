<?php
$title = "Secure Transfer";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/head.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/utils/Utility.php";


if (Utility::check_array($_GET, ['f_name', "l_name", "e_mail"])) {
    extract($_GET);
} else {
    $f_name = null;
    $l_name = null;
    $e_mail = null;
}



ob_start(); ?>
<div class="row mt-4 mb-2">
    <div class="d-flex">
        <i class="fa-regular fa-user fs-2 mt-4 ms-2"></i>
        <h2 class="underlinedTitl mt-4 mb-4 flex-grow-1 text-center"><span class="underlined novoblue">Customer Information</span></h2>
    </div>
    <?= InputArea::gen(name: "first name", required: true, type: "text", value: $f_name) ?>
    <?= InputArea::gen(name: "last name", required: true, type: "text", value: $l_name) ?>
    <?= InputArea::gen(name: "e-mail", class: "col-12", required: true, type: "email", value: $e_mail) ?>
</div>
<?php $customer_form = ob_get_clean();



ob_start(); ?>
<div class="row mt-4 mb-2">
    <div class="d-flex align-items-center justify-content-center">
        <i class="fa-regular fa-building ms-2 mt-4 fs-2"></i>
        <h2 class="underlinedTitl mt-4 mb-4 flex-grow-1 text-center"><span class="underlined novoblue">Company Information</span></h2>
    </div>
    <?= InputArea::gen(name: "company", class: "col-12") ?>
    <?= InputArea::gen(name: "address", class: "col-12") ?>
    <?= InputArea::gen(name: "country", class: "col-lg-4") ?>
    <?= InputArea::gen(name: "state", class: "col-lg-4 col-md-6") ?>
    <?= InputArea::gen(name: "zip code", class: "col-lg-4 col-md-6") ?>
</div>
<?php $company_form = ob_get_clean();


ob_start(); ?>

<div class="d-flex align-items-center justify-content-center">
    <i class="fa-regular fa-credit-card ms-2 mt-4 fs-2"></i>
    <h2 class="underlinedTitl mt-4 mb-4 flex-grow-1 text-center"><span class="underlined green">Card Information</span></h2>
</div>
<section class="payment_info">

    <div class="section preload">
        <div class="creditcard">
            <div class="front">
                <div id="ccsingle"></div>
                <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                    <g id="Front">
                        <g id="CardBackground">
                            <g id="Page-1_1_">
                                <g id="amex_1_">
                                    <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                            C0,17.9,17.9,0,40,0z" />
                                </g>
                            </g>
                            <path class="darkcolor greydark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                        </g>
                        <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4">0123 4567 8910 1112</text>
                        <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6">JOHN DOE</text>
                        <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8">Card holder name</text>
                        <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8">expiration</text>
                        <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8">card number</text>
                        <g>
                            <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">01/23</text>
                            <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">VALID</text>
                            <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">THRU</text>
                            <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9 		" />
                        </g>
                        <g id="cchip">
                            <g>
                                <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                        c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                            </g>
                            <g>
                                <g>
                                    <rect x="82" y="70" class="st12" width="1.5" height="60" />
                                </g>
                                <g>
                                    <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                                </g>
                                <g>
                                    <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                            c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                            C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                            c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                            c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                </g>
                                <g>
                                    <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                                </g>
                                <g>
                                    <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                                </g>
                                <g>
                                    <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                                </g>
                                <g>
                                    <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                                </g>
                            </g>
                        </g>
                    </g>
                    <g id="Back">
                    </g>
                </svg>
            </div>
            <div class="back">
                <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                    <g id="Front">
                        <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                    </g>
                    <g id="Back">
                        <g id="Page-1_2_">
                            <g id="amex_2_">
                                <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                        C0,17.9,17.9,0,40,0z" />
                            </g>
                        </g>
                        <rect y="61.6" class="st2" width="750" height="78" />
                        <g>
                            <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                    C707.1,246.4,704.4,249.1,701.1,249.1z" />
                            <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                            <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                            <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                        </g>
                        <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7">985</text>
                        <g class="st8">
                            <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10">security code</text>
                        </g>
                        <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                        <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                        <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13">John Doe</text>
                    </g>
                </svg>
            </div>
        </div>
    </div>
    <div class="row col-lg-4 col-12">
        <div class="mt-4">
            <div class="form-floating">
                <input name="card_name" maxlength="23" id="name" type="text" class="form-control" placeholder="Cardholder name">
                <div class="valid-feedback">Ok</div>
                <div class="invalid-feedback">Enter the name on your card</div>
                <label for="name">Cardholder name</label>
            </div>
        </div>
        <div class="form-floating mt-2">
            <input name="card_number" id="cardnumber" type="text" inputmode="numeric" class="form-control" placeholder="Card number">
            <svg id="ccicon" class="ccicon" width="700" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
            </svg>
            <div class="valid-feedback">Ok</div>
            <div class="invalid-feedback">Enter your card number</div>
            <label style="padding-left: 24px;" for="cardnumber">Card number</label>
        </div>

        <div class="form-floating mt-2 col-6">
            <input name="exp" id="expirationdate" type="text" class="form-control" inputmode="numeric" placeholder="Expiration (mm/yy)">
            <div class="valid-feedback">Ok</div>
            <div class="invalid-feedback">Enter the card expiration date</div>
            <label style="padding-left: 24px;" for="expirationdate">Expiration</label>
        </div>

        <div class="form-floating mt-2 col-6">
            <input name="valid" id="securitycode" type="text" class="form-control" placeholder="Security code">
            <div class="valid-feedback">Ok</div>
            <div class="invalid-feedback">Enter the security code</div>
            <label style="padding-left: 24px;" for="securitycode">Security code</label>
        </div>
    </div>
</section>

<?php $card_form = ob_get_clean();




?>

<?= Banner::gen("/app/static/img/payment.jpg")  ?>
<link rel="stylesheet" href="/app/css/payment.css">
<main class="container">
    <div class="mt-3 card w-100 px-4 position-relative mb-3" style="background-color: #FBFBFB;">
        <form id="contact-page-form" action="/secure-info" method="POST" name="contact-page-form">
            <?= $customer_form ?>
            <hr class="mt-5 mb-4">
            <?= $card_form ?>


            <div class="my-5 text-center"><button type="submit" class="btn btn-success btn-lg">Send Information <i class="fa-solid fa-lock ms-2"></i></button></div>
        </form>
    </div>

</main>

<script src="/app/js/imask.js"></script>
<script src="/app/js/payment.js"></script>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/foot.php";
?>