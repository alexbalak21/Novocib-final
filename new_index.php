<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/constants/dirs.php';
require_once "redirects.php"; // Handles redirects first

$root = $_SERVER['DOCUMENT_ROOT'];
$parsed_url = parse_url($_SERVER["REQUEST_URI"]);
$request_path = rtrim(strtolower($parsed_url["path"] ?? "/"), "/");

$routes = [
    // Home
    "/" => "app/views/home.php",
    "/home" => "app/views/home.php",
    "/Home" => "app/views/home.php",

    // Send Mail
    "/send" => "app/logic/send.php",
    "/message-sent-successfully" => "app/views/message_sent.php",

    // Active-Purified-Enzymes
    "/active-purified-enzymes" => "app/views/active-purified-enzymes.php",
    "/active-purified-enzymes/impdh-recombinant-enzyme" => "app/views/active-purified-enzymes/impdh-recombinant-enzyme.php",
    "/active-purified-enzymes/human-recombinant-hgprt" => "app/views/active-purified-enzymes/human-recombinant-hgprt.php",
    "/active-purified-enzymes/recombinant-adenosine-kinase" => "app/views/active-purified-enzymes/recombinant-adenosine-kinase.php",
    "/active-purified-enzymes/recombinant-deoxycytidine-kinase" => "app/views/active-purified-enzymes/recombinant-deoxycytidine-kinase.php",
    "/active-purified-enzymes/cnii" => "app/views/active-purified-enzymes/cn-ii.php",
    "/active-purified-enzymes/human-ump-cmp-kinase" => "app/views/active-purified-enzymes/human-ump-cmp-kinase.php",
    "/active-purified-enzymes/fmn-reductase" => "app/views/active-purified-enzymes/FMN-Reductase.php",

    // Freshness Assay Kits
    "/freshness-assay-kits" => "app/views/freshness-assay-kits/index.php",
    "/freshness-assay-kits/freshness-principle" => "app/views/freshness-assay-kits/freshness-principle.php",
    "/freshness-assay-kits/fish-freshness" => "app/views/freshness-assay-kits/fish-freshness.php",
    "/freshness-assay-kits/freshness-assay-kit" => "app/views/freshness-assay-kits/freshness-assay-kit.php",
    "/freshness-assay-kits/how-it-works" => "app/views/freshness-assay-kits/how-it-works.html",

    // Convenient Assay Kits
    "/convenient-assay-kits" => "app/views/convenient-assay-kits/index.php",
    "/convenient-assay-kits/hprt-assay-kit" => "app/views/convenient-assay-kits/hprt-assay-kit.php",
    "/convenient-assay-kits/prpp-s-assay-kit" => "app/views/convenient-assay-kits/prpp-s-assay-kit.php",
    "/convenient-assay-kits/ampda-assay-kit" => "app/views/convenient-assay-kits/ampda-assay-kit.php",
    "/convenient-assay-kits/itp-ase-assay-kit" => "app/views/convenient-assay-kits/itp-ase-deficiency-assay-kit.php",
    "/convenient-assay-kits/itp-ase-deficiency-assay-kit.php" => "app/views/convenient-assay-kits/itp-ase-deficiency-assay-kit.php",
    "/convenient-assay-kits/adk-phosphorylation-assay-kit" => "app/views/convenient-assay-kits/adk-phosphorylation-assay-kit.php",
    "/convenient-assay-kits/dck-phosphorylation-assay-kit" => "app/views/convenient-assay-kits/dck-phosphorylation-assay-kit.php",
    "/convenient-assay-kits/human-recombinant-impdh" => "app/views/convenient-assay-kits/human-recombinant-impdh.php",
    "/convenient-assay-kits/bacterial-recombinant-impdh" => "app/views/convenient-assay-kits/bacterial-recombinant-impdh.php",
    "/convenient-assay-kits/human-recombinant-pnp" => "app/views/convenient-assay-kits/human-recombinant-pnp.php",
    "/convenient-assay-kits/adk-assay-kit" => "app/views/convenient-assay-kits/adk-assay-kit.php",
    "/convenient-assay-kits/phosphatase-assay-kit" => "app/views/convenient-assay-kits/phosphatase-assay-kit.html",

    // Nucleotides and Analysis
    "/hplc-analysis-of-bases-nucleosides" => "app/views/hplc-analysis-of-bases-nucleosides.php",
    "/nucleotide-analysis-service" => "app/views/nucleotide-analysis-service.php",
    "/cellular-nucleotides-analysis" => "app/views/cellular-nucleotides-analysis.php",
    "/dietary-nucleotides" => "app/views/nucleotides.php",
    "/nucleotides" => "app/views/nucleotides.php",
    "/dietary-nucleotides-assay-kits" => "app/views/dietary-nucleotides-assay-kits/index.php",
    "/dietary-nucleotides-assay-kits/fish-freshness-assay-kit" => "app/views/dietary-nucleotides-assay-kits/fish-freshness-assay-kit.php",

    // Services
    "/services" => "app/views/analytical-services/index.php",
    "/analytical-services" => "app/views/analytical-services/index.php",
    "/analytical-services/yeast-extract-nucleotide-analysis" => "app/views/analytical-services/yeast-extract-nucleotide-analysis.php",
    "/yeast-extract-nucleotide-analysis" => "app/views/analytical-services/yeast-extract-nucleotide-analysis.php",

    // Other Pages
    "/bacterial-luciferase" => "app/views/bacterial-luciferase.html",
    "/news" => "app/views/news.php",
    "/search" => "app/views/search.php",
    "/inquiry" => "app/views/inquiry.php",
    "/contact" => "app/views/contact-us.php",
    "/contact-us" => "app/views/contact-us.php",

    // Internal and Secure
    "/internal/share" => "app/internal/share/index.php",
    "/internal/admin" => "app/internal/admin/",
    "/secure-info" => "app/controllers/SecureInfoController.php",
    "/secure/login" => "app/views/secure/login.php",
    "/secure/login-c" => "app/controllers/SecureLogin.php",
    "/secure/transfer" => "app/views/secure/transfer.php",
    "/secure/store" => "app/controllers/SaveCardInfo.php",
    "/secure/success" => "app/views/secure/success.php",
    "/error" => "app/views/error.php"
];

if (array_key_exists($request_path, $routes)) {
    require_once $routes[$request_path];
} elseif ($request_path === "/app/logic/log404.php") {
    echo "LOG 404";
    header("Location: /not-found");
} else {
    require_once "$root/app/views/404.php";
}
