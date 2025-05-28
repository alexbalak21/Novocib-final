<?php
$root = $_SERVER['DOCUMENT_ROOT'];

$title = "Dietary Nucleotides Assay Kits";

ob_start(); ?>
<meta name="description" content="NovoCIB Dietary Nucleotides Assay Kits">
<meta name="keywords" content="Nucleotides Assay Kits, Dietary Assay Kits">
<?php $metas = ob_get_clean();

require_once $root . "/app/templates/test_template.php";
?>
<?= Banner::gen("/app/static/img/nucleotides.webp"); ?>
<section class="container mt-4 mb-5 therapeutic">
    <h2 class="underlinedTitle center"><span class="underlined novoblue center">Dietary Nucleotides Assay Kits</span></h2>
    <div>
        <p class="mt-4 mb-3">Dietary nucleotides play a crucial role in maintaining overall health. Although they can be synthesized through de novo pathways, obtaining them through nutrition provides essential support for various biological processes, including cell growth, repair and proliferation, energy production and others.</p>
        <p class="mb-5">In 1982, L.M. Janas and M.F. Picciano were the first to identify nucleotides as an important part of the non-protein nitrogen fraction of human breast milk. Since then, nucleotide supplementation in infant formula has been introduced in several countries. Later, it was found that adding nucleotides to feed during weaning could be beneficial for young animals, particularly in supporting intestinal health, immune function, and growth performance. </p>
    </div>
    <div class="kit row align-items-center">
        <div class="col-3 me-3 text-center">
            <h5><a href="">Fish and seafood</a></h5>
        </div>
        <div class="col-8">
            <p>
                Fish muscle is very rich in ATP, a nucleotide that provides the energy for muscle contraction. Once a fish is caught and removed from the water, its muscle is deprived of oxygen, leading to rapid ATP degradation. This process results in the sequential formation of three nucleotides-IMP, inosine, and hypoxanthine-which influence both the flavor and nutritional value of seafood.
            </p>
        </div>
    </div>
    <div class="kit row align-items-center">
        <div class="col-3 me-3 text-center">
            <h5><a href="">Fish meal</a></h5>
        </div>
        <div class="col-8">
            <p>
                Fishmeal, produced through the drying and grinding of fish tissues, remains one of the most nutritionally valuable feed ingredients due to its high-quality protein and nucleotide content. The nucleotides in fish meal, derived from muscle ATP and RNA, support growth, immune function, and metabolism in aquatic species and livestock.
                IMP, direct product of ATP degradation, is a key nucleotide found in fish meal playing a significant role in flavor enhancement and nutritional benefits, serves as a precursor of nucleotides biosynthesis. In aquaculture and livestock feed, fish meal rich in IMP enhances palatability and digestibility. However, the level of IMP in fish meal can vary depending on drying and storage conditions, affecting its quality.
            </p>
        </div>
    </div>
    <div class="kit row align-items-center">
        <div class="col-3 me-3 text-center">
            <h5><a href="">Yeasts</a></h5>
        </div>
        <div class="col-8">
            <p>
                Yeasts are particularly rich in RNA and are widely used in industry as a source of nucleotides. Yeast-based nucleotides naturally enhance food flavor, reducing the need for excessive salt or artificial additives. GMP and IMP are powerful taste enhancers, especially in the food industry, contributing to the umami flavor—the savory taste of foods.
            </p>
        </div>
    </div>
</section>