<?php
global $title;
$title = "IMPDH Recombinant Enzyme";
require_once "app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen());
$content_title = UnderlinedTitle::get("IMPDH Enzymes", "novoblue", "right");

$page_content = <<<CONTENT
<div class="container mt-5">
$content_title
<p><strong>Inosine Monophosphate Dehydrogenase (IMPDH)</strong> (EC 1.1.1.205) catalyzes the conversion of inosine 5'-monophosphate (IMP) to xanthosine 5'- monophosphate (XMP), which is a crucial step for guanosine biosynthesis and for the pool of guanine nucleotides.</p>
<div class="col-12 text-center">
<img class="col-lg-8" src="/app/img/IMPDH_reaction.png" alt="IMPDH reaction schema">
</div>

<p class="my-3">In Human, IMPDH is a validated target for several therapeutic applications (cancer, immunological disorders...). Several IMPDH inhibitors, including blockbusters (e.g. CellCept®), have shown their clinical efficacy. Besides nucleoside (or NAD) analogues, new chemical entities (NCEs) have been identified as efficient IMPDH inhibitors and are currently investigated.</p>
<p class="mb-5">Mammalian and bacterial IMPDHs are known to have significantly different kinetic properties and inhibitor sensitivities(1, 2). <strong class="novo-blue">NOVOCIB</strong> provides two recombinant IMPDH enzymes: Human IMPDH, Type II, and Staphylococcus aureus IMPDH. These two enzymes are useful tools for the selection of species-specific IMPDH inhibitors.</p>
<h5 class="text-center mb-3">Know More  <i class="fa-solid fa-arrow-down"></i></h5>
<div class="kit text-center"><a href="/convenient-assay-kits/human-recombinant-impdh"><h4>Human IMPDH II - Inosine Monophosphate Dehydrogenase, Type II</h4></a></div>
<div class="kit text-center mb-5"><a href="/convenient-assay-kits/bacterial-recombinant-impdh"><h4>Bacterial IMPDH, Staphylococcus aureus</h4></a></div>
<p class="text-end"><i class="fa-solid fa-download"></i> ... or download our brochure <a target="_blank" href="/app/documents/NovoCIB IMPDH Services.pdf">"NovoCIB's IMPDH Products & Services" <i class="fa-regular fa-file-pdf"></i></a></p>
<div class="referances my-5 row justify-content-center">
<h6 class="ps-5"><i>References (with external links to PubMed) </i><i class="novo-blue fa-solid fa-arrow-up-right-from-square"></i></h6>
<div class="col-2">
<img class="w-100 pt-3" src="/app/img/pubmed.png" alt="pubmed logo">
</div>
<div class="col-8">
<ol>
<li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/16919497">L. Hedstrom and L. Gan (2006): IMP dehydrogenase: structural schizophrenia and an unusual base Curr. Opin. Chem. Biol. 10(5), 520-525</a></li>
<li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/10200156">R. Zhang et al. (1999): Characteristics and crystal structure of bacterial inosine-5'-monophosphate dehydrogenase Biochemistry 13;38(15), 4691-700</a></li>
</ol>
</div>

</div>
</div>

CONTENT;

addContent($page_content);
render();
