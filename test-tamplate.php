<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <div class="card mb-4">
        <div class="card-header py-3">
            <h5 class="mb-0">Biling details</h5>
        </div>
        <div class="card-body">
            <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div data-mdb-input-init="" class="form-outline" data-mdb-input-initialized="true">
                            <input type="text" id="form6Example1" class="form-control">
                            <label class="form-label" for="form6Example1" style="margin-left: 0px;">First name</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 68.8px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div data-mdb-input-init="" class="form-outline" data-mdb-input-initialized="true">
                            <input type="text" id="form6Example2" class="form-control">
                            <label class="form-label" for="form6Example2" style="margin-left: 0px;">Last name</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 68px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                        </div>
                    </div>
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





</body>

</html>