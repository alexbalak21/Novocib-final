<?php
$title = "404 Requests";
require_once __DIR__ . "/templates/base.php";
require_once "db_logic.php";

$requests = request404_read_all();

print_r($requests);
