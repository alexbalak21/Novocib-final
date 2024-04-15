<?php
$title = "Active human UMP-CMP kinase enzyme";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "active purified enzymes", "Human UMP-CMP Kinase"];
$content_title = UnderlinedTitle::get("Human UMP-CMP Kinase (CMK) (E.C.2.7.4.14)", "novoblue", "center");
addContent(Banner::gen());

$page_content = <<<CONTENT
<div class="container mt-5">
$content_title
<span><strong class="novo-blue">NOVOCIB</strong>'s CMK enzyme is a highly pure and active cloned human UMP-CMP Kinase which can be used:</span>
<ul>
<li>to characterize a monophosphorylated nucleotide analogue as a potential substrate of CMK</li>
<li>to quantify UMP, CMP, dUMP or dCMP in a sample</li>
<li>to synthesize enzymatically the di-phosphate form of nucleotide analogue from its monophosphate form (e.g. dFdC-DP)</li>
</ul>
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
            <td>#E-Nov4-1</td>
            <td class="text-center"> <strong>1 Unit</strong></td>
            <td class="price text-center">€ 350.00</td>
            <td class="text-end pe-3"><a class="btn btn-primary" href="/inquiry?ref=K0709-01-2&amp;product=Human UMP-CMP Kinase - 1 Unit">Inquiry</a></td>
        </tr>
        <tr>
            <td>#E-Nov4-5</td>
            <td class="text-center"><strong>5 Units</strong></td>
            <td class="price text-center">€ 1400.00</td>
            <td class="text-end pe-3"><a class="btn btn-primary" href="/inquiry?ref=K0709-01-2&amp;product=Human UMP-CMP Kinase - 5 Unit">Inquiry</a></td>
        </tr>
    </tbody>
</table>
<p class="text-muted text-center"> <em>Pricing updated December 8th, 2013.</em><br></p>
<p class="text-center"><strong>Kit is provided in stable lyophilized form and <span class="text-danger">shipped without dry ice</span> </strong></p>
<p class="my-4 text-center">
<strong>You can ask us for a quotation <a href="mailto:contact@novocib.com">Here <i class="fa-solid fa-envelopes-bulk"></i></a> or write at <a href="mailto:contact@novocib.com">contact@novocib.com</a></strong>
</p>
</div>
</div>

<p class="mt-4 text-end">Download this document <a target="_blank" href="/app/documents/NovoCIB E-Nov4.pdf"> <strong>"NovoCIB's UMP-CMP kinase" <i class="fa-regular fa-file-pdf"></i></strong></a><br></p>
<p class="text-end mb-5">To know more about our <a target="_blank" href="href="/app/documents/NovoCIB Nucleoside kinases.pdf">Nucleoside Kinases <i class="fa-solid fa-book-open-reader"></i></a> catalogue.</p>

</div>
<div class="bg-light py-3">
<div class="container">
<p><i><b>Synonyms:</b> cytidylate kinase, deoxycytidylate kinase, deoxycytidine monophosphokinase, dCMP kinase, cytidine monophosphate kinase, CMP kinase (CMK, CMPK), uridine monophosphate kinase (UMK, UMPK), uridine monophosphate/cytidine monophosphate kinase, UMP/CMP kinase (UMP/CMPK), CTP:CMP phosphotranferase, ATP:UMP-CMP phosphotransferase, pyrimidine nucleoside monophosphate kinase (YMPK).</i></p>
<p><strong class="novo-blue">NOVOCIB</strong>'s Human UMP-CMP kinase (CMK) is a recombinant protein of 27kDa (full length 228-aa form(1)) cloned by RT-PCR amplification of mRNA extracted from Huh7 cells (human hepatoma) and expressed in E.coli. <br>
UMP-CMP kinase plays a critical role in supplying cells with nucleotides by catalysing the phosphorylation of CMP, UMP and dCMP to their respective diphosphates. CMK plays also an important role in the activation of cytidine analogues, aracytidine and gemcitabine, a mainstay of leukaemia and lymphoma therapy(2). CMK has a remarkable ability of to phosphorylate L-nucleotides from their monophosphate to diphosphate forms(3) as shown for β-L-2'3'-dideoxy-3'thiacytidine (L-SSdC, 3-TC or lamividune), an anti-HIV and anti-hepatitis B drug. <br>
Crystal structure of open form of human UMP-CMP kinase has been solved recently(4). These data, together with the homology model of enzyme in closed state, provide a structural basis for understanding the substrate specificity of the enzyme and helps to design new nucleoside analogues of higher phosphorylation efficiency.
</p>
<div class="mt-4 row align-items-center">
<div class="col-lg-6 row">
<div class="col-4 text-center">
<img class="w-85" src="/app/static/img/CMK_Gel.png" alt="CMK Gel Photo">
</div>
<div class="col-8">
<p><strong>Storage:</strong> 20°C in a solution containing 150mM KCl, 50mM Tris-Hcl, pH7,5, 2mM β-mercaptoethanol, 50% glycerol.</p>
<p><strong>Unit Definition:</strong> One unit of UMP-CMP kinase converts 1.0 µmole of UMP and ATP to UDP and ADP per minute at pH 7.6 at 25 °C, using a coupled enzyme system with PK/LDH.</p>
<p><strong>Specific Activity:</strong> ≥1 unit/mg protein.</p>
<p><strong>Purity:</strong> controlled by SDS-PAGE.</p>
</div>
</div>
<div class="col-lg-6">
<p><strong>Assay condition:</strong> Enzymatic activity of UMP-CMP kinase is measured by continuous spectrophotometric assays in a coupled lactate dehydrogenase/pyruvate kinase system. Assays are carried out at 37Â°C, at 50mM Tris-HCl pH7,6; 50mM KCl, 10mM MgCl2, 5mM ATP, 0,1mM NADH, 1mM phosphoenolpyruvate, 1mM DTT, PK 10U/ml, LDH 15U/ml, 380nM CMK. Reaction is followed in an iEMS Reader MF (Labsystems, Finland) microtiter plate reader at 340nm</p>
<div class="text-center">
<img src="/app/static/img/CMK_Kinetics.png" alt="CMK Kinetics Graph">
</div>
</div>
</div>
</div>
</div>

<div class="container">
<div class="referances my-4 row justify-content-center">
<h6 class="ps-5"><i>References (with external links to PubMed) </i><i class="novo-blue fa-solid fa-arrow-up-right-from-square"></i></h6>
<div class="col-2">
<img class="w-100 pt-3" src="/app/static/img/pubmed.png" alt="pubmed logo">
</div>
<div class="col-8">
<ol>
<li><a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/11912132/">J. Y. Liou et al. (2002): Characterization of Human UMP/CMP Kinase and Its Phosphorylation of D- and L-Form Deoxycytidine Analogue Monophosphates Cancer Res. 62(6), 1624-1631</a></li>
<li><a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/10462544/">A. R. Van Rompay et al. (1999): Phosphorylation of deoxycytidine analog monophosphates by UMP-CMP kinase: molecular characterization of the human enzyme Mol. Pharmacol. 56(3), 562-569</a></li>
<li><a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/12694191/">C. Pasti et al. (2003): Reaction of human UMP-CMP kinase with natural and analog substrates Eur. J. Biochem. 270(8), 1784-1790</a></li>
<li><a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/15163660/">D. Segura-Peña et al. (2004): Substrate-induced conformational changes in human UMP/CMP kinase J. Biol. Chem. 279(32), 33882-9</a></li>
</ol>
</div>
</div>
</div>
CONTENT;

addContent($page_content);
render();
