<?php

/**
 * Routes configuration from index_old.php
 * This file contains all the routes that were previously in the switch statement
 */

return [
    // Home and Main Pages
    '/' => 'app/views/home.php',
    '/home' => 'app/views/home.php',
    '/index.php' => 'app/views/home.php',
    "/index.html" =>  'app/views/home.php',

    // Contact and Inquiry
    '/contact' => '/contact-us', // Redirect
    '/contact-us' => 'app/views/contact-us.php',
    '/inquiry' => 'app/views/inquiry.php',

    // Mail Handling
    '/send' => 'app/logic/send.php',
    '/send-inquiry' => 'app/logic/send_inquiry.php',
    '/message-error' => 'app/views/message-error.php',
    '/message-sent-successfully' => 'app/views/message_sent.php',
    '/send-fancy' => "app/logic/send_fancy.php",

    // Active Purified Enzymes
    '/active-purified-enzymes' => 'app/views/active-purified-enzymes/index.php',
    '/active-purified-enzymes/human-recombinant-impdh' => 'app/views/active-purified-enzymes/human-recombinant-impdh.php',
    '/active-purified-enzymes/human-recombinant-hgprt' => 'app/views/active-purified-enzymes/human-recombinant-hgprt.php',
    '/active-purified-enzymes/recombinant-adenosine-kinase' => 'app/views/active-purified-enzymes/recombinant-adenosine-kinase.php',
    '/active-purified-enzymes/recombinant-deoxycytidine-kinase' => 'app/views/active-purified-enzymes/recombinant-deoxycytidine-kinase.php',
    '/active-purified-enzymes/cn-ii' => 'app/views/active-purified-enzymes/cn-ii.php',
    '/active-purified-enzymes/human-ump-cmp-kinase' => 'app/views/active-purified-enzymes/human-ump-cmp-kinase.php',
    '/active-purified-enzymes/fmn-reductase' => 'app/views/active-purified-enzymes/FMN-Reductase.php',

    // Freshness Assay Kits
    '/freshness-assay-kits' => 'app/views/freshness-assay-kits/index.php',
    '/freshness-assay-kits/freshness-principle' => 'app/views/freshness-assay-kits/freshness-principle.php',
    '/freshness-assay-kits/fish-freshness' => 'app/views/freshness-assay-kits/fish-freshness.php',
    '/freshness-assay-kits/freshness-assay-kit' => 'app/views/freshness-assay-kits/freshness-assay-kit.php',
    '/freshness-assay-kits/how-it-works' => 'app/views/freshness-assay-kits/how-it-works.php',

    // Convenient Assay Kits
    '/convenient-assay-kits' => 'app/views/convenient-assay-kits/index.php',
    '/convenient-assay-kits/hprt-assay-kit' => 'app/views/convenient-assay-kits/hprt-assay-kit.php',
    '/convenient-assay-kits/prpp-s-assay-kit' => 'app/views/convenient-assay-kits/prpp-s-assay-kit.php',
    '/convenient-assay-kits/ampda-assay-kit' => 'app/views/convenient-assay-kits/ampda-assay-kit.php',
    '/convenient-assay-kits/itp-ase-assay-kit' => 'app/views/convenient-assay-kits/itp-ase-deficiency-assay-kit.php',
    '/convenient-assay-kits/adk-phosphorylation-assay-kit' => 'app/views/convenient-assay-kits/adk-phosphorylation-assay-kit.php',
    '/convenient-assay-kits/dck-phosphorylation-assay-kit' => 'app/views/convenient-assay-kits/dck-phosphorylation-assay-kit.php',
    // '/convenient-assay-kits/human-recombinant-impdh' => 'app/views/convenient-assay-kits/human-recombinant-impdh.php',
    '/convenient-assay-kits/bacterial-recombinant-impdh' => 'app/views/convenient-assay-kits/bacterial-recombinant-impdh.php',
    '/convenient-assay-kits/human-recombinant-pnp' => 'app/views/convenient-assay-kits/human-recombinant-pnp.php',
    '/convenient-assay-kits/adk-assay-kit' => 'app/views/convenient-assay-kits/adk-assay-kit.php',
    '/convenient-assay-kits/phosphatase-assay-kit' => 'app/views/convenient-assay-kits/phosphatase-assay-kit.php',

    // Dietary Nucleotides
    '/nucleotides' => '/dietary-nucleotides', // Redirect
    '/dietary-nucleotides' => 'app/views/nucleotides.php',
    '/dietary-nucleotides-assay-kits' => 'app/views/dietary-nucleotides-assay-kits/index.php',
    '/dietary-nucleotides-assay-kits/fish-freshness-assay-kit' => 'app/views/dietary-nucleotides-assay-kits/fish-freshness-assay-kit.php',

    // Analytical Services
    '/services' => 'app/views/analytical-services/index.php',
    '/analytical-services' => 'app/views/analytical-services/index.php',
    '/nucleotide-analysis-service' => 'app/views/nucleotide-analysis-service.php',
    '/analytical-services/cellular-nucleotides-analysis' => 'app/views/analytical-services/cellular-nucleotides-analysis.php',
    '/analytical-services/yeast-extract-nucleotide-analysis' => 'app/views/analytical-services/yeast-extract-nucleotide-analysis.php',
    '/yeast-extract-nucleotide-analysis' => 'app/views/analytical-services/yeast-extract-nucleotide-analysis.php',

    // Nucleotides Assay Kits
    '/nucleotides-assay-kits' => 'app/views/nucleotides-assay-kits/index.php',

    // Other Pages
    '/bacterial-luciferase' => 'app/views/bacterial-luciferase.php',
    '/news' => 'app/views/news.php',
    '/search' => 'app/views/search.php',
    '/hplc-analysis-of-bases-nucleosides' => 'app/views/hplc-analysis-of-bases-nucleosides.php',


    // Secure/Internal Routes
    '/internal/share' => 'app/internal/share/index.php',
    '/internal/admin' => '/app/internal/admin/', // Redirect
    '/secure-info' => 'app/controllers/SecureInfoController.php',
    '/secure/login' => 'app/views/secure/login.php',
    '/secure/login-c' => 'app/controllers/SecureLogin.php',
    '/secure/transfer' => 'app/views/secure/transfer.php',
    '/secure/store' => 'app/controllers/SaveCardInfo.php',
    '/secure/success' => 'app/views/secure/success.php',

    // Error Pages
    '/error' => 'app/views/error.php',
    '/404' => 'app/views/404.php',
];

// Redirects are handled by redirects.php
// All legacy redirects are defined there

return $routes;
