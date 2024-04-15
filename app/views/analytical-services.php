<?php
$title = "Analytical Services";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "analytical services"];
$banner = Banner::gen("app/static/img/hplc9.jpg");

addContent($banner);

$page_content = <<<Services
<div class="container mt-5">
<h2 class="underlinedTitle center"><span class="underlined novoblue center">Full nucleotides spectra by HPLC</span></h2>

<article class="row">

<div class="col-lg-6 text-end">
<img class="h-50 w-100 h-100"  style="border: 1px solid silver;" src="/app/static/img/nucleotides-3.jpg" alt="">
</div>
<div class="col-lg-6 list-1 d-flex align-items-center">

<ul>
<h6>Nucleotides are present in cells in different forms:</h6>
<li>Apolar free heterocyclic bases 
adenine, guanine, cytosine, and uracil (RNA) or thymine (DNA);
</li>
<li>
Apolar free  ribo- and deoxyribonucleosides <br>
purines:  adenosine/deoxyadenosine, guanosine/deoxyguanosine, inosine; <br>
pyrimidines: cytidine/deoxycystidine, uridine, thymidine; 
</li>
<li>
Negatively charged free ribo- and deoxyribonucleotides mono-, di- and triphosphates 
(AMP/dAMP, GMP/dGMP, IMP, CMP/dCMP, UMP, dTMP, ADP/dADP, GDP/dGDP, CDP/dCDP, UDP, ATP/dATP, GTP/dGTP, CTP/dCTP, UTP) 
<li>Polymeric negatively charged nucleic acids RNA and DNA composed of ribo- and deoxynucleotides monophosphates, respectively.</li>
</li>
</ul>
</div>

<div class="col-lg-6 d-flex align-items-center">
<div class="">
<p>NOVOCIB offers a range of analytical services from characterisation of free 5' nucleotides to full spectrum of nucleotides  (RNA, DNA, NMP, nucleosides and bases)  in feed/ food products and ingredients using  ion-pair high-performance liquid chromatography with diode array detection (Agilent 1200 HPLC-UV).</p>
</div>
</div>

<div class="col-lg-6">
<img class="mt-5 mb-4 w-100" style="border: 1px solid silver;" src="/app/static/img/column-evolution-time.jpg" alt="">
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
            <th class="w-75 text-center" style="width: 800px !important">
                PRODUCT NAME
            </th>
            <th class="text-center">
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
            <td class="price">€ 350.00 / sample</td>
            <td><a class="btn btn-primary" href="/inquiry?product=Yeast Free Bases, Nucleosides, Nucleotides and RNA & Bases">Inquiry</a></td>
        </tr>
        <tr>
            <td>#S1200-04</td>
            <td class="text-center"><h6>Celullar Nucleotides Analysis:</h6><p>HPLC-UV analysis for full spectra of cellular nucleotides (bases, nucleosides, NMP, NDP and NTP) in cell extracts.</p></td>
            <td class="price">€ 350.00 / sample</td>
            <td><a class="btn btn-primary" href="/inquiry?product=Yeast Free Bases, Nucleosides, Nucleotides and RNA & Bases">Inquiry</a></td>
        </tr>
        <tr>
            <td>#S1200-05</td>
            <td class="text-center">Nucleic acid RNA and DNA quantification by HPLC-UV analysis <br> &nbsp;</td>
            <td class="price">€ 300.00 / sample</td>
            <td><a class="btn btn-primary" href="/inquiry?product=Yeast Free Bases, Nucleosides, Nucleotides and RNA & Bases">Inquiry</a></td>
        </tr>
        <tr>
            <td>#S1200-06</td>
            <td class="text-center">HPLC-UV analysis for purines <br> &nbsp;</td>
            <td class="price">€ 300.00 / sample</td>
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
