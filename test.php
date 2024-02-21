<?php
$array = ["Home", "Products", "Yests"];


$path = "";
foreach ($array as $value) {
    $path  .= "<a href='/$value'>$value</a>";
    if (end($array) != $value) {
        $path .= "<span> > </span>";
    }
}

echo "<h1>$path</h1>";
