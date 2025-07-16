<?php
global $title;
$title = "Yeast Extracts Nucleotides and Nucleic Acids";

ob_start(); ?>
<meta name="description" content="NOVOCIB provides HPLC analysis of yeast nucleosides, nucleotides and nucleic acids in yeast extracts">
<meta name="keywords" content="Yeast extract nucleotides, nucleotides analysis, HPLC nucleotide analysis, 5'nucleotides, inosinate, guanosinate, 5'GMP,5'IMP, nucleic acids">
<?php $metas = ob_get_clean();


require_once "app/templates/base.php";

$novoblue = "#4167b1";

addContent(Banner::gen("/app/static/img/analysis4.webp"));
$content_title = UnderlinedTitle::get("Yeast Extracts Enriched in Tasty Nucleotides", "novoblue", "right");


ob_start(); ?>
<main class="container mt-5">
    <?= $content_title ?>
    <div class="row my-5">
        <div class="col-lg-4">
            <img src="/app/static/img/yeast.jpg" alt="yeast picture" title="yeast" class="w-100">
        </div>
        <div class="col-lg-8">
            <p> Yeast extract is a versatile ingredient widely used as nutritious and flavor complement for food and feed formulation. It's derived from yeast cells and contains essential nutrients such as high-quality protein, B vitamins, amino acids, minerals, nucleotides and nucleic acid RNA.</p>
            <p>Yeast cells are naturally abundant in RNA, constituting approximately 6–12% of their dry weight. Such high RNA content makes yeast a valuable raw material for the production of 5'-nucleotides and in particular compounds like inosinate (IMP) and guanylate (GMP), natural flavor enhancers. When combined with other flavor compounds (glutamate or salt), IMP and GMP enhance overall taste perception and reduce the need for salt in food.</p>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-lg-6 d-flex align-items-center">
            <div>
                <h4 class="novo-blue mb-2">Yeast tasty 5'-nucleotides:</h4>
                <p>Typically, using microbial nucleases yeast RNA is hydrolyzed into four 5'-nucleotides (5'AMP, 5'GMP, 5'UMP and 5'CMP). To produce tasty yeast extracts rich in inosinate (5'IMP) and guanylate (5'GMP), yeast extract area treated with microbial AMP-deaminase that converts 5'AMP to 5'IMP.</p>
            </div>
        </div>
        <div class="col-lg-6">
            <img class="w-100" src="/app/static/img/yeast-rna.jpg" alt="yeast rna schema" title="Yeast RNA Schema">
        </div>
    </div>
    <div class="pt-5 mb-5">
        <h5><b>However, several factors can lead to low 5'-nucleotide concentrations in yeast extract and impact its taste properties:</b></h5>
        <ol>
            <li>
                <p><b>Actives phosphatases and 5' nucleases:</b> If phosphatases and 5'nucleases enzymes in yeast extracts are not deactivated prior to RNA hydrolysis, they will remove phosphate groups from nucleotides, resulting in nucleosides lacking flavor-enhancing properties.
                    Yeast phosphatases can be inactivated through heating or by using acidic or alkaline conditions during autolysis step. However, some inactivation methods may result in the formation of non-tasting 2’,3’-nucleotides, while the content of flavorful 5’-nucleotides would remain low.
                </p>
            </li>
            <li>
                <p><b>Incomplete RNA Hydrolysis:</b> When nucleases are used under suboptimal conditions, they may not fully hydrolyze RNA molecules. This incomplete degradation could lead to higher RNA levels and consequently lower 5’-nucleotide concentrations.
                    Certain proteins can bind to RNA molecules, forming protective complexes. These protein-RNA interactions shield the RNA from nucleases, preventing their degradation. As a result, the concentration of 5’-nucleotides may be affected.
                </p>
            </li>
        </ol>
    </div>
    <div class="mb-4">
        <h5><b>RNA co-purified with yeast protein:</b></h5>
        <p class="mb-4">Yeast proteins contain all essential amino acids, are environmentally friendly and offer high bioavailability, making them a promising alternative to animal protein for food applications. However, yeast proteins can be co-purified with significant amounts of polymeric RNA especially when purified using microfiltration. Since excessive RNA intake can lead to the production of uric acid, it is recommended that adults do not exceed a daily RNA ingestion of 2 grams.</p>
        <span class="big-bold lead text-center"><span class="novo-blue">NOVOCIB</span> provides complete analytical HPLC service to characterize full spectra of nucleotides and nucleic acids present in yeast extracts and yeast proteins - from heterocyclic bases, nucleosides, nucleotides to nucleic acids (RNA and DNA).</span>
        <div class="big my-4 text-center"><span class="lead">To know more : </span> <a class="lead" href="/nucleotide-analysis-service">Nucleotide Analysis Service</a></div>
    </div>
    <div class="text-center my-4">
        <h4 class="mt-1 me-3">If you have any further questions or need additional information</h4>
        <a class="btn btn-primary" href="/contact-us"><span class="lead">Contact Us</span></a>
    </div>
</main>
<?php $page_content = ob_get_clean();


addContent($page_content);
render();
