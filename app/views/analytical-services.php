<?php
$title = "Nucleotide Analysis Service";
$metas = <<<META
<meta name="description" content="NOVOCIB provides accurate analysis of Total Potentially Available Nucleotides (TPAN, including  nucleosides, nucleotides and nucleic acids RNA and DNA) in feed and food products and ingredients by ion-paired HPLC-UV">
<meta name="full spectra dietary nucleotides analysis">
<meta name="keywords" content="Dietary nucleotides analysis, HPLC, TPAN, Total Potentially Available Nucleotides">
META;

require_once "app/templates/base.php";

$novoblue = "#4167b1";



$banner = Banner::gen("app/static/img/hplc9.jpg");

addContent($banner);

$page_content = <<<Services
<div class="container mt-5">
<h2 class="underlinedTitle center"><span class="underlined novoblue center">Full dietary nucleotides spectra by HPLC</span></h2>

<article class="row">

<div class="col-lg-6 text-end">
<img class="h-50 w-100 h-100"  style="border: 1px solid silver;" src="/app/static/img/nucleotides-3.jpg" alt="nucleosides structure">
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

<div class="col-lg-6 d-flex align-items-center mt-5">
<div class="mb-5">
<p>NOVOCIB provides HPLC analysis of dietary nucleotides, including 5' NMP, nucleic acids  (RNA, DNA, NMP, dNMP, nucleosides and bases) in feed/ food products and ingredients using ion-pair high-performance liquid chromatography with diode array detection (Agilent 1200 HPLC-UV).</p>
<h5 class="novo-blue">Our analytical system</h5>
<p>Agilent 1120 series HPLC liquid chromatograph fitted with binary pump, vacuum degasser, well-plate autosampler, thermostatic column compartment and multiple wavelength and diode array detector.  Run and data acquisision are controlled by Agilent Chem Station software. Zorbax Extend-C18 4.6x150mm, 3.5μm particle size and guard column (Agilent). Calibrations are performed with standards prepared in mobile phase and with standards mixed with cell extracts, which are run immediately before and after every series of samples. Peak assignment of different bases, ribonucleosides and ribonucleoside monophosphatesis is done by comparing both retention times and characteristics of UV absorption spectra (254/280 ratio) with those of standards. The area of individual peaks was measured using ChemStation software (Agilent).</p>
</div>
</div>
<div class="col-lg-6">
<img class="mt-5 mb-4 w-100" style="border: 1px solid silver;" src="/app/static/img/column-evolution-time.jpg" alt="HPLC spectra">
</div>
<div class="col-12 d-flex justify-content-center">
<figure class="col-lg-6 col-10">
<img class="w-100" src="/app/static/img/hplc-photo.jpg" alt="Photo HPLC Analysis and spectra" title="Photo HPLC Analysis">
</figure>
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
            <td><a class="btn btn-primary" href="/inquiry?product=Dietary Nucleotides Analysis&ref=S1200-03">Inquiry</a></td>
        </tr>
        <tr>
            <td>#S1200-04</td>
            <td class="text-center"><h6>Celullar Nucleotides Analysis:</h6><p>HPLC-UV analysis for full spectra of cellular nucleotides (bases, nucleosides, NMP, NDP and NTP) in cell extracts.</p></td>
            <td class="price">€ 350.00 / sample</td>
            <td><a class="btn btn-primary" href="/inquiry?product=Celullar Nucleotides Analysis&ref=S1200-04">Inquiry</a></td>
        </tr>
        <tr>
            <td>#S1200-05</td>
            <td class="text-center">Nucleic acid RNA and DNA quantification by HPLC-UV analysis <br> &nbsp;</td>
            <td class="price">€ 300.00 / sample</td>
            <td><a class="btn btn-primary" href="/inquiry?product=RNA and DNA quantification HPLC-UV analysis&ref=S1200-05">Inquiry</a></td>
        </tr>
        <tr>
            <td>#S1200-06</td>
            <td class="text-center">HPLC-UV analysis for purines <br> &nbsp;</td>
            <td class="price">€ 300.00 / sample</td>
            <td><a class="btn btn-primary" href="/inquiry?product=Purines HPLC-UV Analysis&ref=S1200-06">Inquiry</a></td>
        </tr>
    </tbody>
</table>
</div>
</article>


</div>
Services;

addContent($page_content);
render();
