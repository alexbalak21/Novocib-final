<?php
$title = "Human Recombinant PNP";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "convenient assay kits", "Human Recombinant PNP"];

addContent(Banner::gen());
$content_title = UnderlinedTitle::get("Human PNP (EC 2.4.2.1)", "novoblue", "right");

$page_content = <<<CONTENT
<section class="container mt-5">
$content_title
<div class="row">
    <div class="col-lg-6">
        <p>
        <strong class="novo-blue">NOVOCIB</strong>'S PNP is a pure and active human Purine Nucleoside Phosphorylase expressed in E. coli. It has an apparent molecular weight of 32.12 kDa.
        </p>
        <p>
        PNP is an important therapeutic target enzyme. Several PNP inhibitors have been developed to treat cancer, viral infection, and auto-immune diseases. PNP is also a drug target for new antiparasitic drugs.
        </p>
        <p>
        For direct and continuous measurement of PNP activity see our <a href=""><strong>PRECICE® PNP Assay kit</strong></a>.
        </p>
    </div>
    <div class="col-lg-6 text-center">
        <img class="w-100" src="/app/static/img/PNP-reaction.png" alt="Human PNP reaction schema" />
        <h4 class="novo-blue">Human PNP</h4>
        <h5>Ref. #E-Nov2</h5>
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
                        <td>#E-Nov2-20</td>
                        <td class="text-center"><strong>20 Units</strong></td>
                        <td class="price text-center">€ 195.00</td>
                        <td class="text-end pe-3">
                            <a class="btn btn-primary" href="/inquiry?ref=K0709-01-2&product=PRECICE PRPP-S Assay Kit">
                                Inquiry
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>#E-Nov2-40</td>
                        <td class="text-center"><strong>40 Units</strong></td>
                        <td class="price text-center">€ 350.00</td>
                        <td class="text-end pe-3">
                            <a class="btn btn-primary" href="/inquiry?ref=K0709-01-2&product=PRECICE PRPP-S Assay Kit">
                                Inquiry
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>#E-Nov2-120</td>    
                        <td class="text-center"><strong>120 Units</strong></td>
                        <td class="price text-center">€ 780.00</td>
                        <td class="text-end pe-3">
                            <a class="btn btn-primary" href="/inquiry?ref=K0709-01-2&product=PRECICE PRPP-S Assay Kit">
                                Inquiry
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="text-muted text-center">
                <em>Pricing updated September 7th, 2015</em>
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
<div class="row">
<div class="col-lg-6 row">
<img class="col-6" height="400" style="width:auto" class="col-6" src="/app/static/img/PNP-Gel.png" alt="">
<p class="col-6"><b>Unit Definition:</b> One unit catalyzes the cleavage of 1.0 µmole of inosine per minute at pH 8 at 25µC.<br>
<b>Purity:</b> controlled by SDS-PAGE.</p> 
</div>
<div class="col-lg-6">
<p><strong>Assay condition:</strong><strong class="novo-blue">NOVOCIB</strong> has developed a coupled xanthine dehydrogenase (XDH) system to directly monitor PNP phosphorolytic reaction on inosine (IR).</p>
<img class="w-100" src="/app/static/img/PNP-RBC-lysate.jpg" alt="">
</div>
</div>
<p class="mt-5 text-end"><strong>Download this Document: <a href="/app/documents/NovoCIB E-Nov2.pdf">NovoCIB's Human Recombinant PNP <i class="fa-solid fa-file-pdf"></i></a></strong></p>
</div>
</section>
<section>
<div class="container mt-4">
<h3 class="novo-blue mb-3">PNP, a multiple-faced enzyme</h3>

<h6>Catalytic activity</h6>
<p>Purine Nucleoside Phosphorylase (PNP) is involved in salvage pathway of the purine metabolism. PNP catalyzes the cleavage of the glycosidic bond of ribo- or deoxyribonucleosides, in the presence of inorganic phosphate as a second substrate, to generate the purine base and ribose- or deoxyribose-1-phosphate. The reaction is reversible for natural substrates:</p>
<div class="d-flex justify-content-center">
<img class="col-lg-7" src="/app/static/img/PNP-reaction.png" alt="">
</div>

<h6 class="mt-3">Therapeutic potential of PNP inhibitors</h6>
<p>PNP deficiency leads to T-lymphocytopenia, usually with no apparent effects on B-lymphocyte function. These symptoms suggest possible chemotherapeutic applications of potent inhibitors of PNP, as selective immunosuppressive agents, to treat T-cell leukemias or T-cell-mediated autoimmune diseases, such as lupus erythematosus and rheumatoid arthritis1(1,2). The decrease in plasma and urine levels of urate is an additional symptom of PNP deficiency. PNP inhibitors may contribute to treat hyperuricemic states, such as secondary or xanthine gout. <br>
Some PNP inhibitors have undergone clinical trials for the treatment of cutaneous T-cell lymphoma, acute lymphoblastic leukemia (ALL), HIV infections, and psoriasis.
</p>
</div>
</section>
CONTENT;

addContent($page_content);
render();
