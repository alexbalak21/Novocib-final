<?php
$redirects = [
    // Home and Main Pages
    "/Home.html" => "/",
    "/Home" => "/",
    "/index.html" => "/",
    "/index.php" => "/",
    "/index" => "/",


    // Active-Purified-Enzymes
    "/Purified_Active_Enzymes.html" => "/active-purified-enzymes",
    "/Recombinant_Adenosine_Kinase.html" => "/active-purified-enzymes/recombinant-adenosine-kinase",
    "/IMPDH_Recombinant_Enzyme.html" => "/active-purified-enzymes/impdh-recombinant-enzyme",
    "/Human_Recombinant_HGPRT.html" => "/active-purified-enzymes/human-recombinant-hgprt",
    "/Bacterial_FMN_Reductase" => "/active-purified-enzymes/fmn-reductase",
    "/Bacterial_FMN_Reductase.html" => "/active-purified-enzymes/fmn-reductase",

    // Freshness Assay Kits
    "/Freshness_Assay_Kits.html" => "/freshness-assay-kits",
    "/Freshness_Protocol.html" => "/freshness-assay-kits/how-it-works",
    "/Fish_Freshness_K_Value_Assay.html" => "/freshness-assay-kits/freshness-assay-kit",

    //ACTIVE-PURIFIED-ENZYMES
    "/active-purified-enzymes/cnii" => "/active-purified-enzymes/cn-ii",
    "/active-purified-enzymes/cnII" => "/active-purified-enzymes/cn-ii",


    // Convenient Assay Kits
    "/Convenient_Assay_Kits.html" => "/convenient-assay-kits",
    "/PRPPS_Assay_Kit.html" => "/convenient-assay-kits/prpp-s-assay-kit",
    "/AMPDA_Assay_Kit.html" => "/convenient-assay-kits/ampda-assay-kit",
    "/ADK_Phosphorylation_Assay_Kit.html" => "/convenient-assay-kits/adk-phosphorylation-assay-kit",
    "/Human_Recombinant_IMPDH.html" => "/convenient-assay-kits/human-recombinant-impdh",
    "/Human_Recombinant_PNP.html" => "/convenient-assay-kits/human-recombinant-pnp",
    "/ADK_Assay_Kit.html" => "/convenient-assay-kits/adk-assay-kit",
    "/HPRT_Assay_Kit.html" => "/convenient-assay-kits/hprt-assay-kit",
    "//HPRT_Assay_Kit.html" => "/convenient-assay-kits/hprt-assay-kit",
    "/dCK_Phosphorylation_In_Vitro_Assay_Service" => "/convenient-assay-kits/dck-phosphorylation-assay-kit",

    // Nucleotides and Analysis
    "/Nucleotide_Analysis_Services.html" => "/nucleotide-analysis-service",
    "/Cellular_Nucleotides_Analysis.html" => "/cellular-nucleotides-analysis",
    "/nucleotides" => "/dietary-nucleotides",
    "/Yeast_Extract_Nucleotide_Analysis.html" => "/yeast-extract-nucleotide-analysis",
    "/cellular-nucleotides-analysis" => "/analytical-services/cellular-nucleotides-analysis",

    // Other Pages
    "/contact" => "/contact-us",
    "/Bacterial_Luciferase.html" => "/bacterial-luciferase",
    "/Company.html" => "/news",
    "/News.html" => "/news",
    "/Team.html" => "/",
    "/internal/admin" => "/app/internal/admin/",

    // 404 Handling
    "/app/logic/log404.php" => "/not-found"
];

$requestPath = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

if (array_key_exists($requestPath, $redirects)) {
    header("Location: " . $redirects[$requestPath]);
    exit();
}
