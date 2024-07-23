<?php
$title = "Human cytosolic 5'-nucleotidase II";
require_once "app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen());
$content_title = UnderlinedTitle::get("Human cytosolic 5'-nucleotidase II (cN-II) (E.C.3.1.3.5)", "novoblue", "center");
ob_start(); ?>
<div class="container mt-4">
    <?= $content_title ?>
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
                    <td> #E-Nov6-50</td>
                    <td class="text-center"><strong>50 mUnits</strong></td>
                    <td class="price text-center">€ 305.00</td>
                    <td class="text-end pe-3">
                        <a class="btn btn-primary" href="/inquiry?ref=Nov6-50&amp;product=cN-II 50mU">
                            Inquiry
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>#E-Nov6-100</td>
                    <td class="text-center"><strong>150 mUnits</strong></td>
                    <td class="price text-center">€ 650.00</td>
                    <td class="text-end pe-3">
                        <a class="btn btn-primary" href="/inquiry?ref=Nov6-100&amp;product=cN-II 100mU">
                            Inquiry
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <p class="text-muted text-center">
            <em>Pricing updated on July 23, 2024.</em>
            <br>
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
    <p class="mt-5"><span class="novocib">NOVOCIB</span>'S human cytosolic IMP/GMP specific 5'-nucleotidase/phosphotransferase II (cN-II) is a pure and active protein of 65kDa cloned by RT-PCR amplification of mRNA extracted from human hepatoma cells and expressed in E.coli. The sequence of the cloned NT5C2 gene (GenBank accession number P49902) was confirmed by DNA sequencing (100% identity). <br>
        Cytosolic 5'-nucleotidase II is one of the seven known mammalian nucleotidases(1) that specifically catalyzes the dephosphorylation of 6-hydroxypurine nucleoside 5'-monophosphates (IMP, dIMP, GMP, dGMP) and regulates cellular pool of IMP and GMP(2,3). The enzyme also acts as a phosphotransferase catalyzing the transfer of a phosphate from nucleoside monophosphate to a nucleoside acceptor ' preferentially inosine and deoxyinosine. Unlike the other 5'-nucleotidases, cN-II is allosterically regulated by adenine/guanine nucleotides and 2,3-biphosphoglycerate(4). <br>
        In addition, cytosolic 5'-nucleotidase II phosphorylates anti-viral and anti-tumour nucleoside analogues such as 2'3'-dideoxyinosine, carbovir(5), acyclovir(6) and ribavirin(7).
    </p>
    <p><b>Synonyms:</b> cytosolic 5'-nucleotidase/phosphotransferase, High Km 5'-nucleotidase (hkm-NT), cytosolic purine 5µ-nucleotidase (purine 5'-NT), IMP/GMP-specific 5µ-nucleotidase</p>
    <p class="my-5 mb-5 text-end">Download <a target="_blank" href="/app/documents/Novocib E-Nov6.pdf"> <strong>Human cytosolic 5'-nucleotidase II <i class="fa-regular fa-file-pdf"></i></strong></a><strong> </strong>(User manual)</p>
    <div class="row mt-5">
        <div class="col-lg-6">
            <p><b>Assay condition:</b> Phosphotransferase activity of human recombinant cN-II was followed at 37°C, in 100mM Tris-HCl pH 9; 100mM KCl, 20mM MgCl2, 0.5mM KH2PO4, 5mM DTT, 5mM NAD, 50mU/mL IMPDH (NovoCIB). 5mM GMP was used as phosphate donor and 5mM inosine as - phosphate acceptor. The formation of IMP from inosine was followed at 340nm through coupling to recombinant IMP-dehydrogenase (IMPDH, NovoCIB). In the presence of NAD, IMPDH catalyzes irreversible conversion of IMP to XMP with concomitant reduction of NAD to NADH2 (specific absorbance at 340nm).</p>
            <div class="col-lg-8 mx-auto">
                <img class="w-100" src="/app/static/img/cNII-phosphotransferase.jpg" alt="cNII Phosphotransferase">
            </div>
        </div>
        <div class="col-lg-6">
            <P class="mb-5">
                <b>Assay condition:</b> 5'-nucleotidase activity of cN-II is followed in an irreversible spectrophotometric assay using coupled purine nucleoside phosphorylase - xanthine dehydrogenase system (2,5 mU/ml each). Assays are carried out at 37'C, at 50mM Tris-HCl pH7,6; 100mM KCl, 20mM MgCl2, 500'M KH2PO4, 5mM DTT, 119 nM cN-II and various concentrations of IMP. Reaction is followed at 295 nm. IMP is purchased from MP Biochemicals. PNP and XDH are produced and purified by NovoCIB.
            </P>
            <div class="col-lg-8 mx-auto">
                <img class="w-100" src="/app/static/img/cN-II-Kinetics.png" alt="cN-II Kinetics">
            </div>
        </div>
    </div>

</div>
<?php $page_content = ob_get_clean();

addContent($page_content);
render();
