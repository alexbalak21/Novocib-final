<?php
global $title;
$title = "Human cytosolic 5'-nucleotidase II";

ob_start(); ?>
<meta name="keywords" content="buy 5'-nucleotidase, recombinant enzyme, cytosolic 5'-nucleotidase, E.C. 3.1.3.5, phosphotransferase, high Km 5'-nucleotidase, HKM-NT, cytosolic purine 5'-nucleotidase, purine 5'-NT, IMP/GMP-specific 5'-nucleotidase, ribavirin phosphorylation, research enzyme">
<meta name="description" content="Novocib's cloned human cytosolic 5'-nucleotidase II is an active, purified enzyme characterized by its capacity to dephosphorylate GMP and IMP, as well as phosphorylate natural nucleosides like inosine and the antiviral nucleoside analog ribavirin.">
<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>

<?= Banner::gen() ?>

<div class="container mt-4">
    <h2 class="underlinedTitle center"><span class="underlined novoblue center">Human cytosolic 5'-nucleotidase II (cN-II) (E.C.3.1.3.5)</span></h2>
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
                        <a class="btn btn-primary" href="/inquiry?ref=Nov6-50&amp;product=cN-II 50mU">Inquiry <i class="fa-solid fa-comment"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>#E-Nov6-100</td>
                    <td class="text-center"><strong>100 mUnits</strong></td>
                    <td class="price text-center">€ 490.00</td>
                    <td class="text-end pe-3">
                        <a class="btn btn-primary" href="/inquiry?ref=Nov6-100&amp;price=490&amp;product=cN-II 100mU">Inquiry <i class="fa-solid fa-comment"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>

        <p class="text-muted text-center"><em>Pricing updated on October 1st, 2025.</em></p>
        <p class="text-center">
            <strong>
                Kit is provided in stable lyophilized form and
                <span class="text-danger">shipped without dry ice</span>
            </strong>
        </p>
        <p class="my-4 text-center">
            <strong>Need more details or a custom quote? <a href="mailto:contact@novocib.com">Contact us</a> today at <a href="mailto:contact@novocib.com">contact@novocib.com</a>.</strong>
        </p>
    </div>

    <p class="mt-5">
        <span class="novocib">NOVOCIB</span>'S human cytosolic IMP/GMP-specific 5'-nucleotidase/phosphotransferase II (cN-II) is a pure and active protein of 65kDa cloned by RT-PCR amplification of mRNA extracted from human hepatoma cells and expressed in <em>E.coli</em>. The sequence of the cloned NT5C2 gene (GenBank accession number P49902) was confirmed by DNA sequencing (100% identity). <br>
        Cytosolic 5'-nucleotidase II specifically catalyzes the dephosphorylation of 6-hydroxypurine nucleoside 5'-monophosphates (IMP, dIMP, GMP, dGMP) and regulates cellular pools of IMP and GMP. The enzyme also acts as a phosphotransferase catalyzing phosphate transfer from nucleoside monophosphates to nucleoside acceptors, preferentially inosine and deoxyinosine. Unlike other 5'-nucleotidases, cN-II is allosterically regulated by adenine/guanine nucleotides and 2,3-biphosphoglycerate. <br>
        In addition, cN-II phosphorylates antiviral and antitumor nucleoside analogues such as 2'3'-dideoxyinosine, carbovir, acyclovir, and ribavirin.
    </p>

    <p><b>Synonyms:</b> cytosolic 5'-nucleotidase/phosphotransferase, High Km 5'-nucleotidase (HKM-NT), cytosolic purine 5'-nucleotidase (purine 5'-NT), IMP/GMP-specific 5'-nucleotidase.</p>
    <p class="my-5 mb-5 text-end">
        Download <a target="_blank" href="/app/documents/Novocib E-Nov6.pdf">
            <strong>Human cytosolic 5'-nucleotidase II <i class="fa-regular fa-file-pdf"></i></strong>
        </a> (User manual)
    </p>

    <div class="row mt-5">
        <div class="col-lg-6">
            <p><b>Assay condition:</b></p>
            <ul>
                <li>Temperature: 37°C</li>
                <li>Buffer: 100mM Tris-HCl pH 9</li>
                <li>Reagents: 100mM KCl, 20mM MgCl2, 0.5mM KH2PO4, 5mM DTT, etc.</li>
                <li>Phosphate donor: 5mM GMP</li>
                <li>Phosphate acceptor: 5mM inosine</li>
                <li>Method: Coupling to recombinant IMP-dehydrogenase (IMPDH, NovoCIB)</li>
            </ul>
            <img class="w-100" src="/app/img/cNII-phosphotransferase.jpg" alt="Illustration of phosphotransferase activity of cN-II enzyme">
        </div>
        <div class="col-lg-6">
            <p><b>Assay condition:</b></p>
            <ul>
                <li>Temperature: 37°C</li>
                <li>Buffer: 50mM Tris-HCl pH7.6</li>
                <li>Reagents: 100mM KCl, 20mM MgCl2, 500µM KH2PO4, etc.</li>
                <li>Method: Coupling with purine nucleoside phosphorylase - xanthine dehydrogenase system.</li>
            </ul>
            <img class="w-100" src="/app/img/cN-II-Kinetics.png" alt="Illustration of cN-II enzyme kinetics">
        </div>
    </div>
</div>

<div class="container">
    <div class="referances my-5">
        <h5 class="ms-5 pt-4 pb-3 novo-blue">References (with links to PubMed)</h5>
        <ol>
            <li>
                <a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/12947102">V. Bianchi and J. Spychala (2003): Mammalian 5'-nucleotidases. <em>J. Biol. Chem.</em> 278(47), 46195-8.</a>
            </li>
            <li>
                <a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/9371705">S. Allegrini <em>et al.</em> (1997): Bovine cytosolic IMP/GMP-specific 5'-nucleotidase: cloning and expression of active enzyme in <em>Escherichia coli</em>. <em>Biochem. J.</em> 328(Pt2), 483-487.</a>
            </li>
            <li>
                <a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/18404470">P. L. Ipata and M. G. Tozzi (2006): Recent advances in structure and function of cytosolic IMP-GMP specific 5'-nucleotidase II (cN-II). <em>Purinergic Signal.</em> 2(4), 669-675.</a>
            </li>
            <li>
                <a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/2848805">J. Spychala <em>et al.</em> (1988): High Km Soluble 5'-nucleotidase from human placenta. <em>J. Biol. Chem.</em> 263(35), 18759-65.</a>
            </li>
            <li>
                <a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/2549385">M. A. Johnson and A. Fridland (1989): Phosphorylation of 2',3'-dideoxyinosine by cytosolic 5'-nucleotidase of human lymphoid cells. <em>Mol. Pharmacol.</em> 36(2), 291-295.</a>
            </li>
            <li>
                <a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/2991214">P. M. Keller (1985): Cytoplasmic 5'-nucleotidase catalyzes acyclovir phosphorylation. <em>J. Biol. Chem.</em> 260(15), 8664-7.</a>
            </li>
            <li>
                <a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/15917509">J. Z. Wu <em>et al.</em> (2005): Phosphorylation of ribavirin and viramidine by adenosine kinase and cytosolic 5'-nucleotidase II: Implications for ribavirin metabolism in erythrocytes. <em>Antimicrob. Agents Chemother.</em> 49(6), 2164-71.</a>
            </li>
        </ol>
    </div>
</div>