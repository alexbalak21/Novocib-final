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



        // Active-Purified-Enzymes
    case '/active-purified-enzymes':
        require_once "app/views/active-purified-enzymes.php";
        break;

    case '/active-purified-enzymes/impdh-recombinant-enzyme':
        require_once "app/views/active-purified-enzymes/impdh-recombinant-enzyme.php";
        break;

    case '/active-purified-enzymes/human-recombinant-hgprt':
        require_once "app/views/active-purified-enzymes/human-recombinant-hgprt.php";
        break;

    case '/active-purified-enzymes/recombinant-adenosine-kinase':
        require_once "app/views/active-purified-enzymes/recombinant-adenosine-kinase.php";
        break;

    case '/active-purified-enzymes/recombinant-deoxycytidine-kinase':
        require_once "app/views/active-purified-enzymes/recombinant-deoxycytidine-kinase.php";
        break;

    case '/active-purified-enzymes/human-ump-cmp-kinase':
        require_once "app/views/active-purified-enzymes/human-ump-cmp-kinase.php";
        break;


        // FRESHNESS
    case '/freshness-assay-kits':
        require_once "app/views/freshness-assay-kits/index.php";
        break;

    case '/freshness-assay-kits/freshness-principle':
        require_once "app/views/freshness-assay-kits/freshness-principle.php";
        break;

    case '/freshness-assay-kits/fish-freshness':
        require_once "app/views/freshness-assay-kits/fish-freshness.php";
        break;


        // ASSAY KITS 
    case '/convenient-assay-kits':
        require_once "app/views/convenient-assay-kits.php";
        break;

    case '/convenient-assay-kits/hprt-assay-kit':
        require_once "app/views/hprt-assay-kit.php";
        break;

    case '/convenient-assay-kits/prpp-s-assay-kit':
        require_once "app/views/prpp-s-assay-kit.php";
        break;

    case '/convenient-assay-kits/ampda-assay-kit':
        require_once "app/views/ampda-assay-kit.php";
        break;

    case '/convenient-assay-kits/itp-ase-deficiency-assay-kit':
        require_once "app/views/itp-ase-deficiency-assay-kit.php";
        break;

    case '/convenient-assay-kits/adk-phosphorylation-assay-kit':
        require_once "app/views/convenient-assay-kits/adk-phosphorylation-assay-kit.php";
        break;

    case '/convenient-assay-kits/dck-phosphorylation-assay-kit':
        require_once "app/views/convenient-assay-kits/dck-phosphorylation-assay-kit.php";
        break;

    case '/convenient-assay-kits/human-recombinant-impdh':
        require_once "app/views/convenient-assay-kits/human-recombinant-impdh.php";
        break;

    case '/convenient-assay-kits/bacterial-recombinant-impdh':
        require_once "app/views/convenient-assay-kits/bacterial-recombinant-impdh.php";
        break;

    case '/convenient-assay-kits/human-recombinant-pnp':
        require_once "app/views/convenient-assay-kits/human-recombinant-pnp.php";
        break;


    case '/hplc-analysis-of-bases-nucleosides':
        require_once "app/views/hplc-analysis-of-bases-nucleosides.php";
        break;

    case '/cellular-nucleotides-analysis':
        require_once "app/views/cellular-nucleotides-analysis.php";
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
