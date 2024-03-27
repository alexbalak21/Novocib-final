<?php
$title = "PRPP-S Assay Kit";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "convenient assay kits", "PRPP-S assay kit"];

addContent(Banner::gen());
$content_title = UnderlinedTitle::get("Non radioactive PRPP-S assay", "novoblue", "right");

$page_content = <<<CONTENT
<div class="container mt-5">
$content_title
<p><strong>PRECICE® PRPP-S Assay kit</strong> provides the first non radioactive and one-step protocol for measurement of PRPP-S activity in cellular lysates in a convenient 96-well plate format.</p>
</div>
CONTENT;

addContent($page_content);
render();
