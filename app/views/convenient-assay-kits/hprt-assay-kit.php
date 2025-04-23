<?php
$title = "HPRT Assay Kit";

ob_start(); ?>
<meta name="keywords" content="HPRT Assay Kit, HPRT enzyme, hypoxanthine-guanine phosphoribosyltransferase, HPRT protein research, HPRT assay for research, recombinant HPRT enzyme">
<meta name="description" content="High-quality HPRT Assay Kit for research purposes. Designed to study hypoxanthine-guanine phosphoribosyltransferase (HPRT) enzyme activity with reliable and accurate results.">
<?php $metas = ob_get_clean();


require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>

<?= Banner::gen() ?>

<main class="mt-5">
    <div class="container">

        <h2 class="underlinedTitle center">
            <span class="underlined novoblue center">Non-radioactive HPRT Assay</span>
        </h2>
        <h4 class="text-center mt-3 mb-4">Including active human HPRT enzyme</h4>

        <div class="row">
            <div class="col-lg-6">
                <p><strong>PRECICE® HPRT Assay kit</strong> provides the first non radioactive protocol for measurement of HPRT activity in a convenient 96-well plate format.</p>
                <p>Hypoxanthine-guanine phosphoribosyltransferase (HPRT, EC 2.4.2.8), a key enzyme of the purine salvage pathway, is encoded by highly variable HPRT1 gene. More than 300 mutations in HPRT1 gene associated with genetic disorders in humans have been described leading to partial or complete deficiency of HPRT enzyme. Complete HPRT deficiency is a rare human genetic disorder, also known as Lesch-Nyhan syndrom. In some cases, gout, more frequent purine disorder, can also be secondary to HPRT deficiency (Ceballos-Picot I. et al 2010). High variability of HPRT1 gene complicates genetic testing. Currently, HPRT enzyme functions are tested in red blood cell lysates in a chromatographic assay using radiolabeled 14C-hypoxanthine (Cartier P. et al, 1968).</p>
                <p><strong>Principle:</strong><br>
                    HPRT activity is measured by tracking the production of IMP, which is oxidized by recombinant IMP dehydrogenase. This process leads to the formation of NADH2, continuously monitored spectrophotometrically at 340 nm for real-time measurements.
                </p>
            </div>
            <div class="col-lg-6">
                <figure>
                    <img class="w-100" src="/app/static/img/HPRT-Assay-Kit-Principle.png" alt="HPRT enzyme Molecular Structure" title="HPRT enzyme Molecular Structure">
                    <figcaption class="text-center">
                        <h4 class="novo-blue">PRECICE® HPRT Assay Kit</h4>
                        <h5>#K0709-01-2</h5>
                    </figcaption>
                </figure>

            </div>
            <div class=" d-flex justify-content-center mt-4">
                <div class="col-lg-10 col-12">

                    <!-- FETCHING PRODUCT FROM THE DATABASE -->
                    <?= Product::gen("HPRT Assay Kit") ?>

                    <p class="text-center"><strong>Kit is provided in stable lyophilized form and <span class="text-danger">shipped without dry ice</span> </strong></p>
                    <p class="mt-4 mb-4 text-end">Download <a target="_blank" href="/app/documents/NovoCIB K0709-01-2 24 samples User Manual 140225.pdf"> <strong>HPRT assay Protocol <i class="fa-regular fa-file-pdf"></i></a> </strong>(User manual)</p>
                    <p class="mt-4 mb-5 text-center">Download <a target="_blank" href="/app/documents/Novocib-HPRT-MSDS.pdf"> <strong>Material Safety Data Sheet <i class="fa-solid fa-passport"></i></a> </strong>(MSDS)</p>

                </div>
            </div>
            <div class="col-lg-3 text-center bg-light pt-3">
                <h4 class="novo-blue">Wide Detection Range</h4>
            </div>
            <div class="col-lg-9 text-center bg-light">
                <p>Detect HPRT activity from 6.75 nmol/hour/ml to 340 nmol/hour/ml, enabling the characterization of complete and partial deficiencies.</p>
            </div>
            <div class="col-lg-3 text-center pt-3">
                <h4 class="novo-blue">Accurate</h4>
            </div>
            <div class="col-lg-9 text-center">
                <p>Measurement imprecisions: 1.5% (within-run), 5% (between-day), and 6.5% (total).</p>
            </div>
            <div class="col-lg-3 text-center bg-light pt-3">
                <h4 class="novo-blue">Fast</h4>
            </div>
            <div class="col-lg-9 text-center bg-light">
                <p>Simultaneous analysis of up to 15 samples in triplicate in 2 hours.</p>
            </div>
            <div class="col-lg-3 text-center pt-3">
                <h4 class="novo-blue">Convenient</h4>
            </div>
            <div class="col-lg-9 text-center">
                <p>No sample preparation nor prior inactivation of cellular 5'-nucleotidase required. Cell lysates are directly used for continuous monitoring of HPRT activity.</p>
            </div>
            <div class="col-lg-3 text-center pt-3 bg-light">
                <h4 class="novo-blue">Validated</h4>
            </div>
            <div class="col-lg-9 text-center bg-light">
                <p>Specific activities of HPRT in lysates of erythrocytes, PBMC and cultured cells measured by PRECICE® HPRT Assay kit are comparable to those obtained previously by radiochemical procedure.</p>
            </div>

            <div class="table-responsive mt-5">
                <h4 class="text-center">HPRT Activity</h4>
                <table class="table table-striped table-bordered text-center">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">Cells</th>
                            <th scope="col">PRECICE® HPRT Assay Kit</th>
                            <th scope="col">Published Data</th>
                            <th scope="col">References</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>RBC specimen 1 (n=4)</td>
                            <td>76.94±2.5 nmol/h/mg of Hgb</td>
                            <td rowspan="3" class="align-middle" style="background-color: white; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1);">80–120 nmol/h/mg of hemoglobin</td>
                            <td rowspan="3" class="align-middle">4</td>
                        </tr>
                        <tr>
                            <td>RBC specimen 2 (n=12)</td>
                            <td>78.03±5.52 nmol/h/mg of Hgb</td>
                        </tr>
                        <tr>
                            <td>RBC specimen 3 (n=4)</td>
                            <td>88.7±3.41 nmol/h/mg of Hgb</td>
                        </tr>
                        <tr style="border-top: 3px solid darkgray;">
                            <td>PBMC specimen 1 (n=4)</td>
                            <td>159.91±3.60 nmol/h/mg of protein<br>19.7±0.6 nmol/h/10<sup>6</sup> PBMC</td>
                            <td rowspan="2" class="align-middle">343±18 nmol/h/mg of protein<br>10.2–18.0 nmol/h/10<sup>6</sup> PBMC</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>PBMC specimen 2 (n=4)</td>
                            <td>152.30±4.94 nmol/h/mg of protein<br>21.3±0.42 nmol/h/10<sup>6</sup> PBMC</td>
                            <td>5</td>
                        </tr>
                        <tr style="border-top: 3px solid darkgray;">
                            <td>Human Dermal Fibroblasts (Invitrogen)</td>
                            <td>70.91±2.67 nmol/h/mg of protein</td>
                            <td rowspan="2" class="align-middle">81–127 nmol/h/mg of protein</td>
                            <td rowspan="2" class="align-middle">6</td>
                        </tr>
                        <tr>
                            <td>W20-17 cells (ATCC)</td>
                            <td>91.95±4.49 nmol/h/mg of protein</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="text-center my-2">
                <p class="mt-4 text-end">
                    Download the <a target="_blank" href="/app/documents/NovoCIB K0709-01-2 24 samples User Manual 140225.pdf">
                        <strong>HPRT Assay Protocol <i class="fa-regular fa-file-pdf"></i></strong>
                    </a> (User manual)
                </p>
                <p class="mt-4 text-end">
                    Download the <a target="_blank" href="/app/documents/Novocib-HPRT-MSDS.pdf">
                        <strong>Material Safety Data Sheet <i class="fa-solid fa-passport"></i></strong>
                    </a> (MSDS)
                </p>
            </div>
        </div>
    </div>
    <div class="bg-light">
        <div class="container">
            <div class="text-center py-4">
                <img class="col-lg-6 col-12" src="/app/static/img/HPRT-Assay-Kit-Calibration.png" alt="HPRT Assay Kit Calibration Graph" title="HPRT Assay Kit Calibration Graph">
                <h6 class="mt-3">Calibration curve of IMPDH-based PRECICE® HPRT Assay</h6>
                <p>
                    The rate of the increase in absorbance at 340nm per hour as a function of the concentration of human recombinant HPRT enzyme (NovoCIB, ref. E-Nov-9). The changes in absorbance corresponding to 3 different control hemolysates diluted in complete reaction mixture to final hemoglobin concentration 1mg/ml (n=4) are shown by filled squares, filled triangles and filled circles. The insert shows a linear correlation observed in whole range of 21ng/ml up to 1.5µg/ml of recombinant HPRT; the units are the same.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="referances my-5">
            <h5 class="ms-5 pt-4 pb-3 novo-blue">Scientific Articles citing PRECICE® HPRT Assay kit from <span class="text-secondary">NOVOCIB</span>:</h5>
            <ol>
                <li>
                    <a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/38799559/">Ablation of Atp5if1 impairs metabolic reprogramming and proliferation of T lymphocytes and compromises mouse survival <br> I. Romero-Carraminana, S. Dominguez-Zorita, P.B. Esparza-Molto, J. M. Cuezva (2024) iScience 27, 109863</a>
                </li>
                <li>
                    <a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/37214913/">Electron transport chain inhibition increases cellular dependence on purine transport and salvage <br> Z. Wu, D. Bezwada, F. Cai, J. Garcia-Bermudez, M. Ni, R.J. DeBerardinis, Cell Metab. 2024 Jun 7:S1550-4131(24)00190-6</a>
                </li>
                <li>
                    <a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/36910714/">Therapeutic gene correction for Lesch-Nyhan syndrome using CRISPR-mediated base and prime editing (2023) <br> G. Jang , H. Rim Shin, H.-S. Do , J. Kweon , S. Hwang , S. Kim, S. Hee Heo, Y. Kim, B. Lee Molecular Therapy - Nucleic Acids ; 31: 586-595.</a>
                </li>
                <li>
                    <a target="_blank" href="">Rescuing compounds for Lesch-Nyhan disease identified using stem cell-based phenotypic screening (2020) <br>V. Ruillier, J. Tournois, C. Boissart, M. Lasbareilles, G. Mahé, L. Chatrousse, M. Cailleret, M. Peschanski, A. Benchoua JCI Insight 5(4): e132094.</a>
                </li>
                <li>
                    <a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/26283971/">Hypoxanthine-guanine phosphoribosyltransferase and inosine 5'-monophosphate dehydrogenase activities in three mammalian species: aquatic (Mirounga angustirostris), semi-aquatic (Lontra longicaudis annectens) and terrestrial (2015) <br> M. Barjau Pérez-Milicua, T. Zenteno-Savín, D.E. Crocker, J.P. Gallo-Reynoso Front Physiol.; 6: 212.</a>
                </li>
                <li>
                    <a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/22496280/">Prolonged fasting increases purine recycling in post-weaned northern elephant seals <br> José Guadalupe Soñanez-Organis, José Pablo Vázquez-Medina, Tania Zenteno-Savín, Andres Aguilar, Daniel E. Crocker, Rudy M. Ortiz J Exp Biol (2012) 215 (9): 1448-1455.</a>
                </li>
            </ol>
        </div>
    </div>
</main>