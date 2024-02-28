<?php
$title = "Yeast Extract Nucleotide Analysis";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "services", "Yeast Extract Nucleotide Analysis"];

addContent(Banner::gen("/app/static/img/analysis4.webp"));
$content_title = UnderlinedTitle::get("Yeast Extracts Enriched in Tasty Nucleotides", "novoblue", "right");

$page_content = <<<Service
<div class="container mt-5">
$content_title
<p>5'-nucleotides IMP and GMP (also known as Inosinate and Guanylate) are strong flavour enhancers (E626-E633) involved in "umami" taste. Since yeasts are rich in ribonucleic acid (RNA), a natural source of 5' nucleotides (GMP, AMP, CMP and UMP), yeast extracts enriched in 5' nucleotides IMP and GMP are currently used as taste enhancers.</p>
<div class="text-center mb-5">
<img onclick="enlargeImg(this)" class="zoom" src="/app/static/img/column-evolution-time.jpg" alt="">
<p class="text-muted" style="font-size:18px !important;">Click to enlarge</p>
</div>

<p>5'-Nucleotidases and phosphatases are ubiquitous hydrolytic enzymes that catalyze the hydrolysis of nucleotides into a phosphate and nucleosides deprived of flavour-enhancing properties. The nucleosides are further hydrolyzed to purine and pyrimidine bases. Purine base hypoxanthine has a strongly bitter taste. Nucleotides/nucleosides/bases content in yeast extract vary as a function of growth state and the method of preparation.</p>
<div class="text-center">
<img class="w-50 mb-5" src="/app/static/img/yeast-rna.jpg" alt="">
</div>

<div>
<h2 class="text-center primary">Yeast Nucleotide HPLC Analysis</h2>
</div>

<p><strong>Quality Control of Yeast Extract Nucleotides: NOVOCIB</strong> offers a range of analytical services from characterisation of free 5' nucleotides to full spectrum of nucleotides in yeast extracts by ion-pair high-performance liquid chromatography with diode array detection. This service allows to control the content of flavor nucleotides yeast extract samples.</p>

</div>
Service;

addContent($page_content);
render();
