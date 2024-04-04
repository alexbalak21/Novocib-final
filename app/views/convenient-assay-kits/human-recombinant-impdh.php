<?php
$title = "Active Human IMPDH Type 2 Enzyme";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "convenient assay kits", "Human IMPDH, Type 2"];

addContent(Banner::gen());
$content_title = UnderlinedTitle::get("Human IMPDH, Type II", "novoblue", "right");

$page_content = <<<CONTENT
<section class="container mt-5">
$content_title
<div class="row">
    <div class="col-lg-6">
        <p>
        <strong>Synonyms:</strong> inosine 5'-monophosphate dehydrogenase, type 2, IMP dehydrogenase, type II, IMPDH2.
        </p>
        <p>
        Inosine 5'-monophosphate dehydrogenase type 2 (IMPDH 2, E.C.1.1.1.205) is the predominant isoform of IMPDH and a validated target to treat a wide range of cancers and infectious diseases and to prevent lymphocytes proliferation.
        </p>
        <p>
        <strong class="novo-blue">NOVOCIB's</strong> IMPDH 2 has been cloned by RT-PCR amplification of mRNA extracted from human hepatoma cells (NP_000875.2, 100% identity) and expressed in E.coli.
        </p>
        <p>
        <strong class="novo-blue">NOVOCIB's</strong> purified IMPDH 2 is an active enzyme characterized for its affinity for inosine 5'-monophosphate and NAD substrates, and its sensitivity to enzyme inhibitors such as mycophenolic acid and ribavirine-monophosphate.
        </p>
        <p><strong>Unit Definition:</strong> One unit of IMPDH Type II catalyzes the oxydation of 1 µmole of IMP to XMP per minute at pH 8.8 at 37 µC.</p>
        <p><strong>Specific Activity:</strong> ≥ 0.050 unit/mg protein.</p>
    </div>
    <div class="col-lg-6 text-center">
        <img class="w-100" src="/app/static/img/IMPDH-reaction.png" alt="Human IMPDH Type 2 reaction schema" />
        <h4 class="novo-blue">Human IMPDH Type 2</h4>
        <h5>Ref. #E-Nov1</h5>
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
                        <td>#E-Nov1-50</td>
                        <td class="text-center"><strong>50 mU</strong></td>
                        <td class="price text-center">€ 305.00</td>
                        <td class="text-end pe-3">
                            <a class="btn btn-primary" href="/inquiry?ref=K0709-01-2&product=PRECICE PRPP-S Assay Kit">
                                Inquiry
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>#E-Nov1-100</td>
                        <td class="text-center"><strong>100 mU</strong></td>
                        <td class="price text-center">€ 495.00</td>
                        <td class="text-end pe-3">
                            <a class="btn btn-primary" href="/inquiry?ref=K0709-01-2&product=PRECICE PRPP-S Assay Kit">
                                Inquiry
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>#E-Nov1-250</td>    
                        <td class="text-center"><strong>250 mU</strong></td>
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
            <p class="my-4 text-center">
            <strong>You can ask us for a quotation <a href="mailto:contact@novocib.com">here</a> or write at <a href="mailto:contact@novocib.com">contact@novocib.com</a></strong>
            </p>
        </div>
    </div>
</section>
<section class="bg-light py-3 mt-3">
<div class="container">
<p><strong>Assay condition:</strong> KH2PO4 0.1M, pH8.8, NAD 250µM, DTT 2.5mM, 2.5mU/ml of human recombinant IMPDH II, Incubation at 37µC. Reaction started by adding IMP at 250µM final concentration. NADH formation was followed in an iEMS Reader MF (Labsystems) plate reader at 340nm.</p>
<div class="row justify-content-center">
<div class="col-lg-2 col-4 my-4">
<img height="400" src="/app/static/img/IMPDH-Gel.png" alt="">
</div>
<div class="col-lg-8 my-4">
<img height="400" src="/app/static/img/IMPDH-IC50.png" alt="">
</div>
</div>
<p class="text-end mt-4"><strong>Download this Document: <a href="/app/documents/NovoCIB E-Nov1.pdf">"NOVOCIB's Human Recombinant IMPDH"</a></strong></p>
<p class="text-end"><strong>
Download this Document: <a href="/app/documents/NovoCIB IMPDH Services.pdf">"NOVOCIB - IMPDH Products & Services"</a>
</strong></p>

</div>
</section>
CONTENT;

addContent($page_content);
render();
