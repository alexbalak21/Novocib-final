<?php
global $title;
$title = "K value - Freshness Quality Control - Seafood and Meat";
require_once "app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen());
$content_title = UnderlinedTitle::get("Active Purified Enzymes", "novoblue", "right");

$page_content = <<<Services
<div class="container mt-5">
<h2>Postmortem ATP catabolism in fish muscle:</h2>
<p>Fish muscles are particularly rich in ATP, second abundant muscle metabolite after amino acids, where it provides the energy for muscle contraction. In a live animal, muscle ATP hydrolysed to ADP is constantly resynthesized by mitochondiral respiratory chain, AMP and IMP concentration is low. After death, ATP continues to be hydrolysed to ADP by contracting muscles, but its resynthesis by mitochondrial ATP-synthetase becomes impossible because of respiratory arrest. ATP is resynthesized by less efficient pathways (anaerobic glycolysis, creatine kinase and myoadenylate kinase), its concentration drops leading to gradual accumulation of ADP. ADP is rapidly dephosphorylated to AMP and deaminated to IMP by muscle AMP-deaminase. IMP is a predominant nucleotide in in-rigor muscle (Wang D et al 1998). Postmortem degradation of IMP to inosine and hypoxanthine results from both autolytic and bacterial enzymes. The rate of IMP degradation varies considerably between fish species and depends on handling and storage conditions (Surette et al., 1988).</p>
<div class="text-center">
<img class="col-lg-8" src="/app/static/img/atp_catabolism_freshness.jpg" alt="atp catabolism freshness cycle">
</div>
<p>While measuring absolute concentration of single nucleotide degradation product (e. g. IMP or hypoxanthine) is not appropriate to determine the freshness quality of seafood, measuring relative concentrations provides a method for chemical assessment of fish freshness. In difference to volatile amines (TVA) appearing at a medium- or a late-stage of spoilage, nucleotides allow the detection of very beginning of the spoilage process.</p>
<p>Measuring nucleotides can be of particular interest for assessment of the freshness of seafood products stored under modified atmosphere or transformed products for which the assessment of volatile amines can not be applied.</p>
<div class="row align-items-center mt-5">
<div class="col-3">
<img src="/app/static/img/kit_spectro.jpg" alt="Photo of kits viles" class="w-100">
</div>
<div class="col-8">
<p>Nucleotides can be quantified by HPLC or with enzymes, eg. Fresh Tester strips for visual quantification of ATP breakdown products.</p>
<p class="mt-3"><a href="/freshness-assay-kits/freshness-principle">PRECICE® Nucleotides Assay Kit</a> is a first spectrophotometric assay that allows accurate measurement of concentrations of IMP, inosine and hypoxanthine in fresh, frozen, cooked or dried seafood products. These data can be used to calculate Ki value (suggested by Karube et al, 1984) , H-value (Huong et al, 1992) and Fr value (Gill et al. 1987). The enzymes provided with the kit allow specific conversion of three major ATP catabolites - IMP, inosine (Ino) and hypoxanthine (Hx) to NADH2. The quantification of nucleotides is done by measuring sample absorbance at 340nm with cuvette spectrophotometer  or microplate reader.</p>
<span>The enzymes provided with the kit :</span>
<ul>
<li>are stable and transported at room temperature;</li>
<li>highly specific and selective toward each particular nucleotides;</li>
<li>rapidly convert three nucleotides to one common denominator (NADH2);</li>
<li>R²=0.89 (IMP, HPLC); R²=0.91 (inosine, HPLC); R²=0.91 (hypoxanthine, HPLC);</li>
<li>R²=0.88 found between H-value measured with <a href="/freshness-assay-kits/freshness-principle">PRECICE® Nucleotides Assay Kit</a><br>and TMA/ABVT in whiting fillets (11 samples)</li>
</ul>

</div>
</div>
</div>


Services;

addContent($page_content);
render();
