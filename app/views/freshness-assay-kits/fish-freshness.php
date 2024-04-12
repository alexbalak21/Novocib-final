<?php
$title = "Freshness Quality Control Assessments";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "Freshness", "fish freshness"];

addContent(Banner::gen());
$content_title = UnderlinedTitle::get("Case Studies of Fish Quality assessments", "novoblue", "right");

$page_content = <<<CONTENT
<div class="container mt-5">
$content_title

</div>
CONTENT;

addContent($page_content);
render();
