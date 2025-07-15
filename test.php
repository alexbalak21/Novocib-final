<?php
$test = $_SERVER['DOCUMENT_ROOT'] . '/app/constants/dirs.php';
echo file_exists($test) ? "File exists!" : "File not found.";
