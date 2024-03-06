<?php
$title = "Novocib";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

$first_slide = true;
$slide = new Slide(
    img_url: "app/static/img/brand-table.jpg",
    duration: 10000,
    title: "Placeholder Title",
    content: "Some placeholder Connet.",
    button_text: "Read More",
    button_link: ""
);
$slide1 = $slide->gen();
$slide = new Slide(
    img_url: "app/static/img/helix.jpg",
    duration: 8000,
    title: "Placeholder Title",
    content: "Some placeholder Connet.",
    button_text: "Read More",
    button_link: ""
);
$slide2 = $slide->gen();
$slide = new Slide(
    img_url: "app/static/img/brand-table.jpg",
    duration: 8000,
    title: "Placeholder Title",
    content: "Some placeholder Connet.",
    button_text: "Read More",
    button_link: ""
);
$slide3 = $slide->gen();

$carousel_content = $slide1 . $slide2 . $slide3;
$carousel = Carousel::gen($carousel_content);
addContent($carousel);




$preface_title = UnderlinedTitle::get(content: "Reliable solutions for nucleotides assessment", underColor: "novoblue center");
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
$card1_content = <<<CARD
<ul>
    <li>Whole nucleotides spectra (heterocyclic bases, nucleosides and nucleotides, nucleic acids RNA and DNA);</li>
    <li>Total Potentially Available Nucleotides analysis (TPAN);</li>
    <li>Purine analysis.</li>
</ul>
CARD;


$card2_content = <<<CARD
<ul>
    <li>Include precise amounts of enzymes, buffers, cofactors and substrates at optimal concentrations;</li>
    <li>96-well microplate form;</li>
    <li>Convenient, saves time and preempts possible errors.</li>
</ul>
CARD;

$card3_content = <<<CARD
<ul>
    <li>Nucleoside kinases;</li>
    <li>Purine metabolism enzyme;</li>
    <li>Small and bulk amounts;</li>
    <li>Shipped worldwide in stable lyophilized form without dry ice or cold blocks.</li>
</ul>
CARD;


$card1 = Card::get("app/static/img/catalogue/analysis.jpg", "Analytical Services", $card1_content);
$card2 = Card::get("app/static/img/catalogue/centry.jpg", "PRECICE® One-step Kits", $card2_content);
$card3 = Card::get("app/static/img/catalogue/microscope.jpg", "Active purified enzymes", $card3_content);

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

$paralax_title = UnderlinedTitle::get("Awards", "white");
$parallax_content = <<<PARALAX
<div class="container py-5">
$paralax_title
<p>
NOVOCIB SAS is french biotechnology company founded in 2005, a double Laureate of Concours National pour la Création d'Entreprises de Technologie Innovante (I-LAB) in 2003 and 2005 and “Tremplin Entreprises” organized by French Senate (2004). <br> Since its creation in 2005, the company has developed multiple innovative solutions helping scientists and engineers worldwide to quantify nucleotides in their biological samples.
</p>
</div>

PARALAX;
addContent(Parallax::get($img = "app/static/img/header1.jpg", $ParallaxContent = $parallax_content, $color = "white"));
addContent("<div style='height: 400px;'></div>");
addContent(Table::gen());

render();
