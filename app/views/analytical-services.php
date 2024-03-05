<?php
$title = "Analytical Services";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "Analytical Services"];

addContent(Banner::gen(img_url: "app/static/img/hplc3.jpg"));
$content_title = UnderlinedTitle::get("Analytical Services for full nucleotides spectra:", "novoblue", "center");

$page_content = <<<Services
<div class="container mt-5">
$content_title

<img class="w-100 my-4" src="/app//static/img/full-nucleotides-spectra.jpg" alt="Full nucleotides spectra presentation" />

<div>
<h6>Nucleotides are present in cells in different forms:</h6>
<ul>
<li>Apolar heterocyclic bases (purines and pyrimidines) and nucleosides;</li>
<li>Polar nucleotides mono-, di- and triphosphates;</li>
<li>Negatively charged polymeric nucleic acids RNA and DNA.</li>
</ul>

<p>NOVOCIB offers a range of analytical services from characterisation of free 5' nucleotides to full spectrum of nucleotides  (RNA, DNA, NMP, nucleosides and bases)  in feed/ food products and ingredients using  ion-pair high-performance liquid chromatography with diode array detection (Agilent 1200 HPLC-UV). </p>
</div>


<p>Nucleosides, nucleotides and nucleic acids are essential group of molecules playing several important biological functions including maintaining and transferring genetic information, providing energy, being a part of coenzymes or intracellular signal transduction in cells.</p>
<article>
<h6>Nucleotide can be present in cells or in food/feed in different forms:</h6>
<ul>
<li>Apolar heterocylic bases (purines and pyrimidines) and nucleosides;</li>
<li>Polar nucleotides mono-, di- and triphosphates;</li>
<li>Negatively charged nucleic acids RNA and DNA.</li>
</ul>
</article>
<p>Since nucleotides can be synthesized de novo and recycled through salvage pathways, they are considered as semi-essential nutrients.  However, rapidly growing tissues or rapidly dividing immune cells during infection have higher requirements cells for nucleotides that cannot be met only through de novo synthesis. In these cases, nucleotides become "essential" nutriments that can be provided with aliments and assimilated through shorter salvage pathway (2 steps) compared to de novo synthesis (9 steps for purines). <br> <br></p>

<article>
<h6>It has been shown that the supplementation of feed with dietary nucleotides : <br></h6>
<ul style="list-style-type: '- ';">
<li>Boosts immune system, enhances immunity and resistance to bacterial infections; <br></li>
<li>Accelerates intestinal recovery after diarrhoea or food deprivation; <br></li>
<li>Improves growth rate.</li>
</ul>

</article>

<article>
    <h6>Sources of dietary nucleotides :</h6>
    <ul>
        <li>Since animal muscle is naturally rich in ATP, meat (pork, beef, chicken), fish and shrimps are excellent sources of purine nucleotides;</li>
        <li>Baker yeasts are naturally rich in RNA and yeast extracts are excellent sources of both purine and pyrimidine nucleotides.</li>
    </ul>
</article>

<article>
<h6>"Tasty" nucleotides:</h6>
<p>5'-nucleotides IMP and GMP (also known as Inosinate and Guanylate) are strong flavour enhancers (E626-E633) involved in "umami" taste. Since yeasts are rich in ribonucleic acid (RNA), a natural source of 5' nucleotides (GMP, AMP, CMP and UMP), yeast extracts enriched in 5' nucleotides IMP and GMP are currently used as taste enhancers</p>
</article>
<article class="my-5">
<div class="d-flex justify-content-center">
<table class="table mx-2 product text-center">
    <thead>
        <tr>
            <th>
                SERVICE NAME
            </th>
            <th>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="">HPLC analysis of bases, nucleosides, NMP and nucleic acids in feed ingredients or products (request a quote)</a></td>
            <td><a class="btn btn-primary" href="">Inquiry</a></td>
        </tr>
        <tr>
            <td><a href="">HPLC analysis nucleic acids (RNA and DNA) quantification (request a quote);</a></td>
            <td><a class="btn btn-primary" href="">Inquiry</a></td>
        </tr>
        <tr>
            <td><a href="">Purine analysis (request a quote)</a></td>
            <td><a class="btn btn-primary" href="">Inquiry</a></td>
        </tr>
        <tr>
            <td><a href="">HPLC analysis of whole spectra of cellular nucleotides: <br>
            (deoxy-) ribonucleotides mono-, di-, and triphosphate present in biological samples (cell extracts) (request a quote);</a></td>
            <td><a class="btn btn-primary mt-3" href="">Inquiry</a></td>
        </tr>   
    </tbody>
</table>
</article>


<div class="row">
<img class="mx-4" style="border: 1px solid silver; width: 40%;" src="app/static/img/hplc-column.jpg" alt="">
<img class="mx-4" style="border: 1px solid silver; width: 40%;" src="app/static/img/column-evolution-time.jpg" alt="">
</div>
</div>
Services;

addContent($page_content);
render();
