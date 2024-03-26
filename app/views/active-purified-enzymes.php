<?php
$title = "Active Purified Enzymes";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "Active Purified Enzymes"];

addContent(Banner::gen());
$content_title = UnderlinedTitle::get("Active Purified Enzymes", "novoblue", "right");

$page_content = <<<Services
<div class="container mt-5">
$content_title
<p><strong class="novo-blue">NOVOCIB</strong> produces active nucleoside kinases and other nucleotide metabolism enzymes. This portfolio of enzymes represents a unique range of powerful tools for Drug Discovery and research in the field of nucleoside and nucleotide metabolism.</p>
</div>
<section class="mb-5">
<div class="container">
<h2>Purine Metabolism Enzymes</h2>
<table class="purine w-100">
<tr>
<td class="col-2"><h5><a href="">MPDH</a></h5></td>
<td class="col-5">Inosine Monophosphate Dehydrogenase (EC 1.1.1.205)</td>
<td class="col-5">Human Type II, recombinant, expressed in E.coli Bacterial (Staphylococcus aureus) recombinant, expressed in E.coli</td>
</tr>
<tr>
<td class="col-2"><h5><a href="">PNP</a></h5></td>
<td>Purine Nucleoside Phosphorylase (EC 2.4.2.1)</td>
<td>Human recombinant, expressed in E.coli</td>
</tr>
<tr>
<td class="col-2"><h5><a href="">XDH</a></h5></td>
<td>Xanthine Dehydrogenase (EC 1.17.1.4)</td>
<td>Native enzyme, extracted from bovine milk</td>
</tr>
<tr>
<td class="col-2"><h5><a href="">HGPRT</a></h5></td>
<td>Hypoxanthine-guanine phosphoribosyltransferase (EC 2.4.2.8)</td>
<td>Human recombinant, expressed in E.coli</td>
</tr>
</table>
<p class="mt-4 text-end"> <strong>Know more about <span class="novo-blue">NOVOCIB'S</span> <a href="">Purine Metabolism Enzymes</a></strong></p>
</div>
</section>
<section class="bg-light mb-5 py-4">
<div class="container">

<h2>Nucleoside Kinases</h2>
<table class="purine w-100">
<tr>
<td class="col-2"><h5><a href="">ADK</a></h5></td>
<td class="col-5">	Adenosine Kinase (EC 2.7.1.20)</td>
<td class="col-5">Human, recombinant, expressed in E.coli</td>
</tr>
<tr>
<td class="col-2"><h5><a href="">dCK</a></h5></td>
<td>Deoxycytidine Kinase (EC 2.7.1.74)</td>
<td>Human recombinant, expressed in E.coli</td>
</tr>
<tr>
<td class="col-2"><h5><a href="">CMK</a></h5></td>
<td>UMP-CMP Kinase (EC 2.7.4.14)</td>
<td>Human recombinant, expressed in E.coli</td>
</tr>
<tr>
<td class="col-2"><h5><a href="">cN-II</a></h5></td>
<td>Cytosolic 5'-nucleotidase II (EC 3.1.3.5)</td>
<td>Human recombinant, expressed in E.coli</td>
</tr>
</table>
<p class="mt-4 text-end"> <strong>Know more about <span class="novo-blue">NOVOCIB'S</span> <a href="">Nucleoside Kinases</a></strong></p>
</div>
</section>
<section class="container">
<h2>Bacterial Bioluminescence Enzymes</h2>
<table class="purine w-100">
<tr>
<td class="col-3"><h5><a href="">Bacterial Luciferase</a></h5></td>
<td class="col-3">(EC 1.14.14.3)</td>
<td class="col-6">Bacterial, produced from a selected strain of Photobacterium phosphoreum</td>
</tr>
<tr>
<td><h5><a href="">FMN Reductase</a></h5></td>
<td>(EC 1.5.1.29)</td>
<td>Bacterial recombinant, E.coli</td>
</tr>
</table>
<p class="mt-4 mb-3">Bacterial bioluminescence consists in a ligh-emitting reaction where a long-chain aliphatic aldehyde is oxidized in the presence of molecular oxygen and reduced flavin mononucleotide (FMNH2). This reaction is catalyzed by bacterial luciferase.</p>
<p><strong class="novo-blue">NOVOCIB</strong> offers a highly pure bacterial luciferase from Photobacterium phosphoreum and a recombinant FMN-Reductase which, when coupled to bacterial luciferase in vitro, is able to significantly increase the sensitivity and allow a better control of signal intensity and duration.</p>
<p class="mt-4 text-end"> <strong>Know more about <span class="novo-blue">NOVOCIB'S</span> <a href=""> Bacterial Bioluminescence Enzymes</a></strong></p>
</section>


Services;

addContent($page_content);
render();

?>

<style>
    .purine {
        border: 1px solid silver;

        tr:nth-child(odd) {
            background-color: #E0E0E0;
        }

        td {
            padding: 1rem;
        }
    }
</style>