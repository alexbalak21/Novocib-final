<?php
$title = "Cellular Nucleotides Analysis";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "cellular nucleotides analysis"];

addContent(Banner::gen("/app/static/img/cells-blue.jpg"));
$section1_title = UnderlinedTitle::get("Analytical Service for Validation of Inhibitors of Nucleotide Synthesis", "novoblue", "right");
$section2_title = UnderlinedTitle::get("Cellular Nucleotides Profiling - Analytical Service", "novoblue", "right");
$section3_title = UnderlinedTitle::get("Cellular Assay for IMPDH inhibitors", "novoblue", "right");
$section4_title = UnderlinedTitle::get("Cellular Assay for RNR inhibitors", "novoblue", "right");
$section5_title = UnderlinedTitle::get("Cellular Assay for Antifolates", "novoblue", "right");
$section6_title = UnderlinedTitle::get("Customized Nucleotide Analysis", "novoblue", "right");

$page_content = <<<CONTENT
<main class="mt-5">
<section class="container">
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
<p class="mt-2">Download our brochure <a title="Download our PDF documenattion." href="/app/documents/NovoCIB MOA Studies - Nucleotide Profiling.pdf" style="font-weight:500">"Mode of Action Studies by Nucleotide Profiling" <i class="fa-solid fa-file-pdf"></i></a></p>
</section>
<section class="mt-5 container">
$section2_title
<p>To study the effect of nucleoside analogues on the whole spectra of cellular purine and pyrimidine ribo- and deoxyribonucleotides, <strong class="novo-blue">NOVOCIB</strong> has developed an original cell-based analytical approach in which more than 31 (deoxy)ribonucleotides (mono-, di-, triphosphate) and nucleotide co-factors are extracted from cultured cells, separated by ion-pared chromatography and quantified.</p>
<div class="nuclotides-profile row align-items-center justify-content-center">
<div class="col-lg-2 col-sm-6">
<img class="w-100" src="/app/static/img/cell-analysis.jpg" alt="">
<h5 class="text-center">Cells teatment</h5>
</div>
<div class="col-1 text-center" ><i class="col-1 fa-solid fa-arrow-right"></i></div>
<div class="col-lg-2 col-sm-6">
<img class="w-100" src="/app/static/img/hplc-analysis.jpg" alt="">
<h5 class="text-center">Nucleotides extraction (SPE)</h5>
</div>
<div class="col-1 text-center" ><i class="col-1 fa-solid fa-arrow-right"></i></div>
<div class="col-lg-2 col-sm-6">
<img class="w-100" src="/app/static/img/identifiaction.jpg" alt="">
<h5 class="text-center">Nuclotides ldentification and Quantification</h5>
</div>
<div class="col-1 text-center" ><i class="col-1 fa-solid fa-arrow-right"></i></div>
<div class="col-lg-2 col-sm-6">
<img class="w-100" src="/app/static/img/nuclotide-profile.jpg" alt="">
<h5 class="text-center">Nucleotide pofile</h5>
</div>
<p class="mt-3">These cellular assays were validated with anti-viral and anti-cancer nucleoside analogues (e.g. ribavirin, gemcitabine) and known anti-metabolites (mycophenolic acid, leflunomide, hydroxyurea, methotrexate).</p>
</div>
</section>
<section class="bg-light mt-4 py-2">
<div class="container">
$section3_title
<p><strong>Aim:</strong> This Research Contract Service has been specially tailored to validate Inosine Monophosphate Dehydrogenase (IMPDH) inhibition by a given compound in cultured cells. The assay consists in extracting, identifying and quantifying by HPLC the intracellular concentration of guanosine nucleotides (GMP, GDP and GTP) and IMP in cells treated by a compound. This cellular assay was validated with mycophenolic acid (MPA), ribavirin and mizoribin, recognized inhibitors of IMPDH.
When applied for the study of nucleoside analogues (NA), this assay can also reveal the formation of their mono-, di-, and triphosphate forms, indicating that nucleoside analogues enter the cells and are readily phosphorylated by cellular kinases.</p>
<p class="text-end my-4"><strong>Know more about <span class="novo-blue">NOVOCIB</span>'S <a href="">Cell-based IMPDH inhibiton assay</a></strong></p>
</div>
</section>
<section class="container mt-4 py-3">
$section4_title
<p><strong>Aim: </strong>This Research Contract Service has been specially tailored to validate Ribonucleotide Reductase (RNR) inhibition by a given compound in cultured cells. The assay consists in extracting, identifying and quantifying by HPLC the intracellular concentration of deoxynucleotides di- and triphosphate in cells treated by a compound. The assay was validated with hydroxyurea and gemcitabine in HeLa cultured cells.</p>
<p class="text-end my-4"><strong>Know more about <span class="novo-blue">NOVOCIB</span>'S <a href="">Cell-based RNR inhibiton assay</a></strong></p>
</section>
<section class="bg-light mt-4 py-3">
<div class="container">
$section5_title
<p><strong>Aim: </strong>This Research Contract Service has been specially tailored to validate inhibition of de novo biosynthesis of purine and pyrimidne nucleotides by a given compound in cultured cells. After incubation of cultured cells with the inhibitor, nucleotides are extracted, separated, identified and quantified by UV-HPLC. The assay was validated with methotrexate in HeLa cultured cells.</p>
<p class="text-end my-4"><strong>Know more about <span class="novo-blue">NOVOCIB</span>'S <a href="">Cellular assay for Antifolates</a></strong></p>
</div>
</section>
<section class="mt-4 py-3 container">
$section6_title
<p><span class="novo-blue"> <strong>NOVOCIB</strong></span> has initially developed its expertise in Nucleotide Analysis to study the drug impact on the cell metabolism of nucleotides. The methodology we implemented allows us to extend the application field of NOVOCIB's expertise in nucleotide analysis and to provide nucleoside analysis services for many other purposes such as, for instance, life science or food quality control.</p>

<p>
Extracts from cultured cells, blood cells, body fluids are routinely analyzed in our lab but many other materials can be subjected to a feasibility study for nucleotide analysis. Please feel free to contact us for any question.
</p>

<p><strong>Amis: </strong>Analysis of the Nucleoside and Nucleotide content in biological samples.</p>

<p>
The Nucleotide Analysis procedures implemented by NOVOCIB have been specially developed to study the impact of drugs on the cell metabolism of nucleosides and nucleotides by comparison of metabolic profiles of treated vs. untreated cells. However, Nucleotide Analysis can be a major concern for many other purposes and NOVOCIB's know-how can be adapted for the analysis of other materials. Examples of nucleotide analysis are presented in detail on this website: Baby Milk analysis, Fish / Seafood Freshness control... (see the related links above right for further detail).
</p>

<p class="">
The technical presentation of NOVOCIB's Customized Nucleotide Analytical services is presented here through the example of application field for which it has been first developed: analysis of drug-treated and untreated cells. In this case, it enables to:</p>
    <ul style="margin-top:0">
    <li>reveal the metabolic changes due to the drug action, either on the purine or on the pyrimidine pathway,</li>
    <li>identify the metabolites whose levels are modified by the drug treatment,</li>
    <li>trace back to the metabolic step(s) altered by the drug, and to its likely target(s).</li>
    </ul>


<p class="mt-5"><strong>Cell culture and treatment: </strong> The choice of the cell line and culture conditions has been optimized to get highly reproducible results. Assays are usually done with human hepatoma cell line Huh7. Cells are grown in DMEM supplemented with FCS (5%), glutamine (1mM), sodium pyruvate (1mM) and maintained in exponential phase. Cells are seeded on 10cm-dishes and allowed to adhere overnight. The drug is added next day at the agreed concentration and at a cell confluence of about 50%.
The following metabolites are routinely analyzed*:</p>
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