<?php
$title = "Services";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "services"];

addContent(Banner::gen());
addContent("<div class='container'><h2 class='text-muted my-4'>(Exemple)</h2></div>");
$content_title = UnderlinedTitle::get("Active Purified Enzymes", "novoblue", "right");

$page_content = <<<Services
<div class="container mt-5">
$content_title
<p>NOVOCIB produces active nucleoside kinases and other nucleotide metabolism enzymes. This portfolio of enzymes represents a unique range of powerful tools for Drug Discovery and research in the field of nucleoside and nucleotide metabolism.</p>
</div>
Services;

addContent($page_content);
render();
