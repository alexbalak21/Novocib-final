<?php
$title = "Bacterial active IMPDH";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "convenient assay kits", "Bacterial active IMPDH"];

addContent(Banner::gen());
$content_title = UnderlinedTitle::get("Bacterial IMPDH (Staphylococcus aureus) (EC 1.1.1.205)", "novoblue", "right");

$page_content = <<<CONTENT
<section class="container mt-5">
$content_title
<div class="row align-items-center">
<div class="col-lg-6">
<p><strong>Synonyms:</strong> inosine 5'-monophosphate dehydrogenase, IMP dehydrogenase</p>
<p><strong class="novo-blue">NOVOCIB</strong>'s bacterial IMPDH is a cloned protein of 53kDa cloned by PCR amplification of guaB gene of Staphylococcus aureus and expressed in E. coli.</p>
<p>Today, antibiotic resistance is one of the world's most important public health problems. There is an urgent need for new antibiotic compounds acting on new targets. One attractive strategy for developing new antibiotics consists in inhibiting bacterial IMPDH, an enzyme involved in the de novo synthesis of purine nucleotides, and therefore, necessary for bacterial cell growth and division.</p>
Today, antibiotic resistance is one of the world's most important public health problems. There is an urgent need for new antibiotic compounds acting on new targets. One attractive strategy for developing new antibiotics consists in inhibiting bacterial IMPDH, an enzyme involved in the de novo synthesis of purine nucleotides, and therefore, necessary for bacterial cell growth and division.
</div>
<div class="col-lg-6 text-center">
<img src="/app/static/img/IMPDH_reaction.png" alt="" class="w-100">
<h4 class="novo-blue">Bacterial IMPDH</h4>
<h5>Ref. #E-Nov7</h5>
</div>
<p class="mt-3">Mammalian and bacterial IMPDHs are known to have significantly different kinetic properties and inhibitor sensitivities(1,2). The experiments done with previously cloned human IMPDH2 and bacterial IMPDH of Staphylococcus aureus, are illustrated below. In agreement with published data, mycophenolic acid (MPA) inhibits human IMPDH type II >20-times more efficiently than bacterial IMPDH with IC50 values of 100nM and 2.6µM respectively (A). In contrast, mizoribine monophosphate displays the opposite selectivity (B). It is a more potent inhibitor of bacterial IMPDH with respective IC50 values of 12nM and 185nM for bacterial and human enzymes</p>
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
            <td>#E-Nov7</td>
            <td class="text-center"> <strong>50 mUnits</strong></td>
            <td class="price text-center">€ 195.00</td>
            <td class="text-end pe-3"><a class="btn btn-primary" href="/inquiry?ref=K0709-01-2&amp;product=12 analyses (4 samples in triplicate)">Inquiry</a></td>
        </tr>
    </tbody>
</table>
<p class="text-muted text-center"> <em>Pricing updated December 12th, 2023.</em><br></p>
<p class="text-center"><strong>Kit is provided in stable lyophilized form and <span class="text-danger">shipped without dry ice</span> </strong></p>
<p class="my-4 text-center">
<strong>You can ask us for a quotation <a href="mailto:contact@novocib.com">Here <i class="fa-solid fa-envelopes-bulk"></i></a> or write at <a href="mailto:contact@novocib.com">contact@novocib.com</a></strong>
</p>

</div>
</div>
</section>
<section class="bg-light py-3 mt-4">
<div class="container">
<p>Bacterial recombinant IMPDH and human recombinant IMPDH, Type 2, enzymes are useful tools for the selection of species-specific IMPDH inhibitors. Both enzymes are available at <strong class="novo-blue">NOVOCIB</strong>.</p>
<div class="row">
<div class="col-lg-5 col-6">
<img src="/app/static/img/IMPDH's Kinetics MPA.png" alt="" class="w-100">
</div>
<div class="col-lg-7 col-6">
<p><strong>IMPDH inhibition:</strong> Effect of MPA (A) and mizoribine monophosphate (B) on human recombinant IMPDH II (red curve) and bacterial recombinant IMPDH of Staphylococcus aureus (blue curve). Enzymatic assays are performed in duplicate at 37°C in 0.1M KH2PO4 buffer pH 8.0 in the presence of 1mM DTT, 200µM NAD, 200µM IMP, 60nM Human IMPDH, Type 2 or 95nM IMPDH S.aureus. Reaction is followed in an iEMS Reader MF (Labsystems) microtiter plate reader at 340nm.</p>
</div>
</div>
</div>
</section>


<div class="container">
<div class="referances my-5 row justify-content-center">
<h6 class="ps-5"><i>References (with external links to PubMed) </i><i class="novo-blue fa-solid fa-arrow-up-right-from-square"></i></h6>
<div class="col-2">
<img class="w-100 pt-3" src="/app/static/img/pubmed.png" alt="pubmed logo">
</div>
<div class="col-8">
<ol>
<li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/16919497">L. Hedstrom and L. Gan (2006): IMP dehydrogenase: structural schizophrenia and an unusual base Curr. Opin. Chem. Biol. 10(5), 520-525</a></li>
<li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/10200156">R. Zhang et al. (1999): Characteristics and crystal structure of bacterial inosine-5'-monophosphate dehydrogenase Biochemistry 13;38(15), 4691-700</a></li>
</ol>
</div>
</div>
</div>

CONTENT;

addContent($page_content);
render();
