<?php
global $title;
$title = "HPLC analysis of bases, nucleosides, NMP and nucleic acids in feed ingredients or products";
require_once "app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen());
$content_title = UnderlinedTitle::get("HPLC analysis of bases, nucleosides, NMP and nucleic acids in feed ingredients or products");

$page_content = <<<Services
<div class="container mt-5">
$content_title
<p>NOVOCIB produces active nucleoside kinases and other nucleotide metabolism enzymes. This portfolio of enzymes represents a unique range of powerful tools for Drug Discovery and research in the field of nucleoside and nucleotide metabolism.</p>
</div>
Services;

addContent($page_content);
render();
