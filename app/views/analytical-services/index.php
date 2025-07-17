<?php
global $title;
$title = "Analytical Services";


ob_start(); ?>
<meta name="keywords" content="active purified enzymes, nucleotide metabolism, nucleoside kinases, purine metabolism, bacterial bioluminescence, recombinant enzymes, IMPDH, HGPRT, ADK, dCK, CMK, cN-II, FMN reductase, luciferase, NOVOCIB">
<meta name="description" content="Explore NOVOCIB's portfolio of active purified enzymes including nucleoside kinases, purine metabolism enzymes, and bacterial bioluminescence tools—ideal for drug discovery and research in nucleotide metabolism.">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php $metas = ob_get_clean();


require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";


?>

<?= Banner::gen("/app/static/img/analytical-services.jpg") ?>

<section class="container my-5 therapeutic">
    <h2 class="mb-4 text-center">Our Services</h2>
    <div class="kit row align-items-center">
        <div class="col-3 me-3 text-center">
            <h5><a href="/nucleotide-analysis-service">Nucleotide Analysis</a></h5>
        </div>
        <div class="col-8">
            <p>
                Using ion-paired high-performance liquid chromatography with diode array detection NOVOCIB provides HPLC analytical services of full spectra of nucleotides in cell extracts and in feed/ food products and ingredients.
            </p>
        </div>
    </div>
    <div class="kit row align-items-center">
        <div class="col-3 me-3 text-center">
            <h5><a href="/analytical-services/yeast-extract-nucleotide-analysis">Yeast Extract Nucleotide Analysis</a></h5>
        </div>
        <div class="col-8">
            <p>
                Quality Control of Yeast Extract Nucleotides: NOVOCIB offers a range of analytical services from characterization of free 5' nucleotides to full spectrum of nucleotides in yeast extracts by ion-pair high-performance liquid chromatography with diode array detection. This service allows to control the content of flavor nucleotides yeast extract samples.
            </p>
        </div>
    </div>
    <div class="kit row align-items-center">
        <div class="col-3 me-3 text-center">
            <h5><a href="/cellular-nucleotides-analysis">Cellular Nucleotides Analysis</a></h5>
        </div>
        <div class="col-8">
            <p>
                Cellular Nucleotide Profiling Service is an analytical service for measuring nucleotide level in antimetabolite-treated cells. More than 31 cellular (deoxy-) ribonucleotides (mono-, di-, and triphosphate) are extracted by SPE procedure, separated by ion-paired HPLC system in one-run and quantified.
            </p>
        </div>
    </div>
    <div class="kit row align-items-center">
        <div class="col-3 me-3 text-center">
            <h5><a href="/dietary-nucleotides">Dietary Nucleotides</a></h5>
        </div>
        <div class="col-8">
            <p>
                Nucleotides participate in nearly all biochemical processes important for growth: ATP is an universal energy currency in all biological systems particularly abundant in muscles. Adenine nucleotides are components of three major coenzymes, NAD+, FAD, and CoA. Being building blocks of the nucleic acids (DNA and RNA), nucleotides are particularly required for actively proliferating cells of the immune system or intestinal epithelium.
            </p>
        </div>
    </div>
</section>