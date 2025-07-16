<?php
/**
 * Application Routes Configuration
 * 
 * This file contains all the route definitions for the application.
 * Each route maps a URL pattern to a controller/action or view file.
 */

return [
    // ======================
    // MAIN PAGES
    // ======================
    '/' => 'app/views/home.php',
    '/home' => 'app/views/home.php',
    '/index.php' => 'app/views/home.php',
    '/index.html' => 'app/views/home.php',

    // ======================
    // ACTIVE PURIFIED ENZYMES
    // ======================
    '/active-purified-enzymes' => 'app/views/active-purified-enzymes/index.php',
    '/active-purified-enzymes/impdh-recombinant-enzyme' => 'app/views/active-purified-enzymes/impdh-recombinant-enzyme.php',
    '/active-purified-enzymes/human-recombinant-hgprt' => 'app/views/active-purified-enzymes/human-recombinant-hgprt.php',
    '/active-purified-enzymes/recombinant-adenosine-kinase' => 'app/views/active-purified-enzymes/recombinant-adenosine-kinase.php',
    '/active-purified-enzymes/recombinant-deoxycytidine-kinase' => 'app/views/active-purified-enzymes/recombinant-deoxycytidine-kinase.php',
    '/active-purified-enzymes/cnii' => 'app/views/active-purified-enzymes/cnii.php',
    '/active-purified-enzymes/cn-ii' => 'app/views/active-purified-enzymes/cnii.php',
    '/active-purified-enzymes/human-ump-cmp-kinase' => 'app/views/active-purified-enzymes/human-ump-cmp-kinase.php',
    '/active-purified-enzymes/fmn-reductase' => 'app/views/active-purified-enzymes/fmn-reductase.php',
    '/active-purified-enzymes/human-recombinant-pnp' => 'app/views/active-purified-enzymes/human-recombinant-pnp.php',
    '/active-purified-enzymes/human-recombinant-impdh' => 'app/views/active-purified-enzymes/human-recombinant-impdh.php',
    '/active-purified-enzymes/bacterial-recombinant-impdh' => 'app/views/active-purified-enzymes/bacterial-recombinant-impdh.php',

    // ======================
    // FRESHNESS ASSAY KITS
    // ======================
    '/freshness-assay-kits' => 'app/views/freshness-assay-kits/index.php',
    '/freshness-assay-kits/freshness-principle' => 'app/views/freshness-assay-kits/freshness-principle.php',
    '/freshness-assay-kits/fish-freshness' => 'app/views/freshness-assay-kits/fish-freshness.php',
    '/freshness-assay-kits/freshness-assay-kit' => 'app/views/freshness-assay-kits/freshness-assay-kit.php',
    '/freshness-assay-kits/how-it-works' => 'app/views/freshness-assay-kits/how-it-works.php',

    // ======================
    // CONVENIENT ASSAY KITS
    // ======================
    '/convenient-assay-kits' => 'app/views/convenient-assay-kits/index.php',
    '/convenient-assay-kits/hprt-assay-kit' => 'app/views/convenient-assay-kits/hprt-assay-kit.php',
    '/convenient-assay-kits/prpp-s-assay-kit' => 'app/views/convenient-assay-kits/prpp-s-assay-kit.php',
    '/convenient-assay-kits/ampda-assay-kit' => 'app/views/convenient-assay-kits/ampda-assay-kit.php',
    '/convenient-assay-kits/itp-ase-assay-kit' => 'app/views/convenient-assay-kits/itp-ase-assay-kit.php',
    '/convenient-assay-kits/itp-ase-deficiency-assay-kit' => 'app/views/convenient-assay-kits/itp-ase-deficiency-assay-kit.php',
    '/convenient-assay-kits/adk-phosphorylation-assay-kit' => 'app/views/convenient-assay-kits/adk-phosphorylation-assay-kit.php',
    '/convenient-assay-kits/dck-phosphorylation-assay-kit' => 'app/views/convenient-assay-kits/dck-phosphorylation-assay-kit.php',
    '/convenient-assay-kits/adk-assay-kit' => 'app/views/convenient-assay-kits/adk-assay-kit.php',
    '/convenient-assay-kits/phosphatase-assay-kit' => 'app/views/convenient-assay-kits/phosphatase-assay-kit.php',

    // ======================
    // ANALYTICAL SERVICES
    // ======================
    '/services' => 'app/views/analytical-services/index.php',
    '/analytical-services' => 'app/views/analytical-services/index.php',
    '/analytical-services/yeast-extract-nucleotide-analysis' => 'app/views/analytical-services/yeast-extract-nucleotide-analysis.php',
    '/yeast-extract-nucleotide-analysis' => 'app/views/analytical-services/yeast-extract-nucleotide-analysis.php',
    '/nucleotide-analysis-service' => 'app/views/analytical-services/nucleotide-analysis-service.php',
    '/cellular-nucleotides-analysis' => 'app/views/analytical-services/cellular-nucleotides-analysis.php',
    '/dietary-nucleotides' => 'app/views/analytical-services/dietary-nucleotides.php',
    '/nucleotides' => 'app/views/analytical-services/nucleotides.php',

    // ======================
    // DIETARY NUCLEOTIDES ASSAY KITS
    // ======================
    '/dietary-nucleotides-assay-kits' => 'app/views/dietary-nucleotides-assay-kits/index.php',
    '/dietary-nucleotides-assay-kits/fish-freshness-assay-kit' => 'app/views/dietary-nucleotides-assay-kits/fish-freshness-assay-kit.php',

    // ======================
    // OTHER PAGES
    // ======================
    '/bacterial-luciferase' => 'app/views/bacterial-luciferase.php',
    '/news' => 'app/views/news/index.php',
    '/search' => 'app/views/search.php',
    '/inquiry' => 'app/views/inquiry.php',
    '/contact' => 'app/views/contact.php',
    '/contact-us' => 'app/views/contact.php',
    '/products' => 'app/views/products.php',
    '/hplc-analysis-of-bases-nucleosides' => 'app/views/hplc-analysis-of-bases-nucleosides.php',

    // ======================
    // FORM HANDLERS & ACTIONS
    // ======================
    '/send' => 'app/controllers/send-message.php',
    '/message-sent-successfully' => 'app/views/message-sent.php',

    // ======================
    // SECURE/INTERNAL ROUTES
    // ======================
    '/secure/login' => 'app/secure/login.php',
    '/secure/login-c' => 'app/secure/login-process.php',
    '/secure/transfer' => 'app/secure/transfer.php',
    '/secure/store' => 'app/secure/store.php',
    '/secure/success' => 'app/secure/success.php',
    '/internal/share' => 'app/internal/share.php',
    '/internal/admin' => 'app/internal/admin/index.php',
    '/secure-info' => 'app/secure/info.php',

    // ======================
    // ERROR PAGES
    // ======================
    '/404' => 'app/views/404.php',
    '/error' => 'app/views/error.php',
];
