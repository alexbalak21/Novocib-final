<?php
global $title;
$title = "Analytical Services";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

addContent(Banner::gen("/app/static/img/analytical-services.jpg"));


ob_start(); ?>

<section class="container my-4 therapeutic">
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

<?php $page_content = ob_get_clean();


addContent($page_content);
render();
