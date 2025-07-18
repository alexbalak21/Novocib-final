<?php
global $title;
$title = "Adenosine Kinase Assay Kit";

ob_start(); ?>
<meta name="keywords" content="biochemical assay kits, nucleotide metabolism, drug discovery tools, purine metabolism, nucleoside kinase assays, IMPDH inhibitors, ADK assay, dCK phosphorylation, ITPase assay, phosphatase assay, NOVOCIB">
<meta name="description" content="Explore NOVOCIB's range of convenient biochemical assay kits designed for drug discovery and research in nucleotide metabolism, including tools for purine metabolism disorders, nucleoside kinase activity, and therapeutic target validation.">
<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>
<?= Banner::gen("/app/img/adk-kit.jpg") ?>
<section class="container mt-5">
    <h2 class="underlinedTitle right"><span class="underlined novoblue right">High Throughput Assay for Human Adenosine Kinase</span></h2>
    <div class="row">
        <div class="col-lg-6">
            <p>
                <strong>PRECICE® ADK Assay Kit</strong> provides a convenient, high throughput compatible and non-radioactive assay for in vitro measurement of ADK activity and for Drug Discovery of novel ADK inhibitors. Novel tool for Drug Discovery, this kit allows HTS search of novel ADK inhibitors.
            </p>
            <h4 class="novo-blue">Principle:</h4>
            <p>
                Adenosine kinase uses ATP as the phosphate donor. It transfers the terminal phosphate group of ATP to a substrate, producing ADP as a by-product. The assay is based on the use of inosine as a surrogate ADK substrate and a coupled reaction involving a highly active IMPDH (Inosine Monophosphate Dehydrogenase) for a direct measurement of the inosine monophosphate (IMP) formed by ADK. In the presence of inosine and ATP, ADK catalyses the phosphorylation of inosine to form IMP and ADP. IMP is then immediately oxidized to XMP by a highly active IMPDH in the presence of NAD, leading to NADH2 formation.
            </p>
        </div>
        <div class="col-lg-6 text-center">
            <img class="w-100" src="/app/img/ADK_Assay_Kit_Principle.png" alt="ADK Assay Kit reaction schema" />
            <h4 class="novo-blue">PRECICE® ADK Assay Kit</h4>
            <h5>Ref. #K0507-01</h5>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <div class="col-lg-10 col-12">

                <?= Products::gen("Adk Assay Kit") ?>

                <p class="text-center">
                    <strong>
                        Kit is provided in stable lyophilized form and
                        <span class="text-danger">shipped without dry ice</span>
                    </strong>
                </p>
                <p class="mt-4 mb-5 text-end">
                    Download
                    <a target="_blank" href="/app/documents/NovoCIB K0507-01-User Manual 121217 - one plate.pdf">
                        <strong>In vitro ADK asssay protocol </strong>
                        <i class="fa-regular fa-file-pdf"></i>
                    </a>
                    (User manual)
                </p>
            </div>
        </div>
        <div class="mt-0 mb-4">
            <h4 class="mt-5 pt-4 novo-blue text-center">🔬 Key Features of the Assay Kit</h4>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-3">

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h6 class="mb-2">☑️ Convenient</h6>
                        <ul class="mb-0 ps-3">
                            <li>Non-radioactive</li>
                            <li>Homogenous</li>
                            <li>Continuous absorbance monitoring at 340 nm</li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h6 class="mb-2">📊 Quantitative</h6>
                        <ul class="mb-0 ps-3">
                            <li>IMP transformed into NADH₂ in a quantitative manner</li>
                            <li>Allows accurate kinetic analysis</li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h6 class="mb-2">⚙️ High-Throughput Format</h6>
                        <ul class="mb-0 ps-3">
                            <li>Performed in standard multi-well microplates</li>
                            <li>Compatible with plate readers fitted with 340 nm filter</li>
                            <li>Meets HTS assay standards (Z' factor 0.68)</li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h6 class="mb-2">🔒 Reliable</h6>
                        <ul class="mb-0 ps-3">
                            <li>Validated with ADK inhibitor A-134974</li>
                            <li>Tested with ribavirin, phosphorylated by adenosine kinase</li>
                        </ul>
                    </div>
                </div>

            </div>

            <p class="mt-5 text-center">
                For rapid analysis of in vitro phosphorylation of novel nucleoside analogs for human adenosine kinase, see our
                <a href="/convenient-assay-kits/adk-phosphorylation-assay-kit">
                    PRECICE® ADK Phosphorylation Assay Kit <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
            </p>
        </div>

    </div>


</section>

<section class="bg-light py-3">
    <div class="container">
        <div class="mb-5">
            <h5>ADK role in human body</h5>
            <p>Adenosine kinase is a ubiquitous enzyme regulating intra- and extracellular concentrations of adenosine (AR), an important modulator of central nervous system functions and a signal molecule involved in hypoxia, inflammation and nociception. Together with adenosine demainase, adenosine kinase regulates intra- and extracellular cellular adenosine concentration. Inhibition of adenosine kinase results in selective increase of local adenosine concentrations and reduced seizure susceptibility and nociception in vivo(3). ADK dysfunction is involved in several pathologies, including diabetes(13), epilepsy(6), and cancer. Consequently, ADK emerges as a rational therapeutic target, and adenosine-regulating drugs have been extensively tested (1) as new analgesic and anti-inflammatory agents(4) to treat schizophrenia(7) or to limit brain injury after an ischemic stroke(8).</p>
        </div>
        <div>
            <h5>Validation</h5>
            <p>The use of <strong>PRECICE® ADK Screening Assay Kit</strong> for the screening of ADK inhibitors and IC50 measurements was validated with compound A-134974, a known ADK inhibitor (Sigma-Aldrich, under license from Abbott Laboratories). Z'-Factor was calculated from 44 negative (no ADK inhibition) and positive (inhibition of ADK with 500nM A-134974) and measured as 0.68, which is an excellent level of performance for a screening assay</p>
            <div class="d-flex justify-content-center">
                <figure class="col-lg-7">
                    <img src="/app/img/ADK_Inhibition_Curve.png" alt="ADK Inhibition Curve Graph" class="w-100">
                    <figcaption class="text-center"><strong>ADK Inhibition curve with compound A-134974 at 12 different concentrations.</strong> <br>
                        All data points represent the mean (+/-SD) of 8 wells (2 wells - duplicate - on 4 independent plates). IC50 was determined by fitting a 4-parameter non-linear curve to the data with least-square method. IMPDH activity assays were run to confirm that IMPDH is not inhibited by compound A-134974 (data not shown</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<div class="text-center mt-3">
    <a class="btn btn-primary btn-lg" href="/inquiry?ref=K0507-01.01&amp;product=Adk Assay Kit&amp;volume=1 plate (96 assays)">
        Order <i class="fa-solid fa-cart-arrow-down"></i>
    </a>
</div>

<div class="container">
    <div class="referances mt-4">
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