<?php
$title = "Novocib";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

addContent(Carousel::gen());


$preface_title = UnderlinedTitle::get(content: "Reliable solutions for nucleotides assessment", underColor: "novoblue");
$preface = <<<XYZ
    <div class="container text-center my-5">
    $preface_title
    <p>Since 2005 NOVOCIB is developing novel analytical and enzymatic tools helping scientists worldwide to quantify nucleotides in their biological samples.</p>
    </div>
    XYZ;
addContent($preface);
$searchbar = Searchbar::get();
$search_container = <<<SEARCH
    <div class="container mt-4">
        <div class="d-flex justify-content-center">
        $searchbar
        </div>
    </div>
SEARCH;
addContent($search_container);
$card1 = Card::get("app/static/img/catalogue/analysis.jpg", "Analytical Services", "Description of services and products");
$card2 = Card::get("app/static/img/catalogue/centry.jpg", "Active Enzymes", "Description of services and products");
$card3 = Card::get("app/static/img/catalogue/microscope.jpg", "PRECICE® One-step Kits", "Description of services and products");

$card_container = <<<CARD_CONTAINER
<div class="container mt-5">
<div class="row">
<div class="col-lg-4 d-flex justify-content-center">$card1</div>
<div class="col-lg-4 d-flex justify-content-center">$card2</div>
<div class="col-lg-4 d-flex justify-content-center">$card3</div>
</div>  
</div>
CARD_CONTAINER;
addContent($card_container);

addContent(Aboutus::get());

$paralax_title = UnderlinedTitle::get("Ressource", "white");
$parallax_content = <<<PARALAX
<div class="container py-5">
$paralax_title
GMP proteins are proteins for pharmaceutical use and have revolutionized the treatment of diseases due to their high selectivity and low toxicity. Protein therapeutics support specifically targeted therapeutic processes, allowing for individualized treatment.
</div>

PARALAX;
addContent(Parallax::get($img = "app/static/img/header1.jpg", $ParallaxContent = $parallax_content, $color = "white"));


render();
