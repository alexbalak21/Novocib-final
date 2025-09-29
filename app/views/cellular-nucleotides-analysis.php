<?php
global $title;
$title = "Cellular Nucleotides Analysis | NOVOCIB";

ob_start(); ?>
<meta name="keywords" content="cellular nucleotide analysis, nucleotide profiling, HPLC quantification, IMPDH assay, RNR inhibition, antifolate validation, nucleoside analog metabolism, drug mode-of-action, purine pyrimidine profiling, NOVOCIB services">
<meta name="description" content="NOVOCIB's Cellular Nucleotide Analysis service offers validated profiling of 31+ nucleotides using ion-pairing HPLC. Ideal for drug mode-of-action studies and custom biological sample analysis.">

<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>
<?= Banner::gen("/app/img/cells-blue.jpg") ?>

<main class="mt-5">
    <section class="container">
        <h1 class="text-center mb-4">Cellular Nucleotide Analysis Service</h1>
        <div class="alert alert-info mb-4">
            <p class="lead">NOVOCIB's Cellular Nucleotide Analysis service offers precise, validated profiling of over 31 cellular nucleotides to support drug development, mode-of-action studies, and metabolic research. Whether you're targeting IMPDH, RNR, or antifolate pathways, our HPLC-based platform delivers actionable insights from cultured cells, blood, or custom samples.</p>
        </div>
        
        <div class="row mb-4">
            <div class="col-md-4 text-center mb-3">
                <div class="p-3 border rounded h-100">
                    <i class="fas fa-flask fa-3x mb-2 text-primary"></i>
                    <h5>One-Run Analysis</h5>
                    <p>Simultaneous quantification of 31+ nucleotides in a single HPLC run</p>
                </div>
            </div>
            <div class="col-md-4 text-center mb-3">
                <div class="p-3 border rounded h-100">
                    <i class="fas fa-check-circle fa-3x mb-2 text-success"></i>
                    <h5>Validated Methods</h5>
                    <p>Reference inhibitors: MPA, HU, MTX, Ribavirin</p>
                </div>
            </div>
            <div class="col-md-4 text-center mb-3">
                <div class="p-3 border rounded h-100">
                    <i class="fas fa-tasks fa-3x mb-2 text-info"></i>
                    <h5>Custom Solutions</h5>
                    <p>Tailored assays for blood, PBMCs, and food samples</p>
                </div>
            </div>
        </div>
        
        <h2 class="underlinedTitle center mt-5">
            <span class="underlined novoblue center">Validated Assays for Nucleotide Synthesis Inhibition</span>
        </h2>
        <p><strong>Cellular Nucleotide Profiling Service</strong> is an analytical service for measuring nucleotide levels in antimetabolite-treated cells. More than 31 cellular (deoxy-)ribonucleotides (mono-, di-, and triphosphate) are extracted by SPE procedure, separated by ion-paired HPLC system in one run and quantified.</p>


        <div class="table-responsive">
            <table class="nucleotides-table w-100 table table-hover" aria-label="Validated Assays for Nucleotide Synthesis Inhibition">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Assays</th>
                        <th scope="col">
                            <span data-bs-toggle="tooltip" title="Enzymes involved in nucleotide synthesis pathways">Targeted Enzyme(s)</span>
                            <br />
                            <span class="small">/ Nucleotide Synthesis Pathway</span>
                        </th>
                        <th scope="col">Validated Drugs</th>
                    </tr>
                </thead>
            <tbody>
                <tr>
                    <td class="table-side"><a href="">Cellular Assay for IMPDH inhibitors</a></td>
                    <td>
                        Inosine Monophosphate Dehydrogenase
                        <br />
                        (IMPDH)
                    </td>
                    <td>
                        Ribavirin
                        <br />
                        Mycophenolic Acid (MPA)
                    </td>
                </tr>
                <tr>
                    <td class="table-side"><a href="">Cellular Assay for RNR inhibitors</a></td>
                    <td>
                        Ribonucleotide Reductase
                        <br />
                        (RNR)
                    </td>
                    <td>
                        Hydroxyurea (HU)
                        <br />
                        Gemcitabine
                    </td>
                </tr>
                <tr>
                    <td class="table-side"> <a href="">Cellular Assay for Antifolates</a></td>
                    <td>
                        <strong>de novo Purine synthesis:</strong>
                        <br />
                        GAR transformylase, AICAR transformylase
                        <br />
                        Thymidylate Synthase (TS)
                    </td>
                    <td>Methotrexate (MTX)</td>
                </tr>
            </tbody>
        </table>
        <p><strong class="novo-blue">Validated</strong> with antimetabolites (known inhibitors of nucleotide synthesis): MPA, hydroxyurea, methotrexate, ribavirin, mizoribine, leflunomide, gemcitabine. These reference drugs do impact differently on nucleotide metabolism, each showing its own mode of action through a specific nucleotide profile. Any new compound's mode of action is analyzed by establishing its nucleotide profile which is then compared with those obtained with reference drugs.</p>
        <p class="mt-2">Download our brochure <a title="Download our PDF documenattion." href="/app/documents/NovoCIB MOA Studies - Nucleotide Profiling.pdf" style="font-weight:500">"Mode of Action Studies by Nucleotide Profiling" <i class="fa-solid fa-file-pdf"></i></a></p>
    </section>


    <section class="mt-5 container">
        <h2 class="underlinedTitle center" style="margin-bottom: 0">
            <span class="underlined novoblue center">Cellular Nucleotides Profiling - Analytical Service</span>
        </h2>
        <p>To study the effect of nucleoside analogues on the whole spectra of cellular purine and pyrimidine ribo- and deoxyribonucleotides, <strong class="novo-blue">NOVOCIB</strong> has developed an original cell-based analytical approach in which more than 31 (deoxy)ribonucleotides (mono-, di-, triphosphate) and nucleotide co-factors are extracted from cultured cells, separated by ion-pared chromatography and quantified.</p>
        <div class="workflow-steps row align-items-center justify-content-center mt-4 mb-5">
            <div class="step col-lg-2 col-md-4 col-6 text-center mb-4">
                <div class="step-number mb-2 rounded-circle d-inline-flex align-items-center justify-content-center">1</div>
                <img class="img-fluid rounded shadow-sm" src="/app/img/cell-analysis.jpg" alt="Cell treatment">
                <h6 class="mt-2 mb-0 fw-bold">Cell Treatment</h6>
                <p class="small text-muted">Cells are treated with test compounds under controlled conditions</p>
            </div>
            <div class="arrow col-1 d-none d-lg-block text-center">
                <i class="fas fa-arrow-right fa-2x text-muted"></i>
            </div>
            <div class="step col-lg-2 col-md-4 col-6 text-center mb-4">
                <div class="step-number mb-2 rounded-circle d-inline-flex align-items-center justify-content-center">2</div>
                <img class="img-fluid rounded shadow-sm" src="/app/img/hplc-analysis.jpg" alt="Nucleotides extraction">
                <h6 class="mt-2 mb-0 fw-bold">Nucleotide Extraction</h6>
                <p class="small text-muted">Solid-phase extraction (SPE) of nucleotides</p>
            </div>
            <div class="arrow col-1 d-none d-lg-block text-center">
                <i class="fas fa-arrow-right fa-2x text-muted"></i>
            </div>
            <div class="step col-lg-2 col-md-4 col-6 text-center mb-4">
                <div class="step-number mb-2 rounded-circle d-inline-flex align-items-center justify-content-center">3</div>
                <img class="img-fluid rounded shadow-sm" src="/app/img/identifiaction.jpg" alt="Nucleotides identification">
                <h6 class="mt-2 mb-0 fw-bold">HPLC Separation</h6>
                <p class="small text-muted">Ion-pairing HPLC separation of 31+ nucleotides</p>
            </div>
            <div class="arrow col-1 d-none d-lg-block text-center">
                <i class="fas fa-arrow-right fa-2x text-muted"></i>
            </div>
            <div class="step col-lg-2 col-md-4 col-6 text-center mb-4">
                <div class="step-number mb-2 rounded-circle d-inline-flex align-items-center justify-content-center">4</div>
                <img class="img-fluid rounded shadow-sm" src="/app/img/nuclotide-profile.jpg" alt="Nucleotide profile">
                <h6 class="mt-2 mb-0 fw-bold">Data Analysis</h6>
                <p class="small text-muted">Comprehensive nucleotide profiling and reporting</p>
            </div>
            <p class="mt-3">These cellular assays were validated with anti-viral and anti-cancer nucleoside analogues (e.g. ribavirin, gemcitabine) and known anti-metabolites (mycophenolic acid, leflunomide, hydroxyurea, methotrexate).</p>
        </div>
    </section>
    <section class="bg-light mt-4 py-2">


        <div class="container">
            <h2 class="underlinedTitle center" style="margin-bottom: 0">
                <span class="underlined novoblue center">Cellular Assay for IMPDH inhibitors</span>
            </h2>
            <p><strong>Aim:</strong> This Research Contract Service has been specially tailored to validate Inosine Monophosphate Dehydrogenase (IMPDH) inhibition by a given compound in cultured cells. The assay consists in extracting, identifying and quantifying by HPLC the intracellular concentration of guanosine nucleotides (GMP, GDP and GTP) and IMP in cells treated by a compound. This cellular assay was validated with mycophenolic acid (MPA), ribavirin and mizoribin, recognized inhibitors of IMPDH.
                When applied for the study of nucleoside analogues (NA), this assay can also reveal the formation of their mono-, di-, and triphosphate forms, indicating that nucleoside analogues enter the cells and are readily phosphorylated by cellular kinases.</p>
            <p class="text-end my-4"><strong>Know more about <span class="novo-blue">NOVOCIB</span>'S <a href="">Cell-based IMPDH inhibiton assay</a></strong></p>
        </div>
    </section>


    <section class="container mt-4 py-3">
        <h2 class="underlinedTitle center" style="margin-bottom: 0">
            <span class="underlined novoblue center">Cellular Assay for RNR inhibitors</span>
        </h2>

        <p><strong>Aim: </strong>This Research Contract Service has been specially tailored to validate Ribonucleotide Reductase (RNR) inhibition by a given compound in cultured cells. The assay consists in extracting, identifying and quantifying by HPLC the intracellular concentration of deoxynucleotides di- and triphosphate in cells treated by a compound. The assay was validated with hydroxyurea and gemcitabine in HeLa cultured cells.</p>
        <p class="text-end my-4"><strong>Know more about <span class="novo-blue">NOVOCIB</span>'S <a href="">Cell-based RNR inhibiton assay</a></strong></p>
    </section>
    <section class="bg-light mt-4 py-3">
        <div class="container">

            <h2 class="underlinedTitle center" style="margin-bottom: 0">
                <span class="underlined novoblue center">Cellular Assay for Antifolates</span>
            </h2>

            <p><strong>Aim: </strong>This Research Contract Service has been specially tailored to validate inhibition of de novo biosynthesis of purine and pyrimidne nucleotides by a given compound in cultured cells. After incubation of cultured cells with the inhibitor, nucleotides are extracted, separated, identified and quantified by UV-HPLC. The assay was validated with methotrexate in HeLa cultured cells.</p>
            <p class="text-end my-4"><strong>Know more about <span class="novo-blue">NOVOCIB</span>'S <a href="">Cellular assay for Antifolates</a></strong></p>
        </div>
    </section>
    <section class="mt-4 py-3 container">
        <h2 class="underlinedTitle center" style="margin-bottom: 0">
            <span class="underlined novoblue center">Customized Nucleotide Analysis</span>
        </h2>

        <p><span class="novo-blue"> <strong>NOVOCIB</strong></span> has initially developed its expertise in Nucleotide Analysis to study the drug impact on the cell metabolism of nucleotides. The methodology we implemented allows us to extend the application field of NOVOCIB's expertise in nucleotide analysis and to provide nucleoside analysis services for many other purposes such as, for instance, life science or food quality control.</p>

        <p>
            Extracts from cultured cells, blood cells, body fluids are routinely analyzed in our lab but many other materials can be subjected to a feasibility study for nucleotide analysis. Please feel free to contact us for any question.
        </p>

        <div class="alert alert-info">
            <h5><i class="fas fa-flask me-2"></i> Applications</h5>
            <div class="row">
                <div class="col-md-6">
                    <ul class="mb-0">
                        <li>Antiviral drug development</li>
                        <li>Cancer metabolism studies</li>
                        <li>Nucleoside analog pharmacokinetics</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="mb-0">
                        <li>Mode-of-action studies</li>
                        <li>Metabolic pathway analysis</li>
                        <li>Food quality control</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <p><strong>Aims:</strong> Analysis of the Nucleoside and Nucleotide content in biological samples.</p>

        <p>
            The Nucleotide Analysis procedures implemented by NOVOCIB have been specially developed to study the impact of drugs on the cell metabolism of nucleosides and nucleotides by comparison of metabolic profiles of treated vs. untreated cells. However, Nucleotide Analysis can be a major concern for many other purposes and NOVOCIB's know-how can be adapted for the analysis of other materials. Examples of nucleotide analysis are presented in detail on this website: Baby Milk analysis, Fish / Seafood Freshness control... (see the related links above right for further detail).
        </p>

        <p class="">
            The technical presentation of NOVOCIB's Customized Nucleotide Analytical services is presented here through the example of application field for which it has been first developed: analysis of drug-treated and untreated cells. In this case, it enables to:</p>
        <ul style="margin-top:0">
            <li>reveal the metabolic changes due to the drug action, either on the purine or on the pyrimidine pathway,</li>
            <li>identify the metabolites whose levels are modified by the drug treatment,</li>
            <li>trace back to the metabolic step(s) altered by the drug, and to its likely target(s).</li>
        </ul>


        <p class="mt-5"><strong>Cell culture and treatment: </strong> The choice of the cell line and culture conditions has been optimized to get highly reproducible results. Assays are usually done with human hepatoma cell line Huh7. Cells are grown in DMEM supplemented with FCS (5%), glutamine (1mM), sodium pyruvate (1mM) and maintained in exponential phase. Cells are seeded on 10cm-dishes and allowed to adhere overnight. The drug is added next day at the agreed concentration and at a cell confluence of about 50%.
            The following metabolites are routinely analyzed*:</p>
        <div class="d-flex justify-content-center">
            <table class="atp-table">
                <tr>
                    <td>ATP</td>
                    <td>ADP</td>
                    <td>AMP</td>
                    <td>Uridine</td>
                    <td>Hypoxanthine</td>
                </tr>
                <tr>
                    <td>GTP</td>
                    <td>GDP</td>
                    <td>GMP</td>
                    <td>dGTP</td>
                    <td>Tryptophane*</td>
                    <td></td>
                </tr>
                <tr>
                    <td>UTP</td>
                    <td>UDP</td>
                    <td>IMP</td>
                    <td>dATP</td>
                    <td></td>
                </tr>
                <tr>
                    <td>CTP</td>
                    <td>Uracyl</td>
                    <td>CMP</td>
                    <td>dTTP</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Cytidine</td>
                    <td>Guanine</td>
                    <td>Guanosine</td>
                    <td>Adenosine</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <p class="mt-5"><strong>Cultured cell: </strong>Nucleosides and Nucleotides Analysis is usually performed by extraction of ≈107 treated cells, per compound and per concentration tested. Control untreated cells are cultured under the same conditions to provide a reference metabolic profile.</p>
        <p>
            Depending on the cell line or the experimental conditions, a 0.5-1.105 cell-extract can be sufficient to analyze the major metabolites (e.g. ATP, ADPµ).
        </p>
        <p>
            <strong>Blood cells:</strong> Typically, a 200µl-sample of blood is sufficient to analyze the major metabolites in Red Blood Cells (RBC), and a 1ml-sample for Peripheral Blood Mononuclear cells(PBMC). <br>
            If needed, for instance to focus on naturally low-level metabolites, larger samples can be prepared, e.g. up to 108 of cultured cells.
        </p>
        <p><strong>Nucleosides & nucleotides separation and analysis: </strong>The extraction and separation procedures have been optimized and specially developed by NOVOCIB. After a 48h-treatment, nucleosides and nucleotides are extracted; Nucleosides, nucleotides mono-, di-, and triphosphates, deoxynucleotides triphosphates and bases are separated by ion-pairing HPLC (Agilent 1100) with a Zorbax EclipsePlus C18 column and quantified using an Agilent ChemStation software. The resulting values are normalized by cell number. A mixture of 30 authentic standards (Sigma Aldrich, Roth) is run before and after every set of samples analysis.</p>
        <figure class="text-center my-5">
            <figcaption class="w-50 mx-auto"><strong>Figure 1:</strong> Separation by ion-pairing HPLC of a 6.6pmol / 20 µl standard mixture of 30 nucleosides, nucleotide mono-, di-, and triphosphates, deoxynucleotide triphosphates and bases.</figcaption>
            <img style="width:50%" onclick="enlargeImg(this)" src="/app/img/Standards-Spectrum.png" alt="Separation by ion-pairing HPLC">
            <p class="text-muted" style="font-size:18px !important;"><i class="fa-solid fa-hand-pointer"></i> Click to enlarge</p>
        </figure>
        <figure class="text-center my-5">
            <figcaption class="w-50 mx-auto"><strong>Figure 2:</strong> Quantification of intracellular metabolites in Huh-7 non-treated cells.</figcaption>
            <img style="width:50%" onclick="enlargeImg(this)" src="/app/img/HuhSpectrum.png" alt="Quantification of intracellular metabolites in Huh-7 non-treated cells">
            <p class="text-muted" style="font-size:18px !important;"><i class="fa-solid fa-hand-pointer"></i> Click to enlarge</p>
        </figure>
        <div class="d-flex justify-content-center my-4">
            <table class="metabolites col-lg-8 col-12">
                <thead>
                    <tr>
                        <th width="100">Metabolites</th>
                        <th colspan="2">
                            pmol / 10
                            <sup>6</sup>
                            cells *
                        </th>
                        <th width="100">Published data **</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>UMP</td>
                        <td width="75">728.1</td>
                        <td width="75">&#177; 56.8</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>GMP</td>
                        <td>34.4</td>
                        <td>&#177; 4.8</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>IMP</td>
                        <td>72.7</td>
                        <td>&#177; 21.4</td>
                        <td>130</td>
                    </tr>
                    <tr>
                        <td>NAD</td>
                        <td>1,825.1</td>
                        <td>&#177; 155.5</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>UDP-Glu</td>
                        <td>1,113.9</td>
                        <td>&#177; 87.1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>AMP</td>
                        <td>122.7</td>
                        <td>&#177; 12.9</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>UDP</td>
                        <td>1,730.3</td>
                        <td>&#177; 207.1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CTP</td>
                        <td>2,754.5</td>
                        <td>&#177; 165.4</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ADP</td>
                        <td>4,652.4</td>
                        <td>&#177; 609.8</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>UTP</td>
                        <td>2,494.2</td>
                        <td>&#177; 156.1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>GTP</td>
                        <td>1,449.7</td>
                        <td>&#177; 81.4</td>
                        <td>1,540</td>
                    </tr>
                    <tr>
                        <td>ATP</td>
                        <td>6,561.0</td>
                        <td>&#177; 346.0</td>
                        <td>6,580</td>
                    </tr>
                    <tr>
                        <td colspan="4" width="350">
                            * Mean &#177; SD for 5 independent experiments
                            <br />
                            ** J. Balzarini
                            <em>et al.</em>
                            (1993)
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p class="my-5"><strong>Nucleotide profiling:</strong> For every nucleotide and nucleoside metabolite, drug-treated / non-treated cells concentration ratios are calculated and graphically reported. The base line indicates the control level.</p>
        <div class="row justify-content-center my-4">
            <img class="col-lg-2 col-4 h-100" src="/app/img/pubmed-logo.png" alt="PubMed Logo">
            <div class="col-lg-8 col-11">
                <strong>
                    References (Link to PubMed) <br>
                </strong>
                <a href="https://pubmed.ncbi.nlm.nih.gov/7901217/">Eicar (5-ethynyl-1-beta-D-ribofuranosylimidazole-4-carboxamide). A novel potent inhibitor of inosinate dehydrogenase activity and guanylate biosynthesis</a>
            </div>
            <div class="text-center mt-5">
                <a href="/contact" class="btn btn-primary btn-lg me-3">
                    <i class="fas fa-envelope me-2"></i>Request a Quote
                </a>
                <a href="/app/documents/NovoCIB-Customized-Nucleotide-Analysis.pdf" class="btn btn-outline-primary btn-lg">
                    <i class="far fa-file-pdf me-2"></i>Download Full Brochure
                </a>
            </div>

        </div>
    </section>
</main>