<?php
$title = "Continuous Spectrophotometric Phosphatase Assay Kit";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "convenient assay kits", "Phosphatase Assay Kit"];

addContent(Banner::gen());

$page_content = file_get_contents("app/content/phosphatase-assay-kit.html");

addContent($page_content);
render();
