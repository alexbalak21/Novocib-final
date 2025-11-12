<?php
global $title;
$title = "Active Human IMPDH Type 2 Enzyme";

// META TAGS 
ob_start(); ?>
<title>Human IMPDH Type 2 (IMPDH2)</title>
<meta name="description" content="High-purity Human IMPDH Type 2 (IMPDH2) enzyme for research. Characterized for substrate affinity and inhibitor sensitivity. Ideal for drug discovery and cancer research.">
<meta name="keywords" content="Human IMPDH2, IMPDH Type 2, Inosine Monophosphate Dehydrogenase, IMPDH inhibitor screening, mycophenolic acid, ribavirin monophosphate, GTP biosynthesis, cancer research, immunosuppression, enzyme activity assay, E.C.1.1.1.205, drug discovery, NOVOCIB">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.novocib.com/convenient-assay-kits/human-recombinant-impdh">
<meta property="og:title" content="Human IMPDH Type 2 (IMPDH2)">
<meta property="og:description" content="High-purity Human IMPDH Type 2 enzyme for research and drug discovery. Characterized for substrate affinity and inhibitor sensitivity.">
<meta property="og:image" content="https://www.novocib.com/app/img/IMPDH-reaction.png">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Human IMPDH Type 2 (IMPDH2)">
<meta name="twitter:description" content="High-purity Human IMPDH Type 2 enzyme for research and drug discovery. Characterized for substrate affinity and inhibitor sensitivity.">
<meta name="twitter:image" content="https://www.novocib.com/app/img/IMPDH-reaction.png">

<!-- Canonical URL -->
<link rel="canonical" href="https://www.novocib.com/convenient-assay-kits/human-recombinant-impdh" />
<?php $metas = ob_get_clean();


require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
echo Banner::gen();
?>

<section class="container mt-5">
    <h1 class="underlinedTitle right"><span class="underlined novoblue right">Human IMPDH, Type II (IMPDH2)</span></h1>
    <div class="row">
        <div class="col-lg-6">
            <p>
                <strong>Synonyms:</strong>
                inosine 5'-monophosphate dehydrogenase, type 2, IMP dehydrogenase, type II, IMPDH2.
            </p>
            <p>
                Inosine 5'-monophosphate dehydrogenase type 2 (IMPDH 2, E.C.1.1.1.205) is the predominant
                isoform of IMPDH and a validated target to treat a wide range of cancers and infectious
                diseases and to prevent lymphocytes proliferation.
            </p>
            <p>
                <strong class="novo-blue">NOVOCIB's</strong>
                IMPDH 2 has been cloned by RT-PCR amplification of mRNA extracted from human hepatoma cells
                (NP_000875.2, 100% identity) and expressed in E.coli.
            </p>
            <p>
                <strong class="novo-blue">NOVOCIB's</strong>
                purified IMPDH 2 is an active enzyme characterized for its affinity for inosine
                5'-monophosphate and NAD substrates, and its sensitivity to enzyme inhibitors such as
                mycophenolic acid and ribavirine-monophosphate.
            </p>
            <p>
                <strong>Unit Definition:</strong>
                One unit of IMPDH Type II catalyzes the oxydation of 1 µmole of IMP to XMP per minute at pH
                8.8 at 37 µC.
            </p>
            <p>
                <strong>Specific Activity:</strong>
                ≥ 0.050 unit/mg protein.
            </p>
        </div>
        <div class="col-lg-6 text-center">
            <img
                class="w-100"
                src="/app/img/IMPDH-reaction.png"
                alt="Human IMPDH Type 2 enzymatic reaction: IMP + NAD+ → XMP + NADH + H+"
                title="IMPDH Type 2 Catalytic Reaction"
                loading="lazy" />
            <h4 class="novo-blue">Human IMPDH Type 2</h4>
            <h5>Ref. #E-Nov1</h5>
        </div>
        <div class="d-flex justify-content-center mt-4" itemscope itemtype="https://schema.org/Product">
            <meta itemprop="name" content="Human IMPDH Type 2">
            <meta itemprop="description" content="High-purity Human IMPDH Type 2 enzyme for research and drug discovery applications.">
            <div itemprop="brand" itemtype="https://schema.org/Brand" itemscope>
                <meta itemprop="name" content="NOVOCIB">
            </div>
            <div class="col-lg-10 col-12">
                <?= Products::gen("Human IMPDH Type 2") ?>
                <div class="text-center" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                    <p class="mb-2">
                        <strong>Product Code: </strong><span itemprop="sku">E-Nov1</span>
                    </p>
                    <p class="mb-2">
                        <strong>Kit is provided in stable lyophilized form and
                            <span class="text-danger">shipped without dry ice</span></strong>
                    </p>
                    <meta itemprop="priceCurrency" content="USD">
                    <link itemprop="availability" href="https://schema.org/InStock">
                </div>
                <p class="my-4 text-center">
                    <strong>
                        You can ask us for a quotation
                        <a href="mailto:contact@novocib.com">here</a>
                        or write at
                        <a href="mailto:contact@novocib.com">contact@novocib.com</a>
                    </strong>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-3 mt-3">
    <div class="container">
        <p>
            <strong>Assay condition:</strong>
            KH2PO4 0.1M, pH8.8, NAD 250µM, DTT 2.5mM, 2.5mU/ml of human recombinant IMPDH II, Incubation
            at 37µC. Reaction started by adding IMP at 250µM final concentration. NADH formation was
            followed in an iEMS Reader MF (Labsystems) plate reader at 340nm.
        </p>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-4 my-4">
                <img height="400" src="/app/img/IMPDH-Gel.png" alt="SDS-PAGE analysis of purified Human IMPDH Type 2 showing high purity" loading="lazy" />
            </div>
            <div class="col-lg-8 my-4">
                <img height="400" src="/app/img/IMPDH-IC50.png" alt="Dose-response curve showing IMPDH Type 2 inhibition by mycophenolic acid" loading="lazy" />
            </div>
        </div>
        <p class="text-end mt-4">
            <strong>
                Download this Document:
                <a target="_blank" href="/app/documents/NovoCIB E-Nov1.pdf">
                    "NOVOCIB's Human Recombinant IMPDH"
                    <i class="fa-regular fa-file-pdf"></i>
                </a>
            </strong>
        </p>
        <p class="text-end">
            <strong>
                Download this Document:
                <a target="_blank" href="/app/documents/NovoCIB IMPDH Services.pdf">
                    "NOVOCIB - IMPDH Products & Services"
                    <i class="fa-regular fa-file-pdf"></i>
                </a>
            </strong>
        </p>
    </div>
</section>
<section class="container my-5">
    <h3 class="text-center text-primary mb-4">How to measure the activity of IMPDH 2</h3>
    <ol class="list-group list-group-numbered mb-4">
        <li class="list-group-item">Resuspend the content of the tube with lyophilized IMPDH type 2 (50–100 mU) in 200 µL of deionized water.</li>
        <li class="list-group-item">Prepare fresh reaction buffer: 1 mL of 50 mM KH₂PO₄ pH 8.5, 5 mM DTT*, 1 mM IMP*, 36°C.</li>
        <li class="list-group-item">Add 20 µL of IMPDH (or 10 µL for 100 µL) per 1 mL of buffer without NAD*.</li>
        <li class="list-group-item">Add 200 µL of this mixture to 4 wells and preincubate at 36°C for 10 min.</li>
        <li class="list-group-item">To start the reaction, add 5 µL of 40 mM NAD (1 mM final concentration) to 2 wells, leaving 2 others as a blank.</li>
        <li class="list-group-item">Follow the reaction at 340 nm and 25–36°C.</li>
    </ol>
    <p class="text-muted"><em>*For best results, always use freshly prepared solutions of DTT, IMP, and NAD.</em></p>

    <h5 class="mt-5 mb-3 text-center text-secondary">Absorbance at 340 nm (200 µL per well, Corning® 3797 microplate)</h5>
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead class="table-light">
                <tr>
                    <th>Time (min)</th>
                    <th>IMP 1 mM, no NAD</th>
                    <th>IMP 1 mM, no NAD (duplicate)</th>
                    <th>IMP 1 mM + 1 mM NAD</th>
                    <th>IMP 1 mM + 1 mM NAD (duplicate)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0</td>
                    <td>0.118</td>
                    <td>0.116</td>
                    <td>0.167</td>
                    <td>0.165</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>0.118</td>
                    <td>0.116</td>
                    <td>0.205</td>
                    <td>0.203</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>0.119</td>
                    <td>0.117</td>
                    <td>0.244</td>
                    <td>0.240</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>0.120</td>
                    <td>0.116</td>
                    <td>0.283</td>
                    <td>0.278</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>0.121</td>
                    <td>0.116</td>
                    <td>0.322</td>
                    <td>0.316</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>0.121</td>
                    <td>0.116</td>
                    <td>0.362</td>
                    <td>0.354</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>0.121</td>
                    <td>0.116</td>
                    <td>0.401</td>
                    <td>0.392</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>0.122</td>
                    <td>0.116</td>
                    <td>0.440</td>
                    <td>0.430</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h5 class="mt-4">Calculated Slopes (AU/min)</h5>
    <ul class="list-group mb-3">
        <li class="list-group-item">IMP 1 mM, no NAD: 0.0006</li>
        <li class="list-group-item">IMP 1 mM, no NAD (duplicate): 0</li>
        <li class="list-group-item">IMP 1 mM + 1 mM NAD: 0.0391</li>
        <li class="list-group-item">IMP 1 mM + 1 mM NAD (duplicate): 0.0378</li>
    </ul>

    <h5>Slope Mean (AU/min)</h5>
    <ul class="list-group mb-3">
        <li class="list-group-item">IMP 1 mM, no NAD: 0.0003</li>
        <li class="list-group-item">IMP 1 mM + 1 mM NAD: 0.0385</li>
    </ul>

    <h5>Slope After Blank Subtraction</h5>
    <p class="mb-3">AU/min: <strong>0.0382</strong></p>

    <h5>Enzyme Activity Calculations</h5>
    <ul class="list-group">
        <li class="list-group-item">Activity in well (U/mL): 0.00796</li>
        <li class="list-group-item">Dilution factor (20 µL per 1 mL): ×50</li>
        <li class="list-group-item">Activity of enzyme solution (U/mL): <strong>0.398</strong></li>
        <li class="list-group-item">Amount of enzyme per tube (Units): <strong>0.080</strong></li>
    </ul>

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="container my-5">
        <h5 class="text-center text-secondary mb-4">Kinetics of NADH Formation</h5>
        <canvas id="nadGraph" width="600" height="400"></canvas>
    </div>

    <script>
        const ctx = document.getElementById('nadGraph').getContext('2d');
        const nadGraph = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [0, 1, 2, 3, 4, 5, 6, 7],
                datasets: [{
                        label: 'IMP 1mM, no NAD',
                        data: [0.118, 0.118, 0.119, 0.120, 0.121, 0.121, 0.121, 0.122],
                        borderColor: 'blue',
                        fill: false
                    },
                    {
                        label: 'IMP 1mM, no NAD (duplicate)',
                        data: [0.116, 0.116, 0.117, 0.116, 0.116, 0.116, 0.116, 0.116],
                        borderColor: 'orange',
                        fill: false
                    },
                    {
                        label: 'IMP 1mM + 1mM NAD',
                        data: [0.167, 0.205, 0.244, 0.280, 0.322, 0.362, 0.401, 0.440],
                        borderColor: 'gray',
                        fill: false
                    },
                    {
                        label: 'IMP 1mM + 1mM NAD (duplicate)',
                        data: [0.165, 0.203, 0.241, 0.276, 0.316, 0.354, 0.392, 0.430],
                        borderColor: 'gold',
                        fill: false
                    }
                ]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Time (min)'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Absorbance at 340 nm'
                        }
                    }
                }
            }
        });
    </script>

</section>

<section class="bg-white py-4">
    <div class="container">
        <h2 class="novo-blue mb-4 text-center">IMPDH - A Key Target for Therapeutic Applications</h2>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h3 class="h5 card-title">Key Features:</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> High-purity human recombinant IMPDH Type 2</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Fully characterized enzyme activity</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Validated for inhibitor screening</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Suitable for cancer and immunology research</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert alert-info">
            <h4 class="alert-heading">Research Applications</h4>
            <p class="mb-0">Our IMPDH Type 2 is ideal for: drug discovery, cancer research, immunology studies, enzyme kinetics, and high-throughput screening of potential inhibitors.</p>
        </div>

        <div class="my-5 text-center">
            <a target="_blank" href="/analytical-services/cellular-nucleotides-analysis" class="btn btn-primary btn-lg">
                <img src="/app/img/icons/custom_cell.svg" class="icon" alt="Cell icon">
                Cellular Nucleotides Analysis
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>

        </div>

        <p class="mt-4">
            <strong>Synonyms:</strong>
            inosine 5'-monophosphate dehydrogenase, IMP dehydrogenase, IMPDH2, IMP (inosine monophosphate) dehydrogenase 2
        </p>
        <p>
            <strong>Catalytic activity</strong>
            <br />
            Inosine Monophosphate Dehydrogenase (IMPDH) converts inosine 5µ-monophosphate (IMP) to
            xanthosine 5µ-monophosphate (XMP) using NAD+ as a cofactor.
        </p>
        <div class="d-flex justify-content-center">
            <img class="col-lg-7" src="/app/img/IMPDH-reaction.png" alt="" />
        </div>
        <p>
            The oxidation of IMP to XMP is considered as the pivotal step in the biosynthesis of guanine
            nucleotide, whose pool controls cell proliferation and many other major cellular processes(1).
            The decrease in guanine nucleotide resulting from IMPDH inhibition interrupts the nucleic acid
            synthesis in proliferating cells. The involvement of IMPDH in de novo guanine nucleotide
            biosynthesis makes IMPDH a crucial enzyme in cell proliferation and differentiation(2). IMPDH
            is recognized as a validated target for several major therapeutic areas. IMPDH inhibitors are
            exploited as antiviral (e.g. ribavirine), antiparasitic, antimicrobial, antileukemic, and
            immunosuppressive agents(2). IMPDH Type II is the predominant isoform of the enzyme and is
            selectively expressed in proliferating cells, including lymphocytes and tumor cells(2).
        </p>

        <h6 class="mt-3">IMPDH in immunology</h6>
        <p>
            IMPDH is highly active in lymphocytes. It is a validated target to treat immunological
            diseases and to induce immunosuppression (CellCept®, a mycophenolic acid (MPA) prodrug - Roche
            µ CHF1.85 Bn as an immunosuppressive agent in 2006, orphan drug designation in 2006 for
            Myasthenia Gravis; CellCept® reached positive results in Phase III trials in Lupus Nephritis).
            IMPDH is also recognized as an excellent target for the treatment of psoriasis, rheumatoid
            arthritis (RA), and systemic lupus erythematosus (SLE)(3).
        </p>
        <h6 class="mt-3">IMPDH in oncology</h6>
        <p>
            IMPDH, and particularly Type II, which is overexpressed in tumor cells, is considered as a
            highly potent target for cancer chemotherapy(1, 2, 4, 5). Several IMPDH inhibitors are under
            development for the treatment of Acute and Chronic Myelogenous Leukemia (AML, CML)(6), and
            other cancers (pancreas, colon, bladderï¿½). Additionally, it has been shown that the use of
            IMPDH inhibitors counteracts the drug resistance(7) that may appear in certain tumors. For
            instance, methotrexate resistance is directly related to the overexpression of IMPDH, whose
            inhibition restores the drug efficacy(8). Combination with other anti-cancer drugs extends the
            potential application of IMPDH inhibitors.
        </p>
        <h6 class="mt-3">Current development of IMPDH inhibitors</h6>
        <p>
            CellCept®, ribavirin, mizoribine, and tiazofurine are examples of currently used drugs that
            target IMPDH. Benzamide riboside, tiazofurine, and MPA are under development in Phase II/III
            in leukemia: results are judged very encouraging(8). The IMPDH II atomic structure has been
            resolved and it provides a valuable background for further leads optimization(9). Besides
            nucleosides analogues, NCEs have been identified as IMPDH inhibitors(10, 11, 12, 13, 14) and
            enter development trials (e.g. AVN-944: Phase I in advanced hematologic malignancies, Phase II
            in pancreatic and other solid tumors). All this demonstrates how promising new IMPDH
            inhibitors could be and why the inhibiting activity of compounds is worth being evaluated on
            such a highly pertinent target.
        </p>
    </div>
    <div class="container">
        <div class="row justify-content-evenly">
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">AVN-944</figcaption>
                <img class="w-100" src="/app/img/AVN-944.png" alt="AVN-944 Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">VX-148</figcaption>
                <img class="w-100" src="/app/img/VX-148.png" alt="AVN-944 Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">VX-497</figcaption>
                <img class="w-100" src="/app/img/VX-497.png" alt="VX-497 Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">MPA (mycophenolic acid)</figcaption>
                <img class="w-100" src="/app/img/MPA.png" alt="MPA Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">CellCept®</figcaption>
                <img class="w-100" src="/app/img/MMF.png" alt="MMF Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">BMS-337197</figcaption>
                <img class="w-100" src="/app/img/BMS-337197.png" alt="BMS-337197 Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">Tiazofurin</figcaption>
                <img class="w-100" src="/app/img/tiazofurin.png" alt="Tiazofurin Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">CellCept®</figcaption>
                <img class="w-100" src="/app/img/ribavirine.png" alt="Ribavirine Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">Mizoribine</figcaption>
                <img class="w-100" src="/app/img/mizoribine.png" alt="Mizoribine Structure" />
            </figure>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="referances row justify-content-center">
        <h6 class="ps-5 pt-3"><i>References (with external links to PubMed) </i><i class="novo-blue fa-solid fa-arrow-up-right-from-square"></i></h6>
        <div class="col-2">
            <img class="w-100 pt-3" src="/app/img/pubmed.png" alt="pubmed logo">
        </div>
        <div class="col-8">
            <ol>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/16919497" title="Go to PubMed">L. Hedstrom and L. Gan (2006): IMP dehydrogenase: structural schizophrenia and an unusual base <em>Curr. Opin. Chem. Biol.</em> 10(5), 520-525</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/11668509" title="Go to PubMed">B. J. Barnes <em>et al.</em> (2001): Mechanism of action of the antitumor agents 6-benzoyl-3,3-disubstituted-1,5-diazabicyclo[3.1.0]hexane-2,4-diones: Potent inhibitors of human type II inosine 5'-monophosphate dehydrogenase <em>Int. J. Cancer.</em> 94(2), 275-281</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/16483769" title="Go to PubMed">R. E. Beevers <em>et al.</em> (2006): Low molecular weight indole fragments as IMPDH inhibitors <em>Bioorg. Med. Chem. Lett.</em> 16(9), 2535-2538</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/17659481" title="Go to PubMed">L. Chen and K. W. Pankiewicz (2007): Recent development of IMP dehydrogenase inhibitors for the treatment of cancer <em>Curr. Opin. Drug Discov. Devel.</em> 10(4):403-12</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/11454943" title="Go to PubMed">B. J. Barnes <em>et al.</em> (2001): Induction of Tmolt4 Leukemia Cell Death by 3,3-Disubstituted-6,6-pentamethylene-1,5-diazabicyclo[3.1.0]hexane-2,4-diones: Specificity for Type II Inosine 5'-Monophosphate Dehydrogenase <em>J. Pharm. Exp. Therap.</em> 298(2), 790-796</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/15380335" title="Go to PubMed">K. Malek <em>et al.</em> (2004): Effects of the IMP-dehydrogenase inhibitor, Tiazofurin, in bcr-abl positive acute myelogenous leukemia <em>Leukemia Research</em> 28, 1125-1136</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/16609701" title="Go to PubMed">L. Hong <em>et al.</em> (2006): ZNRD1 mediates resistance of gastric cancer cells to methotrexate by regulation of IMPDH2 and Bcl-2 <em>Biochem. Cell Biol.</em> 84(2): 199-206</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/15670151" title="Go to PubMed">S. Peñuelas <em>et al.</em> (2005): Modulation of IMPDH2, survivin, topoisomerase I and vimentin increases sensitivity to methotrexate in HT29 human colon cancer cells <em>FEBS</em> 272, 696-710</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/10097070" title="Go to PubMed">T. D. Colby <em>et al.</em> (1999): Crystal structure of human type II inosine monophosphate dehydrogenase: implications for ligand binding and drug design <em>PNAS</em>, 96(7), 3531-3536</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/12781195" title="Go to PubMed">E. J. Iwanowicz <em>et al.</em> (2003): Inhibitors of inosine monophosphate dehydrogenase: SARs about the N-[3-Methoxy-4-(5-oxazolyl)phenyl moiety <em>Bioorg. Med. Chem. Lett.</em> 13(12), 2059-2063 </a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/12183689" title="Go to PubMed">J. Jain <em>et al.</em> (2002): Characterization of pharmacological efficacy of VX-148, a new potent immunosuppressive inosine 5'-monophosphate dehydrogenase inhibitor <em>J. Pharm. Exp. Therap.</em> 302(3), 1272-1277</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/14757177" title="Go to PubMed">J. Jain <em>et al.</em> (2004): Regulation of inosine monophosphate dehydrogenase type I and type II isoforms in human lymphocytes <em>Biochem. Pharmacol.</em> 67(4), 767-776</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/15664851" title="Go to PubMed">G. M. Buckley <em>et al.</em> (2005): Quinazolinethiones and quinazolinediones, novel inhibitors of inosine monophosphate dehydrogenase: synthesis and initial structure-activity relationships <em>Bioorg. Med. Chem. Lett.</em> 15(3), 751-754</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/14505670" title="Go to PubMed">T. G. Murali Dhar <em>et al.</em> (2003): 3-Cyanoindole-Based Inhibitors of Inosine Monophosphate Dehydrogenase: Synthesis and Initial Structure-Activity Relationships <em>Bioorg. Med. Chem. Lett.</em> 13(20), 3557-3560</a></li>
            </ol>
        </div>
    </div>
</section>