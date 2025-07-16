<?php
global $title;
$title = "Human Recombinant HGPRT";
require_once "app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen());

$page_content = <<<CONTENT
<div class="container mt-5">
<div class="row align-items-center">
<h2>Human Hypoxanthine-guanine phosphoribosyltransferase (HGPRT, EC 2.4.2.8)</h2>
<div class="col-lg-6">
<p class="muted mt-2"><i><b>Synonyms:</b>  Hypoxanthine phosphoribosyltransferase, HGPRTase, HPRT</i></p>
<p class="mt-3"><strong><span class="novo-blue">NOVOCIB</span>'S human HGPRT</strong> enzyme is a 25kDa purified protein cloned by RT-PCR amplification of mRNA extracted from human hepatoma cells and expressed in E.coli. The sequence of cloned HGPRT (accession number P00492) was confirmed by DNA sequencing (100% identity).</p>
<p><strong class="novo-blue">NOVOCIB</strong>'s cloned human HGPRT is a highly active enzyme that catalyzes the reversible transfer of the 5-phosphoribosyl group between α-D-5-phosphoribosyl-1-pyrophosphate (PRPP) and a purine base (hypoxanthine or guanine) to form a purine nucleotide IMP or GMP. The enzyme has been characterized for its affinity for natural substrates and velocity in forward and reverse directions.</p>
</div>
<div class="col-lg-6 text-center">
<img class="w-100" src="/app/static/img/HPRT_reaction.png" alt="HPRT reaction schema">
<h4 class="novo-blue">Human HGPRT</h4>
<h5>#E-Nov9</h5>
</div>
<p class="col-12 pt-1">Supplied in stable form (lyophilized), this enzyme provides an excellent positive control for in vitro HGPRT assay protocols when testing protein expression and activity in cell lysates.</p>
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
            <td>#E-Nov9</td>
            <td class="text-center"> <strong>100 mUnits - 4 tubes with 25 <i>mUnits</i>  each <br></strong><i>(Once dissolved, 10 mU/ml correspond to 126 nmol/h/ml)</i></td>
            <td class="price text-center">€ 310.00</td>
            <td class="text-end pe-3"><a class="btn btn-primary" href="/inquiry?ref=K0709-01-2&amp;product=Human HGPRT - 100mUnits">Inquiry <i class="fa-solid fa-comment"></i></a></td>
        </tr>
    </tbody>
</table>
<p class="text-muted text-center"> <em>Pricing updated December 8th, 2013.</em><br></p>
<p class="text-center"><strong>Kit is provided in stable lyophilized form and <span class="text-danger">shipped without dry ice</span> </strong></p>
<p class="my-4 text-center">
            <strong>You can ask us for a quotation <a href="mailto:contact@novocib.com">here</a> or write at <a href="mailto:contact@novocib.com">contact@novocib.com</a></strong>
</p>
</div>
</div>
<div class="col-4 mt-5   text-center">
<img src="/app/static/img/HGPRT_Gel.png" alt="HGPRT Gel">
</div>
<div class="col-8">
<p><strong>Storage:</strong> HPRT enzyme is provided in lyophilized form and should be stored at -20°C.</p>
<p><strong>Unit Definition: (forward reaction)</strong> One unit of hypoxanthine-guanine phosphoribosyl transferase converts 1 µmole of hypoxanthine to IMP per minute at pH 8.8 at 25°C, as measured by a coupled IMPDH enzyme system. (see <a href="/convenient-assay-kits/hprt-assay-kit">HPRT Assay Kit</a> for further details)</p>
<p><strong>Specific Activity:</strong> ≥ 1 Unit/mg protein.</p>
<p><strong>Purity:</strong> controlled by 12%AA SDS-PAGE.</p>
</div>
</div>
<div class="referances my-5 row justify-content-center">
<h6 class="ps-5"><i>References (with external links to PubMed) </i><i class="novo-blue fa-solid fa-arrow-up-right-from-square"></i></h6>
<div class="col-2">
<img class="w-100 pt-3" src="/app/static/img/pubmed.png" alt="pubmed logo">
</div>
<div class="col-8">
<p><i>G.K. Balendiran et al. (1999): <a href="https://pubmed.ncbi.nlm.nih.gov/10338013/">Ternary complex structure of human HGPRTase, PRPP, Mg2+, and the inhibitor HPP reveals the involvement of the flexible loop in substrate binding Protein Sci. 8(5), 1023-1031</a></i></p>
</div>

</div>
</div>

CONTENT;

addContent($page_content);
render();
