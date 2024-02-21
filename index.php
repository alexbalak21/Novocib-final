<?php
$req_uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// $req_uri = substr($req_uri, -1) == '/' ? substr_replace($req_uri, "", -1) : $req_uri;

//REQUETS PARAMETERS
// $_REQUEST

switch ($req_uri) {
    case '/':
    case '/home':
    case "/Home":
        require_once "app/views/home.php";
        break;

    case '/products':
        require_once "app/views/products.php";
        break;

    case '/services':
        require_once "app/views/services.php";
        break;

    default:
        require_once "app/views/404.php";
        break;
}
