<?php
$title = "Freshness Quality Control Assessments";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "Freshness", "fish freshness"];

addContent(Banner::gen());
$content_title = UnderlinedTitle::get("Case Studies of Fish Quality assessments", "novoblue", "right");

$page_content = <<<CONTENT
<div class="container mt-5">
<section>
$content_title
<p>Since seafood and fish are highly perishable products, the quality of raw material is of primary concern for seafood processing industry. Testing raw material is first main stage of currently used procedure of Quality Control</p>
<p>While sensory analysis allows rapid evaluation of the quality of whole wet fish, the assessment of the quality of frozen fish, of frozen blocks of fillets, or crumbed seafood products remains more difficult.</p>
<p><strong>Nucleotide</strong> contents (IMP, Ino and Hx) or K-values were measured using <strong>PRECICE® Freshness Assay kit</strong> to determine the quality of different types of fish and seafoods.</p>

<div class="row text-center">
<div class="col-lg-6 my-3">
<a href="#smoked_salmon"><strong>Effect of a preservative in smoked salmon <i class="fa-solid fa-file-arrow-down"></i></strong></a>
</div>
<div class="col-lg-6 my-3">
<a href="#cod"><strong>Freshness of cod <i class="fa-solid fa-file-arrow-down"></i></strong></a>
</div>
<div class="col-lg-6 my-3">
<a href="#atlantic_salmon"><strong>Freshness of salmon <i class="fa-solid fa-file-arrow-down"></i></strong></a>
</div>
<div class="col-lg-6 my-3">
<a href="#Frozen_Gambas"><strong>Freshness of shrimps/gambas <i class="fa-solid fa-file-arrow-down"></i></strong></a>
</div>
<h5 class="text-center mt-4">Go to <a href="/freshness-assay-kits/freshness-principle">PRECICE® Freshness Assay Kit <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h5>
</div>
</section>
</div>
<section class="mt-5 py-2 bg-light" id="smoked_salmon">
<div class="container">
<h3 class="novo-blue">Case Study 1. : Shelf-life time study of smoked salmon with and without preservative</h3>
<div class="row align-items-center justify-content-center">
<div class="col-lg-9">
<p>High blood pressure (or hypertension) is a major health problem that affects one third of adults in the world. Reducing salt level in foods is on-going process. However, the reduction of salt in processed foods remains a major challenge because salt was historically added to the food to enhance shelf-life. <br>
While reducing the sodium content, particular attention should be paid to maintain the freshness level of new products. <br>
The follow up of inosine degradation and hypoxanthine accumulation in cold-smoked salmon provides a scientific way for characterisation of quality changes during storage of cold smoked salmon with modified level of preservatives.</p>
</div>
<div class="col-lg-3 col-6 text-center mb-4">
<img class="w-100" src="/app/static/img/smoked_salmon.jpg" alt="smoked salmon photo">
</div>
<div class="col-lg-5 mb-2 mx-2">
<img src="/app/static/img/salmon_conservative_1.jpg" alt="salmon conservative graph" class="w-100">
</div>
<div class="col-lg-5 mb-2 mx-2">
<img src="/app/static/img/salmon_conservative_2.jpg" alt="salmon conservative graph" class="w-100">
</div>
<p class="col-12"><i>Figure 1,2 :</i> Study of preservative effects on Inosine and Hypoxanthine content in smoked salmon. The analysis was performed in duplicate using PRECICE® Freshness Assay Kit</p>
</div>
</div>
</section>
<section class="container" id="cod">
<h3 class="novo-blue">Case Study 2. : Highest quality of "Quick Frozen at Sea" cod fillets confirmed by nucleotides content</h3>
<p>On board production of fillets and quick freezing to below -20°C within a few hours after catching assures the highest quality of "Quick frozen at sea" products. Relative content of IMP and K-values were measured in 13 samples of cod fillets labeled as " quick frozen at sea" and compared to 20 "frozen" cod fillets without any label. The analysis was performed in duplicate using <strong>"Freshness Assay Kit"</strong> following "User Manual". Ki-value of "quick frozen at sea" cod fillets was found to be 35.6 ± 7.9% (IMP 64.4 ± 7.9%). The quality of "frozen" cod fillets is much more heterogene with Ki-value varying from 29.5% (high quality) to 94.1% (poor quality) and mean Ki value of 61.8 ± 18.7% (which is 1.7 times higher than that of "quickly frozen in sea"). Thus, measuring IMP and hypoxanthine content provides an objective way to identify cod of highest quality.</p>
<div class="d-flex justify-content-center">
<table class="outline">
<thead>
<tr>
<th></th>
<th>"Quickly frozen in sea" cod fillets <br> (mean value of 13 samples)</th>
<th>"Frozen"cod fillets <br> (mean value of 20 samples)</th>
<th>Chilled cod fillets <br> (mean value of 3 samples)</th>
</tr>
</thead>
<tbody>
<tr>
<td class="first"><strong>Ki-value**, %</strong></td>
<td>35.6 ± 7.9%</td>
<td>61.8 ± 18.7%</td>
<td>95.1 ± 2.25%</td>
</tr>
<tr>
<td><strong>IMP content*, %</strong></td>
<td>64.4 ± 7.9%</td>
<td>38.2 ± 18.7%</td>
<td>4.9 ± 2.25%</td>
</tr>
<tr>
<td><strong>Hx content, %</strong></td>
<td>5.4 ± 2.8%</td>
<td>9.4 ± 3.9%</td>
<td>18.2 ± 0.7%</td>
</tr>
</tbody>
</table>
</div>
<div class="mb-4">
<span class=mt-1>* IMP content =100x (IMP)/(IMP+Ino+Hx) <br></span>
<span>**Ki-value = 100x (Ino+Hx)/(IMP+Ino+Hx)= 100%- IMP content,%</span>
</div>
<div class="mb-5 d-flex justify-content-center">
<figure class="col-lg-10">
<img class="w-100" src="/app/static/img/cod_k_value.png" alt="">
<figcaption class="text-center"><i>Figure 1. :</i> K-values measured in 13 samples of cod fillets labeled as "quick frozen at sea" compared to 20 "frozen" cod fillets without any label.
The analysis was performed in duplicate using PRECICE® Freshness Assay Kit</figcaption>
</figure>
</div>
<div class="mb-5 d-flex justify-content-center">
<figure class="col-lg-8" >
<img class="w-100" src="/app/static/img/cod.png" alt="">
<figcaption class="text-center"><i>Figure 2. :</i> Nucleotides contents in 13 samples of cod fillets labeled as "quick frozen at sea" compared to 20 "frozen" cod fillets without any label.
The analysis was performed in duplicate using PRECICE® Freshness Assay Kit</figcaption>
</figure>
</div>
</section>

<section class="bg-light">
<div class="container" id="atlantic_salmon">
<h3 class="novo-blue">Case Study 3. : Nucleotide content in Atlantic salmon</h3>
<p>According to results published by Erikson U. and collegues* in Food Science (1997), K-values of atlantic salmon (Salmo salar) stored for 7 and 13 days at 0°C was 45 ± 8% and 67% ± 6%, respectively. The authors have suggested that upper limit of K-value at 70-80% could be used as indicator of “good quality” Atlantic salmon and K-value of 40-50% for “excellent quality” salmon</p>
<div class="d-flex justify-content-center">
<table class="freshness col-lg-7">
<thead>
<tr>
<th>
</th>
<th>1 day at 0°C</th>
<th>2 days</th>
<th>3 days</th>
<th>7 days</th>
<th>14 days</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>K-value (baseline)</strong></td>
<td>0</td>
<td>16%</td>
<td>24%</td>
<td>45%</td>
<td>67%</td>
</tr>
<tr>
<td><strong>K-value (unstressed)</strong></td>
<td>0</td>
<td>28%</td>
<td>40%</td>
<td>42%</td>
<td>64%</td>
</tr>
</tbody>
</table>
</div>
<p>*Erikson U, Beyer AR and Sigholt T Muscle High-Energy Phosphates and Stress affect K-values during Ice Storgae of Atlantic Samon (Salmo salar) J Food Sci 1997 v 62(1) 43-47</p>

<h6><span class="novo-blue">NOVOCIB</span> Data:</h6>
<p>K-values of Atlantic salmon were measured in frozen fillets of Atlantic salmon (11 samples) and compared to those of chilled salmon fillets (13 samples). The analysis was performed in duplicate using PRECICE® Freshness Assay Kit following "User Manual"</p>
<div class="d-flex justify-content-center">
<figure  class="col-lg-7">
<img src="/app/static/img/Salmon_K_value.png" alt="Salmon K value graph" class="w-100">
<figcaption><i>Figure 3.</i> K-values measured in 11 samples of frozen fillets of Atlantic salmon compared to 13 samples of chilled salmon fillets.
The analysis was performed in duplicate using PRECICE® Freshness Assay Kit</figcaption>
</figure>
</div>

<div class="d-flex justify-content-center mb-5">
<table class="freshness col-lg-6 col-12">
<tbody>
<tr>
<td></td>
<td>Frozen salmon fillets <br>(11 samples)</td>
<td>Chilled salmon fillets <br>
(13 samples)</td>
</tr>
<tr>
<td>Mean <strong>K-value</strong></td>
<td>61.3%</td>
<td>79.1%</td>
</tr>
<tr style="background-color:">
<td>Range K-value</td>
<td>28-94%</td>
<td>71-99%</td>
</tr>
<tr style="background-color:#8192c4">
<td>Mean IMP, %</td>
<td>38.7%/td>
<td>20.9%</td>
</tr>
<tr style="background-color:#dd9f9f">
<td>Mean Ino, %</td>
<td>11.5%</td>
<td>13.6%</td>
</tr>
</tbody>
</table>
</div>

<div class="d-flex justify-content-center">
<figure class="col-lg-8 col-12">
<img class="w-100" src="/app/static/img/Salmon_nucleotides.png" alt="Salmon nucleotides graph">
<figcaption class="text-center"><i>Figure 4.</i> Nucleotides contents in 11 samples of frozen fillets of Atlantic salmon compared to 13 samples of chilled salmon fillets.
The analysis was performed in duplicate using PRECICE® Freshness Assay Kit</figcaption>
</figure>
</div>
</div>
</section>

<section class="container pt-3" id="Frozen_Gambas">
<h3 class="novo-blue">Case Study 4. : Nucleotide content in Frozen Gambas</h3>
<p>According to numerous scientific articles, the degradation process of ATP in shellfish flesh is similar to that happening in fish (Kalleda, R et al 2013, Goncalves et al 2003, Jinag et Lee, 1988, Konosu & Yamagushi 1998). Tropical shrimps (gambas) have become very popular because of the democratization of prices following their farming in Asia, India, and South. Like other shrimps, gambas are very fragile, especially because of the presence of viscera. They have become one of the worldï¿½s most valued seafoods over the past decade and account for 20% of internationally traded seafood products in market value. Their quality and freshness relies on fishing conditions, cooling speed, and transport time. <br>
K-values and nucleotide contents were measured in 9 gambas samples collected in supermarkets.
</p>
<div class="d-flex justify-content-center">
<figure class="col-lg-6">
<img class="w-100" src="/app/static/img/Gambas_K-value.png" alt="Gambas K-value Graph">
<figcaption class="text-center">Figure 5. K-values measured in 9 samples of frozen gambas.
The analysis was performed in duplicate using PRECICE® Freshness Assay Kit</figcaption>
</figure>
</div>

<div class="d-flex justify-content-center mb-5">
<table class="freshness col-lg-6 col-12">
<tbody>
<tr>
<td></td>
<td>Gambas <br>(9 samples)</td>
<td>Minimum -<br>Maximum</td>
</tr>
<tr>
<td>Mean K-value</td>
<td>46.7%</td>
<td>30.6% - 74.9%</td>
</tr>
<tr style="background-color:#8192c4">
<td>Mean IMP, %</td>
<td>53.3%</td>
<td>25.1 - 69.4%</td>
</tr>
<tr style="background-color:#dd9f9f">
<td>Mean Hx, %</td>
<td>10.1%</td>
<td>5.6 - 15.8%</td>
</tr>
<tr style="background-color:#9ad39a">
<td>Mean Ino, %</td>
<td>36.6%</td>
<td>23.3% - 62.7%</td>
</tr>
</tbody>
</table>
</div>
<div class="d-flex justify-content-center">
<figure  class="col-lg-6">
<img src="/app/static/img/Gambas_nucleotides.png" alt="Gambas nucleotides graph" class="w-100">
<figcaption><i>Figure 6.</i> Nucleotides contents in 9 samples of frozen gambas.
The analysis was performed in duplicate using PRECICE® Freshness Assay Kit</figcaption>
</figure>
</div>
<p class="mt-3 mb-5">Figure 6 demonstrates that in 1 of 9 gambas samples collected in supermarkets, the IMP contents was at 25%, which is well below the average of 53,3%. These results also show that for shellfish, inosine may be a better indicator of early stages of alteration than hypoxanthine.</p>


</section>

CONTENT;

addContent($page_content);
render();


?>
<style>
    table.outline {
        border: 1px solid silver;
        width: 98%;

        td.first {
            width: 15%;
        }

        tr {
            border: 1px solid silver;

        }

        th {
            text-align: center;
        }

        td {
            text-align: center;
            padding: 10px 0;

        }
    }

    table.freshness {
        border: 1px solid silver;

        td.first {
            width: 15%;
        }

        tr {
            border: 1px solid silver;

        }

        th {
            text-align: center;
            padding: 6px 0;
        }

        td {
            text-align: center;
            padding: 10px 0;

        }
    }
</style>