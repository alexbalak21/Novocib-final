<?php
$title = "Human Active Adenosine Kinase Enzyme";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

addContent(Banner::gen());
$content_title = UnderlinedTitle::get("Human Adenosine Kinase (ADK, EC 2.7.1.20)", "novoblue", "right");

ob_start(); ?>
<div class="container mt-5">
    <div class="row">
        <?= $content_title ?>
        <div class="col-lg-6">
            <p>
                <i><strong>Synonyms: </strong>ADK, Adenosine 5'-phosphotransferase</i>
            </p>
            <p>
                <strong class="novo-blue">NOVOCIB</strong>'s human adenosine kinase is
                an active and purified, 345-aa short form(14,2) ADK protein (39kDa)
                cloned by RT-PCR amplification of mRNA extracted from human hepatoma
                cells and expressed in E.coli. The sequence of the cloned ADK (GenBank
                accession number U50196) was confirmed by DNA sequencing (100% identity)
            </p>
            <p class="mt-3 mb-4">
                Adenosine kinase is a ubiquitous enzyme that catalyzes the transfer of
                &gamma;-phosphate from ATP to 5'-hydroxyl of adenosine (AR), an important
                modulator of central nervous system functions and a signal molecule
                involved in hypoxia, inflammation, and nociception. Together with
                adenosine deaminase, adenosine kinase regulates intra- and extracellular
                cellular adenosine concentration. Inhibition of adenosine kinase results
                in a selective increase of local adenosine concentrations and reduced
                seizure susceptibility and nociception in vivo(3). ADK dysfunction is
                involved in several pathologies, including diabetes(13), epilepsy(6), and
                cancer. Consequently, ADK emerges as a rational therapeutic target for
                Drug Discovery, and adenosine-regulating drugs have been extensively
                tested (1) as new analgesic and anti-inflammatory agents(4) to treat
                schizophrenia(7) or to limit brain injury after an ischemic stroke(8).
                The X-ray crystallographic structure of human ADK has been described(9)
                and provides structural basis for rational design and optimisation of new
                ADK inhibitors. <br> In addition, ADK enzyme is responsible for the
                phosphorylation and consequent clinical activity of several
                therapeutically useful nucleosides, including the antiviral drug
                ribavirin(10), immunosuppressive drug mizoribine(11), and anticancer
                C-nucleoside, tiazofurin(12).
            </p>
            <p>
                For rapid evaluation of substrates properties of novel nucleoside
                analogs for human adenosine kinase see our
                <a href="/convenient-assay-kits/adk-phosphorylation-assay-kit">PRECICE® ADK Phosphorylation Assay Kit.</a>
            </p>
            <p>
                For rapid HTS search of novel ADK inhibitors of human adenosine kinase see our
                <a href="/convenient-assay-kits/adk-assay-kit">PRECICE® ADK Assay Kit.</a>
            </p>
        </div>
        <div class="col-lg-6 my-5">
            <div class="text-center">
                <img class="w-100" src="/app/static/img/ADK_Reaction.png" alt="ADK Reaction schema" />
                <h4 class="novo-blue mt-4">Adenosine Kinase</h4>
                <h5 class="mb-5">Ref. #E-Nov5</h5>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <div class="col-lg-10 col-12">
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
                            <td>#E-Nov5-100</td>
                            <td class="text-center"><strong>100 mUnits</strong></td>
                            <td class="price text-center">€ 355.00</td>
                            <td class="text-end pe-3">
                                <a class="btn btn-primary" href="/inquiry?ref=none&amp;product=Adenosine Kinase - 100 mUnits">Inquiry <i class="fa-solid fa-comment"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#E-Nov5-200</td>
                            <td class="text-center"><strong>200 mUnits</strong></td>
                            <td class="price text-center">€ 565.00</td>
                            <td class="text-end pe-3">
                                <a class="btn btn-primary" href="/inquiry?ref=none&amp;product=Adenosine Kinase - 200 mUnits">Inquiry <i class="fa-solid fa-comment"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#E-Nov5-500</td>
                            <td class="text-center"><strong>500 mUnits</strong></td>
                            <td class="price text-center">€ 1420.00</td>
                            <td class="text-end pe-3">
                                <a class="btn btn-primary" href="/inquiry?ref=none&amp;product=Adenosine Kinase - 500 mUnits">Inquiry <i class="fa-solid fa-comment"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h5 class="text-center my-3">Bulk quantity available</h5>
                <p class="text-muted text-center">
                    <em>Pricing updated December 8th, 2023.</em><br />
                </p>
                <p class="text-center">
                    <strong>Kit is provided in stable lyophilized form and
                        <span class="text-danger">shipped without dry ice</span>
                    </strong>
                </p>
                <p class="my-4 text-center">
                    <strong>You can ask us for a quotation
                        <a href="mailto:contact@novocib.com">Here <i class="fa-solid fa-envelopes-bulk"></i></a>
                        or write at
                        <a href="mailto:contact@novocib.com">contact@novocib.com</a></strong>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="bg-light">
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-6 row">
                <div class="col-3">
                    <img class="w-100" src="/app/static/img/AK_Gel.png" alt="AK Gel photo" />
                </div>
                <div class="col-8">
                    <p>
                        <strong>Unit Definition:</strong> One unit of adenosine kinase
                        converts 1.0 µmole of inosine and ATP to IMP and ADP per minute at
                        pH 8 at 37°C, as measured by a coupled IMPDH enzyme system. <br />
                        (see <a href="">ADK Assay Kit</a> for further details)
                    </p>
                    <p><strong>Specific Activity:</strong> ≥ 0.200 unit/mg protein.</p>
                    <p><strong>Purity:</strong> controlled by 12% AA SDS-PAGE.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <p>
                    <strong>Assay condition:</strong> Enzymatic activity of adenosine
                    kinase with particular nucleoside substrate is measured by
                    spectrophotometric assays in a coupled lactate dehydrogenase /
                    pyruvate kinase system. Assays were carried out at 37°C, at 50mM
                    Tris-HCl pH7,6; 50mM KCl, 5mM MgCl2, 2.5mM ATP, 0.1mM NADH, 1mM
                    phosphoenolpyruvate, 1mM DTT, PK 5U/ml, LDH 5U/ml. Reaction was
                    followed in an iEMS Reader MF (Labsystems) microtiter plate reader at
                    340nm. Nucleosides, nucleotides, LDH and PK were purchased from
                    Sigma-Aldrich.
                </p>
                <div class="text-center pb-4">
                    <img class="col-lg-9" src="/app/static/img/AK_Kinetics.png" alt="AK Kinetics Graph" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="referances my-5">
        <h5 class="ms-5 pt-4 pb-3 novo-blue">Scientific Works citing <span class="text-secondary">NOVOCIB</span> Adenosine Kinase and PRECICE® ADK Assay kits:</h5>
        <ol>
            <li>
                <a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/34204594/">M. Orlicka-Płocka, A. Fedoruk-Wyszomirska, D. Gurda-Wozna, P. Pawelczak , P. Krawczyk, M. Giel-Pietraszuk, G. Framski, T. Ostrowski, E. Wyszko Implications of Oxidative Stress in Glioblastoma Multiforme Following Treatment with Purine Derivatives. Antioxidants 2021, 10, 950.</a>
            </li>
            <li>
                <a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/10200156">L.M. Johnson, O.J. Smith, D.A. Hahn, C.F. Baer. Short-term heritable variation overwhelms 200 generations of mutational variance for metabolic traits in Caenorhabditis elegans. Evolution. 2020 Nov;74(11):2451-2464.</a>
            </li>
            <li>
                <a href="https://www.sfn.org/-/media/SfN/Documents/Annual-Meeting/FinalProgram/NS2017/Full-Abstract-PDFs-2017/SFN17_Abstract-PDFs---Posters_4_Tue_AM.pdf">K. DANIELYAN, R. D. VARDANYAN, A. SIMONYAN, A. S. SAGYAN The sole role of PRPS-1 in the regenerative processes after experimental stroke Poster#: 459.07/A7 2017 Neuroscience Meeting Planner.
                    <br> Washington, DC: Society for Neuroscience, 2017.
                </a>
            </li>
            <li>
                <a href="https://pubmed.ncbi.nlm.nih.gov/28504647/">U. Nayar, J. Sadek, J. Reichel, D. Hernandez-Hopkins, G. Akar, P.J. Barelli, M.A. Sahai, H. Zhou, J. Totonchy, D. Jayabalan, R. Niesvizky, I. Guasparri, D. Hassane, Y. Liu, S. Sei, R.H. Shoemaker, J. D. Warren, O. Elemento, K.M. Kaye, E. Cesarman. Identification of a nucleoside analog active against adenosine kinase-expressing plasma cell malignancies. J Clin Invest. 2017 Jun 1;127(6):2066-2080.</a>
            </li>
            <li>
                <a href="https://pubmed.ncbi.nlm.nih.gov/27410258/">K.S. Toti, D. Osborne, A. Ciancetta, D. Boison, K.A. Jacobson. South (S)- and North (N)-Methanocarba-7-Deazaadenosine Analogues as Inhibitors of Human Adenosine Kinase Kiran J. Med. Chem. 2016, 59, 14, 6860-6877.</a>
            </li>
            <li>
                <a href="https://pubmed.ncbi.nlm.nih.gov/21963049/">M.K. Bjursell, H.J. Blom, J.A. Cayuela, M.L. Engvall, N. Lesko, S. Balasubramaniam, G. Brandberg, M. Halldin, M. Falkenberg, C. Jakobs, D. Smith, E. Struys, U. von Döbeln, C. M. Gustafsson, J. Lundeberg, A. Wedell. Adenosine Kinase Deficiency Disrupts the Methionine Cycle and Causes Hypermethioninemia, Encephalopathy, and Abnormal Liver Function. Am J Hum Genet. 2011 Oct 7; 89(4): 507-515.</a>
            </li>
            <li>
                <a href="https://pubmed.ncbi.nlm.nih.gov/21427729/">E. CESARMAN, U. NAYAR, J.D. WARREN, J. SADEK US20190225643A1 Novel nucleoside analogs and use thereof in therapeutic treatment. Patent application filed by Cornell University</a>
            </li>
        </ol>
    </div>
</div>

<?php $page_content = ob_get_clean();


addContent($page_content);
render();
