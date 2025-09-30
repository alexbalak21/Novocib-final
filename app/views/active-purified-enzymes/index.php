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
<div class="container mt-5">
    <h2 class="underlinedTitle right"><span class="underlined novoblue right">Active Purified Enzymes</span></h2>
    <p><strong class="novo-blue">NOVOCIB</strong> produces active nucleoside kinases and other nucleotide metabolism enzymes. This portfolio of enzymes represents a unique range of powerful tools for Drug Discovery and research in the field of nucleoside and nucleotide metabolism.</p>
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
                        <h5><a href="/active-purified-enzymes/cnII">cN-II <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h5>
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