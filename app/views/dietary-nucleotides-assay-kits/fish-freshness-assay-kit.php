<?php
$title = "Fish freshness assay kit";

// META TAGS 
ob_start(); ?>
<meta name="description" content="">
<meta name="keywords" content="">
<?php $metas = ob_get_clean();


require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>

<?= Banner::gen() ?>
<section class="container mt-5">
    <h2 class="underlinedTitle center"><span class="underlined novoblue">IMP, Inosine and Hypoxanthine Assay Kit</span></h2>
    <div class="row">
        <div class="col-lg-6">
            <p>
                Fish muscle is particularly rich in ATP, which is a most abundant muscle metabolite after amino acids. Post-mortem transformation of ATP in fish muscle is a well-documented process that has significant implications for food quality and shelf life.
            </p>
            <p style="font-weight: 600;">
                Post-Mortem ATP Degradation Pathway in Fish Muscle.
            </p>
            <p class="fs-5 fw-bold">
                ATP ➜ ADP ➜ AMP ➜&nbsp;<span class="text-primary">IMP<i class="fa-solid fa-arrow-down"></i></span>&nbsp;➜ Inosine ➜ <span class="text-danger">Hypoxanthine<i class="fa-solid fa-arrow-up"></i></span>
            </p>

            <p>
                The degree to which ATP breaks down into IMP, inosine, and hypoxanthine is a key indicator of fish freshness (Saito et al 1959). Kit is suitable for use with fresh, frozen, and cooked fish and seafood products, including canned fish.
            </p>
        </div>
        <div class="col-lg-6">
        </div>
        <div>
            <h4 class="mt-4">Principle</h4>
            <p>
                <span class="fw-bold">The PRECICE® IMP, Inosine, and Hypoxanthine Assay Kit</span> is a colorimetric enzymatic assay allowing the conversion of measurement of concentration of three nucleotides, formed from ATP: IMP, inosine, and hypoxanthine, in a single sample.
            </p>
            <div class="d-flex justify-content-center text-center">
                <div class="row">
                    <div class="col-3" style="width: 150px;">
                        <span>IMP</span><br>
                        <span class="arrow">↓</span><br>
                        <span>NADH2</span>
                    </div>
                    <div class="col-3" style="width: 150px;">
                        <span>Inosine</span><br>
                        <span class="arrow">↓</span><br>
                        <span>NADH2</span>
                    </div>
                    <div class="col-3" style="width: 150px;">
                        <span>Hypoxanthine</span><br>
                        <span class="arrow">↓ </span><br>
                        <span>NADH2</span>
                    </div>
                </div>
            </div>
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
                                <a
                                    class="btn btn-primary"
                                    href="/inquiry?ref=K0709-01-2&product=Human IMPDH Ty2 - 5mU">
                                    Inquiry
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#E-Nov1-100</td>
                            <td class="text-center"><strong>100 mU</strong></td>
                            <td class="price text-center">€ 495.00</td>
                            <td class="text-end pe-3">
                                <a
                                    class="btn btn-primary"
                                    href="/inquiry?ref=K0709-01-2&product=Human IMPDH Ty2 - 100mU">
                                    Inquiry
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#E-Nov1-250</td>
                            <td class="text-center"><strong>250 mU</strong></td>
                            <td class="price text-center">€ 1220.00</td>
                            <td class="text-end pe-3">
                                <a
                                    class="btn btn-primary"
                                    href="/inquiry?ref=K0709-01-2&product=Human IMPDH Ty2 - 250mU">
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
                    <strong>
                        You can ask us for a quotation
                        <a href="mailto:contact@novocib.com">here</a>
                        or write at
                        <a href="mailto:contact@novocib.com">contact@novocib.com</a>
                    </strong>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-3 mt-3">
    <div class="container">
        <p>
            <strong>Assay condition:</strong>
            KH2PO4 0.1M, pH8.8, NAD 250µM, DTT 2.5mM, 2.5mU/ml of human recombinant IMPDH II, Incubation
            at 37µC. Reaction started by adding IMP at 250µM final concentration. NADH formation was
            followed in an iEMS Reader MF (Labsystems) plate reader at 340nm.
        </p>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-4 my-4">
                <img height="400" src="/app/static/img/IMPDH-Gel.png" alt="PCR IMPDH Gel" />
            </div>
            <div class="col-lg-8 my-4">
                <img height="400" src="/app/static/img/IMPDH-IC50.png" alt="IMPDH 2 inhibition by MPA" />
            </div>
        </div>
        <p class="text-end mt-4">
            <strong>
                Download this Document:
                <a target="_blank" href="/app/documents/NovoCIB E-Nov1.pdf">
                    "NOVOCIB's Human Recombinant IMPDH"
                    <i class="fa-regular fa-file-pdf"></i>
                </a>
            </strong>
        </p>
        <p class="text-end">
            <strong>
                Download this Document:
                <a target="_blank" href="/app/documents/NovoCIB IMPDH Services.pdf">
                    "NOVOCIB - IMPDH Products & Services"
                    <i class="fa-regular fa-file-pdf"></i>
                </a>
            </strong>
        </p>
    </div>
</section>
<section>
    <div class="container mt-4">
        <h3 class="novo-blue">IMPDH - a choice target for major therapeutic applications</h3>
        <p>
            <strong>Synonyms:</strong>
            inosine 5'-monophosphate dehydrogenase, IMP dehydrogenase
        </p>
        <p>
            <strong>Catalytic activity</strong>
            <br />
            Inosine Monophosphate Dehydrogenase (IMPDH) converts inosine 5µ-monophosphate (IMP) to
            xanthosine 5µ-monophosphate (XMP) using NAD+ as a cofactor.
        </p>
        <div class="d-flex justify-content-center">
            <img class="col-lg-7" src="/app/static/img/IMPDH-reaction.png" alt="IMPDH Reaction Structure" />
        </div>
        <p>
            The oxidation of IMP to XMP is considered as the pivotal step in the biosynthesis of guanine
            nucleotide, whose pool controls cell proliferation and many other major cellular processes(1).
            The decrease in guanine nucleotide resulting from IMPDH inhibition interrupts the nucleic acid
            synthesis in proliferating cells. The involvement of IMPDH in de novo guanine nucleotide
            biosynthesis makes IMPDH a crucial enzyme in cell proliferation and differentiation(2). IMPDH
            is recognized as a validated target for several major therapeutic areas. IMPDH inhibitors are
            exploited as antiviral (e.g. ribavirine), antiparasitic, antimicrobial, antileukemic, and
            immunosuppressive agents(2). IMPDH Type II is the predominant isoform of the enzyme and is
            selectively expressed in proliferating cells, including lymphocytes and tumor cells(2).
        </p>

        <h6 class="mt-3">IMPDH in immunology</h6>
        <p>
            IMPDH is highly active in lymphocytes. It is a validated target to treat immunological
            diseases and to induce immunosuppression (CellCept®, a mycophenolic acid (MPA) prodrug - Roche
            µ CHF1.85 Bn as an immunosuppressive agent in 2006, orphan drug designation in 2006 for
            Myasthenia Gravis; CellCept® reached positive results in Phase III trials in Lupus Nephritis).
            IMPDH is also recognized as an excellent target for the treatment of psoriasis, rheumatoid
            arthritis (RA), and systemic lupus erythematosus (SLE)(3).
        </p>
        <h6 class="mt-3">IMPDH in oncology</h6>
        <p>
            IMPDH, and particularly Type II, which is overexpressed in tumor cells, is considered as a
            highly potent target for cancer chemotherapy(1, 2, 4, 5). Several IMPDH inhibitors are under
            development for the treatment of Acute and Chronic Myelogenous Leukemia (AML, CML)(6), and
            other cancers (pancreas, colon, bladderï¿½). Additionally, it has been shown that the use of
            IMPDH inhibitors counteracts the drug resistance(7) that may appear in certain tumors. For
            instance, methotrexate resistance is directly related to the overexpression of IMPDH, whose
            inhibition restores the drug efficacy(8). Combination with other anti-cancer drugs extends the
            potential application of IMPDH inhibitors.
        </p>
        <h6 class="mt-3">Current development of IMPDH inhibitors</h6>
        <p>
            CellCept®, ribavirin, mizoribine, and tiazofurine are examples of currently used drugs that
            target IMPDH. Benzamide riboside, tiazofurine, and MPA are under development in Phase II/III
            in leukemia: results are judged very encouraging(8). The IMPDH II atomic structure has been
            resolved and it provides a valuable background for further leads optimization(9). Besides
            nucleosides analogues, NCEs have been identified as IMPDH inhibitors(10, 11, 12, 13, 14) and
            enter development trials (e.g. AVN-944: Phase I in advanced hematologic malignancies, Phase II
            in pancreatic and other solid tumors). All this demonstrates how promising new IMPDH
            inhibitors could be and why the inhibiting activity of compounds is worth being evaluated on
            such a highly pertinent target.
        </p>
    </div>
    <div class="container">
        <div class="row justify-content-evenly">
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">AVN-944</figcaption>
                <img class="w-100" src="/app/static/img/AVN-944.png" alt="AVN-944 Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">VX-148</figcaption>
                <img class="w-100" src="/app/static/img/VX-148.png" alt="AVN-944 Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">VX-497</figcaption>
                <img class="w-100" src="/app/static/img/VX-497.png" alt="VX-497 Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">MPA (mycophenolic acid)</figcaption>
                <img class="w-100" src="/app/static/img/MPA.png" alt="MPA Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">CellCept®</figcaption>
                <img class="w-100" src="/app/static/img/MMF.png" alt="MMF Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">BMS-337197</figcaption>
                <img class="w-100" src="/app/static/img/BMS-337197.png" alt="BMS-337197 Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">Tiazofurin</figcaption>
                <img class="w-100" src="/app/static/img/tiazofurin.png" alt="Tiazofurin Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">CellCept®</figcaption>
                <img class="w-100" src="/app/static/img/ribavirine.png" alt="Ribavirine Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">Mizoribine</figcaption>
                <img class="w-100" src="/app/static/img/mizoribine.png" alt="Mizoribine Structure" />
            </figure>
        </div>
    </div>
</section>

<section class="container">
    <div class="referances my-5 row justify-content-center">
        <h6 class="ps-5"><i>References (with external links to PubMed) </i><i class="novo-blue fa-solid fa-arrow-up-right-from-square"></i></h6>
        <div class="col-2">
            <img class="w-100 pt-3" src="/app/static/img/pubmed.png" alt="pubmed logo">
        </div>
        <div class="col-8">
            <ol>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/16919497" title="Go to PubMed">L. Hedstrom and L. Gan (2006): IMP dehydrogenase: structural schizophrenia and an unusual base <em>Curr. Opin. Chem. Biol.</em> 10(5), 520-525</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/11668509" title="Go to PubMed">B. J. Barnes <em>et al.</em> (2001): Mechanism of action of the antitumor agents 6-benzoyl-3,3-disubstituted-1,5-diazabicyclo[3.1.0]hexane-2,4-diones: Potent inhibitors of human type II inosine 5'-monophosphate dehydrogenase <em>Int. J. Cancer.</em> 94(2), 275-281</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/16483769" title="Go to PubMed">R. E. Beevers <em>et al.</em> (2006): Low molecular weight indole fragments as IMPDH inhibitors <em>Bioorg. Med. Chem. Lett.</em> 16(9), 2535-2538</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/17659481" title="Go to PubMed">L. Chen and K. W. Pankiewicz (2007): Recent development of IMP dehydrogenase inhibitors for the treatment of cancer <em>Curr. Opin. Drug Discov. Devel.</em> 10(4):403-12</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/11454943" title="Go to PubMed">B. J. Barnes <em>et al.</em> (2001): Induction of Tmolt4 Leukemia Cell Death by 3,3-Disubstituted-6,6-pentamethylene-1,5-diazabicyclo[3.1.0]hexane-2,4-diones: Specificity for Type II Inosine 5'-Monophosphate Dehydrogenase <em>J. Pharm. Exp. Therap.</em> 298(2), 790-796</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/15380335" title="Go to PubMed">K. Malek <em>et al.</em> (2004): Effects of the IMP-dehydrogenase inhibitor, Tiazofurin, in bcr-abl positive acute myelogenous leukemia <em>Leukemia Research</em> 28, 1125-1136</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/16609701" title="Go to PubMed">L. Hong <em>et al.</em> (2006): ZNRD1 mediates resistance of gastric cancer cells to methotrexate by regulation of IMPDH2 and Bcl-2 <em>Biochem. Cell Biol.</em> 84(2): 199-206</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/15670151" title="Go to PubMed">S. Peñuelas <em>et al.</em> (2005): Modulation of IMPDH2, survivin, topoisomerase I and vimentin increases sensitivity to methotrexate in HT29 human colon cancer cells <em>FEBS</em> 272, 696-710</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/10097070" title="Go to PubMed">T. D. Colby <em>et al.</em> (1999): Crystal structure of human type II inosine monophosphate dehydrogenase: implications for ligand binding and drug design <em>PNAS</em>, 96(7), 3531-3536</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/12781195" title="Go to PubMed">E. J. Iwanowicz <em>et al.</em> (2003): Inhibitors of inosine monophosphate dehydrogenase: SARs about the N-[3-Methoxy-4-(5-oxazolyl)phenyl moiety <em>Bioorg. Med. Chem. Lett.</em> 13(12), 2059-2063 </a></li>
                <li><a href="http://www.ncbi.nlm.nih.gov/pubmed/12183689" target="_blank" title="Go to PubMed">J. Jain <em>et al.</em> (2002): Characterization of pharmacological efficacy of VX-148, a new potent immunosuppressive inosine 5'-monophosphate dehydrogenase inhibitor <em>J. Pharm. Exp. Therap.</em> 302(3), 1272-1277</a></li>
                <li><a href="http://www.ncbi.nlm.nih.gov/pubmed/14757177" target="_blank" title="Go to PubMed">J. Jain <em>et al.</em> (2004): Regulation of inosine monophosphate dehydrogenase type I and type II isoforms in human lymphocytes <em>Biochem. Pharmacol.</em> 67(4), 767-776</a></li>
                <li><a href="http://www.ncbi.nlm.nih.gov/pubmed/15664851" target="_blank" title="Go to PubMed">G. M. Buckley <em>et al.</em> (2005): Quinazolinethiones and quinazolinediones, novel inhibitors of inosine monophosphate dehydrogenase: synthesis and initial structure–activity relationships <em>Bioorg. Med. Chem. Lett.</em> 15(3), 751-754</a></li>
                <li><a href="http://www.ncbi.nlm.nih.gov/pubmed/14505670" target="_blank" title="Go to PubMed">T. G. Murali Dhar <em>et al.</em> (2003): 3-Cyanoindole-Based Inhibitors of Inosine Monophosphate Dehydrogenase: Synthesis and Initial Structure–Activity Relationships <em>Bioorg. Med. Chem. Lett.</em> 13(20), 3557-3560</a></li>
            </ol>
        </div>
    </div>
</section>
<style>
    .arrow {
        height: 100px;
    }
</style>