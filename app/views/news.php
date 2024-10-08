<?php
$title = "News";
$novoblue = "#4167b1";

ob_start(); ?>
<meta name="description" content="NOVOCIB latest news, learn more about the company.">
<meta name="News">
<meta name="keywords" content="news, updates, blog">

<?php $metas = ob_get_clean();

require_once "app/templates/base.php";




addContent(Banner::gen("/app/static/img/city.jpg"));
$content_title = UnderlinedTitle::get("Our Latest News", "novoblue", "center");

$page_content = <<<CONTENT
<div class="bg-light pt-4 pb-2">
    <div class="container">$content_title</div>
</div>
<div class="my-5 pt-4">
    <div class="container d-flex justify-content-center">
        <div class="col-7">
            <h3 class="text-center">New website</h3>
            <p class="mt-4 mb-5 lead text-center">
                Hello, welcome to our new website! We are happy to announce the complete redisign of our web platform.
                <br />
                We will continue to add new pages in the near future, so don't hezitate to check our site often.
            </p>
            <p class="text-end text-muted my-4">Monday, April 15, 2024</p>
        </div>
    </div>
</div>
<div class="bg-light pb-1">
    <div class="container">
        <div class="row justify-content-center my-5">
            <h2 class="text-center novo-blue">Explore:</h2>
            <div class="col-lg-4 col-8 text-center mx-3 kit">
                <a href="/freshness-assay-kits/freshness-principle"><h4>Fish Freshness Assay Kits</h4></a>
            </div>
            <div class="col-lg-4 col-8 text-center kit mx-3">
                <a href="/convenient-assay-kits"><h4>Convenient Assay Kits</h4></a>
            </div>
            <div class="col-lg-4 col-8 text-center kit mx-3">
                <a href="/active-purified-enzymes"><h4>Active Purified Enzymes</h4></a>
            </div>
            <div class="col-lg-4 col-8 text-center kit mx-3">
                <a href="/nucleotide-analysis-service"><h4>Analytical Services</h4></a>
            </div>
        </div>
    </div>
</div>
<div class="bg-light">
<div class="py-2 text-center">
    <a class="btn btn-primary" href="/"><h4>Go to Hompage</h4></a>
</div>
</div>
CONTENT;

addContent($page_content);
render();
