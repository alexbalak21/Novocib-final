<?php
$title = "Novocib";
require_once "app/templates/base.php";

addContent(Carousel::gen());
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
addContent(Parallax::get());


render();
