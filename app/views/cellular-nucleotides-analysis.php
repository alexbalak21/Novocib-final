<?php
$title = "Cellular Nucleotides Analysis";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "cellular nucleotides analysis"];

addContent(Banner::gen("/app/static/img/cells-blue.jpg"));
$section1_title = UnderlinedTitle::get("Analytical Service for Validation of Inhibitors of Nucleotide Synthesis", "novoblue", "right");
$section2_title = UnderlinedTitle::get("Cellular Nucleotides Profiling - Analytical Service", "novoblue", "right");

$page_content = <<<CONTENT
<main class="container mt-5">
<section>
$section1_title
<h4>Principle:</h4>
<p><strong>Cellular Nucleotide Profiling Service</strong> is an analytical service for mesuring nucleotide level in antimetabolite-treated cells. More than 31 cellular (deoxy-) ribonucleotides (mono-, di-, and triphosphate) are extracted by SPE procedure, separated by ion-paired HPLC system in one-run and quantified.</p>


<table class="nucleotides-table w-100">
    <thead>
        <tr>
            <th>Assays</th>
            <th>
                Targeted Enzyme(s)
                <br />
                / Targeted Nucleotide Synthesis Pathway
            </th>
            <th>Antimetabolite</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="table-side"><a href="">Cellular Assay for IMPDH inhibitors</a></td>
            <td>
                Inosine Monophosphate Dehydrogenase
                <br />
                (IMPDH)
            </td>
            <td>
                Ribavirin
                <br />
                Mycophenolic Acid (MPA)
            </td>
        </tr>
        <tr>
            <td class="table-side"><a href="">Cellular Assay for RNR inhibitors</a></td>
            <td>
                Ribonucleotide Reductase
                <br />
                (RNR)
            </td>
            <td>
                Hydroxyurea (HU)
                <br />
                Gemcitabine
            </td>
        </tr>
        <tr>
            <td class="table-side"> <a href="">Cellular Assay for Antifolates</a></td>
            <td>
            <strong>de novo Purine synthesis:</strong>
                <br />
                GAR transformylase, AICAR transformylase
                <br />
                Thymidylate Synthase (TS)
            </td>   
            <td>Methotrexate (MTX)</td>
        </tr>
    </tbody>
</table>
<p><strong class="novo-blue">Validated</strong> with antimetabolites (known inhibitors of nucleotide synthesis): MPA, hydroxyurea, methotrexate, ribavirin, mizoribine, leflunomide, gemcitabine. These reference drugs do impact differently on nucleotide metabolism, each showing its own mode of action through a specific nucleotide profile. Any new compound's mode of action is analyzed by establishing its nucleotide profile which is then compared with those obtained with reference drugs.</p>
<p class="mt-2">Download our brochure <a href="" style="font-weight:500">"Mode of Action Studies by Nucleotide Profiling"</a></p>
</section>
<section class="mt-5">
$section2_title

<p>To study the effect of nucleoside analogues on the whole spectra of cellular purine and pyrimidine ribo- and deoxyribonucleotides, <strong class="novo-blue">NOVOCIB</strong> has developed an original cell-based analytical approach in which more than 31 (deoxy)ribonucleotides (mono-, di-, triphosphate) and nucleotide co-factors are extracted from cultured cells, separated by ion-pared chromatography and quantified.</p>
<div class="img-container">

</div>

</section>
</main>
CONTENT;

addContent($page_content);
render();
?>
<style>
    .nucleotides-table {
        margin: 50px 0;
        border: 1px solid silver;
        border-radius: 8px;
        text-align: center;

        th {
            background-color: #F0F0F0;
            background-color: var(--novo-blue);
            color: whitesmoke;
        }

        .table-side {
            background-color: #F0F0F0;
            border-right: 1px solid silver;

            a {
                color: var(--novo-blue);
                text-decoration: none;
                font-weight: 500;
            }
        }

        td,
        th {
            padding: 10px 0;

        }
    }

    .nucleotides-table tbody tr td {
        border-bottom: 1px solid silver;
    }

    .nucleotides-table tbody tr td strong {
        font-weight: 600;
    }

    .nucleotides-table tbody tr:nth-child(odd) {
        background-color: #F8F8F8;
    }

    .nucleotides-table .table-side {
        border-bottom: none;
    }
</style>