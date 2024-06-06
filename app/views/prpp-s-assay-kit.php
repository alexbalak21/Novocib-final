<?php
$title = "PRPP-S Assay Kit";
require_once "app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen());
$content_title = UnderlinedTitle::get("Non radioactive PRPP-S assay", "novoblue", "right");

$page_content = <<<CONTENT
<section class="container mt-5">
$content_title
<div class="row">
    <div class="col-lg-6">
        <p>
            <strong>PRECICE® PRPP-S Assay kit</strong>
            provides the first non radioactive and one-step protocol for measurement of
            <strong>PRPP-S activity</strong>
            in cellular lysates in a convenient 96-well plate format.
        </p>
        <p>
            Phosphoribosylpyrophosphate synthetase (PRS; EC 2.7.6.1), an essential enzyme for the purine salvage
            pathway, is encoded by PRPS1 gene. Several mutations in this gene associated with genetic disorders have
            been described leading to
            <strong>PRS superactivity</strong>
            . This condition is inherited in an X-linked pattern.
            <br />
            PRPS1 gene overactivity increases the production of normal PRPP synthetase 1 enzyme, which increases the
            availability of PRPP. Excessive amounts of purines are generated leading to an accumulation of uric acid, a
            waste product of purine breakdown, in the body. A buildup of uric acid can cause gout, which is a form of
            arthritis resulting from uric acid crystals in the joints. Affected individuals may also develop kidney or
            bladder stones formed from uric acid crystals.
            <br />
            Increase of the availability of PRPP can be due to PRPP-S superactivity or HPRT deficiency (know more about
            <a href="/convenient-assay-kits/hprt-assay-kit">HPRT assay</a>
            ).
        </p>
    </div>
    <div class="col-lg-6 text-center">
        <img class="w-100" src="/app/static/img/PRPP-S-Assay-Kit.png" alt="" />
        <h4 class="novo-blue">PRECICE® PRPP-S Assay Kit</h4>
        <h5>Ref. #K0709-04-2</h5>
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
                        <td>#K0709-01-2</td>
                        <td class="text-center"><strong>For 10 mL of reaction mixture (half 96-well plate)</strong></td>
                        <td class="price text-center">€ 420.00</td>
                        <td class="text-end pe-3">
                            <a class="btn btn-primary" href="/inquiry?ref=K0709-04-2&product=PRECICE PRPP-S Assay Kit">
                                Inquiry
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="text-muted text-center">
                <em>Pricing updated on May the 30th, 2024.</em>
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
                <a target="_blank" href="/app/documents/NovoCIB K0709-04-02 User Manual.pdf">
                    <strong>Download PRPP-S User Manual</strong>
                    <i class="fa-regular fa-file-pdf"></i>
                </a>
                (User manual)
            </p>
        </div>
    </div>

    <div class="col-lg-3 text-center bg-light pt-3">
        <h4 class="novo-blue">Validated</h4>
    </div>
    <div class="col-lg-9 text-center bg-light">
        <p class="pt-2">
            Specific activitiy of PRS in lysates of human erythrocytes measured by PRECICE® PRPP-S Assay kit is close to
            previously published data.
        </p>
    </div>
    <div style="margin:0px" class="row mb-3 py-2 align-items-center bg-light">
    <div class="text-center col-lg-6">
    <img src="/app/static/img/PRPP-S-assay.png" alt="PRPP-S assay graph" />
</div>
<div class="col-lg-6">
    <table class="w-100">
        <tr>
            <td><strong>RBC speciment 1 (n=4)</strong></td>
            <td>65+/-2 nmol/hour/mg Hb</td>
        </tr>
        <tr>
            <td><strong>RBC speciment 2 (n=4)</strong></td>
            <td>76+/-12 nmol/hour/mg Hb</td>
        </tr>
        <tr>
            <td><strong>RBC speciment 3 (n=4)</strong></td>
            <td>78+/-10 nmol/hour/mg Hb</td>
        </tr>
        <tr><td></td></tr>
        <tr>
        <td><strong>Published data
        R. B. Gordon et al
        J. Inher. Metab. Dis. 10 (1987) 82, 88</strong></td>
        <td>102+/-20nmol/hour/mg Hb</td>
        </tr>
    </table>
</div>
    </div>

    <div class="col-lg-3 text-center pt-3">
        <h4 class="novo-blue">Convenient</h4>
    </div>
    <div class="col-lg-9">
       <ul>
       <li>Non radioactive</li>
       <li>Continuous</li>
       <li>No sample preparation required. Cell lysates are directly used for continuous monitoring of PRPP-Synthetase activity</li>

       </ul>
    </div>
    <div class="col-lg-3 text-center bg-light pt-3">
        <h4 class="novo-blue">Fast</h4>
    </div>
    <div class="col-lg-9 text-center bg-light">
        <p>Simultaneous analysis of up to 6 samples in duplicate in 1h.</p>
    </div>
</div>
<p class="my-5"><strong>Principle</strong><br>
PRS activity is measured as a rate of production of PRPP with concomitant formation of NADH2 after two enzymatic reactions using highly active HPRT and IMPDH. The formation of NADH2 is continuously monitored spectrophotometrically at 340nm.</p>


</section>
CONTENT;

addContent($page_content);
render();
