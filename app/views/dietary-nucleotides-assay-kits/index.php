<?php
$root = $_SERVER['DOCUMENT_ROOT'];

global $title;
$title = "Dietary Nucleotides Assay Kits";

ob_start(); ?>
<meta name="description" content="NovoCIB Dietary Nucleotides Assay Kits">
<meta name="keywords" content="Nucleotides Assay Kits, Dietary Assay Kits">
<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>
<?= Banner::gen("/app/img/nucleotides.webp"); ?>
<section class="container mt-4 mb-5 therapeutic">
    <h2 class="underlinedTitle center"><span class="underlined novoblue center">Dietary Nucleotides Assay Kits</span></h2>
    <div>
        <p class="mt-4 mb-3">Dietary nucleotides play a crucial role in maintaining overall health. Although they can be synthesized through de novo pathways, obtaining them through nutrition provides essential support for various biological processes, including cell growth, repair and proliferation, energy production and others.</p>
        <p class="mb-5">In 1982, L.M. Janas and M.F. Picciano were the first to identify nucleotides as an important part of the non-protein nitrogen fraction of human breast milk. Since then, nucleotide supplementation in infant formula has been introduced in several countries. Later, it was found that adding nucleotides to feed during weaning could be beneficial for young animals, particularly in supporting intestinal health, immune function, and growth performance. </p>
    </div>
    <div class="kit row align-items-center">
        <div class="col-3 me-3 text-center">
            <h5><a href="/dietary-nucleotides-assay-kits/fish-freshness-assay-kit">Fish and seafood <i class="fa-solid fa-up-right-from-square"></i></a></h5>
        </div>
        <div class="col-8">
            <p>
                Fish muscle is very rich in ATP, a nucleotide that provides the energy for muscle contraction. Once a fish is caught and removed from the water, its muscle is deprived of oxygen, leading to rapid ATP degradation. This process results in the sequential formation of three nucleotides-IMP, inosine, and hypoxanthine-which influence both the flavor and nutritional value of seafood.
                <br><br>
                NOVOCIB'S <a href="/freshness-assay-kits/freshness-assay-kit">PRECICE® IMP, Inosine and Hypoxanthine Assay Kit</a> is a colorimetric enzymatic assay designed for the quantitative analysis of three nucleotides formed from ATP degradation: IMP, inosine, and hypoxanthine, in in a single fish extract. Absolute concentrations of three nucleotides expressed as mmol/kg can be used to calculate relative molar concentration of IMP (molar %), an indicator of high fish freshness, or relative molar concentration of hypoxanthine (molar %), an indicator of spoilage or Ki value. The kit is suitable for use with fresh, frozen, and cooked fish and seafood products, including canned items.

            </p>
        </div>
    </div>
    <div class="kit row align-items-center">
        <div class="col-3 me-3 text-center">
            <h5><a href="#" class="pe-none">Fish meal <i class="fa-solid fa-up-right-from-square"></i></a></h5>
        </div>
        <div class="col-8">
            <p>
                Fishmeal, produced through the drying and grinding of fish tissues, remains one of the most nutritionally valuable feed ingredients due to its high-quality protein and nucleotide content. The nucleotides in fish meal, derived from muscle ATP and RNA, support growth, immune function, and metabolism in aquatic species and livestock.
                IMP, direct product of ATP degradation, is a key nucleotide found in fish meal playing a significant role in flavor enhancement and nutritional benefits, serves as a precursor of nucleotides biosynthesis. In aquaculture and livestock feed, fish meal rich in IMP enhances palatability and digestibility. However, the level of IMP in fish meal can vary depending on drying and storage conditions, affecting its quality.
                <br><br>
                NOVOCIB'S <a href="/freshness-assay-kits/freshness-assay-kit">PRECICE® IMP Assay Kit</a> is a colorimetric assay for enzymatic determination of IMP in fishmeal samples.
            </p>
        </div>
    </div>
    <div class="kit row align-items-center">
        <div class="col-3 me-3 text-center">
            <h5><a href="#" class="pe-none">Yeasts <i class="fa-solid fa-up-right-from-square"></i></a></h5>
        </div>
        <div class="col-8">
            <p>
                Yeasts are particularly rich in RNA and are widely used in industry as a source of 5'-nucleotides that naturally enhance food flavor, reducing the need for excessive salt or artificial additives. 5'-GMP and 5'-IMP are powerful taste enhancers, especially in the food industry, contributing to the umami flavor—the savory taste of foods.
                <br><br>
                <a href="/active-purified-enzymes/cnII">PRECICE® 5'AMP and 5'IMP Assay Kit</a> colorimetric assay for enzymatic determination of 5'IMP and 5'AMP in yeast samples.
            </p>
        </div>
    </div>
</section>