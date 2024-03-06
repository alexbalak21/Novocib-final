<?php
$title = "Analytical Services";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "Analytical Services"];

addContent(Banner::gen(img_url: "app/static/img/hplc9.jpg"));

$article_title = $content_title = UnderlinedTitle::get("Nucleotides: 'conditionally essential' nutrients", "novoblue", "center");
$content_title = UnderlinedTitle::get("Full nucleotides spectra by HPLC", "novoblue", "right");
$nuclotide_supplemetantion = UnderlinedTitle::get("Nucleotide supplementation: 'conditionally essential' nutrients", "novoblue", "center");
$page_content = <<<Services
<div class="container mt-5">
$content_title

<article class="row justify-content-evenly">

<div class="col-lg-6">
<img class="mt-5 mb-4 w-100" style="border: 1px solid silver;" src="app/static/img/column-evolution-time.jpg" alt="">
</div>

<div class="col-lg-5 d-flex align-items-center">
<div class="">
<p>Nucleotides are present in cells in different forms:
    <ul>
    <li>Apolar heterocyclic bases (purines and pyrimidines) and nucleosides; </li>
    <li>Polar nucleotides mono-, di- and triphosphates;</li>
    <li>Negatively charged polymeric nucleic acids RNA and DNA.</li>
    </ul>
</p>
<p>NOVOCIB offers a range of analytical services from characterisation of free 5' nucleotides to full spectrum of nucleotides  (RNA, DNA, NMP, nucleosides and bases)  in feed/ food products and ingredients using  ion-pair high-performance liquid chromatography with diode array detection (Agilent 1200 HPLC-UV).</p>
</div>

</div>
</article>

<article class="my-5">
<div class="d-flex justify-content-center">
<table class="table w-100 product">
    <thead>
        <tr>
            <th>
                #REF
            </th>
            <th class="w-75 text-center">
                PRODUCT NAME
            </th>
            <th class="text-center" style="width: 400px !important">
                PRICE
            </th>
            <th>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>#S1200-03</td>
            <td class="text-center"><h6>Dietary Nucleotides Analysis:</h6><p>HPLC-UV analysis for full spectra of soluble dietary nucleotides (bases, nucleosides and NMP, unhydrolyzed nucleic acid) present in feed or ingredients</p></td>
            <td class="text-center">€ 350.00<br>per<br>Sample</td>
            <td><a class="btn btn-primary" href="/inquiry?product=Yeast Free Bases, Nucleosides, Nucleotides and RNA & Bases">Inquiry</a></td>
        </tr>
        <tr>
            <td>#S1200-04</td>
            <td class="text-center"><h6>Celullar Nucleotides Analysis:</h6><p>HPLC-UV analysis for full spectra of cellular nucleotides (bases, nucleosides, NMP, NDP and NTP) in cell extracts.</p></td>
            <td class="text-center">€ 350.00 per Sample</td>
            <td><a class="btn btn-primary" href="/inquiry?product=Yeast Free Bases, Nucleosides, Nucleotides and RNA & Bases">Inquiry</a></td>
        </tr>
        <tr>
            <td>#S1200-05</td>
            <td class="text-center">Nucleic acid RNA and DNA  quantification by HPLC-UV analysis</td>
            <td class="text-center">€ 300.00<br>per<br>Sample</td>
            <td><a class="btn btn-primary" href="/inquiry?product=Yeast Free Bases, Nucleosides, Nucleotides and RNA & Bases">Inquiry</a></td>
        </tr>
        <tr>
            <td>#S1200-06</td>
            <td class="text-center">Nucleic acid RNA and DNA  quantification by HPLC-UV analysis</td>
            <td class="text-center">€ 300.00<br>per<br>Sample</td>
            <td><a class="btn btn-primary" href="/inquiry?product=Yeast Free Bases, Nucleosides, Nucleotides and RNA & Bases">Inquiry</a></td>
        </tr>
    </tbody>
</table>
</div>
</article>


</div>
Services;

addContent($page_content);
render();
