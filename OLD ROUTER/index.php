<?php
//require Constants
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/constants/dirs.php';


$root = $_SERVER['DOCUMENT_ROOT'];
$parsed_url = parse_url($_SERVER["REQUEST_URI"]);
$req_uri = isset($parsed_url["path"]) ? $parsed_url["path"] : null;

// _REQUEST PARAMETERS
// $_REQUEST
switch ($req_uri) {
    case "/":
    case "/home":
    case "/Home":
        require "app/views/home.php";
        break;

    // SEND MAIL LOGIC
    case "/send":
        require_once "app/logic/send.php";
        break;

    case "/message-sent-successfully":
        require_once "app/views/message_sent.php";
        break;

    // Active-Purified-Enzymes
    case "/active-purified-enzymes":
        require_once "app/views/active-purified-enzymes.php";
        break;

    case "/Purified_Active_Enzymes.html":
        header("Location: /active-purified-enzymes");
        break;

    case "/IMPDH_Recombinant_Enzyme.html":
    case "/active-purified-enzymes/impdh-recombinant-enzyme":
        require_once "app/views/active-purified-enzymes/impdh-recombinant-enzyme.php";
        break;

    case "/Human_Recombinant_HGPRT.html":
    case "/active-purified-enzymes/human-recombinant-hgprt":
        require_once "app/views/active-purified-enzymes/human-recombinant-hgprt.php";
        break;


    case "/Recombinant_Adenosine_Kinase.html":
        header("Location: /active-purified-enzymes/recombinant-adenosine-kinase");
        break;

    case "/active-purified-enzymes/recombinant-adenosine-kinase":
        require_once "app/views/active-purified-enzymes/recombinant-adenosine-kinase.php";
        break;

    case "/active-purified-enzymes/recombinant-deoxycytidine-kinase":
        require_once "app/views/active-purified-enzymes/recombinant-deoxycytidine-kinase.php";
        break;

    case "/active-purified-enzymes/cnII":
        require_once "app/views/active-purified-enzymes/cn-ii.php";
        break;

    case "/active-purified-enzymes/human-ump-cmp-kinase":
        require_once "app/views/active-purified-enzymes/human-ump-cmp-kinase.php";
        break;

    case "/Bacterial_FMN_Reductase":
    case "/Bacterial_FMN_Reductase.html":
    case "/active-purified-enzymes/fmn-reductase":
        require_once "app/views/active-purified-enzymes/FMN-Reductase.php";
        break;



    // FRESHNESS
    case "/freshness-assay-kits":
        require_once "app/views/freshness-assay-kits/index.php";
        break;

    case "/Freshness_Assay_Kits.html":
        header("Location: /freshness-assay-kits");
        break;


    case "/freshness-assay-kits/freshness-principle":
        require_once "app/views/freshness-assay-kits/freshness-principle.php";
        break;

    case "/freshness-assay-kits/fish-freshness":
        require_once "app/views/freshness-assay-kits/fish-freshness.php";
        break;

    case "/freshness-assay-kits/freshness-assay-kit":
        require_once "app/views/freshness-assay-kits/freshness-assay-kit.php";
        break;

    case "/freshness-assay-kits/how-it-works":
        require_once "app/views/freshness-assay-kits/how-it-works.html";
        break;

    case "/Freshness_Protocol.html":
        header("Location: /freshness-assay-kits/how-it-works");
        break;


    case "/Fish_Freshness_K_Value_Assay.html":
        header("Location: /freshness-assay-kits/freshness-assay-kit");
        break;

    // CONVENIENT ASSAY KITS
    case "/Convenient_Assay_Kits.html":
    case "/convenient-assay-kits":
        require_once "app/views/convenient-assay-kits/index.php";
        break;

    case "//HPRT_Assay_Kit.html":
    case "/convenient-assay-kits/hprt-assay-kit":
        require_once "app/views/convenient-assay-kits/hprt-assay-kit.php";
        break;

    case "/convenient-assay-kits/prpp-s-assay-kit":
        require_once "app/views/convenient-assay-kits/prpp-s-assay-kit.php";
        break;

    case "/PRPPS_Assay_Kit.html":
        header("Location: /convenient-assay-kits/prpp-s-assay-kit");
        break;

    case "/AMPDA_Assay_Kit.html":
        header("Location: /convenient-assay-kits/ampda-assay-kit");
        break;

    case "/convenient-assay-kits/ampda-assay-kit":
        require_once "app/views/convenient-assay-kits/ampda-assay-kit.php";
        break;

    case "/convenient-assay-kits/itp-ase-deficiency-assay-kit.php":
    case "/convenient-assay-kits/itp-ase-assay-kit":
        require_once "app/views/convenient-assay-kits/itp-ase-deficiency-assay-kit.php";
        break;

    case "/ADK_Phosphorylation_Assay_Kit.html":
        header("Location: /convenient-assay-kits/adk-phosphorylation-assay-kit");
        break;

    case "/convenient-assay-kits/adk-phosphorylation-assay-kit":
        require_once "app/views/convenient-assay-kits/adk-phosphorylation-assay-kit.php";
        break;



    case "/dCK_Phosphorylation_In_Vitro_Assay_Service":
    case "/convenient-assay-kits/dck-phosphorylation-assay-kit":
        require_once "app/views/convenient-assay-kits/dck-phosphorylation-assay-kit.php";
        break;

    case "/Human_Recombinant_IMPDH.html":
        header("Location: /convenient-assay-kits/human-recombinant-impdh");
        break;

    case "/convenient-assay-kits/human-recombinant-impdh":
        require_once "app/views/convenient-assay-kits/human-recombinant-impdh.php";
        break;

    case "/convenient-assay-kits/bacterial-recombinant-impdh":
        require_once "app/views/convenient-assay-kits/bacterial-recombinant-impdh.php";
        break;

    case "/Human_Recombinant_PNP.html":
        header("Location: /convenient-assay-kits/human-recombinant-pnp");
        break;

    case "/convenient-assay-kits/human-recombinant-pnp":
        require_once "app/views/convenient-assay-kits/human-recombinant-pnp.php";
        break;

    case "/ADK_Assay_Kit.html":
    case "/convenient-assay-kits/adk-assay-kit":
        require_once "app/views/convenient-assay-kits/adk-assay-kit.php";
        break;

    case "/convenient-assay-kits/phosphatase-assay-kit":
        require_once "app/views/convenient-assay-kits/phosphatase-assay-kit.html";
        break;



    case "/hplc-analysis-of-bases-nucleosides":
        require_once "app/views/hplc-analysis-of-bases-nucleosides.php";
        break;

    case "/Nucleotide_Analysis_Services.html":
        header("Location: /nucleotide-analysis-service");
        break;

    case "/cellular-nucleotides-analysis":
    case "/Cellular_Nucleotides_Analysis.html":
        require_once "app/views/cellular-nucleotides-analysis.php";
        break;

    case "/nucleotides":
        header("Location: /dietary-nucleotides");
        break;

    case "/dietary-nucleotides":
        require_once "app/views/nucleotides.php";
        break;

    case "/inquiry":
        require_once "app/views/inquiry.php";
        break;

    case "/contact":
        header("Location: /contact-us");
        break;

    case "/contact-us":
        require_once "app/views/contact-us.php";
        break;

    case "/Yeast_Extract_Nucleotide_Analysis.html":
        header("Location: /yeast-extract-nucleotide-analysis");
        break;

    case "/yeast-extract-nucleotide-analysis":
        require_once "app/views/analytical-services/yeast-extract-nucleotide-analysis.php";
        break;




    // Dietary Nucleotides Assay Kits
    case "/dietary-nucleotides-assay-kits":
        require_once $root . "/app/views/dietary-nucleotides-assay-kits/index.php";
        break;

    case "/dietary-nucleotides-assay-kits/fish-freshness-assay-kit":
        require_once $root . "/app/views/dietary-nucleotides-assay-kits/fish-freshness-assay-kit.php";
        break;



    // SERVICES
    case "/services":
    case "/analytical-services":
        require_once "app/views/analytical-services/index.php";
        break;

    case "/nucleotide-analysis-service":
        require_once "app/views/nucleotide-analysis-service.php";
        break;

    case "/analytical-services/yeast-extract-nucleotide-analysis":
        require_once "app/views/analytical-services/yeast-extract-nucleotide-analysis.php";
        break;

    case "/bacterial-luciferase":
        require_once "app/views/bacterial-luciferase.html";
        break;

    case "/Bacterial_Luciferase.html":
        header("Location: /bacterial-luciferase");
        break;

    case "/Company.html":
        header("Location: /news");
        break;

    case "/News.html":
        header("Location: /news");
        break;

    case "/Team.html":
        header("Location: /");
        break;

    case "/news":
        require_once "app/views/news.php";
        break;

    case "/search":
        require_once "app/views/search.php";
        break;

    case "/internal/share":
        require_once "app/internal/share/index.php";
        break;

    case "/internal/admin":
        header("Location: /app/internal/admin/");
        break;

    case "/secure-info":
        require_once "app/controllers/SecureInfoController.php";
        break;

    case "/secure/login":
        require_once "app/views/secure/login.php";
        break;

    case "/secure/login-c":
        require_once "app/controllers/SecureLogin.php";
        break;

    case "/secure/transfer":
        require_once "app/views/secure/transfer.php";
        break;

    case "/secure/store":
        require_once "app/controllers/SaveCardInfo.php";
        break;

    case "/secure/success":
        require_once "app/views/secure/success.php";
        break;

    case "/error":
        require_once "app/views/error.php";
        break;

    case "/app/logic/log404.php":
        echo "LOG 404";
        header("Location: /not-found");
        break;

    default:
        require_once $_SERVER["DOCUMENT_ROOT"] . "/app/views/404.php";
        break;
}
