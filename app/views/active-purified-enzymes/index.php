<?php
global $title;
$title = "Active Purified Enzymes";

ob_start(); ?>
<meta name="keywords" content="active purified enzymes, nucleotide metabolism, nucleoside kinases, purine metabolism enzymes, bacterial bioluminescence, recombinant enzymes, NOVOCIB, drug discovery tools, IMPDH, ADK, HGPRT, FMN reductase, luciferase">
<meta name="description" content="Discover NOVOCIB's portfolio of active purified enzymes including nucleoside kinases, purine metabolism enzymes, and bacterial bioluminescence tools—ideal for drug discovery and nucleotide metabolism research.">
<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>

<?= Banner::gen("/app/img/enzymes.jpg") ?>

<div class="container mt-5 mb-5">
    <h2 class="underlinedTitle right"><span class="underlined novoblue right">Nucleoside Kinase Enzymes</span></h2>
    <h2 class="novo-blue text-center"></h2>
    <p class="mb-4">
        <b class="novo-blue">NOVOCIB</b> offers a comprehensive portfolio of <strong>active human recombinant nucleoside kinases</strong> and other <strong>enzymes involved in nucleotide metabolism</strong>.
        These high-quality enzymes are essential tools for <strong>drug discovery, antiviral and anticancer research</strong>, and the study of <strong>nucleoside and nucleotide metabolism pathways</strong>.
        Available in lyophilized form, NOVOCIB's enzymes support reliable and reproducible <strong>in vitro phosphorylation assays</strong> and <strong>biochemical screening</strong>.
    </p>



    <div class="table-responsive">
        <table class="table table-bordered text-center align-middle">
            <thead class="table-secondary">
                <tr>
                    <th></th>
                    <th><a href="/active-purified-enzymes/recombinant-adenosine-kinase" title="Adenosine Kinase" class="text-primary fw-bold"><em>ADK</em> enzyme <i class="fa-solid fa-arrow-up-right-from-square"></i></a></th>
                    <th><a href="/active-purified-enzymes/recombinant-deoxycytidine-kinase" title="Deoxycytidine Kinase" class="text-primary fw-bold"><em>dCK</em> enzyme <i class="fa-solid fa-arrow-up-right-from-square"></i></a></th>
                    <th><a href="/active-purified-enzymes/human-ump-cmp-kinase" title="UMP-CMP Kinase" class="text-primary fw-bold"><em>CMK</em> enzyme <i class="fa-solid fa-arrow-up-right-from-square"></i></a></th>
                    <th><a href="/active-purified-enzymes/cn-ii" title="5'-nucleotidase" class="text-primary fw-bold"><em>cN-II</em> enzyme <i class="fa-solid fa-arrow-up-right-from-square"></i></a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="text-primary">Natural substrates</th>
                    <td>Adenosine<br>Inosine</td>
                    <td>Deoxycytidine<br>Cytidine<br>Deoxyadenosine<br>Deoxyguanosine</td>
                    <td>dCMP<br>CMP<br>UMP</td>
                    <td>Deoxyinosine<br>Inosine</td>
                </tr>
                <tr>
                    <th class="text-primary">Nucleoside analogues substrates</th>
                    <td>Ribavirin<br>Tubercidin<br>Mizoribin</td>
                    <td>Cladribine<br>Fludarabine<br>Gemcitabine (dFdC)<br>Lamivudine<br>Aracytidine (araC)<br>Fluorodeoxyuridine</td>
                    <td>dFdCMP<br><span class="text-muted">(Gemcitabine monophosphate)</span><br>3TCMP<br>araCMP<br><span class="text-muted">(Aracytidine monophosphate)</span><br>Adefovir (PMEA)</td>
                    <td>Dideoxyinosine<br>Ribavirin<br>Acyclovir</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p class="text-lg-end text-center mt-2 mb-3"><i class="fa-solid fa-download"></i> Download our brochure: <a target="_blank" href="/app/documents/Novocib_Nucleoside_kinases.pdf">Novocib Nucleoside kinases <i class="fa-solid fa-file-pdf"></i></a></p>

    <p>
        Nucleoside analogues have proven to be a highly successful class of anti-cancer and anti-viral drugs.
        Their therapeutic efficacy depends on intracellular phosphorylation. Two cellular nucleoside kinases—
        <strong>deoxycytidine kinase (dCK)</strong> and <strong>UMP-CMP kinase (CMK)</strong>—are critical for the phosphorylation of cytidine analogues.
        These enzymes catalyze the first two steps in activating potent anti-cancer and anti-viral agents such as
        <em>1-β-D-arabinofuranosylcytosine (araC, aracytidine)</em>,
        <em>2',2'-difluorodeoxycytidine (dFdC, gemcitabine)</em>, and
        <em>β-D-2',3'-dideoxycytidine (ddC)</em>.
    </p>

    <p>
        Both kinases also phosphorylate unnatural L-nucleosides, including
        <em>β-L-2',3'-dideoxy-3'-thiacytidine (L-SSdC, 3-TC or lamivudine)</em>.
        Kinetic constants for araC, dFdC, and 3TC phosphorylation by recombinant dCK and CMK have been published.
        Comparing the phosphorylation profiles of new nucleoside analogues with those of established drugs
        provides a rational basis for selecting analogues with superior therapeutic potential.
    </p>
    <p>
        To characterize the phosphorylation properties of new nucleoside analogues,
        <b class="novo-blue">NOVOCIB</b> has developed human recombinant <b>dCK</b> and <b>CMK</b> nucleoside phosphorylation assays.
        As shown in <em>Table 1</em>, the <b>CMK assay</b> must be performed using monophosphate forms of nucleoside analogues,
        which requires preliminary phosphorylation and purification—an often time-consuming step.
    </p>

    <p>
        To streamline this process, NOVOCIB has introduced a <strong>coupled dCK-CMK nucleoside phosphorylation assay</strong>,
        which delivers in a single step critical insights into both <strong>dCK</strong> and <strong>CMK</strong> substrate properties
        of the nucleoside analogue.
    </p>



</div>
<section class="mb-5">
    <div class="container">
        <h2>Purine Metabolism Enzymes</h2>
        <div class="table-responsive">
            <table class="purine w-100">
                <tr>
                    <td class="col-2">
                        <h5><a href="/active-purified-enzymes/impdh-recombinant-enzyme">IMPDH <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h5>
                    </td>
                    <td class="col-5">Inosine Monophosphate Dehydrogenase (EC 1.1.1.205)</td>
                    <td class="col-5">Human Type II, recombinant, expressed in E.coli Bacterial (Staphylococcus aureus) recombinant, expressed in E.coli</td>
                </tr>
                <tr>
                    <td class="col-2">
                        <h5><a href="/convenient-assay-kits/human-recombinant-pnp">PNP <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h5>
                    </td>
                    <td>Purine Nucleoside Phosphorylase (EC 2.4.2.1)</td>
                    <td>Human recombinant, expressed in E.coli</td>
                </tr>

                <tr>
                    <td class="col-2">
                        <h5><a href="/active-purified-enzymes/human-recombinant-hgprt">HGPRT <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h5>
                    </td>
                    <td>Hypoxanthine-guanine phosphoribosyltransferase (EC 2.4.2.8)</td>
                    <td>Human recombinant, expressed in E.coli</td>
                </tr>
            </table>
            <p class="mt-4 text-end d-none"> <strong>Know more about <span class="novo-blue">NOVOCIB'S</span> <a href="">Purine Metabolism Enzymes</a></strong></p>
        </div>
</section>
<section class="bg-light mb-5 py-4">
    <div class="container">

        <h2>Nucleoside Kinases</h2>
        <div class="table-responsive">
            <table class="purine w-100">
                <tr>
                    <td class="col-2">
                        <h5><a href="/active-purified-enzymes/recombinant-adenosine-kinase">ADK <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h5>
                    </td>
                    <td class="col-5"> Adenosine Kinase (EC 2.7.1.20)</td>
                    <td class="col-5">Human, recombinant, expressed in E.coli</td>
                </tr>
                <tr>
                    <td class="col-2">
                        <h5><a href="/active-purified-enzymes/recombinant-deoxycytidine-kinase">dCK <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h5>
                    </td>
                    <td>Deoxycytidine Kinase (EC 2.7.1.74)</td>
                    <td>Human recombinant, expressed in E.coli</td>
                </tr>
                <tr>
                    <td class="col-2">
                        <h5><a href="/active-purified-enzymes/human-ump-cmp-kinase">CMK <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h5>
                    </td>
                    <td>UMP-CMP Kinase (EC 2.7.4.14)</td>
                    <td>Human recombinant, expressed in E.coli</td>
                </tr>
                <tr>
                    <td class="col-2">
                        <h5><a href="/active-purified-enzymes/cn-ii">cN-II <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h5>
                    </td>
                    <td>Cytosolic 5'-nucleotidase II (EC 3.1.3.5)</td>
                    <td>Human recombinant, expressed in E.coli</td>
                </tr>
            </table>
            <p class="mt-4 text-end d-none"> <strong>Know more about <span class="novo-blue">NOVOCIB'S</span> <a href="">Nucleoside Kinases</a></strong></p>
        </div>
</section>
<section class="container">
    <h2>Bacterial Bioluminescence Enzymes</h2>
    <div class="table-responsive">
        <table class="purine w-100">
            <tr>
                <td class="col-3">
                    <h5><a href="/bacterial-luciferase">Bacterial Luciferase <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h5>
                </td>
                <td class="col-3">(EC 1.14.14.3)</td>
                <td class="col-6">Bacterial, produced from a selected strain of Photobacterium phosphoreum</td>
            </tr>
            <tr>
                <td>
                    <h5><a href="/active-purified-enzymes/fmn-reductase">FMN Reductase <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h5>
                </td>
                <td>(EC 1.5.1.29)</td>
                <td>Bacterial recombinant, E.coli</td>
            </tr>
        </table>
    </div>
    <p class="mt-4 mb-3">Bacterial bioluminescence consists in a ligh-emitting reaction where a long-chain aliphatic aldehyde is oxidized in the presence of molecular oxygen and reduced flavin mononucleotide (FMNH2). This reaction is catalyzed by bacterial luciferase.</p>
    <p><strong class="novo-blue">NOVOCIB</strong> offers a highly pure bacterial luciferase from Photobacterium phosphoreum and a recombinant FMN-Reductase which, when coupled to bacterial luciferase in vitro, is able to significantly increase the sensitivity and allow a better control of signal intensity and duration.</p>
    <p class="mt-4 text-end d-none"> <strong>Know more about <span class="novo-blue">NOVOCIB'S</span> <a href=""> Bacterial Bioluminescence Enzymes</a></strong></p>
</section>