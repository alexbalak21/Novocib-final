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

    case '/hplc-analysis-of-bases-nucleosides':
        require_once "app/views/hplc-analysis-of-bases-nucleosides.php";
        break;

    case '/nucleotides':
        require_once "app/views/nucleotides.php";
        break;

    case '/inquiry':
        require_once "app/views/inquiry.php";
        break;

    case '/yeast-extract-nucleotide-analysis':
        require_once "app/views/yeast-extract-nucleotide-analysis.php";
        break;

    case '/analytical-services':
        require_once "app/views/analytical-services.php";
        break;

    case '/analytical-services/yeast-extract-nucleotide-analysis':
        require_once "app/views/yeast-extract-nucleotide-analysis.php";
        break;

    default:
        require_once "app/views/404.php";
        break;
}
