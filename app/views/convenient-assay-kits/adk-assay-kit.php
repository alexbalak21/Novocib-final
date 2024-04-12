<?php
$title = "Adenosine Kinase Assay Kit - ADK Assay Kit";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "convenient assay kits", "ADK Assay Kit"];

addContent(Banner::gen());
$content_title = UnderlinedTitle::get("High Throughput Assay for Human Adenosine Kinase", "novoblue", "right");

$page_content = <<<CONTENT
<section class="container mt-5">
$content_title
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
                        <td>#K0507-01.01</td>
                        <td class="text-center"><strong>1 plate (96 assays)</strong></td>
                        <td class="price text-center">€ 420.00</td>
                        <td class="text-end pe-3">
                            <a class="btn btn-primary" href="/inquiry?ref=K0709-01-2&product=PRECICE PRPP-S Assay Kit">
                                Inquiry
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>#K0507-01.05</td>
                        <td class="text-center"><strong>5 plates (5 x 96 assays)</strong></td>
                        <td class="price text-center">€ 1,680.00</td>
                        <td class="text-end pe-3">
                            <a class="btn btn-primary" href="/inquiry?ref=K0709-01-2&product=PRECICE PRPP-S Assay Kit">
                                Inquiry
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="text-muted text-center">
                <em>Pricing updated December 25th, 2013.</em>
                <br />
            </p>
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
<h2 class="novo-blue ms-5 mb-3 text-center">Key Features</h2>
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
CONTENT;

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