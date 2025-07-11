<?php
$title = "News";
$novoblue = "#4167b1";

ob_start(); ?>
<meta name="description" content="NOVOCIB latest news, learn more about the company.">
<meta name="News">
<meta name="keywords" content="news, updates, blog">
<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>
<?= Banner::gen("/app/static/img/city.jpg") ?>
<div class="bg-light pt-4 pt-4 pb-1">
    <h2 class="underlinedTitle center"><span class="underlined novoblue center">Our Latest News</span></h2>
</div>

<div class="container py-4">
    <div class="col-lg-7 mx-auto">
        <h3 class="text-center">New Service</h3>
        <p class="mt-4 mb-5 lead text-center">
            We’re excited to introduce our latest innovation: the <a href="https://www.novocib.com/dietary-nucleotides-assay-kits/fish-freshness-assay-kit">Fish Freshness Assay Kit</a>! 🐟<br /><br>
            This new kit reflects our continued commitment to advancing quality and innovation in dietary nucleotide analysis.<br />
            <a class="btn btn-primary mt-3 mb-2" href="/contact">Contact Us <i class="fa-solid fa-paper-plane"></i></a><br> We’re happy to help!
        </p>
        <p class="text-end text-muted mt-4 mb-0">Published on July 11, 2025</p>
    </div>
</div>
<div class="bg-light py-3"></div>
<div class="container py-4">
    <div class="col-lg-7 mx-auto">
        <h3 class="text-center">New website</h3>
        <p class="mt-4 mb-5 lead text-center">
            Hello, welcome to our new website! We are happy to announce the complete redisign of our web platform.
            <br />
            We will continue to add new pages in the near future, so don't hezitate to check our site often.
        </p>
        <p class="text-end text-muted mt-4 mb-0">Published on April 15, 2024</p>
    </div>
</div>


<div class="bg-light pt-4 pb-1">
    <div class="container">
        <div class="row justify-content-center ">
            <h2 class="text-center novo-blue mt-3">Explore:</h2>
            <div class="col-lg-4 col-8 text-center mx-3 kit">
                <a href="/freshness-assay-kits/freshness-principle">
                    <h4>Fish Freshness Assay Kits</h4>
                </a>
            </div>
            <div class="col-lg-4 col-8 text-center kit mx-3">
                <a href="/convenient-assay-kits">
                    <h4>Convenient Assay Kits</h4>
                </a>
            </div>
            <div class="col-lg-4 col-8 text-center kit mx-3">
                <a href="/active-purified-enzymes">
                    <h4>Active Purified Enzymes</h4>
                </a>
            </div>
            <div class="col-lg-4 col-8 text-center kit mx-3">
                <a href="/nucleotide-analysis-service">
                    <h4>Analytical Services</h4>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="bg-light">
    <div class="py-4 text-center">
        <a class="btn btn-primary btn-lg" href="/">
            Go to Hompage <i class="fa-solid fa-house"></i>
        </a>
    </div>
</div>