<?php
global $title;
$title = "Freshness Assay How it Works?";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

addContent(Banner::gen("/app/img/fish-freshness.jpg"));
$content_title = UnderlinedTitle::get("How does Freshness Assay Kit work?", "novoblue", "center");

$page_content = <<<CONTENT
<div class="container mt-5">
$content_title
<div class="row justify-content-center">
    <div class="col-lg-5 col-10 m-2">
        <img class="w-100" src="/app/img/freshness_1.jpg">
    </div>
    <div class="col-lg-5 col-10 m-2">
        <img class="w-100" src="/app/img/freshness_2.jpg">
    </div>
    <div class="col-lg-5 col-10 m-2">
        <img class="w-100" src="/app/img/freshness_3.jpg">
    </div>
    <div class="col-lg-5 col-10 m-2">
        <img class="w-100" src="/app/img/freshness_4.jpg">
    </div>
    <div class="col-lg-5 col-10 m-2">
        <img class="w-100" src="/app/img/freshness_5.jpg">
    </div>
    <div class="col-lg-5 col-10   m-2">
        <img class="w-100" src="/app/img/freshness_6.jpg">
    </div>
</div>
<p class="mt-5 text-end">
    <i class="fa-solid fa-download"></i>
    Download
    <a target="_blank" href="/app/documents/PRECICE Nucleotides Assay Kit K0700-004.pdf">
        <strong>PRECICE® Nucleotides Assay Kit</strong>
        <i class="fa-regular fa-file-pdf"></i>
    </a>
    (User manual)
    <i class="fa-solid fa-book"></i>
</p>
<p class="text-end mb-5">
    <i class="fa-solid fa-download"></i>
    Download
    <a target="_blank" href="/app/documents/PRECICE Nucleotides Assay Kit K0700-003.pdff">
        <strong>PRECICE® Nucleotides Assay Kit</strong>
        <i class="fa-regular fa-file-pdf"></i>
    </a>
    (User manual)
    <i class="fa-solid fa-book"></i>
</p>
</div>
<div class="bg-light pb-5">
    <div class="container">
        <div class="row justify-content-center mt-5 pt-3">
            <h2 class="text-center novo-blue">Know more:</h2>
            <div class="col-lg-4 col-8 text-center mx-3 kit">
                <a href="/freshness-assay-kits/fish-freshness"><h4>Freshness Freshness </h4></a>
            </div>
            <div class="col-lg-4 col-8 text-center kit mx-3">
                <a href="/freshness-assay-kits/freshness-principle"><h4>Fish Freshness Assay Kits</h4></a>
            </div>
        </div>
    </div>
    </div>
</div>
CONTENT;

addContent($page_content);
render();
