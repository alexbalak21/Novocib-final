    <?php
    $title = "Fish Freshness Assay Kit";

    // META TAGS 
    ob_start(); ?>
    <meta name="description" content="Ensure accurate seafood quality control with NOVOCIB's PRECICE® Fish Freshness Assay Kit. Quantify IMP, inosine & hypoxanthine to assess fish freshness using enzymatic NADH absorbance assay. Ideal for fresh, frozen & processed seafood." />
    <meta name="author" content="NOVOCIB" />
    <meta name="keywords" content="fish freshness assay, seafood quality control, IMP measurement, inosine, hypoxanthine, NADH absorbance, microplate reader, nucleotide assay, ATP degradation, seafood processing, K-value, fish freshness test" />
    <?php $metas = ob_get_clean();


    require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
    ?>

    <?= Banner::gen() ?>
    <script src="/app/js/fish-freshness-page.js" defer></script>
    <main class="container mt-5">
        <h2 class="underlinedTitle center">
            <span class="underlined novoblue center">PRECICE® IMP, Inosine and Hypoxanthine Assay Kit <br>Spectrophotometric, microplate format</span>
        </h2>
        <h3 class="text-center mt-0">Freshness Test</h3>
        <div class="row">
            <div class="col-lg-6">
                <p>
                    Fish muscle is particularly rich in ATP, which is a most abundant muscle metabolite after amino acids. Post-mortem degradation of ATP in fish muscle is a well-documented process that has significant implications for food quality and shelf life.
                </p>
                <p class="fs-5 border text-center">
                    <span class="fw-bold">ATP</span> ➜ <span class="fs-6">ADP</span> ➜ <span class="fs-6">AMP</span> ➜&nbsp;<span class="text-primary fw-bold">IMP<i class="fa-solid fa-arrow-down"></i></span>&nbsp;➜ inosine ➜ <span class="text-danger fw-bold">hypoxanthine<i class="fa-solid fa-arrow-up"></i></span>
                </p>
                <p>
                    Following slaughter, ATP continues to be hydrolyzed by contracting muscles; however, its resynthesis by mitochondria becomes impossible in the absence of oxygen. Within just a few hours, ATP, ADP, and AMP are enzymatically converted into IMP, which becomes the predominant nucleotide in fresh fish (Wang et al., 1998). During the first few days of storage, IMP levels gradually decline, primarily due to the activity of autolytic enzymes that hydrolyze IMP into inosine. Inosine is subsequently hydrolyzed into hypoxanthine by both autolytic and bacterial enzymes. Since fish muscle lacks xanthine oxidase—an enzyme that converts hypoxanthine into uric acid—these processes lead to the progressive accumulation of hypoxanthine, the final product of ATP degradation in fish. This accumulation has been shown to correlate with spoilage and coincides with the formation of volatile amines in cod (Dalgaard et al., 1993). Although the post-mortem ATP degradation pathway is universal, the rate of IMP degradation and hypoxanthine formation varies considerably among fish species and depends on handling and storage conditions (Surette et al., 1988).
                </p>
                <div class="d-flex justify-content-center text-center mt-4">
                    <div class="row justify-content-center enzymatic-conversion">
                        <div class="col-4" style="width: 150px;">
                            <span>IMP</span><br>
                            <span class="arrow"><img src="/app/static/img/arrow.jpg" alt="arrow down"></span>
                            <span>NADH<sub>2</sub></span>
                        </div>
                        <div class="col-4" style="width: 150px;">
                            <span>Inosine</span><br>
                            <span class="arrow"><img src="/app/static/img/arrow.jpg" alt="arrow down"></span>
                            <span>NADH<sub>2</sub></span>
                        </div>
                        <div class="col-4" style="width: 150px;">
                            <span>Hypoxanthine</span><br>
                            <span class="arrow"><img src="/app/static/img/arrow.jpg" alt="arrow down"></span>
                            <span>NADH<sub>2</sub></span>
                        </div>
                        <div class="text-center conversion">
                            <div><span class="middle">Enzymatic conversion</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img class="w-100" src="/app/static/img/ATP_degradation.jpg" alt="atp degradation schema">
                <h4 class="novo-blue">Post-Mortem ATP Degradation Pathway in Fish Muscle</h4>
            </div>
        </div>
        <div class="mb-4 mt-5">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h4 class="novo-blue">Kit principle:</h4>
                    <p class="mt-2">
                        <b>PRECICE® IMP, Inosine, and Hypoxanthine Assay Kit</b> has been specifically designed in a 96-well plate format to facilitate the measurement of three major ATP catabolites in the same fish sample. The microplate is supplied prefilled with specific enzymes that irreversibly convert three nucleotides - IMP, inosine and hypoxanthine to one common substance - NADH2. After addition of boiled fish extract to microplate well and 30 min incubation, NADH is quantitatively measured at a wavelength of 340nm using microplate reader. These absorbance data can be used to calculate K-value, H-value or other values:
                    </p>
                </div>
                <div class="col-lg-6">
                    <h4 class="mt-md-2 mb-2 text-center novo-blue">Kit specifications:</h4>
                    <div class="col-lg-9 col-sm-10 mx-auto">
                        <table class="table table-striped">
                            <tr>
                                <td>Format:</td>
                                <td>96-well plate</td>
                            </tr>
                            <tr>
                                <td>Tests per kit:</td>
                                <td>6 or 12</td>
                            </tr>
                            <tr>
                                <td>Type:</td>
                                <td>Quantitative</td>
                            </tr>
                            <tr>
                                <td>Method:</td>
                                <td>Enzymatic reaction</td>
                            </tr>
                            <tr>
                                <td>Incubation time:</td>
                                <td>30 min</td>
                            </tr>
                            <tr>
                                <td>Incubation temperature:</td>
                                <td>30°C</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>

        </div>
        <h3 class="novo-blue text-center mt-5">Buy the Kit <i class="fa-solid fa-cart-shopping"></i></h3>
        <div class="d-flex justify-content-center">
            <div class="col-lg-10 col-12">
                <!-- FETCHING PRODUCT FROM THE DATABASE -->
                <table class="table product mb-2">
                    <thead>
                        <tr>
                            <th>#REF</th>
                            <th class="text-center">SIZE</th>
                            <th class="text-center">PRICE</th>
                            <th class="pe-5"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#K0700-003-06</td>
                            <td class="text-center">
                                <b>PRECICE® IMP, Inosine and Hypoxanthine Assay Kit </b><br>
                                For 6 samples (microplate reader)
                            </td>
                            <td class="price text-center">220.00 €</td>
                            <td class="text-end pe-3">
                                <a title="Order" class="btn btn-primary" href="/inquiry?ref=K0700-003-06&amp;product=PRECICE® IMP, Inosine and Hypoxanthine Assay Kit&amp;volume=6 samples (microplate)">
                                    Inquiry
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#K0700-003-12</td>
                            <td class="text-center">
                                <b>PRECICE® IMP, Inosine and Hypoxanthine Assay Kit </b><br>
                                For 12 samples (microplate reader)
                            </td>
                            <td class="price text-center">420.00 €</td>
                            <td class="text-end pe-3">
                                <a title="Order" class="btn btn-primary" href="/inquiry?ref=K0700-003-12&amp;product=PRECICE® IMP, Inosine and Hypoxanthine Assay Kit&amp;volume=12 samples (microplate)">
                                    Inquiry
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-muted text-center">
                    <em>Updated on July 10th, 2025.</em>
                    <br>
                </p>

                <p class="text-center">
                    <strong>
                        Kit is provided in stable lyophilized form and
                        <span class="text-danger">shipped without dry ice</span>
                    </strong>
                </p>
                <p class="mt-4 mb-5 text-end">
                    <i class="fa-solid fa-download"></i>&nbsp;Download
                    <a target="_blank" href="/app/documents/PRECICE Nucleotides Assay Kit K0700-003.pdf">
                        <strong>Fish Freshness Assay Kit</strong>
                        <i class="fa-regular fa-file-pdf"></i>
                    </a>
                    (User manual)
                </p>
            </div>
        </div>

        <div class="mt-5 ms-3 mb-5 row">
            <h3 class="novo-blue">Kit composition:</h3>
            <div class="col-lg-6">
                <ol class="kit-composition">
                    <li>"Reaction Buffer"</li>
                    <li>"Cofactors"</li>
                    <li>Microplate prefilled with lyophilized enzymes sealed.</li>
                </ol>
                <div class="mt-4">
                    <h3 class="novo-blue text-start mb-3">Simple Workflow</h3>
                    <ol class="ms-4">
                        <li><strong>Cook & Clarify:</strong> Boil the fish, then homogenize and clarify by filtration or centrifugation.</li>
                        <li><strong>Sample Loading:</strong> Add <span style="white-space: nowrap;">200&nbsp;µL</span> to four wells in the same column.</li>
                        <li><strong>Incubation:</strong> Incubate for 30 min at 30°C to enzymatically convert IMP, inosine, and hypoxanthine into NADH<sub>2</sub>.</li>
                        <li><strong>Measurement:</strong> Read absorbance at <span style="white-space: nowrap;">340 nm</span> using a microplate reader.</li>
                        <li><strong>Data Analysis:</strong> Calculate absolute or relative molar concentrations from absorbance values using dedicated formulas.</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-">
                <img class="border" style="width: 400px;" src="/app/static/img/Fish-freshness/kit-photo.jpg" alt="fish freshness kit composition">
            </div>
        </div>

        <div class="mt-5 mb-5">
            <h4 class="mt-5 pt-4 novo-blue text-center">🧬 Advantages of the PRECICE® IMP, inosine, hypoxanthine Assay Kit</h4>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-3">

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h6 class="mb-2">📏 Accurate</h6>
                        <ul class="mb-0 ps-3">
                            <li>Wide linearity range</li>
                            <li>Recovery 85–100%</li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h6 class="mb-2">⚡ Fast</h6>
                        <ul class="mb-0 ps-3">
                            <li>Prep time: 5 min (fresh fish) / 20 min (frozen fish)</li>
                            <li>Enzymatic reaction: 30 min</li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h6 class="mb-2">🌍 Wide Application Range</h6>
                        <ul class="mb-0 ps-3">
                            <li>ATP catabolites are universal indicators</li>
                            <li>Thermostable & non-volatile—unlike TVA</li>
                            <li>Detects early spoilage, unlike TVA</li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h6 class="mb-2">🧪 One-Step (Add-and-Measure)</h6>
                        <ul class="mb-0 ps-3">
                            <li>Boil (frozen) or microwave cook (fresh fish)</li>
                            <li>Add clarified extracts to prefilled microwells</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-5">
            <div class="mt-5 mb-5">
                <h3 class="novo-blue">Specificity</h3>
                <p>No interference with other nucleotides 5NMP (AMP, GMP, CMP or UMP), nucleosides (adenosine, guanosine, cytidine or uridine) or heterocyclic bases (adenine, guanine, cytosine or uracyl).</p>
            </div>
            <div class="row">
                <div class="col-lg-4">

                </div>
            </div>

            <div>
                <h3 class="novo-blue">
                    Linearity range:
                </h3>
                <p>
                    For each nucleotide (IMP or hypoxanthine or inosine) the assay is linear between 0.1AU-1.6AU, corresponding to 0.2mmols/Kg to 6mmols/Kg of nucleotide after 20-fold dilution.
                </p>
                <div class="row mb-2">
                    <div class="col-lg-4 col-md-6 mb-1"><img src="/app/static/img/Fish-freshness/LineB.png" alt="Spectrophotometric graph showing absorbance at 340nm for various concentrations of IMP (inosine monophosphate), ranging from 0 to 6 mmol/kg." class="w-100"></div>
                    <div class="col-lg-4 col-md-6 mb-1"><img src="/app/static/img/Fish-freshness/LineC.png" alt="Spectrophotometric graph displaying absorbance at 340nm for hypoxanthine at multiple concentrations, from 0 to 6 mmol/kg." class="w-100"></div>
                    <div class="col-lg-4 col-md-6 mb-1"><img src="/app/static/img/Fish-freshness/LineD.png" alt="Spectrophotometric graph illustrating absorbance at 340nm for inosine, comparing concentrations from 0 to 6 mmol/kg." class="w-100"></div>
                    <p class="text-center mb-5"><b>The reactions were followed at 30°C using PRECICE® microplate (30°C, 200µL per well) and Labsystems iEMS Reader (Thermo).</b></p>
                    <div class="col-lg-4 col-md-6 mb-1"><img src="/app/static/img/Fish-freshness/IMPmmolsPerKg.png" alt="IMP mmols per Kg graph" class="w-100" title="IMP mmols per kg"></div>
                    <div class="col-lg-4 col-md-6 mb-1"><img src="/app/static/img/Fish-freshness/Inosine.png" alt="Inosine, mmols per Kg" class="w-100" title="Inosine, mmols per kg"></div>
                    <div class="col-lg-4 col-md-6 mb-1"><img src="/app/static/img/Fish-freshness/Hypoxanthine.png" alt="Hypoxanthine mmols per Kg graph" class="w-100" title="Hypoxanthine mmols per kg"></div>
                </div>
                <p class="text-center"><b>Calibration curves for IMP, inosine and hypoxanthine obtained using PRECICE® IMP, inosine, and hypoxanthine Assay kit.</b></p>
            </div>
            <div class="mt-5 pt-3 mb-5">
                <h3 class="novo-blue mb-3">Recovery:</h3>
                <h5 class="">IMP, inosine and hypoxanthine recovery obtained with PRECICE® IMP, inosine, and hypoxanthine Assay kit</h5>

                <div class="row row-cols-1 row-cols-md-3 g-4 mt-1">
                    <!-- IMP Table -->
                    <div class="col-md-4 mb-2">
                        <h5 class="text-primary text-center">IMP</h5>
                        <table class="table table-bordered table-sm text-center">
                            <thead class="table-light">
                                <tr>
                                    <th>Added (µmol/g)</th>
                                    <th>Recovered (mmol/kg)</th>
                                    <th>Recovery (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.0</td>
                                    <td>1.025 ± 0.019</td>
                                    <td>103</td>
                                </tr>
                                <tr>
                                    <td>2.0</td>
                                    <td>1.982 ± 0.059</td>
                                    <td>99</td>
                                </tr>
                                <tr>
                                    <td>3.0</td>
                                    <td>2.933 ± 0.042</td>
                                    <td>98</td>
                                </tr>
                                <tr>
                                    <td>3.5</td>
                                    <td>3.369 ± 0.088</td>
                                    <td>96</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Inosine Table -->
                    <div class="col-md-4 mb-2">
                        <h5 class="text-success text-center">Inosine</h5>
                        <table class="table table-bordered table-sm text-center">
                            <thead class="table-light">
                                <tr>
                                    <th>Added (µmol/g)</th>
                                    <th>Recovered (mmol/kg)</th>
                                    <th>Recovery (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.0</td>
                                    <td>1.022 ± 0.043</td>
                                    <td>88</td>
                                </tr>
                                <tr>
                                    <td>2.0</td>
                                    <td>1.960 ± 0.064</td>
                                    <td>85</td>
                                </tr>
                                <tr>
                                    <td>3.0</td>
                                    <td>2.837 ± 0.144</td>
                                    <td>84</td>
                                </tr>
                                <tr>
                                    <td>3.5</td>
                                    <td>2.871 ± 0.114</td>
                                    <td>82</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Hypoxanthine Table -->
                    <div class="col-md-4 mb-2">
                        <h5 class="text-danger text-center">Hypoxanthine</h5>
                        <table class="table table-bordered table-sm text-center">
                            <thead class="table-light">
                                <tr>
                                    <th>Added (µmol/g)</th>
                                    <th>Recovered (mmol/kg)</th>
                                    <th>Recovery (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.0</td>
                                    <td>1.022 ± 0.043</td>
                                    <td>102</td>
                                </tr>
                                <tr>
                                    <td>2.0</td>
                                    <td>1.960 ± 0.064</td>
                                    <td>98</td>
                                </tr>
                                <tr>
                                    <td>3.0</td>
                                    <td>2.837 ± 0.144</td>
                                    <td>95</td>
                                </tr>
                                <tr>
                                    <td>3.5</td>
                                    <td>3.336 ± 0.114</td>
                                    <td>95</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <p class="text-center">Nucleotides-free cod extracts were prepared by the treatment with activated charcoal, supplemented with nucleotides and used for assay.</p>
            </div>
            <div class="mt-5">
                <h4 class="novo-blue">Data Interpretation:</h4>
                <p>Due to significant variations in the absolute concentration of muscular ATP, even among specimens of the same species, the absolute concentration of a single nucleotide (IMP or hypoxanthine) can be hardly used to assess freshness. Several formulas have been proposed to assess the freshness of fish: the Ki value (Karube et al., 1984), the H-value (Huong et al., 1992), and the Fr value (Gill et al., 1987).</p>
            </div>
            <div class=" row justify-content-center">
                <p class="text-secondary text-center mb-3">Click to display the formula &nbsp; <i class="fa-solid fa-arrow-pointer"></i></p>

                <div class="col-lg-9 col-12">
                    <p class="mb-0 text-center">The H-value represents <b>the relative concentration of hypoxanthine</b> compared to the total amount of ATP degradation products-namely, IMP, inosine, and hypoxanthine.</p>
                    <div class="text-center border mb-4">
                        <img class="formula-img" src="/app/static/img/Fish-freshness/H.jpg" alt="mathematical expression of H-value" title="H(%) = (Hx / (IMP + Ino + Hx)) * 100"><br>
                        <i class="fa-solid fa-angle-down"></i>
                        <p class="mt-1 formula">H(%) = (Hx / (IMP + Ino + Hx)) * 100</p>
                    </div>

                    <p class="mb-0 text-center">The Fr value, on the other hand, reflects <b>the relative concentration of IMP</b> in relation to the sum of these same nucleotides.</p>
                    <div class="text-center border mb-4">
                        <img class="formula-img" src="/app/static/img/Fish-freshness/Fr.jpg" alt="mathematical expression of Fr" title="Fr(%) = (IMP / (IMP + Ino + Hx)) * 100"><br>
                        <i class="fa-solid fa-angle-down"></i>
                        <p class="mt-1 formula">Fr(%) = (IMP / (IMP + Ino + Hx)) * 100</p>
                    </div>

                    <p class="mb-0 text-center">The Ki value is <b>the inverse of relative IMP concentration</b> (explanations are shown below).</p>
                    <div class="mb-2 text-center border">
                        <img class="formula-img" src="/app/static/img/Fish-freshness/Ki.jpg" alt="mathematical expression of Ki" title="Ki(%) = ((Ino + Hx) / (IMP + Ino + Hx)) * 100"><br>
                        <i class="fa-solid fa-angle-down"></i>
                        <p class="mt-1 formula">K<sub>i</sub>(%) = ((Ino + Hx) / (IMP + Ino + Hx)) * 100</p>
                    </div>
                    <div class="text-center border">
                        <img class="w-75 formula-img" src="/app/static/img/Fish-freshness/Ino_hx.jpg" alt="mathematical expression" title="[(Ino + Hx) / (IMP + Ino + Hx) × 100] + [IMP / (IMP + Ino + Hx) × 100] = 100%">
                        <br> <i class="fa-solid fa-angle-down"></i>
                        <p class="mt-1 formula">[(Ino + Hx) / (IMP + Ino + Hx) × 100] + [IMP / (IMP + Ino + Hx) × 100] = 100%</p>
                    </div>
                    <div class="mt-2 text-center border mb-4">
                        <img class="w-75 formula-img" src="/app/static/img/Fish-freshness/ki100.jpg" alt="mathematical expression" title="Ki (%) = 100% - [IMP / (IMP + Ino + Hx)] × 100">
                        <br><i class="fa-solid fa-angle-down"></i>
                        <p class="mt-1 formula">K<sub>i</sub>(%) = 100% - [IMP / (IMP + Ino + Hx)] × 100</p>
                    </div>

                    <p class="mb-0 text-center mt-4">K<sub>i</sub> value cannot be applied for the fish species with fast autolytic IMP hydrolysis such as cod (Gadus morhua), whiting (Merlangus merlangus) and pollock (Pollachius virens) since in the absence of IMP, K<sub>i</sub> is 100%.</p>
                    <div class="mb-3 text-center border">
                        <img class="formula-img" src="/app/static/img/Fish-freshness/ki-imp.jpg" alt="mathematical expression of Ki" title="Ki (%) = [(Ino + Hx) / (Ino + Hx)] × 100 = 100%"><br>
                        <i class="fa-solid fa-angle-down"></i>
                        <p class="mt-1 formula">K<sub>i</sub>(%) = [(Ino + Hx) / ( <strike>IMP</strike> + Ino + Hx)] × 100 = 100%</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="mb-5 pb-3">
                    Relative molar concentrations of nucleotides (Ki value (Karube et al, 1984) , H-value (Huong et al, 1992) and Fr value (Gill et al. 1987)) are better indicators of fish freshness since they are not influenced by extraction efficiency or variations in muscle ATP between different species (Luong et al, 1992).
                </p>

            </div>
    </main>

    <section class=" container mt-5">
        <div class="referances mt-5 pt-2 row justify-content-center">
            <h6 class="ps-5"><i>References (with external links to PubMed) </i><i class="novo-blue fa-solid fa-arrow-up-right-from-square"></i></h6>
            <div class="col-2">
                <img class="w-100 pt-3" src="/app/static/img/pubmed.png" alt="pubmed logo">
            </div>
            <div class="col-8">
                <ol>
                    <li><a target="_blank" href="" title="">Saito, T., Aarai, K. and Matsuyoshi, M. (1959) A New Method for Estimating the Freshness of Fish. Bulletin of the Japanese Society of Scientific, 24, 749-750.</a></li>
                    <li><a target="_blank" href="" title="">Peter Howgate (2006) Review of the kinetics of degradation of inosine monophosphate in some species of fish during chilled storage. International Journal of Food Science & Technology (2006), 41(4):341-353</a></li>
                    <li><a target="_blank" href="" title="">Luong JHT, Male KB, Masson C, Nguyen AL. 1992. Hypoxanthine ratio determination in fish extract using capillary electrophoresis and immobilized enzymes. Journal of Food Science 57(1):77-81</a></li>
                    <li><a target="_blank" href="" title="">Watanabe E, Toyama K, Karube I, Matsuoka H, Suzuki S. 1984. Enzyme sensor for hypoxanthine and inosine determination in edible fish. Applied Microbiology and Biotechnology 19(1):18-22</a></li>
                    <li><a target="_blank" href="" title="">Hong H, Regenstein IM, Luo Y. 2017. The importance of ATP-related compounds for the freshness and flavour of post-mortem fish and shellfish muscle: a review. Critical Reviews in Food Science Nutrition 57(9):1787-1798.</a></li>
                </ol>
            </div>
        </div>
    </section>
    <link rel="stylesheet" href="/app/css/fish-freshness.css">
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/get_page_content.php";
    $full_server_path = realpath(__FILE__);



    get_page_content($full_server_path);
    ?>