<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/head.php";
?>


<div class="container">
    <div class="row mt-4 mb-2">
        <div class="d-flex">
            <i class="fa-regular fa-user fs-2 mt-4 ms-2"></i>
            <h2 class="underlinedTitl pt-4 mb-4 flex-grow-1 text-center"><span class="underlined novoblue">Customer Information</span></h2>
        </div>
        <?= InputArea::gen(name: "first name", required: true) ?>
        <?= InputArea::gen(name: "last name", required: true) ?>
        <?= InputArea::gen(name: "e-mail", class: "col-12", required: true) ?>
    </div>

    <div class="row mt-4 mb-2">
        <div class="d-flex align-items-center justify-content-center">
            <i class="fa-regular fa-building ms-2 mt-4 fs-2"></i>
            <h2 class="underlinedTitl pt-5 mb-4 flex-grow-1 text-center"><span class="underlined novoblue">Company Information</span></h2>
        </div>
        <?= InputArea::gen(name: "company", class: "col-12") ?>
        <?= InputArea::gen(name: "address", class: "col-12") ?>
        <?= InputArea::gen(name: "country", class: "col-lg-4") ?>
        <?= InputArea::gen(name: "state", class: "col-lg-4 col-md-6") ?>
        <?= InputArea::gen(name: "zip code", class: "col-lg-4 col-md-6") ?>
    </div>
</div>













<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/foot.php";
?>