<?php
$title = "Credit Card Info";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/head.php";
?>

<?= Banner::gen("/app/static/img/payment.jpg")  ?>

<main class="container">
    <div class="card mb-4">
        <div class="card-header py-3">
            <h5 class="mb-0">Biling details</h5>
        </div>
        <div class="card-body">
            <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">


                </div>

                <!-- Text input -->
                <div data-mdb-input-init="" class="form-outline mb-4" data-mdb-input-initialized="true">
                    <input type="text" id="form6Example3" class="form-control">
                    <label class="form-label" for="form6Example3" style="margin-left: 0px;">Company name</label>
                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 98.4px;"></div>
                        <div class="form-notch-trailing"></div>
                    </div>
                </div>

                <!-- Text input -->
                <div data-mdb-input-init="" class="form-outline mb-4" data-mdb-input-initialized="true">
                    <input type="text" id="form6Example4" class="form-control">
                    <label class="form-label" for="form6Example4" style="margin-left: 0px;">Address</label>
                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 55.2px;"></div>
                        <div class="form-notch-trailing"></div>
                    </div>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init="" class="form-outline mb-4" data-mdb-input-initialized="true">
                    <input type="email" id="form6Example5" class="form-control">
                    <label class="form-label" for="form6Example5" style="margin-left: 0px;">Email</label>
                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 40px;"></div>
                        <div class="form-notch-trailing"></div>
                    </div>
                </div>

                <!-- Number input -->
                <div data-mdb-input-init="" class="form-outline mb-4" data-mdb-input-initialized="true">
                    <input type="number" id="form6Example6" class="form-control">
                    <label class="form-label" for="form6Example6" style="margin-left: 0px;">Phone</label>
                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 44.8px;"></div>
                        <div class="form-notch-trailing"></div>
                    </div>
                </div>

                <hr class="my-4">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkoutForm1">
                    <label class="form-check-label" for="checkoutForm1">
                        Shipping address is the same as my billing address
                    </label>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="checkoutForm2" checked="">
                    <label class="form-check-label" for="checkoutForm2">
                        Save this information for next time
                    </label>
                </div>

                <hr class="my-4">

                <h5 class="mb-4">Payment</h5>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm3" checked="">
                    <label class="form-check-label" for="checkoutForm3">
                        Credit card
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm4">
                    <label class="form-check-label" for="checkoutForm4">
                        Debit card
                    </label>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm5">
                    <label class="form-check-label" for="checkoutForm5">
                        Paypal
                    </label>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div data-mdb-input-init="" class="form-outline" data-mdb-input-initialized="true">
                            <input type="text" id="formNameOnCard" class="form-control">
                            <label class="form-label" for="formNameOnCard" style="margin-left: 0px;">Name on card</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 88.8px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div data-mdb-input-init="" class="form-outline" data-mdb-input-initialized="true">
                            <input type="text" id="formCardNumber" class="form-control">
                            <label class="form-label" for="formCardNumber" style="margin-left: 0px;">Credit card number</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 117.6px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-3">
                        <div data-mdb-input-init="" class="form-outline" data-mdb-input-initialized="true">
                            <input type="text" id="formExpiration" class="form-control">
                            <label class="form-label" for="formExpiration" style="margin-left: 0px;">Expiration</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 64.8px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div data-mdb-input-init="" class="form-outline" data-mdb-input-initialized="true">
                            <input type="text" id="formCVV" class="form-control">
                            <label class="form-label" for="formCVV" style="margin-left: 0px;">CVV</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 34.4px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <button data-mdb-button-init="" data-mdb-ripple-init="" class="btn btn-primary btn-lg btn-block" type="submit" data-mdb-button-initialized="true">
                    Continue to checkout
                </button>
            </form>
        </div>
    </div>

    <hr class="my-5">


    <div class="mt-5 card w-100 px-4">
        <h2 class="underlinedTitl pt-4 text-center"><span class="underlined novoblue">Payment Information</span></h2>

        <form id="contact-page-form" action="/send" method="POST" name="contact-page-form">
            <div class="row g-3 mt-4">
                <i style="font-size: 2rem;" class="fa-regular fa-user ms-2"></i>

                <?= InputArea::gen(name: "first name", required: true) ?>

                <?= InputArea::gen(name: "last name", required: true) ?>

                <?= InputArea::gen(name: "e-mail", class: "col-12", required: true) ?>

                <i style="font-size: 2rem;" class="fa-regular fa-building ms-2 mt-4"></i>
                <?= InputArea::gen(name: "company", class: "col-12") ?>
                <?= InputArea::gen(name: "address", class: "col-12") ?>
                <?= InputArea::gen(name: "country", class: "col-lg-4") ?>
                <?= InputArea::gen(name: "state", class: "col-lg-4 col-md-6") ?>
                <?= InputArea::gen(name: "zip code", class: "col-lg-4 col-md-6") ?>

                <hr class="my-4">
                <i style="font-size: 2rem;" class="fa-regular fa-credit-card ms-2"></i>


            </div>
            <div class="my-5"><button type="submit" class="btn btn-primary">Send message <i class="fa-regular fa-paper-plane"></i></button></div>
        </form>
    </div>




</main>









<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/foot.php";
?>