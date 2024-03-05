<?php
$title = "Analytical Services";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "Analytical Services"];

addContent(Banner::gen(img_url: "app/static/img/hplc3.jpg"));
$content_title = UnderlinedTitle::get("Analytical Services for full nucleotides spectra:", "novoblue", "center");
$article_title = $content_title = UnderlinedTitle::get("Nucleotides: numerous biological roles", "novoblue", "center");
$page_content = <<<Services
<div class="container mt-5">
$content_title

<img class="w-100 my-4" src="/app//static/img/full-nucleotides-spectra.jpg" alt="Full nucleotides spectra presentation" />

<article>
<h6>Nucleotides are present in cells in different forms:</h6>
<ul>
<li>Apolar heterocyclic bases (purines and pyrimidines) and nucleosides;</li>
<li>Polar nucleotides mono-, di- and triphosphates;</li>
<li>Negatively charged polymeric nucleic acids RNA and DNA.</li>
</ul>

<p>NOVOCIB offers a range of analytical services from characterisation of free 5' nucleotides to full spectrum of nucleotides  (RNA, DNA, NMP, nucleosides and bases)  in feed/ food products and ingredients using  ion-pair high-performance liquid chromatography with diode array detection (Agilent 1200 HPLC-UV). </p>
<div class="text-center">
<img class="mt-5 mb-4" style="border: 1px solid silver;" src="app/static/img/column-evolution-time.jpg" alt="">
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
            <th>
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
            <td class="text-center">€ 350.00<br>per<br>Sample</td>
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


<article>
$article_title
<p>Nucleotides participate in nearly all biochemical processes important for cell development and growth:</p>
<div class="text-center">
<img class="mt-5 mb-4 w-25" style="border: 1px solid silver;" src="app/static/img/dna.jpg" alt="">
</div>
<ol>
<li>dNTPs are  building blocks of DNA, particularly important for actively proliferating cells of the immune system, intestinal epithelium and unicellular microorganisms.</li>
<div class="text-center">
<img class="mt-5 mb-4" style="border: 1px solid silver;" src="app/static/img/chain.jpg" alt="">
</div>
<li> NTPs are building blocks of tRNA, rRNA and mRNA involved in protein synthesis and cell growth.</li>
<div class="text-center">
<img class="mt-5 mb-4" style="border: 1px solid silver;" src="app/static/img/muscles.jpg" alt="">
</div>
<li>ATP is an universal energy currency in all biological systems particularly abundant in muscles.</li>
<li>Adenine nucleotides are components of three major coenzymes, NAD+, FAD, and CoA involved in numerous biosynthesis pathways;</li>
<li>5. UDP-activated glucose is required for glycogen synthesis in liver and skeletal muscles;</li>
<li>CDP-activated choline is involved in the biosynthesis of phospholipids particularly in in the neuronal membranes;</li>
<li>GMP and IMP nucleotides are flavor compounds that drastically enhance the umami taste of glutamate and improve the palatability of the food with reduced salt.</li>
</ol>

</article>


<div class="row">
<img class="mx-4" style="border: 1px solid silver; width: 40%;" src="app/static/img/hplc-column.jpg" alt="">

</div>
</div>
Services;

addContent($page_content);
render();
