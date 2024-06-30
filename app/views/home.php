<?php
$title = "NOVOCIB - Reliable solutions for nucleotides assessment";

$metas = <<<META
<meta name="description" content="Novocib is a biotechnology company focused on nucleotides metabolism. Company has developed a range of innovative products and services for nucleotide analysis in cells, food, feed ingredients.">
<meta name="main services of novocib" content="services provided by novocib are: Active purified enzymes kits, One-step analysis Kits, wide range of Analytical Services">
<meta name="keywords" content="Freshness Assay Kits, Active Purified Enzymes, Analytical Services">
META;

$additional_head = <<<HEAD
<link href="app/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link rel="stylesheet" href="app/lib/owlcarousel/assets/owl.theme.default.min.css">
<script src="app/lib/owlcarousel/owl.carousel.min.js" defer></script>
<script src="app/lib/jquery/jquery-3.7.1.min.js"></script>
<link rel="stylesheet" href="app/css/owlcarousel.css">
<script src="app/js/owlcarousel.js" defer></script>
HEAD;

require_once "app/templates/base.php";




$novoblue = "#4167b1";



$carousel = <<<CAROUSEL

<div id="crouselItem" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
    <img src="app/static/img/brand-table.jpg" class="d-block w-100" alt="company photo / logo">
    <div class="carousel-caption">
        <div>
            <h2 class="display-3 carousel-caption-title">Reliable solutions for nucleotides assessment</h2>
            <p class="lead px-1">Since 2005 NOVOCIB is developing novel analytical and enzymatic tools helping scientists worldwide <br> to quantify nucleotides in their biological samples.</p>
            <div class="text-center"><a href="/nucleotides" class="btn btn-primary">Go to Dietary Nucleotides</a></div>
        </div>
    </div>
</div>


        </div>
    </div>
CAROUSEL;
addContent($carousel);

$searchbar = Searchbar::get();
$search_container = <<<SEARCH
    <div class="container mt-4">
        <div class="d-flex justify-content-center">
        $searchbar
        </div>
    </div>
SEARCH;
addContent($search_container);
$card1_content = <<<CARD1_CONTENT
<ul>
    <li>Whole nucleotides spectra (heterocyclic bases, nucleosides and nucleotides, nucleic acids RNA and DNA);</li>
    <li>Total Potentially Available Nucleotides analysis (TPAN);</li>
    <li>Purine & Pyrimidines analysis.</li>
</ul>
CARD1_CONTENT;
$card1 = Card::get("app/static/img/analisis-gloves.jpg", "Dietary Nucleotide Analysis", $card1_content, "/nucleotide-analysis-service", "Nucleotide Analysis Services page");

$card2_content = <<<CARD1_CONTENT
<ul>
<li>Include precise amounts of enzymes, buffers, cofactors and substrates at optimal concentrations;</li>
<li>96-well microplate form;</li>
<li>Convenient, saves time and preempts possible errors.</li>
</ul>
CARD1_CONTENT;
$card2 = Card::get("app/static/img/viles.jpg", "PRECICE® One-step Kits", $card2_content, "/convenient-assay-kits", "Freshness Assay Kits page");

$card3_content = <<<CARD1_CONTENT
<ul>
<li>Nucleoside kinases;</li>
<li>Purine metabolism enzyme;</li>
<li>Small and bulk amounts;</li>
<li>Shipped worldwide in stable lyophilized form without dry ice or cold blocks.</li>
</ul>
CARD1_CONTENT;
$card3 = Card::get("app/static/img/structure.jpg", "Active purified enzymes", $card3_content, "/active-purified-enzymes", "Active purified enzymes page");

$card_container = <<<CARD_CONTAINER
<section class="container mt-5" content="section containing the presentation of novocib services">

<div class="row justify-content-center">
<div class="col-lg-4 d-flex justify-content-center">
$card1
</div>
<div class="col-lg-4 d-flex justify-content-center">
$card2
</div>
<div class="col-lg-4 d-flex justify-content-center">
$card3
</div>

</div>  
</section>
CARD_CONTAINER;
addContent($card_container);


$about_us = <<<ABOUTUS

<section content="description of the company and services" class="contactus container-fluild pt-3">
<div class="container">
<h2 class="underlinedTitle center"><span class="underlined novoblue center">About Us</span></h2>
<div class="row">
    <div class="col-lg-5 d-flex align-items-center">
        <img class="mb-5 w-100" src="app/static/img/analysis4.jpg" alt="analysis" />
    </div>
    <div class="text-container col-lg-7 d-flex justify-content-center align-items-center">
        <div>
            <p>
            Novocib is a biotechnology company created in 2005 and focused on nucleotides metabolism. Company has developed a range of innovative products and services for nucleotide analysis in cells, food, feed ingredients:
            </p>
            <ul>
            <li>
            Analytical service for whole spectra of nucleotides (heterocyclic bases, nucleosides, nucleotides and nucleic acids, DNA and RNA);
            </li>
            <li>
            Enzymatic Assay kits for nucleotides;
            </li>
            <li>
            Purified active enzymes of nucleotide metabolism;
            </li>
            <li>
            Assistance in the development of new products and ingredients enriched in nucleotides.
            </li>
            </ul>
        </div>
    </div>
</div>
</div>
</section>
ABOUTUS;

addContent($about_us);

$paralax = <<<PARALAX
<div class="parallax" style="background-image: url(app/static/img/header1.jpg); color: white;">
    <div class="overlay">
    
    <div class="container py-5">
<div class="text-center d-flex justify-content-center align-items-center">    <h2 class="underlinedTitle right"><span class="underlined white right">CIR (Research Tax Credit)</span></h2>
     <img class="ms-5 mb-3" src="app/static/img/marianne.png" height="60" alt="french marianne"></div>

<p>
    NOVOCIB is certified by the French Ministry of Higher Education and Research as a "Research Tax Credit" (Crédit
    Impôt Recherche - CIR) company. This agreement allows NOVOCIB's clients who are subject to corporate income tax in
    France to benefit from a significant tax credit upon R&amp;D expenditures outsourced to NOVOCIB.
</p>
</div>

    </div>
    </div>

PARALAX;
addContent($paralax);

$awards = <<<AWARDS
<article class="awards container mt-4 mb-4 text-center">
    <h2 class="underlinedTitle center"><span class="underlined novoblue center">Awards</span></h2>
    
<p class="mb-5">NOVOCIB SAS is french biotechnology company founded in 2005, a double Laureate of Concours National pour la Création d'Entreprises de Technologie Innovante (I-LAB) in 2003 and 2005 and “Tremplin Entreprises” organized by French Senate (2004). <br> Since its creation in 2005, the company has developed multiple innovative solutions helping scientists and engineers worldwide to quantify nucleotides in their biological samples.</p>
    <div class="row justify-content-center">

        <div class="award col-lg-3 col-10">
            <img class="w-100 h-auto mt-2" src="app/static/img/i-lab-1.jpg" alt="i-lab logo">
            <h4 class="text-center mt-3 novo-blue">I-LAB</h4>
            <h5 class="text-center mb-3">2003 &amp; 2005</h5>
            <p>
                I-Lab is the yearly innovation contest organized by the French Ministry of Research and Innovation in
                partnership with the French Public Investment Bank BpiFrance #France2030 to recognize and financially
                support the best innovative deeptech companies.
            </p>
            <div class="text-center my-4">
                <a class="btn btn-outline-primary" href="https://www.enseignementsup-recherche.gouv.fr/fr/le-concours-i-lab-49808">
                    Go to Website
                </a>
            </div>
        </div>

        <div class="award col-lg-3 col-10">
            <img class="w-100 h-auto mt-2" src="app/static/img/tremplin.jpg" alt="femmes en or brand">
            <h4 class="text-center mt-3 novo-blue">Tremplin des Entreprises</h4>
            <h5 class="text-center mb-3">2005</h5>
            <p>
                This excellence competition is a financial support initiative funded by the France 2030 plan, which aims
                to select innovation projects with high potential for the French economy. The French Tech Tremplin
                program aims to promote diversity in the tech sector throughout France.
            </p>
            <div class="text-center my-4">
                <a class="btn btn-outline-primary" href="https://www.senat.fr/salle-de-presse/communiques-de-presse/presse/cp20150113a.html">
                    Go to Website
                </a>
            </div>
        </div>

        <div class="award col-lg-3 col-10">
            <img class="w-100 h-auto mt-2" src="app/static/img/femme-en-or.jpg" alt="femmes en or brand">
            <h4 class="text-center mt-3 novo-blue">Femmes en Or</h4>
            <h5 class="text-center mb-3">2011</h5>
            <p>
                The "Trophées Femmes en or" (Women in Gold Awards) are a prize created in 1993 by Framboise Holtz and
                Jean-Louis Sevez to reward women whose success in the past year, whether it be a culmination or a step,
                serves as an example and a source of inspiration for all.
            </p>
            <div class="text-center my-4">
                <a class="btn btn-outline-primary" href="https://www.facebook.com/femmesenor/">Go to Website</a>
            </div>
        </div>
    </div>
</article>

AWARDS;
addContent($awards);


ob_start(); ?>
<section class="partners py-2" id="partners">
    <div class="container text-center mb-3">
        <h2 class="underlinedTitle center"><span class="underlined novoblue center">Our Partners</span></h2>

    </div>

    <div class="owl-carousel owl-theme mt-5 mx-auto">
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a name="xmp business angels" href="https://www.business-angels.info/">
                        <img src="app/static/img/xmp.png" alt="xmp investers logo" />
                    </a>
                </div>
                <h5 class="card-title name text-center">XMP</h5>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a name="samba investors" href="https://samba-investisseurs.fr/">
                        <img src="app/static/img/samba.jpg" alt="samba logo" />
                    </a>
                </div>
                <h5 class="card-title name text-center">SAMBA</h5>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a name="aquimer Website" href="https://www.poleaquimer.com/en/">
                        <img src="app/static/img/aquimer.png" alt="aquimer logo" />
                    </a>
                </div>
                <h5 class="card-title name text-center">Aquimer</h5>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a name="boulogne sur mer Website" href="https://www.agglo-boulonnais.fr/">
                        <img src="app/static/img/cab.jpg" alt="boulogne comune association logo" />
                    </a>
                </div>
                <h5 class="card-title name text-center">C A B</h5>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a name="nouvelle-vagues Website" href=" https://www.pfinouvellesvagues.com/">
                        <img src="app/static/img/nouvelle-vagues.png" alt="" />
                    </a>
                </div>
                <h5 class="card-title name text-center">
                    Nouvelles
                    <br />
                    vagues
                </h5>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a name="InExtenso Website" href=" https://www.inextenso.fr/en/">
                        <img src="app/static/img/InExtenso.jpg" alt="" />
                    </a>
                </div>
                <h5 class="card-title name text-center">In Extenso</h5>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a name="Leclerc Website" href=" https://www.e.leclerc/ ">
                        <img src=" app/static/img/Leclerc.jpg" alt="" />
                    </a>
                </div>
                <h5 class="card-title name text-center">E Leclerc</h5>
            </div>
        </div>
    </div>
</section>

<?php $owlCarousel = ob_get_clean();


$owlCarousel = OwlCarousel::gen();

addContent($owlCarousel);

render();
