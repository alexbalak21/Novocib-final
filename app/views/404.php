<?php
$title = "404 Page not found";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/log404.php";

$request = basename($_SERVER['REQUEST_URI']);
$request = preg_replace('/\.(html|php)$/i', '', $request);
$request = str_replace(['_', '-'], ' ', $request);
$cleaned_request = strtolower($request);

?>

<div class="banner" style="background-image: url(/app/static/img/network.jpg); height: 500px">
    <div class="overlay">
        <div class="caption w-100">
            <h1 class="title display-4">404 Page not found</h1>
        </div>
        <div class="links">
            <p class="path lead">
                <a href="/">Home</a>
            </p>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5">
    <h2 class="underlinedTitle center"><span class="underlined novoblue center">404 Page not found</span></h2>
    <p class="text-center fs-2 mt-4">The page you are asking for was not found.</p>

    <h3 class="novo-blue text-center mt-5 mb-4">Search for it on Novocib.com</h3>
    <div class="d-flex justify-content-center">
        <div class="searchbar">
            <input id="searchInput" class="search_input" type="text" value="<?= $cleaned_request  ?>" name="search" placeholder="Search...">
            <a id="searchBtn" title="search" class="search_icon"><i class="fa-solid fa-magnifying-glass"></i></a>
        </div>
        <div id="clear-searchbar" class="ms-2 mt-3">
            <button class="btn btn-outline-secondary btn-sm" title="clear searchbar"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <style>
            #searchBtn:hover {
                cursor: pointer;
            }

            #clear-searchbar {
                visibility: hidden;
                opacity: 0;
                transition: opacity 0.2s ease;
            }

            #clear-searchbar.visible {
                visibility: visible;
                opacity: 1;
            }
        </style>
    </div>
    <div class="text-center mt-3">
        <button id="search_btn" class="btn btn-primary">Search <i class="fa-solid fa-magnifying-glass"></i></button>
    </div>

    <div class="text-center mt-5">
        <h4 class="mb-4">Or</h4>
        <a href="/" class="btn btn-outline-primary"><span style="font-size:18px">Go to Homepage <i class="fa-solid fa-house"></i></span></a>
    </div>
    <script src="/app/js/search-bar.js" defer></script>
</div>