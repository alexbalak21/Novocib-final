<?php
global $title;
$title = "Human Active Deoxycytidine Kinase Enzyme";
require_once "app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen());
$content_title = UnderlinedTitle::get("Human Deoxycytidine Kinase (dCK, EC 2.7.1.74)", "novoblue", "right");

$page_content = <<<CONTENT
<div class="container mt-5">
<div class="row d-flex align-items-center">
$content_title
<div class="col-lg-6">

<p><strong class="novo-blue">NOVOCIB</strong>'s human <strong>deoxycytidine kinase</strong> is an <strong>active</strong> and purified protein of 33kDa cloned by RT-PCR amplification of mRNA extracted from human hepatoma cells and expressed in E.coli.</p>
<p>Deoxycytidine kinase is responsible for the phosphorylation and activation of numerous nucleoside analogs used to treat cancer (e.g. cytarabine, gemcitabine, cladribine, and fludarabine) including nucleoside analogs of non-physiological L-chirality (e.g. 3TC, lamivudine, anti-HIV, and anti-hepatitis B agent).</p>
<p>For rapid evaluation of substrates properties of novel nucleoside analogues for human deoxycytidine kinase, see our <a href="/convenient-assay-kits/dck-phosphorylation-assay-kit">PRECICE® dCK Phosphorylation Assay Kit</a></p>
<p>Human deoxycytidine kinase plays a key role in the salvage pathway of deoxynucleotides synthesis providing resting cells with deoxynucleotides for DNA repair and mitochondrial DNA synthesis. The enzyme has a broad substrate specificity and provides the phosphorylation of both purine and pyrimidine deoxynucleosides (e.g. deoxyadenosine (dA), deoxyguanosine (dG), deoxycytidine (dC)), and pyrimidine ribonucleoside cytidine (C).</p>
</div>
<div class="col-lg-6 text-center">
<img class="w-100"  src="/app/img/dCK_Reaction.png" alt="dCK Reaction schema">
<h4 class="novo-blue">Deoxycytidine Kinase</h4>
<h5>Ref. #E-Nov3</h5>
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
            <td>#E-Nov3-500mU</td>
            <td class="text-center"> <strong>500 mUnits</strong></td>
            <td class="price text-center">€ 295.00</td>
            <td class="text-end pe-3"><a class="btn btn-primary" href="/inquiry?ref=none&amp;product=Deoxycytidine Kinase - 500mU">Inquiry <i class="fa-solid fa-comment"></i></a></td>
        </tr>
        <tr>
            <td>#E-Nov3-2U</td>
            <td class="text-center"><strong>2 Units</strong></td>
            <td class="price text-center">€ 945.00</td>
            <td class="text-end pe-3"><a class="btn btn-primary" href="/inquiry?ref=none&amp;product=Deoxycytidine Kinase - 2U">Inquiry <i class="fa-solid fa-comment"></i></a></td>
        </tr>
    </tbody>
</table>
<p class="text-muted text-center"> <em>Pricing updated February 3rd, 2014</em><br></p>
<p class="text-center"><strong>Kit is provided in stable lyophilized form and <span class="text-danger">shipped without dry ice</span> </strong></p>
<p class="my-4 text-center">
<strong>You can ask us for a quotation <a href="mailto:contact@novocib.com">Here <i class="fa-solid fa-envelopes-bulk"></i></a> or write at <a href="mailto:contact@novocib.com">contact@novocib.com</a></strong>
</p>
</div>
</div>
</div>
</div>
<div class="bg-light">
<div class="container py-3">
<div class="row align-items-center">
<div class="col-3 text-center">
<img src="/app/img/dCK_Gel.png" alt="dsk gel photo">
</div>
<div class="col-9">
<p><strong>Unit Definition:</strong> One unit of deoxycytidine kinase converts 1.0 µmole of deoxyinosine and ATP to dIMP and ADP per minute at pH 8 at 37°C, as measured by a coupled IMPDH enzyme system. (see <a href="/convenient-assay-kits/dck-phosphorylation-assay-kit">dCK Assay Kit</a> for further details).</p>
<p><strong>Specific Activity:</strong> ≥ 0.5 unit/mg protein.</p>
<p><strong>Purity:</strong> controlled by 12% AA SDS-PAGE.</p>
</div>
</div>
</div>
</div>

<div class="container">
<div class="referances my-4 row justify-content-center">
<h6 class="ps-5"><i>References (with external links to PubMed) </i><i class="novo-blue fa-solid fa-arrow-up-right-from-square"></i></h6>
<div class="col-2">
<img class="w-100 pt-3" src="/app/img/pubmed.png" alt="pubmed logo">
</div>
<div class="col-8">
<ol>
<li><a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/12808445/">E. Sabini et al. (2003): Structure of human dCK suggests strategies to improve anticancer and antiviral therapy Nat. Struct. Biol. 10(7), 513-519</a></li>
<li><a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/18377927/">E. Sabini et al. (2008): Structural basis for substrate promiscuity of dCK J. Mol. Biol. 378(3), 607-621</a></li>
<li><a target="_blank" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC1802566/">E. Sabini et al. (2007): Structural basis for activation of the therapeutic l-nucleoside analogs 3TC and troxacitabine by human deoxycytidine kinase Nucleic Acids Res. 35(1), 186-192</a></li>
</ol>
</div>
</div>
</div>

CONTENT;

addContent($page_content);
render();
