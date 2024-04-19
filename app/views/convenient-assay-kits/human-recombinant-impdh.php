<?php
$title = "Active Human IMPDH Type 2 Enzyme";
require_once "app/templates/base.php";

$novoblue = "#4167b1";




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
                            <a class="btn btn-primary" href="/inquiry?ref=K0709-01-2&product=Human IMPDH Ty2 - 5mU">
                                Inquiry
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>#E-Nov1-100</td>
                        <td class="text-center"><strong>100 mU</strong></td>
                        <td class="price text-center">€ 495.00</td>
                        <td class="text-end pe-3">
                            <a class="btn btn-primary" href="/inquiry?ref=K0709-01-2&product=Human IMPDH Ty2 - 100mU">
                                Inquiry
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>#E-Nov1-250</td>    
                        <td class="text-center"><strong>250 mU</strong></td>
                        <td class="price text-center">€ 1220.00</td>
                        <td class="text-end pe-3">
                            <a class="btn btn-primary" href="/inquiry?ref=K0709-01-2&product=Human IMPDH Ty2 - 250mU">
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
<section>
<div class="container mt-4">
<h3 class="novo-blue">IMPDH - a choice target for major therapeutic applications</h3>
<p><strong>Synonyms:</strong> inosine 5'-monophosphate dehydrogenase, IMP dehydrogenase</p>
<p><strong>Catalytic activity</strong><br> Inosine Monophosphate Dehydrogenase (IMPDH) converts inosine 5µ-monophosphate (IMP) to xanthosine 5µ-monophosphate (XMP) using NAD+ as a cofactor.</p>
<div class="d-flex justify-content-center">
<img class="col-lg-7" src="/app/static/img/IMPDH-reaction.png" alt="">
</div>
<p>The oxidation of IMP to XMP is considered as the pivotal step in the biosynthesis of guanine nucleotide, whose pool controls cell proliferation and many other major cellular processes(1). The decrease in guanine nucleotide resulting from IMPDH inhibition interrupts the nucleic acid synthesis in proliferating cells. The involvement of IMPDH in de novo guanine nucleotide biosynthesis makes IMPDH a crucial enzyme in cell proliferation and differentiation(2). IMPDH is recognized as a validated target for several major therapeutic areas. IMPDH inhibitors are exploited as antiviral (e.g. ribavirine), antiparasitic, antimicrobial, antileukemic, and immunosuppressive agents(2). IMPDH Type II is the predominant isoform of the enzyme and is selectively expressed in proliferating cells, including lymphocytes and tumor cells(2).</p>

<h6 class="mt-3">IMPDH in immunology</h6>
<p>IMPDH is highly active in lymphocytes. It is a validated target to treat immunological diseases and to induce immunosuppression (CellCept®, a mycophenolic acid (MPA) prodrug - Roche µ CHF1.85 Bn as an immunosuppressive agent in 2006, orphan drug designation in 2006 for Myasthenia Gravis; CellCept® reached positive results in Phase III trials in Lupus Nephritis). IMPDH is also recognized as an excellent target for the treatment of psoriasis, rheumatoid arthritis (RA), and systemic lupus erythematosus (SLE)(3).</p>
<h6 class="mt-3">IMPDH in oncology</h6>
<p>IMPDH, and particularly Type II, which is overexpressed in tumor cells, is considered as a highly potent target for cancer chemotherapy(1, 2, 4, 5). Several IMPDH inhibitors are under development for the treatment of Acute and Chronic Myelogenous Leukemia (AML, CML)(6), and other cancers (pancreas, colon, bladderï¿½). Additionally, it has been shown that the use of IMPDH inhibitors counteracts the drug resistance(7) that may appear in certain tumors. For instance, methotrexate resistance is directly related to the overexpression of IMPDH, whose inhibition restores the drug efficacy(8). Combination with other anti-cancer drugs extends the potential application of IMPDH inhibitors.</p>
<h6 class="mt-3">Current development of IMPDH inhibitors</h6>
<p>CellCept®, ribavirin, mizoribine, and tiazofurine are examples of currently used drugs that target IMPDH. Benzamide riboside, tiazofurine, and MPA are under development in Phase II/III in leukemia: results are judged very encouraging(8).
The IMPDH II atomic structure has been resolved and it provides a valuable background for further leads optimization(9). Besides nucleosides analogues, NCEs have been identified as IMPDH inhibitors(10, 11, 12, 13, 14) and enter development trials (e.g. AVN-944: Phase I in advanced hematologic malignancies, Phase II in pancreatic and other solid tumors).
All this demonstrates how promising new IMPDH inhibitors could be and why the inhibiting activity of compounds is worth being evaluated on such a highly pertinent target.</p>
</div>
<div class="container">
<div class="row justify-content-evenly">
<figure class="col-lg-4 col-6 inhibitors">
<figcaption class="text-center">
AVN-944
</figcaption>
<img class="w-100" src="/app/static/img/AVN-944.png" alt="">
</figure>
<figure class="col-lg-4 col-6 inhibitors">
<figcaption class="text-center">
VX-148
</figcaption>
<img class="w-100" src="/app/static/img/VX-148.png" alt="">
</figure>
<figure class="col-lg-4 col-6 inhibitors">
<figcaption class="text-center">
VX-497
</figcaption>
<img class="w-100" src="/app/static/img/VX-497.png" alt="">
</figure>
<figure class="col-lg-4 col-6 inhibitors">
<figcaption class="text-center">
MPA (mycophenolic acid)
</figcaption>
<img class="w-100" src="/app/static/img/MPA.png" alt="">
</figure>
<figure class="col-lg-4 col-6  inhibitors">
<figcaption class="text-center">
CellCept®
</figcaption>
<img class="w-100" src="/app/static/img/MMF.png" alt="">
</figure>
<figure class="col-lg-4 col-6 inhibitors">
<figcaption class="text-center">
BMS-337197
</figcaption>
<img class="w-100" src="/app/static/img/BMS-337197.png" alt="">
</figure>
<figure class="col-lg-4 col-6 inhibitors">
<figcaption class="text-center">
Tiazofurin
</figcaption>
<img class="w-100" src="/app/static/img/tiazofurin.png" alt="">
</figure>
<figure class="col-lg-4 col-6 inhibitors">
<figcaption class="text-center">
CellCept®
</figcaption>
<img class="w-100" src="/app/static/img/ribavirine.png" alt="">
</figure>
<figure class="col-lg-4 col-6 inhibitors">
<figcaption class="text-center">
Mizoribine
</figcaption>
<img class="w-100" src="/app/static/img/mizoribine.png" alt="">
</figure>
</div>
</div>
</section>
CONTENT;

addContent($page_content);
render();

?>

<style>
    .inhibitors {
        border: 1px solid silver;

        img {
            padding: 6px;
            aspect-ratio: 2;
        }
    }
</style>