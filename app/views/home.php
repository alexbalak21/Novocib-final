<?php
$title = "Novocib";
require_once "app/templates/base.php";

addContent(Carousel::gen());
$searchbar = Searchbar::get();
$search_container = <<<SEARCH

    <div class="container mt-4">
        <div class="d-flex justify-content-center">
        $searchbar
        </div>
    </div>

SEARCH;
addContent($search_container);
render();
