<?php
$title = "Novocib";
require_once "app/templates/base.php";
?>
<!-- OWL CAROUSEL -->
<link href="/app/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/app/lib/owlcarousel/assets/owl.theme.default.min.css" />
<script src="/app/lib/owlcarousel/owl.carousel.min.js" defer></script>
<script src="/app/lib/jquery/jquery-3.7.1.min.js"></script>
<!-- CUSTOM PARAMETERS FOR OWLCAROUSEL -->
<link rel="stylesheet" href="/app/css/owlcarousel.css" />
<script src="/app/js/owlcarousel.js" defer></script>
<?php

$novoblue = "#4167b1";

$first_slide = true;
$slide = new Slide(
    img_url: "app/static/img/brand-table.jpg",
    duration: 10000,
    title: "Reliable solutions for nucleotides assessment",
    content: "Since 2005 NOVOCIB is developing novel analytical and enzymatic tools helping scientists worldwide <br> to quantify nucleotides in their biological samples.",
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

$carousel_content = $slide1;
$carousel = Carousel::gen($carousel_content);
addContent($carousel);




$preface_title = UnderlinedTitle::get(content: "Reliable solutions for nucleotides assessment", underColor: "novoblue center");
$preface = <<<XYZ
    <div class="container text-center my-5">
    $preface_title
    <p>Since 2005 NOVOCIB is developing novel analytical and enzymatic tools helping scientists worldwide to quantify nucleotides in their biological samples.</p>
    </div>
    XYZ;
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


$card1 = Card::get("/app/static/img/analisis-gloves.jpg", "Analytical Services", $card1_content);
$card2 = Card::get("/app/static/img/viles.jpg", "PRECICE® One-step Kits", $card2_content);
$card3 = Card::get("/app/static/img/structure.jpg", "Active purified enzymes", $card3_content);

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

$paralax_title = UnderlinedTitle::get("CIR (Research Tax Credit)", "white", position: "right");

$parallax_content = <<<PARALAX
<div class="container py-5">
<div class="text-center d-flex justify-content-center align-items-center">$paralax_title <img class="ms-5 mb-3" src="/app/static/img/marianne.png" height="60" alt="french marianne"></div>

<p>
    NOVOCIB is certified by the French Ministry of Higher Education and Research as a "Research Tax Credit" (Crédit
    Impôt Recherche - CIR) company. This agreement allows NOVOCIB's clients who are subject to corporate income tax in
    France to benefit from a significant tax credit upon R&D expenditures outsourced to NOVOCIB.
</p>
</div>

PARALAX;
addContent(Parallax::get($img = "app/static/img/header1.jpg", $ParallaxContent = $parallax_content, $color = "white"));
$awards_title = UnderlinedTitle::get(content: "Awards", underColor: "novoblue", position: "center");
addContent(Awards::gen($awards_title, awards_introduction: "NOVOCIB SAS is french biotechnology company founded in 2005, a double Laureate of Concours National pour la Création d'Entreprises de Technologie Innovante (I-LAB) in 2003 and 2005 and “Tremplin Entreprises” organized by French Senate (2004). <br> Since its creation in 2005, the company has developed multiple innovative solutions helping scientists and engineers worldwide to quantify nucleotides in their biological samples."));
addContent(OwlCarousel::gen());
render();
