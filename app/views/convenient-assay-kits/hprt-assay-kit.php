<?php
$title = "HPRT Assay Kit";

ob_start(); ?>
<meta name="keywords" content="HPRT protein, HPRT Assay Kit, hypoxanthine guanine phosphoribosyl transferase protein">
<meta name="description" content="Purified HPRT Assay Kit from. HPRT Assay Kit can be used for research.">

<?php $metas = ob_get_clean();

require_once "app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen());


ob_start(); ?>
<main class="mt-5">
    <div class="container">

        <h2 class="underlinedTitle center" style="margin-bottom: 0">
            <span class="underlined novoblue center">Non radioactive HPRT assay</span>
        </h2>
        <h4 class="text-center my-3">Including active human HPRT enzyme</h4>

        <div class="row">
            <div class="col-lg-6">
                <p><strong>PRECICE® HPRT Assay kit</strong> provides the first non radioactive protocol for measurement of HPRT activity in a convenient 96-well plate format.</p>
                <p>Hypoxanthine-guanine phosphoribosyltransferase (HPRT, EC 2.4.2.8), a key enzyme of the purine salvage pathway, is encoded by highly variable HPRT1 gene. More than 300 mutations in HPRT1 gene associated with genetic disorders in humans have been described leading to partial or complete deficiency of HPRT enzyme. Complete HPRT deficiency is a rare human genetic disorder, also known as Lesch-Nyhan syndrom. In some cases, gout, more frequent purine disorder, can also be secondary to HPRT deficiency (Ceballos-Picot I. et al 2010). High variability of HPRT1 gene complicates genetic testing. Currently, HPRT enzyme functions are tested in red blood cell lysates in a chromatographic assay using radiolabeled 14C-hypoxanthine (Cartier P. et al, 1968).</p>
                <p><strong>Principle</strong><br>HPRT activity is measured as a rate of production of IMP, which is oxidized by recombinant IMP dehydrogenase with concomitant formation of NADH2. The formation of NADH2 is continuously monitored spectrophotometrically at 340nm.</p>
            </div>
            <div class="col-lg-6">
                <figure>
                    <img class="w-100" src="/app/static/img/HPRT-Assay-Kit-Principle.png" alt="">
                    <figcaption class="text-center">
                        <h4 class="novo-blue">PRECICE® HPRT Assay Kit</h4>
                        <h5>#K0709-01-2</h5>
                    </figcaption>
                </figure>

            </div>
            <div class=" d-flex justify-content-center mt-4">
                <div class="col-lg-10 col-12">
                    <table class="table product mb-2">
                        <thead>
                            <tr>
                                <th>
                                    #REF
                                </th>
                                <th class="text-center">
                                    SIZE
                                </th>
                                <th class="text-center">
                                    PRICE
                                </th>
                                <th class="pe-5"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#K0709-01-2</td>
                                <td class="text-center"> <strong>24 analyses (8 samples in triplicate) with HPRT enzyme**</strong></td>
                                <td class="price text-center">€ 330.00</td>
                                <td class="text-end pe-3"><a class="btn btn-primary" href="/inquiry?ref=K0709-01-2&product=PRECICE® HPRT Assay Kit - 24 analyses - € 330.00">Inquiry</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="text-muted text-center"> <em>* Pricing updated August 28th, 2015. ** As positive control.</em><br></p>
                    <p class="text-center"><strong>Kit is provided in stable lyophilized form and <span class="text-danger">shipped without dry ice</span> </strong></p>
                    <p class="mt-4 mb-5 text-end">Download <a target="_blank" href="/app/documents/NovoCIB K0709-01-2 24 samples User Manual 140225.pdf"> <strong>HPRT assay Protocol <i class="fa-regular fa-file-pdf"></i></a> </strong>(User manual)</p>
                </div>
            </div>
            <div class="col-lg-3 text-center bg-light pt-3">
                <h4 class="novo-blue">Wide linearity range</h4>
            </div>
            <div class="col-lg-9 text-center bg-light">
                <p>The detection of as low as 6.75 nmol/hour/ml up to 340 nmol/hour/ml of HPRT activity enables the characterization of complete and partial deficiencies</p>
            </div>
            <div class="col-lg-3 text-center pt-3">
                <h4 class="novo-blue">Accurate</h4>
            </div>
            <div class="col-lg-9 text-center">
                <p> Within-run, between-day and total measurement imprecisions of assay run in are 1.5%, 5% and 6.5%.</p>
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
            <div class="text-center mt-3">
                <img class="col-lg-8 col-12" src="/app/static/img/hprt-activity.png" alt="">
            </div>
            <div class="text-center my-2">
                <p class="my-2"><a target="_blank" href="https://www.nature.com/nmeth/articles?type=application-note"><i class="fa-solid fa-arrow-up-right-from-square"></i> Find more <strong style="font-size:19px" class="text-dark">nature methods Application Notes</strong></a></p>
                <p>Download our <a target="_blank" href="/app/documents/ANK0709-001v1-110609.pdf">Application Notes <i class="fa-regular fa-file-pdf"></i></a></p>
            </div>
        </div>
    </div>
    <div class="bg-light">
        <div class="container">
            <div class="text-center py-4">
                <img class="col-lg-6 col-12" src="/app/static/img/HPRT-Assay-Kit-Calibration.png" alt="">
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
<?php $page_content = ob_get_clean();


addContent($page_content);
render();
