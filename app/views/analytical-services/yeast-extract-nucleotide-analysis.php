<?php
global $title;
$title = "Yeast Extracts Nucleotides and Nucleic Acids";

// META TAGS 
ob_start(); ?>
<meta name="description" content="NOVOCIB provides HPLC analysis of yeast nucleosides, nucleotides and nucleic acids in yeast extracts">
<meta name="keywords" content="Yeast extract nucleotides, nucleotides analysis, HPLC nucleotide analysis, 5'nucleotides, inosinate, guanosinate, 5'GMP,5'IMP, nucleic acids">
<?php $metas = ob_get_clean();


require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>

<?= Banner::gen("/app/img/analysis4.webp") ?>
<main class="mt-5">
    <!-- TITLE MAIN -->
    <h2 class="underlinedTitle right"><span class="underlined novoblue right">5'Nucleotides and Nucleic Acid Analysis in Yeast Extracts</span></h2>
    <section class="container">
        <div class="row my-5 align-items-center">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="/app/img/yeast.jpg" alt="Yeast cells under microscope" title="Yeast cells under microscope" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-8">
                <p class="mb-3">Yeast extract serves as a highly nutritious and flavorful ingredient in food and feed formulations. Derived from carefully processed yeast cells, it's packed with essential nutrients that make it a valuable addition to various products.</p>

                <h4 class="h5 mt-4 mb-3">Key Nutritional Components:</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> High-quality proteins with complete amino acid profile</li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Essential B vitamins (B1, B2, B3, B5, B6, B9, B12)</li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Minerals including zinc, selenium, and potassium</li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i><b>Nucleotides and nucleic acids (6-12% of dry weight)</b></li>
                </ul>

                <div class="alert alert-info mt-4">
                    <i class="fas fa-lightbulb me-2"></i>
                    <strong>Did you know?</strong> The high RNA content in yeast (6-12% of dry weight) makes it an excellent source for producing 5'-nucleotides like IMP and GMP, which are natural flavor enhancers that can reduce sodium requirements in food products.
                </div>
            </div>
        </div>
    </section>



    <section class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                <div class="border rounded p-2 shadow-sm text-center">
                    <img class="img-fluid" src="/app/img/yeast-rna.jpg" alt="Yeast RNA to nucleotides conversion process" title="From Yeast RNA to Flavorful Nucleotides">
                    <p class="text-muted small mt-2 mb-0 text-center">Figure: Conversion of yeast RNA into flavor-enhancing nucleotides</p>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="pe-lg-4">
                    <h3 class="h4 novo-blue mb-3">The Science Behind 5'-Nucleotides in Yeast</h3>

                    <h4 class="h5 mt-4">Nucleotide Production Process</h4>
                    <p>Yeast RNA undergoes enzymatic hydrolysis to produce four primary 5'-nucleotides:</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-dna text-primary me-2"></i> 5'AMP (Adenosine Monophosphate)</li>
                        <li class="mb-2"><i class="fas fa-dna text-primary me-2"></i> 5'GMP (Guanosine Monophosphate)</li>
                        <li class="mb-2"><i class="fas fa-dna text-primary me-2"></i> 5'UMP (Uridine Monophosphate)</li>
                        <li class="mb-2"><i class="fas fa-dna text-primary me-2"></i> 5'CMP (Cytidine Monophosphate)</li>
                    </ul>

                    <div class="bg-light p-3 rounded mt-4">
                        <h5 class="h6">Flavor Enhancement</h5>
                        <p class="mb-0">For optimal umami taste, 5'AMP is converted to 5'IMP using AMP-deaminase, creating a more balanced and savory flavor profile in yeast extracts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-light">
                            <h3 class="h5 mb-0"><i class="fas fa-flask me-2 text-primary"></i> Our Service of Yeast Extract Nucleotide Analysis</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="py-3 ps-4">REFERENCE</th>
                                            <th class="py-3">SERVICE DETAILS</th>
                                            <th class="text-center py-3">PRICE</th>
                                            <th class="text-end py-3 pe-4">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap ps-4">
                                                <span class="badge bg-primary">#S1200-03</span>
                                            </td>
                                            <td>
                                                <h5 class="h6 mb-2 text-primary">Comprehensive Yeast Extract Analysis</h5>
                                                <p class="small mb-0">
                                                    Our HPLC-UV analysis provides a complete profile of nucleotide content in yeast extracts, including:
                                                </p>
                                                <ul class="small text-muted mb-0 mt-2">
                                                    <li>Free bases and nucleosides</li>
                                                    <li>5'-Nucleotides (5'-NMPs)</li>
                                                    <li>Unhydrolyzed DNA and RNA content</li>
                                                    <li>Nucleotide ratios and composition</li>
                                                </ul>
                                            </td>
                                            <td class="text-nowrap text-center">
                                                <div class="h5 mb-0">€420.00</div>
                                                <div class="text-muted small">per sample</div>
                                            </td>
                                            <td class="text-end pe-4">
                                                <a href="/inquiry?ref=S1200-03&amp;price=420&amp;product=Yeast Extract Nucleotides HPLC-UV analysis" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-envelope me-1"></i> Request Analysis
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <p class="small mb-0">
                                        <i class="fas fa-info-circle text-primary me-1"></i>
                                        Typical turnaround time: 5-7 business days. Bulk order discounts available.
                                    </p>
                                </div>
                                <div class="col-md-4 text-md-end mt-2 mt-md-0">
                                    <a href="/nucleotide-analysis-service" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-book me-1"></i> View Full Service Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h2 class="novo-blue text-center pt-3">Detailed description</h2>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <figure class="position-relative">
                        <figcaption class="text-muted mb-1">Current Chromatogram(s):</figcaption>
                        <figcaption style="color: blue; font-size: 11px; position: absolute; top: 20; left: 45px;">MWD1 A, Sig=254,16 Ref=360,100 (SEPT 2025 \024-P1-A4-RNA-DNA +nuclease proto100'.D)</figcaption>
                        <img src="/app/img/yeast_hplc_graph.png" class="img-fluid border-0" alt="yield of 5'-nucleotides from yeast extract" title="HPLC-UV Chromatogram of Yeast Extract Nucleotide Analysis">
                    </figure>
                </div>
                <div class="col-lg-6 lead">
                    <ul class="list-unstyled">
                        <li><b class="fw-bold">Step 1:</b> Sample solubilization and proteolytic hydrolysis</li>
                        <li><b class="fw-bold">Step 2:</b> Standards preparation for calibration of ion-paired UV-HPLC. Molar concentration of each of 20 standards is confirmed by measuring their absorbance at 249–254 nm.</li>
                        <li><b class="fw-bold">Step 3:</b> Enzymatic hydrolysis of nucleic acids with nucleases to hydrolyze all nucleic acids into 5′NMP and 5′dNMP.</li>
                    </ul>
                </div>

                <div class="col-lg-6 lead">
                    <ul class="list-unstyled">
                        <li><b class="fw-bold">Step 4:</b> Determination of soluble bases, nucleosides and nucleotides before and after RNA and DNA hydrolysis by ion-paired HPLC-UV with simultaneous separation of apolar bases, nucleosides, polar NMP and dNMP in one run.</li>
                        <li><b class="fw-bold">Step 5:</b> As our internal Quality Control, we measure 5’IMP and 5’AMP concentration using independent enzymatic PRECICE® Nucleotide Assay Kit and compare the results of enzymatic assay and HPLC analysis.</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <figure class="position-relative">
                        <figcaption class="text-muted mb-1">Current Chromatogram(s):</figcaption>
                        <figcaption style="color: blue; font-size: 11px; position: absolute; top: 32px; left: 45px;">MWD1 A Sig=254,16 Ref=360,100 (SEPT 2025 0mg_ml T0 (2) Me.D)</figcaption>
                        <figcaption style="color: red; font-size: 11px; position: absolute; top: 48px; left: 45px;">MWD1 A Sig=254,16 Ref=360,100 (SEPT 2025 0mg_ml nuc (2) M.D)</figcaption>
                        <img src="/app/img/yeast_hplc_graph_2.png" class="img-fluid border-0" alt="yield of 5'-nucleotides from yeast extract" title="HPLC-UV Chromatogram of Yeast Extract Nucleotide Analysis">
                    </figure>
                </div>
                <div class="col-lg-6 p-2 mt-3">
                    <figure class="border text-center">
                        <figcaption class="h4 mt-2">IMP content in yeast products: correlation HPLC and enzymatic data</figcaption>
                        <img src="/app/img/IMP_content.png" alt="IMP content in yeast products: correlation HPLC and enzymatic data" title="Correlation of IMP content in yeast products between HPLC and enzymatic data" class="img-fluid">
                        <span class="fw-bold">PRECICE® Enzymatic assay</span>
                    </figure>
                </div>
                <div class="col-lg-6 p-2 mt-3">
                    <figure class="border text-center">
                        <figcaption class="h4 mt-2">AMP content in yeast products: correlation HPLC and enzymatic data</figcaption>
                        <img src="/app/img/AMP_content.png" alt="AMP content in yeast products: correlation HPLC and enzymatic data" title="Correlation of AMP content in yeast products between HPLC and enzymatic data" class="img-fluid">
                        <span class="fw-bold">PRECICE® Enzymatic assay</span>
                    </figure>
                </div>
                <div class="col-lg-8 mx-auto text-center mt-2">
                    <span class="lead"><b class="fw-bold">Step 6:</b> Data analysis, interpretation and storage</span>
                    <p class="lead">Data produced are used to calculate the content of each individual bases, nucleosides and NMP (g/kg or g/100g) or purines content (bases adenine, guanine, xanthine and hypoxanthine) </p>
                </div>
            </div>
        </div>
        <div class="table-responsive container text-center">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Chemical Class</th>
                        <th>g / 100g</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cytosine</td>
                        <td></td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td>Uracil</td>
                        <td>Bases, pyrimidine</td>
                        <td>0.07</td>
                    </tr>
                    <tr class="bg-lightgreen">
                        <td>Guanine</td>
                        <td>Bases, purine</td>
                        <td>0.00</td>
                    </tr>
                    <tr class="bg-lightgreen">
                        <td>Hypoxanthine</td>
                        <td>Bases, purine</td>
                        <td>0.21</td>
                    </tr>
                    <tr class="bg-lightgreen">
                        <td>Adenine</td>
                        <td>Bases, purine</td>
                        <td>0.21</td>
                    </tr>
                    <tr class="bg-lightblue">
                        <td>Cytidine</td>
                        <td>Nucleoside, pyrimidine</td>
                        <td>0.12</td>
                    </tr>
                    <tr class="bg-lightblue">
                        <td>Uridine</td>
                        <td>Nucleoside, pyrimidine</td>
                        <td>0.23</td>
                    </tr>
                    <tr class="bg-blue">
                        <td>Guanosine</td>
                        <td>Nucleoside, purine</td>
                        <td>0.63</td>
                    </tr>
                    <tr class="bg-blue">
                        <td>Inosine</td>
                        <td>Nucleoside, purine</td>
                        <td>0.04</td>
                    </tr>
                    <tr class="bg-blue">
                        <td>Adenosine</td>
                        <td>Nucleoside, purine</td>
                        <td>0.54</td>
                    </tr>
                    <tr class="bg-lightred">
                        <td>Na₂*CMP</td>
                        <td>Nucleotide monophosphate, pyrimidine</td>
                        <td>4.21</td>
                    </tr>
                    <tr class="bg-lightred">
                        <td>Na₂*UMP</td>
                        <td>Nucleotide monophosphate, pyrimidine</td>
                        <td>3.06</td>
                    </tr>
                    <tr class="bg-lightred">
                        <td>Na₂*GMP</td>
                        <td>Nucleotide monophosphate, purine</td>
                        <td>4.17</td>
                    </tr>
                    <tr class="bg-lightred">
                        <td>Na₂*IMP</td>
                        <td>Nucleotide monophosphate, purine</td>
                        <td>0.00</td>
                    </tr>
                    <tr class="bg-lightred">
                        <td>Na₂*AMP</td>
                        <td>Nucleotide monophosphate, purine</td>
                        <td>4.19</td>
                    </tr>
                    <tr class="bg-lightred">
                        <td>Total NMP</td>
                        <td>Soluble Nucleotide Monophosphates</td>
                        <td>15.63</td>
                    </tr>
                    <tr class="bg-lightred">
                        <td>Nucleic acids (RNA)</td>
                        <td>Nucleotides monophosphate
                            Released after nuclease digestion</td>
                        <td>2.83</td>
                    </tr>
                </tbody>
                <tfoot class="bg-lightred">
                    <tr>
                        <td colspan="2"><b>Total NMP</b></td>
                        <td>15.63</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Total potentially available nucleotides (TPAN)</b></td>
                        <td>20.53</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8 text-center">
                    <h2 class="h3 mb-3">Technical Challenges in Yeast Extract Production</h2>
                    <p class="lead">Maintaining optimal 5'-nucleotide levels requires careful control of several critical factors throughout the production process.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-header bg-white border-0 pt-4 px-4 pb-0">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-danger bg-opacity-10 text-danger fs-6 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">1</span>
                                <h3 class="h5 mb-0 ms-3">Enzyme Activity Management</h3>
                            </div>
                        </div>
                        <div class="card-body px-4 pt-0 pb-4">
                            <div class="alert alert-danger bg-white border-danger border-opacity-25" role="alert">
                                <div class="d-flex">
                                    <i class="fas fa-exclamation-triangle mt-1 me-3 text-danger"></i>
                                    <div>
                                        <h4 class="alert-heading h6 mb-1">Critical Issue</h4>
                                        <p class="mb-0 small">Uncontrolled enzyme activity can significantly reduce the quality of flavor-enhancing nucleotides.</p>
                                    </div>
                                </div>
                            </div>

                            <h4 class="h6 mt-4 mb-3">Key Challenges:</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <div class="d-flex">
                                        <i class="fas fa-arrow-right text-danger mt-1 me-2"></i>
                                        <div>
                                            <strong>Phosphatases:</strong> Remove phosphate groups from nucleotides
                                            <p class="small text-muted mb-0">Result: Loss of 5'-nucleotide flavor enhancers</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <div class="d-flex">
                                        <i class="fas fa-arrow-right text-danger mt-1 me-2"></i>
                                        <div>
                                            <strong>5'-Nucleases:</strong> Break down RNA into non-flavor active components
                                            <p class="small text-muted mb-0">Result: Reduced yield of desirable nucleotides</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-header bg-white border-0 pt-4 px-4 pb-0">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-primary bg-opacity-10 text-primary fs-6 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">2</span>
                                <h3 class="h5 mb-0 ms-3">RNA Hydrolysis Optimization</h3>
                            </div>
                        </div>
                        <div class="card-body px-4 pt-0 pb-4">
                            <div class="alert alert-primary bg-white border-primary border-opacity-25" role="alert">
                                <div class="d-flex">
                                    <i class="fas fa-microscope mt-1 me-3 text-primary"></i>
                                    <div>
                                        <h4 class="alert-heading h6 mb-1">Technical Insight</h4>
                                        <p class="mb-0 small">Efficient RNA breakdown is crucial for maximum 5'-nucleotide yield.</p>
                                    </div>
                                </div>
                            </div>

                            <h4 class="h6 mt-4 mb-3">Common Issues:</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <div class="d-flex">
                                        <i class="fas fa-arrow-right text-primary mt-1 me-2"></i>
                                        <div>
                                            <strong>Incomplete Hydrolysis:</strong> Leaves RNA partially broken down
                                            <p class="small text-muted mb-0">Result: Lower yields of target nucleotides</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <div class="d-flex">
                                        <i class="fas fa-arrow-right text-primary mt-1 me-2"></i>
                                        <div>
                                            <strong>Protein-RNA Complexes:</strong> Protect RNA from enzymatic action
                                            <p class="small text-muted mb-0">Result: Inconsistent nucleotide profiles</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-primary border-2">
                        <div class="card-header bg-primary text-white py-3">
                            <h3 class="h5 mb-0"><i class="fas fa-dna me-2"></i> Understanding RNA Co-Purification in Yeast Proteins</h3>
                        </div>
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <h4 class="h5 text-primary mb-3">The RNA Challenge in Yeast Protein Products</h4>
                                    <p class="mb-4">Yeast proteins have emerged as a sustainable, high-quality alternative to traditional animal proteins, offering complete amino acid profiles and excellent nutritional value. However, the production process often results in significant RNA co-purification, especially when using microfiltration techniques.</p>

                                    <div class="alert alert-warning border-warning bg-white">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <i class="fas fa-exclamation-triangle fa-2x text-warning"></i>
                                            </div>
                                            <div>
                                                <h5 class="alert-heading h6 mb-1">Important Health Consideration</h5>
                                                <p class="mb-0 small">Excessive dietary RNA can lead to elevated uric acid levels. The European Food Safety Authority (EFSA) recommends a maximum daily intake of 2 grams of RNA for adults to prevent potential health issues.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 mt-4 mt-lg-0">
                                    <div class="bg-light p-4 rounded-3 h-100">
                                        <div class="text-center mb-3">
                                            <i class="fas fa-microscope fa-3x text-primary mb-3"></i>
                                            <h5 class="h6 mb-3">Comprehensive Nucleotide Analysis</h5>
                                        </div>
                                        <p class="small mb-3">Our advanced HPLC analysis provides detailed insights into your yeast products:</p>
                                        <ul class="fa-ul small mb-4">
                                            <li class="mb-2">
                                                <span class="fa-li"><i class="fas fa-check text-primary"></i></span>
                                                <strong>Complete Profile:</strong> Analysis of all nucleotide species
                                            </li>
                                            <li class="mb-2">
                                                <span class="fa-li"><i class="fas fa-check text-primary"></i></span>
                                                <strong>Precision:</strong> Accurate quantification of RNA/DNA content
                                            </li>
                                            <li class="mb-2">
                                                <span class="fa-li"><i class="fas fa-check text-primary"></i></span>
                                                <strong>Compliance:</strong> Ensure regulatory requirements are met
                                            </li>
                                            <li class="mb-0">
                                                <span class="fa-li"><i class="fas fa-check text-primary"></i></span>
                                                <strong>Quality Control:</strong> Monitor production consistency
                                            </li>
                                        </ul>
                                        <div class="text-center">
                                            <a href="/nucleotide-analysis-service" class="btn btn-outline-primary btn-sm w-100">
                                                <i class="fas fa-chart-line me-1"></i> Explore Analysis Services
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="bg-light p-4 rounded-3">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h5 class="h6 mb-2">Why Choose Our Analysis Services?</h5>
                                                <p class="small mb-0">With years of experience in nucleotide analysis, we provide accurate, reliable results with fast turnaround times and comprehensive reporting to help you optimize your yeast-based products.</p>
                                            </div>
                                            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                                <a href="/contact-us" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-paper-plane me-1"></i> Request a Quote
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>