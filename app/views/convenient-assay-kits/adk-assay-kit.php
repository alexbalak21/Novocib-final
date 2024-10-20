<?php
$title = "Adenosine Kinase Assay Kit - ADK Assay Kit";
require_once "app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen());
$content_title = UnderlinedTitle::get("High Throughput Assay for Human Adenosine Kinase", "novoblue", "right");


ob_start(); ?>
<section class="container mt-5">
    <?= $content_title ?>
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
            <img class="w-100" src="/app/static/img/ADK_Assay_Kit_Principle.png" alt="ADK Assay Kit reaction schema" />
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
        <div class="row">
            <h2 class="novo-blue mb-3 text-center">Key Features</h2>
            <div class="col-lg-3 text-center bg-light pt-3">
                <h4 class="novo-blue">Convenient</h4>
            </div>
            <div class="col-lg-9 bg-light d-flex justify-content-center">
                <ul>
                    <li>Non-radioactive</li>
                    <li>Homogenous</li>
                    <li>Continuous absorbance monitoring at 340nm</li>
                </ul>
            </div>
            <div class="col-lg-3 text-center pt-3">
                <h4 class="novo-blue">Quantitative</h4>
            </div>
            <div class="col-lg-9 d-flex justify-content-center">
                <ul class="py-3">
                    <li>The IMP is immediately transformed into NADH2 in a quantitative manner allowing for accurate kinetic analysis</li>
                </ul>
            </div>
            <div class="col-lg-3 text-center bg-light pt-3">
                <h4 class="novo-blue">High-Throughput Format</h4>
            </div>
            <div class="col-lg-9 bg-light d-flex justify-content-center">
                <ul>
                    <li>The assay is performed in standard multi-well microplates</li>
                    <li>Utilizes commun plate reader fitted with 340nm filter</li>
                    <li>Meets the requirements of a HTS assay (Z' factor 0.68)</li>
                </ul>
            </div>
            <div class="col-lg-3 text-center pt-3">
                <h4 class="novo-blue">Reliable</h4>
            </div>
            <div class="col-lg-9 d-flex justify-content-center">
                <ul class="py-3">
                    <li>Validated with known ADK inhibitor A-134974 and nucleoside analog ribavirin known to be phosphorylated by adenosine kinase</li>
                </ul>
            </div>
            <p class="my-5 text-center">For rapid analysis of in vitro phosphorylation of novel nucleoside analogs for human adenosine kinase see our <a href="/convenient-assay-kits/adk-phosphorylation-assay-kit">PRECICE® ADK Phosphorylation Assay Kit. <i class="fa-solid fa-arrow-up-right-from-square"></i></a></p>
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
                    <img src="/app/static/img/ADK_Inhibition_Curve.png" alt="ADK Inhibition Curve Graph" class="w-100">
                    <figcaption class="text-center"><strong>ADK Inhibition curve with compound A-134974 at 12 different concentrations.</strong> <br>
                        All data points represent the mean (+/-SD) of 8 wells (2 wells - duplicate - on 4 independent plates). IC50 was determined by fitting a 4-parameter non-linear curve to the data with least-square method. IMPDH activity assays were run to confirm that IMPDH is not inhibited by compound A-134974 (data not shown</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>
<?= References::gen() ?>

<?php $page_content = ob_get_clean();







addContent($page_content);
render();


?>

<style>
    .nucleoside-analogues {
        border: 1px solid silver;

        tr {
            border: 1px solid silver;
        }

        th {
            padding: 12px 0;
        }

        th,
        td {
            text-align: center;

        }
    }
</style>