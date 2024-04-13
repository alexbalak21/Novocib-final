<?php
$title = "Products";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "products"];

addContent(Banner::gen());
render();
