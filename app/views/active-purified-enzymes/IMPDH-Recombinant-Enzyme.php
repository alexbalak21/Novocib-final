<?php
$title = "IMPDH Recombinant Enzyme";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "Base"];

addContent(Banner::gen());
$content_title = UnderlinedTitle::get("IMPDH Enzymes", "novoblue", "right");

$page_content = <<<CONTENT
<div class="container mt-5">
$content_title
<p><strong>Inosine Monophosphate Dehydrogenase (IMPDH)</strong> (EC 1.1.1.205) catalyzes the conversion of inosine 5'-monophosphate (IMP) to xanthosine 5'- monophosphate (XMP), which is a crucial step for guanosine biosynthesis and for the pool of guanine nucleotides.</p>
<div class="col-12 text-center">
<img class="col-lg-8" src="/app/static/img/IMPDH_reaction.png" alt="IMPDH reaction schema">
</div>

<p>In Human, IMPDH is a validated target for several therapeutic applications (cancer, immunological disorders...). Several IMPDH inhibitors, including blockbusters (e.g. CellCept®), have shown their clinical efficacy. Besides nucleoside (or NAD) analogues, new chemical entities (NCEs) have been identified as efficient IMPDH inhibitors and are currently investigated.</p>
</div>
CONTENT;

addContent($page_content);
render();
