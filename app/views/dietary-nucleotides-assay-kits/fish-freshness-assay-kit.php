    <?php
    $title = "Fish Freshness Assay Kit";

    // META TAGS 
    ob_start(); ?>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php $metas = ob_get_clean();


    require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
    ?>

    <?= Banner::gen() ?>
    <script src="/app/js/fish-freshness-page.js" defer></script>
    <main class="container mt-5">
        <h2 class="underlinedTitle center"><span class="underlined novoblue">IMP, Inosine and Hypoxanthine Assay Kit</span></h2>
        <div class="row">
            <div class="col-lg-6">
                <p>
                    Fish muscle is particularly rich in ATP, which is a most abundant muscle metabolite after amino acids. Post-mortem transformation of ATP in fish muscle is a well-documented process that has significant implications for food quality and shelf life.
                </p>
                <p style="font-weight: 600;">
                    Post-Mortem ATP Degradation Pathway in Fish Muscle.
                </p>
                <p class="fs-5 fw-bold border text-center">
                    ATP ➜ ADP ➜ AMP ➜&nbsp;<span class="text-primary">IMP<i class="fa-solid fa-arrow-down"></i></span>&nbsp;➜ Inosine ➜ <span class="text-danger">Hypoxanthine<i class="fa-solid fa-arrow-up"></i></span>
                </p>
                <p>
                    The degree to which ATP breaks down into IMP, inosine, and hypoxanthine is a key indicator of fish freshness (Saito et al 1959). Kit is suitable for use with fresh, frozen, and cooked fish and seafood products, including canned fish.
                </p>
            </div>
            <div class="col-lg-6 text-center">
                <img class="w-100" src="/app/static/img/ATP_degradation.jpg" alt="atp degradation schema">
                <h4 class="novo-blue">ATP degradation in FIsh</h4>
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
                            <td>#K0700-003-12</td>
                            <td class="text-center"><strong>For 12 samples (microplate reader)</strong></td>
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
                    <em>Updated on June 2nd, 2025.</em>
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
                    <a target="_blank" href="/app/documents/NovoCIB K0709-02-2 User Manual.pdf">
                        <strong>Fish Freshness Assay Kit</strong>
                        <i class="fa-regular fa-file-pdf"></i>
                    </a>
                    (User manual)
                </p>
            </div>
        </div>
        <div class="my-4">
            <h4 class="">Principle</h4>
            <p>
                <span class="fw-bold">The PRECICE® IMP, Inosine, and Hypoxanthine Assay Kit</span> is a colorimetric enzymatic assay allowing the conversion of measurement of concentration of three nucleotides, formed from ATP: IMP, inosine, and hypoxanthine, in a single sample.
            </p>
            <div class="d-flex justify-content-center text-center">
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
        <hr>

        <div class="mt-5 ms-3 mb-5 row">
            <h3 class="">Kit composition:</h3>
            <div class="col-lg-6 d-flex align-items-center ps-5">
                <ol class="kit-composition">
                    <li>"Reaction Buffer"</li>
                    <li>"Cofactors"</li>
                    <li>Microplate prefilled with lyophilized enzymes sealed.</li>
                </ol>
            </div>
            <div class="col-lg-6 text-center text-lg-">
                <img class="border" style="width: 280px;" src="/app/static/img/freshness-kit.jpg" alt="fish freshness kit composition">
            </div>
        </div>
        <div class="mt-5">
            <h4 class="">Simple:</h4>
            <ol class="ms-4">
                <li>Cook fish in the water, homogenize and clarify by filtration or centrifugation</li>
                <li>Add 200µL to four wells of the same column</li>
                <li>Incubate 30min at 30°C to convert enzymatically IMP, inosine, and hypoxanthine to NADH<sub>2</sub></li>
                <li>4. Read absorbance at 340 nm using a microplate reader.</li>
                <li>Calculate absolute concentrations of each nucleotide or relative molar concentrations directly from absorbance values using formulas:</li>
            </ol>
            <div class="row justify-content-center">
                <p class="text-secondary text-center my-0">Click to display the formula <i class="fa-regular fa-hand-pointer"></i></p>
                <div class="col-lg-9 col-12">
                    <div class="text-center border">
                        <img class="w-100 formula-img" src="/app/static/img/Fish-freshness/HxMolar.jpg" alt="mathematical expression" title="Hx, molar % =((Abs C1-Abs B1))/((Abs D1-Abs A1))=(([Hypoxanthine]))/(([IMP]+[inosine]+[hypoxanthine]))">
                        <i class="fa-solid fa-angle-down"></i>
                        <p class="mt-1 formula">Hx, molar % =((Abs C1-Abs B1))/((Abs D1-Abs A1))=(([Hypoxanthine]))/(([IMP]+[inosine]+[hypoxanthine]))</p>
                    </div>

                    <div class="mt-2 text-center border">
                        <img class="w-100 formula-img" src="/app/static/img/Fish-freshness/ImpMolar.jpg" alt="mathematical expression" title="IMP, molar % =((Abs B1-Abs A1))/((Abs D1-Abs A1))=(([IMP]))/(([IMP]+[inosine]+[hypoxanthine]))">
                        <i class="fa-solid fa-angle-down"></i>
                        <p class="mt-1 formula">IMP, molar % =((Abs B1-Abs A1))/((Abs D1-Abs A1))=(([IMP]))/(([IMP]+[inosine]+[hypoxanthine]))</p>
                    </div>
                    <div class="mt-2 text-center border">
                        <img class="w-100 formula-img" src="/app/static/img/Fish-freshness/KiMolar.jpg" alt="mathematical expression" title="Ki, molar % =((Abs D1-Abs B1))/((Abs D1-Abs A1))=(([inosine]+[hypoxanthine]))/(([IMP]+[inosine]+[hypoxanthine]))">
                        <i class="fa-solid fa-angle-down"></i>
                        <p class="mt-1 formula">Ki, molar % =((Abs D1-Abs B1))/((Abs D1-Abs A1))=(([inosine]+[hypoxanthine]))/(([IMP]+[inosine]+[hypoxanthine]))</p>
                    </div>

                    <div class="mt-2 text-center border">
                        <img class="formula-img" src="/app/static/img/Fish-freshness/H.jpg" alt="mathematical expression of H-value" title="H(%) = (Hx / (IMP + Ino + Hx)) * 100"><br>
                        <i class="fa-solid fa-angle-down"></i>
                        <p class="mt-1 formula">H(%) = (Hx / (IMP + Ino + Hx)) * 100</p>
                    </div>
                    <div class="mt-2 text-center border">
                        <img class="formula-img" src="/app/static/img/Fish-freshness/Fr.jpg" alt="mathematical expression of Fr" title="Fr(%) = (IMP / (IMP + Ino + Hx)) * 100"><br>
                        <i class="fa-solid fa-angle-down"></i>
                        <p class="mt-1 formula">Fr(%) = (IMP / (IMP + Ino + Hx)) * 100</p>
                    </div>
                    <div class="mt-2 mb-5 text-center border">
                        <img class="formula-img" src="/app/static/img/Fish-freshness/Ki.jpg" alt="mathematical expression of Ki" title="Ki(%) = ((Ino + Hx) / (IMP + Ino + Hx)) * 100"><br>
                        <i class="fa-solid fa-angle-down"></i>
                        <p class="mt-1 formula">Ki(%) = ((Ino + Hx) / (IMP + Ino + Hx)) * 100</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mx-auto mb-5">
                <p>
                    Relative molar concentrations of nucleotides (Ki value (Karube et al, 1984) , H-value (Huong et al, 1992) and Fr value (Gill et al. 1987)) are better indicators of fish freshness since they are not influenced by extraction efficiency or variations in muscle ATP between different species (Luong et al, 1992).
                </p>
            </div>


        </div>
    </main>

    <section class="container">
        <div class="referances my-5 row justify-content-center">
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

    <style>
        .arrow {
            display: block;
        }

        .enzymatic-conversion {
            position: relative;
        }

        .conversion {
            display: inline-block;
            background-color: #007bff;
            /* Adjust the color */
            color: white;
            border: 2px solid #004a99;
            /* Dark border */
            border-radius: 10px;
            /* Rounded corners */
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            position: absolute;
            top: 46px;
            width: 84%;
            ;
        }

        .enzymatic-conversion span:not(.arrow):not(.middle) {
            font-size: large;
        }

        .kit-composition {
            font-size: 17px;
        }

        .formula {
            display: none;
        }
    </style>