<?php
$title = "NOVOCIB - Reliable solutions for nucleotides assessment";
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

global $path_way;

$carousel = <<<CAROUSEL
<div id="crouselItem" class="carousel slide" data-bs-ride="carousel">
      
        <div class="carousel-inner">
                

        <div class="carousel-item active" data-bs-interval="10000">
    <img src="app/static/img/backgound-nameless.jpg" class="d-block w-100" alt="app/static/img/brand-table.jpg">
    <div class="carousel-caption">
        <div>
            <h2 class="display-2 carousel-caption-title">Reliable solutions for nucleotides assessment</h2>
            <p class="lead">Since 2005 NOVOCIB is developing novel analytical and enzymatic tools helping scientists worldwide <br> to quantify nucleotides in their biological samples.</p>
            <div class="text-center"><a href="/nucleotides" class="btn btn-primary">Read More</a></div>
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

$card_container = <<<CARD_CONTAINER
<div class="container mt-5">
<div class="row">
<div class="col-lg-4 d-flex justify-content-center">    <div class="box text-center">
        <img src="/app/static/img/analisis-gloves.jpg">
        <a href=""><h5>Analytical Services</h5></a>
        <p></p><ul>
    <li>Whole nucleotides spectra (heterocyclic bases, nucleosides and nucleotides, nucleic acids RNA and DNA);</li>
    <li>Total Potentially Available Nucleotides analysis (TPAN);</li>
    <li>Purine analysis.</li>
</ul><p></p>
        <div class="text-center my-4"><a href="/analytical-services" class="btn btn-primary">Go to Page</a></div>
    </div></div>
<div class="col-lg-4 d-flex justify-content-center">    <div class="box text-center">
        <img src="/app/static/img/viles.jpg">
        <a href=""><h5>PRECICE® One-step Kits</h5></a>
        <p></p><ul>
    <li>Include precise amounts of enzymes, buffers, cofactors and substrates at optimal concentrations;</li>
    <li>96-well microplate form;</li>
    <li>Convenient, saves time and preempts possible errors.</li>
</ul><p></p>
        <div class="text-center my-4"><a href="/freshness-assay-kits/freshness-principle" class="btn btn-primary">Go to Page</a></div>
    </div></div>
<div class="col-lg-4 d-flex justify-content-center">    <div class="box text-center">
        <img src="/app/static/img/structure.jpg">
        <a href=""><h5>Active purified enzymes</h5></a>
        <p></p><ul>
    <li>Nucleoside kinases;</li>
    <li>Purine metabolism enzyme;</li>
    <li>Small and bulk amounts;</li>
    <li>Shipped worldwide in stable lyophilized form without dry ice or cold blocks.</li>
</ul><p></p>
        <div class="text-center my-4"><a href="/active-purified-enzymes" class="btn btn-primary">Go to Page</a></div>
    </div></div>
</div>  
</div>
CARD_CONTAINER;
addContent($card_container);

addContent(Aboutus::get());

$paralax = <<<PARALAX
<div class="parallax" style="background-image: url(app/static/img/header1.jpg); color: white;">
    <div class="overlay">
    
    <div class="container py-5">
<div class="text-center d-flex justify-content-center align-items-center">    <h2 class="underlinedTitle right"><span class="underlined white right">CIR (Research Tax Credit)</span></h2>
     <img class="ms-5 mb-3" src="/app/static/img/marianne.png" height="60" alt="french marianne"></div>

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
        <div class="award col-lg-3">
            <img class="w-100 mt-2" src="/app/static/img/i-lab-1.jpg" alt="i-lab logo">
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

        <div class="award col-lg-3">
            <img class="w-100 mt-2" src="/app/static/img/tremplin.png" alt="femmes en or brand">
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

        <div class="award col-lg-3">
            <img class="w-100 mt-2" src="/app/static/img/femme-en-or.webp" alt="femmes en or brand">
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

$owlCarousel = <<<OWLCAROUSEL
<section class="partners py-2" id="partners">
<div class="container text-center mb-3">
<h2 class="underlinedTitle center"><span class="underlined novoblue center">Our Partners</span></h2>

</div>

    <div class="owl-carousel owl-theme mt-5 mx-auto">
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a href="https://www.business-angels.info/">
                        <img src="/app/static/img/xmp.png" alt="xmp investers logo" />
                    </a>
                </div>
                <h5 class="card-title name text-center">XMP</h5>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a href="https://samba-investisseurs.fr/">
                        <img src="/app/static/img/samba.jpg" alt="samba logo" />
                    </a>
                </div>
                <h5 class="card-title name text-center">SAMBA</h5>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a href="https://www.poleaquimer.com/en/">
                        <img src="/app/static/img/aquimer.png" alt="aquimer logo" />
                    </a>
                </div>
                <h5 class="card-title name text-center">Aquimer</h5>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a href="https://www.agglo-boulonnais.fr/">
                        <img src="/app/static/img/cab.jpg" alt="boulogne comune association logo" />
                    </a>
                </div>
                <h5 class="card-title name text-center">C A B</h5>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a href="https://www.pfinouvellesvagues.com/">
                        <img src="/app/static/img/nouvelle-vagues.png" alt="" />
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
                    <a href="https://www.inextenso.fr/en/">
                        <img src="/app/static/img/InExtenso.jpg" alt="" />
                    </a>
                </div>
                <h5 class="card-title name text-center">In Extenso</h5>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a href="https://www.e.leclerc/ ">
                        <img src="/app/static/img/Leclerc.jpg" alt="" />
                    </a>
                </div>
                <h5 class="card-title name text-center">E Leclerc</h5>
            </div>
        </div>
    </div>
</section>
OWLCAROUSEL;

addContent($owlCarousel);

render();
