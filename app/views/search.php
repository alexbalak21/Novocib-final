<?php
$title = "Search";
require_once "app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen());
$content_title = UnderlinedTitle::get("Search", "novoblue", "center");

$page_content = <<<CONTENT
<div class="container mt-5">
$content_title
<p>NOVOCIB produces active nucleoside kinases and other nucleotide metabolism enzymes. This portfolio of enzymes represents a unique range of powerful tools for Drug Discovery and research in the field of nucleoside and nucleotide metabolism.</p>
</div>
CONTENT;

addContent($page_content);
render();
