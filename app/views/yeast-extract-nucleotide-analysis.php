<?php
$title = "Yeast Extract Nucleotide Analysis";
require_once "app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen("/app/static/img/analysis4.webp"));
$content_title = UnderlinedTitle::get("Yeast Extracts Enriched in Tasty Nucleotides", "novoblue", "right");

$page_content = <<<Service
<div class="container mt-5">
$content_title
<p>5'-nucleotides IMP and GMP (also known as Inosinate and Guanylate) are strong flavour enhancers (E626-E633) involved in "umami" taste. Since yeasts are rich in ribonucleic acid (RNA), a natural source of 5' nucleotides (GMP, AMP, CMP and UMP), yeast extracts enriched in 5' nucleotides IMP and GMP are currently used as taste enhancers.</p>
<div class="text-center mb-5">
<img onclick="enlargeImg(this)" class="zoom" src="/app/static/img/column-evolution-time.jpg" alt="">
<p class="text-muted" style="font-size:18px !important;"><i class="fa-solid fa-hand-pointer"></i> Click to enlarge</p>
</div>

<p>5'-Nucleotidases and phosphatases are ubiquitous hydrolytic enzymes that catalyze the hydrolysis of nucleotides into a phosphate and nucleosides deprived of flavour-enhancing properties. The nucleosides are further hydrolyzed to purine and pyrimidine bases. Purine base hypoxanthine has a strongly bitter taste. Nucleotides/nucleosides/bases content in yeast extract vary as a function of growth state and the method of preparation.</p>
<div class="text-center">
<img class="w-50 mb-5" src="/app/static/img/yeast-rna.jpg" alt="">
</div>

<div class="text-center">
    <h2 class="text-center mt-5 mb-3 primary">Yeast Nucleotide HPLC Analysis</h2>
    <div class="d-flex justify-content-center">
    <table class="table w-75 product">
        <thead>
            <tr>
                <th>
                    #REF
                </th>
                <th>
                    PRODUCT NAME
                </th>
                <th>
                    PRICE
                </th>
                <th>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>#S1100-03</td>
                <td>Yeast Free Bases, Nucleosides, Nucleotides and RNA & Bases</td>
                <td>€ 450.00</td>
                <td><a class="btn btn-primary" href="/inquiry?product=Yeast Free Bases, Nucleosides, Nucleotides and RNA & Bases">Order</a></td>
            </tr>
        </tbody>
    </table>
</div>
</div>


<p class="mb-4"><strong>Quality Control of Yeast Extract Nucleotides: <span class="novocib">NOVO<span>CIB</span></span> </strong> offers a range of analytical services from characterisation of free 5' nucleotides to full spectrum of nucleotides in yeast extracts by ion-pair high-performance liquid chromatography with diode array detection. This service allows to control the content of flavor nucleotides yeast extract samples.</p>

<h5>Analytical system:</h5>
<p>Agilent 1100 series liquid chromatograph fitted with binary pump, vacuum degasser, well-plate autosampler, thermcostatted column compartment and multiple wavelenght and diode array detector. <br>
Run and data acquisision are controlled by Agilent Chem Station software. Zorbax Extend-C18 4.6x150mm, 3.5μm particle size and guard column (Agilent). <br>
Calibrations are performed with standards prepared in mobile phase and with standards mixed with cell extracts, which are run immediately before and after every series of samples. <br>
Peak assignment of different bases, ribonucleosides and ribonucleoside monophosphatesis is done by comparing both retention times and characteristics of UV absorption spectra (254/280 ratio) with those of standards. The area of individual peaks was measured using ChemStation software (Agilent).</p>

<div class="text-center">
<img onclick="enlargeImg(this)" class="zoom" src="/app/static/img/yeast-amp-deamination.png" alt="yeast-amp-deamination">
<p class="text-muted" style="font-size:18px !important;"><i class="fa-solid fa-hand-pointer"></i> Click to enlarge</p>
</div>

</div>
Service;

addContent($page_content);
render();
