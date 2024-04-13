<?php
$title = "Adenosine Kinase Phosphorylation Assay Kit";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "convenient assay kits", "ADK Phosphorylation Assay Kit"];

addContent(Banner::gen());
$content_title = UnderlinedTitle::get("Antiviral and immunosuppressive nucleosides phosphorylation", "novoblue", "right");

$page_content = <<<CONTENT
<section class="container mt-5">
$content_title
<div class="row">
    <div class="col-lg-6">
        <p>
        Human adenosine kinase enzyme is a purine salvage enzyme that has a broad substrate specificity and provides the phosphorylation of purine/pyrimidine nucleosides and pyrimidine ribonucleosides. Adenosine kinase is critical for phosphorylation of adenosine analogs and provides first steps of activation of highly effective anti-viral and immunosuppressive prodrugs, such as mizoribine, tubercidin and ribavirine
        </p>
        <h4>Principle</h4>
        <p>
        <strong>PRECICE® ADK Phosphorylation Assay Kit</strong> is based on competitive inhibition of suboptimal substrate inosine (IR) phosphorylation. In the absence of nucleoside competitor, adenosine kinase phosphorylates inosine resulting in the formation of IMP. IMP is further oxidized by IMPDH to XMP and NADH2 continuously monitored at 340nm. In the presence of nucleoside competitor, the phosphorylation of inosine, poor ADK substrate, is inhibited detected as a decrease in NADH2 formation. <br> <strong>PRECICE® ADK Phosphorylation Assay Kit</strong> is a first tool for rapid evaluation of substrates properties of novel nucleoside analogues for human adenosine kinase.
        </p>
    </div>
    <div class="col-lg-6 text-center">
        <img class="w-100" src="/app/static/img/ADK-phosphorylation-kit.png" alt="ADK phosphorylation reaction schema" />
        <h4 class="novo-blue">PRECICE® ADK Phosphorylation Assay Kit</h4>
        <h5>#K0507-02</h5>
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
                        <td>#K0507-02</td>
                        <td class="text-center"><strong>1 plate (96 assays)</strong></td>
                        <td class="price text-center">€ 420.00</td>
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
                <a target="_blank" href="/app/documents/NovoCIB K0507-02-User Manual v140220SR.pdf">
                    <strong> ADK Phosphorylation Assay protocol</strong>
                    <i class="fa-regular fa-file-pdf"></i>
                </a>
                (User manual)
            </p>
        </div>
    </div>

    <div class="col-12">
    <h4 class="novo-blue">Validated with antiviral nucleoside analogues</h4>
    <p class="ms-5"><i class="novo-blue fa-solid fa-arrow-right"></i> Such as mizoribine, tubercidine, ribavirin.</p>
    <div class="row justify-content-center">
    <div class="col-lg-8 col-12">
    <img class="w-100" src="/app/static/img/ADK-competitors.png" alt="">
    </div>
    <div class="col-lg-8">
    <table class="my-4 w-100 nucleoside-analogues">
    <thead>
    <tr>
    <th>Nucleoside Analogues</th>
    <td>Mizoribine</td>
    <td>Tubercidine</td>
    <td>Ribavirin</td>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>IC50 <br>(Competitive Inhibition)</td>
    <td>45µM</td>
    <td>90µM</td>
    <td>550µM</td>
    </tr>
    </tbody>

    </table>
    </div>
    </div>
    

    </div>

</div>
<h4 class="novo-blue">Simple</h4>
<p class="ms-5"><i class="novo-blue fa-solid fa-arrow-right"></i> Homogenous and continuous (add-and-measure)</p>
<h4 class="novo-blue mt-4">High-Throughput Analysis</h4>
<p class="ms-5"><i class="novo-blue fa-solid fa-arrow-right"></i> The assay allows the test of 12 analogues at 7 different concentrations at the same time (or 6 analogues in duplicata)</p>
<p class="ms-5 mb-5"><i class="novo-blue fa-solid fa-arrow-right"></i> Readout is peformed with plate reader fitted with 340nm filter</p>


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