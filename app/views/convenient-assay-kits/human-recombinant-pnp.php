<?php
global $title;
$title = "Human Recombinant PNP";

ob_start(); ?>
<meta name="keywords" content="Human Recombinant PNP, Purine Nucleoside Phosphorylase, PNP enzyme, PNP assay kit, PNP inhibitors, cancer therapy, autoimmune disease, antiviral drug target, enzymatic synthesis, NOVOCIB">
<meta name="description" content="Explore NOVOCIB's Human Recombinant Purine Nucleoside Phosphorylase (PNP) enzyme—an active therapeutic target for cancer, viral infections, and autoimmune diseases. Available in lyophilized form with direct assay kits for precise activity measurement.">
<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";

?>




<?= Banner::gen() ?>
<section class="container mt-5">
    <h2 class="underlinedTitle right"><span class="underlined novoblue right">Human PNP (EC 2.4.2.1)</span></h2>
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
                                    <i class="fa-solid fa-comment"></i>
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
                                    <i class="fa-solid fa-comment"></i>
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
                                    <i class="fa-solid fa-comment"></i>
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
                    <b>Purity:</b> controlled by SDS-PAGE.
                </p>
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
        <div class="row align-items-center my-5">
            <p class="col-10">
                Peldesine (BCX-34) was granted orphan drug status for the treatment of T-cell lymphoma and reached phase III as an immunomodulator for inflammatory autoimmune diseases. It has recently entered clinical trial for HIV infections(3).
            </p>
            <figure class="col-2">
                <img class="col-lg-10" src="/app/static/img/BCX-34.png" alt="">
                <figcaption class="text-center"><strong>BCX-34 (Peldesine)</strong></figcaption>
            </figure>
        </div>
        <div class="row align-items-center">
            <p class="col-10">
                Forodesine (BCX-1777) has US orphan drug status for the treatment of T-cell non-Hodgkin's lymphoma, including cutaneous T-cell lymphoma (CTCL), chronic lymphocytic leukaemia (CLL) and related leukaemias, including T-cell prolymphocytic leukaemia (PLL), adult T-cell leukaemia and hairy cell leukaemia, and for the treatment of acute lymphocytic leukaemia (ALL). Forodesine was also designed Orphan drug in Europe for ALL in December 2006, and for CTCL in February 2007(4).
            </p>
            <figure class="col-2">
                <img class="col-lg-10" src="/app/static/img/BCX-1777.png" alt="">
                <figcaption class="text-center"><strong>BCX-1777 (Forodesine)</strong></figcaption>
            </figure>
        </div>
        <p>PNP inhibitors are also investigated to prevent the cleavage, and the resulting deactivation of Nucleoside Analogues by PNP.</p>
        <p><i>Note: Protozoan parasites are auxotrophic for purine and have their own PNPs which have specific activities and properties that differ from the human PNP. Protozoan parasites PNPs are considered to be reasonable target against infection (e.g. Plasmodium falciparum)(5).</i> </p>
        <p><strong>PNP, a threat for therapeutic efficacy of Nucleoside Analogues </strong><br>
            <i>In vivo</i>, phosphorolysis is highly favoured over purine nucleoside synthesis and is coupled with two additional enzymatic reactions: oxidation of the liberated purine base by xanthine oxidase (XO) and its phosphoribosylation by hypoxanthine-guanine phosphoribosyltransferase (HGPRT)(6). Thus, PNP plays a key role in the salvage pathway of the purine metabolism, enabling the cell to utilize purine bases recovered from metabolized purine ribo- and deoxyribonucleosides to synthesize purine nucleotides.
            This phosphorolysis reaction of purine nucleosides by PNP has a direct impact on the therapeutic efficacy of Nucleoside Analogues. Antitumour or antiviral nucleoside analogues are likely to be cleaved by PNP before being phosphorylated by the cell nucleoside kinases and converted to the active nucleotide form. For instance, 2',3'-dideoxyguanosine (ddG)(7), 9-β-D-arabinofuranosyl guanine (AraG)(8) as well as one of its prodrug, Nelarabine (Arranon®, GSK)(9), which is intracellularly converted to AraG by Adenosine deaminase (ADA), are PNP resistant nucleoside analogues, whereas 2',3'-dideoxyinosine (ddI)(10) is easily cleaved in vivo by PNP. <br>
            Since acyclonucleoside analogues are particularly resistant to cleavage by PNP though phosphorylated by viral thymidine kinases (TK), they are generally considered as excellent candidates as antiviral agents (e.g. aciclovir, ganciclovir)(11).
        </p>
        <p>Note that Ganciclovir is not only PNP resistant, but is also a PNP inhibitor.</p>
        <p class="mb-5">
            <strong>PNP, a tool for enzymatic synthesis of Nucleoside Analogues</strong> <br>
            The reversible reaction catalyzed by PNP can be favorably exploited to synthesize nucleoside analogues, especially when chemical synthesis is difficult to prepare and/or gives low yields.
        </p>
    </div>
</section>