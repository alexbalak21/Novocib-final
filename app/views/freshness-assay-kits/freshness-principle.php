<?php
$title = "Freshness Assay Kit - Seafood Freshness Quality Control - K value";
require_once "app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen());
$content_title = UnderlinedTitle::get("PRECICE® Nucleotides Assay Kits", "novoblue", "center");

$page_content = <<<CONTENT
<main class="container mt-5">
$content_title
<div class="row">
<div class="col-lg-4">
<img class="w-100" src="/app/static/img/freshness_graph_1.jpg" alt="freshness graph">
</div>
<div class="col-lg-4">
<img class="w-100" src="/app/static/img/freshness_graph_2.jpg" alt="freshness graph">
</div>
<div class="col-lg-4">
<img class="w-100" src="/app/static/img/freshness_graph_3.jpg" alt="freshness graph">
</div>
</div>
<div class="row mt-5">
<div class="col-lg-6 text-center my-3">
<img src="/app/static/img/freshness_kit _pectrophotometer.jpg" alt="" class="col-lg-8">
</div>
<div class="col-lg-6 text-center">
<img src="/app/static/img/Freshness_Assay_Kit_for_Plate_Reader.jpg" alt="" class="col-lg-8">
</div>
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
            <td>#K0700-004-10</td>
            <td class="text-center"> <strong>Spectrophotometer for 10 samples analyzed for IMP, inosine and hypoxanthine <br> <a target="_blank" href="/app/documents/PRECICE Freshness Assay Manual for Spectrophotometer K0700-004.pdf">See Documentation <i class="fa-solid fa-file-pdf"></i></a></strong></td>
            <td class="price text-center">€ 350.00</td>
            <td class="text-end pe-3"><a class="btn btn-primary" href="/inquiry?ref=none&amp;product=Freshness Assay Kit - 10 samples">Inquiry <i class="fa-solid fa-comment"></i></a></td>
        </tr>
        <tr>
            <td>#K0700-003-22</td>
            <td class="text-center"><strong>Plate reader for simultaneous analysis of IMP, Ino & Hx in 22 samples <br> <a target="_blank" href="/app/documents/PRECICE Freshness Assay Manual K0700-003 140709.pdf">See Documentation <i class="fa-solid fa-file-pdf"></i></a></strong></td>
            <td class="price text-center">€ 480.00</td>
            <td class="text-end pe-3"><a class="btn btn-primary" href="/inquiry?ref=none&amp;product=Freshness Assay Kit - 22 samples">Inquiry <i class="fa-solid fa-comment"></i></a></td>
        </tr>
    </tbody>
</table>
<p class="text-muted text-center"><em>Pricing updated on October 01st, 2016</em><br></p>
<p class="text-center"><strong>Kit is provided in stable lyophilized form and <span class="text-danger">shipped without dry ice</span> </strong></p>
<p class="my-4 text-center">
<strong>You can ask us for a quotation <a href="mailto:contact@novocib.com">Here <i class="fa-solid fa-envelopes-bulk"></i></a> or write at <a href="mailto:contact@novocib.com">contact@novocib.com</a></strong>
</p>
</div>
</div>
<section class="mt-5">
<h3 class="novo-blue">Measure nucleotides to assess food quality</h3>
<p>Since seafood and fish are highly perishable products, the quality of raw material is of primary concern for seafood processing industry. While sensory analysis allows rapid evaluation of the quality of whole wet fish, the assessment of the quality of frozen fish, or that of frozen blocks of fillets or crumbed seafood products remains more difficult</p>
<p><strong>PRECICE® Nucleotides Assay Kit</strong> is a first enzymatic assay for spectrophotometric measurement of three major ATP degradation products. The enzymes provided with kit allow specific conversion of three major ATP catabolites - IMP, inosine (Ino) and hypoxanthine (Hx) to NADH2. The quantification of nucleotides is done by measuring sample absorbance at 340nm.</p>
<h4 class="novo-blue">Rapid & Precise</h3>
<ul>
<li>Enzymatic reactions take 30 min;</li>
<li>R²=0.89 (IMP, HPLC); R²=0.91 (inosine, HPLC); R²=0.91 (hypoxanthine, HPLC);</li>
<li>R²=0.88 found between H-value measured with <strong class="novo-blue">PRECICE® Nucleotides Assay Kit</strong> and TMA/ABVT in whiting fillets (11 samples)</li>
</ul>
<h4 class="novo-blue">Wide Application Range</h4>
<ul>
<li>Frozen, fresh, stored under modified atmosphere, smoked, sterilized and canned products</li>
</ul>
</section>
<div class="text-end mt-3 mb-5">
<p>Download <a target="_blank" href="/app/documents/PRECICE Nucleotides Assay Kit K0700-004.pdf">"PRECICE® Nucleotides Assay Kit"</a> <strong>User Manual</strong> for cuvette spectrophotometer.</p>
<p>Download <a target="_blank" href="/app/documents/PRECICE Nucleotides Assay Kit K0700-003.pdf">"PRECICE® Nucleotides Assay Kit"</a> <strong>User Manual</strong> for plate reader.</p>
</div>

</main>
CONTENT;

addContent($page_content);
render();
