<?php
global $title;
$title = "NOVOCIB - Reliable solutions for nucleotides assessment";

$root = $_SERVER['DOCUMENT_ROOT'];

ob_start(); ?>
<meta name="description" content="Novocib is a biotechnology company focused on nucleotides metabolism. Company has developed a range of innovative products and services for nucleotide analysis in cells, food, feed ingredients.">
<meta name="main services of novocib" content="services provided by novocib are: Active purified enzymes kits, One-step analysis Kits, wide range of Analytical Services">
<meta name="keywords" content="Freshness Assay Kits, Active Purified Enzymes, Analytical Services">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php $metas = ob_get_clean();

// LINKS CSS & JS
ob_start(); ?>
<link href="/app/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link rel="stylesheet" href="/app/lib/owlcarousel/assets/owl.theme.default.min.css">
<script src="/app/lib/owlcarousel/owl.carousel.min.js" defer></script>
<script src="/app/lib/jquery/jquery-3.7.1.min.js"></script>
<link rel="stylesheet" href="/app/css/owlcarousel.css">
<script src="/app/js/owlcarousel.js" defer></script>
<?php $additional_head = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>

<div id="crouselItem" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="/app/img/backgound-nameless.jpg" class="d-block w-100" alt="company photo / logo">
            <div class="carousel-caption">
                <div>
                    <h2 class="display-3 carousel-caption-title">Reliable solutions for nucleotides assessment</h2>
                    <p class="lead px-1">Since 2005 NOVOCIB is developing novel analytical and enzymatic tools helping scientists worldwide <br> to quantify nucleotides in their biological samples.</p>
                    <div class="text-center"><a href="/nucleotides" class="btn btn-primary">Go to Dietary Nucleotides <i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="d-flex justify-content-center">
        <div class="searchbar">
            <input id="searchInput" class="search_input" type="text" name="search" placeholder="Search...">
            <a id="searchBtn" class="search_icon"><i class="fa-solid fa-magnifying-glass"></i></a>
        </div>
        <script>
            const searchBtn = document.getElementById("searchBtn")
            const searchInput = document.getElementById("searchInput")
            searchBtn.addEventListener("click", () => {
                let query = searchInput.value;
                if (query === "") return
                query = query.trim()
                query = query.replace(/^\s+|\s+$/gm, '')
                window.location.href = `/search?sq=${query}`
            })
            searchInput.addEventListener('keypress', (e) => {
                if (e.key === "Enter") searchBtn.click()
            })
        </script>
        <style>
            #searchBtn:hover {
                cursor: pointer;
            }
        </style>
    </div>
</div>

<section class="container mt-5" content="section containing the presentation of novocib services">
    <div class="row justify-content-center">
        <div class="col-lg-4 d-flex justify-content-center">
            <div class="box">
                <a href="/nucleotide-analysis-service"><img src="/app/img/analisis-gloves.jpg" nucleotide="" analysis="" services="" page="Nucleotide Analysis Services page" title="Go to Nucleotide Analysis Services page"></a>
                <div class="text-center"><a href="/nucleotide-analysis-service">Dietary Nucleotide Analysis</a></div>
                <div class="card-content">
                    <ul>
                        <li>Whole nucleotides spectra (heterocyclic bases, nucleosides and nucleotides, nucleic acids RNA and DNA);</li>
                        <li>Yeast extracts nucleosides, 5'-nucleotides and nucleic acids</li>
                        <li>Purine &amp; pyrimidines analysis of food or feed ingredients</li>
                    </ul>
                </div>
                <div class="text-center my-4" title="Nucleotide Analysis Services"><a href="/nucleotide-analysis-service" class="btn btn-primary">Go to Page <i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
            </div>

        </div>
        <div class="col-lg-4 d-flex justify-content-center">
            <div class="box">
                <a href="/convenient-assay-kits"><img src="/app/img/HPRT-Assay-kit.jpg" freshness="" assay="" kits="" page="Freshness Assay Kits page" title="Go to Freshness Assay Kits page"></a>
                <div class="text-center"><a href="/convenient-assay-kits">PRECICE® One-step Kits</a></div>
                <div class="card-content">
                    <ul>
                        <li>Include precise amounts of enzymes, buffers, cofactors and substrates at optimal concentrations;</li>
                        <li>96-well microplate form;</li>
                        <li>Convenient, saves time and preempts possible errors.</li>
                    </ul>
                </div>
                <div class="text-center my-4" title="Freshness Assay Kits"><a href="/convenient-assay-kits" class="btn btn-primary">Go to Page <i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
            </div>

        </div>
        <div class="col-lg-4 d-flex justify-content-center">
            <div class="box">
                <a href="/active-purified-enzymes"><img src="/app/img/structure.jpg" active="" purified="" enzymes="" page="Active purified enzymes page" title="Active purified enzymes"></a>
                <div class="text-center"><a href="/active-purified-enzymes">Active purified enzymes</a></div>
                <div class="card-content">
                    <ul>
                        <li>Nucleoside kinases;</li>
                        <li>Purine metabolism enzyme;</li>
                        <li>Small and bulk amounts;</li>
                        <li>Shipped worldwide in stable lyophilized form without dry ice or cold blocks.</li>
                    </ul>
                </div>
                <div class="text-center my-4" title="Go to Active purified enzymes page"><a href="/active-purified-enzymes" class="btn btn-primary">Go to Page <i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
            </div>

        </div>
    </div>
</section>

<section content="description of the company and services" class="contactus container-fluild pt-3">
    <div class="container">
        <h2 class="underlinedTitle center"><span class="underlined novoblue center">About Us</span></h2>
        <div class="row">
            <div class="col-lg-5 d-flex align-items-center">
                <img class="mb-5 w-100" src="/app/img/analysis4.jpg" alt="analysis">
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
                    <div class="text-center mb-4"><a href="/news" class="btn btn-primary"><i class="fa-solid fa-newspaper"></i> &nbsp; News</a></div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- CIR -->
<div class="parallax" style="background-image: url(/app/img/header1.jpg); color: white;">
    <div class="overlay">
        <div class="container py-5">
            <div class="text-center d-flex justify-content-center align-items-center">
                <h2 class="underlinedTitle right"><span class="underlined white right">CIR (Research Tax Credit)</span></h2>
                <img class="ms-5 mb-3" src="/app/img/marianne.png" height="60" alt="french marianne">
            </div>

            <p>
                NOVOCIB is certified by the French Ministry of Higher Education and Research as a "Research Tax Credit" (Crédit
                Impôt Recherche - CIR) company. This agreement allows NOVOCIB's clients who are subject to corporate income tax in
                France to benefit from a significant tax credit upon R&amp;D expenditures outsourced to NOVOCIB.
            </p>
        </div>
    </div>
</div>


<!-- AWARDS  -->
<article class="awards container mt-4 mb-4 text-center">
    <h2 class="underlinedTitle center"><span class="underlined novoblue center">Awards</span></h2>

    <p class="mb-5">NOVOCIB SAS is french biotechnology company founded in 2005, a double Laureate of Concours National pour la Création d'Entreprises de Technologie Innovante (I-LAB) in 2003 and 2005 and “Tremplin Entreprises” organized by French Senate (2004). <br> Since its creation in 2005, the company has developed multiple innovative solutions helping scientists and engineers worldwide to quantify nucleotides in their biological samples.</p>
    <div class="row justify-content-center">

        <div class="award col-lg-3 col-10">
            <a target="_blank" href="https://www.enseignementsup-recherche.gouv.fr/fr/le-concours-i-lab-49808"><img class="w-100 h-auto mt-2" src="/app/img/i-lab-1.jpg" alt="i-lab logo" title="French national i-lab awards"></a>
            <h4 class="text-center mt-3 novo-blue">I-LAB</h4>
            <h5 class="text-center mb-3">2003 &amp; 2005</h5>
            <p>
                I-Lab is the yearly innovation contest organized by the French Ministry of Research and Innovation in
                partnership with the French Public Investment Bank BpiFrance #France2030 to recognize and financially
                support the best innovative deeptech companies.
            </p>
            <div class="text-center my-4">
                <a title="i-lab awards" class="btn btn-outline-primary" target="_blank" href="https://www.enseignementsup-recherche.gouv.fr/fr/le-concours-i-lab-49808">
                    Go to Website
                </a>
            </div>
        </div>

        <div class="award col-lg-3 col-10">
            <a href="https://www.senat.fr/salle-de-presse/communiques-de-presse/presse/cp20150113a.html" target="_blank"><img class="w-100 h-auto mt-2" src="/app/img/tremplin.jpg" alt="Business Springboard awards logo" title="16th Business Springboard awards"></a>
            <h4 class="text-center mt-3 novo-blue">Tremplin des Entreprises</h4>
            <h5 class="text-center mb-3">2005</h5>
            <p>
                This excellence competition is a financial support initiative funded by the France 2030 plan, which aims
                to select innovation projects with high potential for the French economy. The French Tech Tremplin
                program aims to promote diversity in the tech sector throughout France.
            </p>
            <div class="text-center my-4">
                <a class="btn btn-outline-primary" target="_blank" title="french senate" href="https://www.senat.fr/salle-de-presse/communiques-de-presse/presse/cp20150113a.html">
                    Go to Website
                </a>
            </div>
        </div>

        <div class="award col-lg-3 col-10">
            <a href="https://www.facebook.com/femmesenor/" target="_blank"><img class="w-100 h-auto mt-2" src="/app/img/femme-en-or.jpg" alt="femmes en or brand" title="women of gold awards"></a>
            <h4 class="text-center mt-3 novo-blue">Femmes en Or</h4>
            <h5 class="text-center mb-3">2011</h5>
            <p>
                The "Trophées Femmes en or" (Women in Gold Awards) are a prize created in 1993 by Framboise Holtz and
                Jean-Louis Sevez to reward women whose success in the past year, whether it be a culmination or a step,
                serves as an example and a source of inspiration for all.
            </p>
            <div class="text-center my-4">
                <a class="btn btn-outline-primary" target="_blank" title="facebook" href="https://www.facebook.com/femmesenor/">Go to Website</a>
            </div>
        </div>
    </div>
</article>


<!-- PARTNERS -->
<section class="partners py-2" id="partners">
    <div class="container text-center mb-3">
        <h2 class="underlinedTitle center">
            <span class="underlined novoblue center">Our Partners</span>
        </h2>
    </div>

    <div class="owl-carousel owl-theme mt-5 mx-auto">
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a href="https://www.business-angels.info/">
                        <img src="/app/img/xmp.png" alt="xmp investors logo" title="Xmp Investors Business Angels" />
                        <span>Xmp Investors Business Angels</span>
                    </a>
                </div>
                <h5 class="card-title name text-center">XMP</h5>
            </div>
        </div>

        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a href="https://www.afnor.org/en/">
                        <img src="/app/img/afnor.png" alt="Afnor logo" title="Afnor" />
                        <span>Afnor</span>
                    </a>
                </div>
                <h5 class="card-title name text-center">AFNOR</h5>
            </div>
        </div>

        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a href="https://samba-investisseurs.fr/">
                        <img src="/app/img/samba.jpg" alt="samba logo" title="SAMBA Investors" />
                        <span>SAMBA Investors</span>
                    </a>
                </div>
                <h5 class="card-title name text-center">SAMBA</h5>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a href="https://www.poleaquimer.com/en/">
                        <img src="/app/img/aquimer.png" alt="aquimer logo" title="Partner for innovation" />
                        <span>Aquimer Website</span>
                    </a>
                </div>
                <h5 class="card-title name text-center">Aquimer</h5>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a href="https://www.agglo-boulonnais.fr/">
                        <img src="/app/img/cab.jpg" alt="boulogne comune association logo" title="Boulogne-sur-Mer City " />
                        <span>Boulogne-sur-Mer Website</span>
                    </a>
                </div>
                <h5 class="card-title name text-center">C A B</h5>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a href=" https://www.pfinouvellesvagues.com/">
                        <img src="/app/img/nouvelle-vagues.png" alt="nouvelle-vagues logo" title="Innovation platform for seafood" />
                        <span>nouvelle-vagues Website</span>
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
                    <a href=" https://www.inextenso.fr/en/">
                        <img src="/app/img/InExtenso.jpg" alt="InExtenso logo" title="InExtenso Accounting" />
                        <span>InExtenso Website</span>
                    </a>
                </div>
                <h5 class="card-title name text-center">In Extenso</h5>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="card-img">
                    <a href=" https://www.e.leclerc/ ">
                        <img src="/app/img/Leclerc.jpg" alt="Leclerc logo" title="Leclerc supermarket" />
                        <span>Leclerc Website</span>
                    </a>
                </div>
                <h5 class="card-title name text-center">E Leclerc</h5>
            </div>
        </div>
    </div>
</section>