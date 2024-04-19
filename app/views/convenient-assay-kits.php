<?php
$title = "Convenient Assay Kits";
require_once "app/templates/base.php";


$novoblue = "#4167b1";




addContent(Banner::gen());
$content_title = UnderlinedTitle::get("Biochemical Assay Kits for Life Science", "novoblue", "right");

$page_content = <<<CONTENT
<section class="container mt-5">
$content_title
<p><strong class="novo-blue">NOVOCIB</strong> develops original biochemical assay kits based on active nucleotide metabolism enzymes. This portfolio of assays represents a unique range of powerful tools for Drug Discovery and research in the field of nucleoside and nucleotide metabolism.</p>
</section>
<section class="bg-light my-4">
    <div class="container">
        <div class="row justify-content-center py-2">
            <div class="col-lg-5 me-4">
                
                <div class="kits row bg-body mt-1 mb-4">
                <h2 class="col-12 text-center">Purine Metabolism Disorders Kits</h2>
                    <div class="col-6">
                        <div class="kit">
                            <h5 class="text-center"><a href="/convenient-assay-kits/hprt-assay-kit">HPRT Assay Kit</a></h5>
                        </div>
                        <div class="kit">
                            <h5 class="text-center"><a href="/convenient-assay-kits/prpp-s-assay-kit">PRPP-S Assay Kit</a></h5>
                        </div>
                        <div class="kit">
                            <h5 class="text-center"><a href="/convenient-assay-kits/ampda-assay-kit">AMPD Assay Kit</a></h5>
                        </div>
                        <div class="kit">
                            <h5 class="text-center"><a href="convenient-assay-kits/itp-ase-deficiency-assay-kit">ITPase Assay Kit</a></h5>
                        </div>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <p>
                            <strong>
                                One-step non radioactive continuous measurement of enzyme activityby spectrophotometry
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="kits row bg-body mt-1 mb-5">
                <h2 class="col-12 text-center">Nucleoside Kinase Assay Kits</h2>
                    <div class="col-6 my-3">
                        <div class="kit">
                            <h5 class="text-center"><a href="/convenient-assay-kits/adk-phosphorylation-assay-kit">ADK Phosphorylation Assay Kit</a></h5>
                        </div>
                        <div class="kit">
                            <h5 class="text-center"><a href="/convenient-assay-kits/dck-phosphorylation-assay-kit">dCK Phosphorylation Assay Kit</a></h5>
                        </div>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <p>
                            <strong>
                                Rapid evaluation of substrates properties of novel antiviral , anti-proliferative
                                nucleoside analogues for human nucleoside kinases.
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container my-4 therapeutic">
    <h2 class="mb-3 text-center">Therapeutic Targets</h2>
    <div class="kit row align-items-center">
        <div class="col-3 me-3 text-center">
            <h5><a href="/convenient-assay-kits/human-recombinant-impdh">Human IMPDH type II</a></h5>
        </div>
        <div class="col-8">
            <p>
                IMPDH II enzyme, highly active in lymphocytes, is a validated target to treat immunological diseases and
                to induce immunosuppression (CellCept®, a mycophenolic acid (MPA) prodrug - Roche. IMPDH is also
                recognized as an excellent target for the treatment of psoriasis, rheumatoid arthritis (RA), and
                systemic lupus erythematosus (SLE).
            </p>
        </div>
    </div>
    <div class="kit row align-items-center">
        <div class="col-3 me-3 text-center">
            <h5><a href="/convenient-assay-kits/human-recombinant-pnp">Human PNP</a></h5>
        </div>
        <div class="col-8">
            <p>
                PNP deficiency leads to T-lymphocytopenia with no apparent effects on B-lymphocyte function. These
                symptoms suggest possible chemotherapeutic applications of potent inhibitors of PNP, as selective
                immunosuppressive agents, to treat T-cell leukemias or T-cell-mediated autoimmune diseases, such as
                lupus erythematosus and rheumatoid arthritis1.
            </p>
        </div>
    </div>
    <div class="kit row align-items-center">
        <div class="col-3 me-3 text-center">
            <h5><a href="/convenient-assay-kits/bacterial-recombinant-impdh">Bacterial IMPDH</a></h5>
        </div>
        <div class="col-8">
            <p>
                Antibiotic resistance is one of the world's most important public health problems. There is an urgent
                need for new antibiotic compounds acting on new targets. One attractive strategy for developing new
                antibiotics consists in in hibiting bacterial IMPDH, an enzyme involved in the de novo synthesis of
                purine nucleotides, necessary for bacterial cell growth and division.
            </p>
        </div>
    </div>
    <div class="kit row align-items-center">
        <div class="col-3 me-3 text-center">
            <h5><a href="">ADK Assay Kit</a></h5>
        </div>
        <div class="col-8">
            <p>
                Adenosine kinase regulates extracellular concentration of adenosine, an important modulator of CNS
                functions and a signal molecule involved in hypoxia, inflammation and nociception. This non radioactive
                spectrophometric assay allows HTS search of novel ADK inhibitors.
            </p>
        </div>
    </div>
    <div class="kit row align-items-center">
        <div class="col-3 me-3 text-center">
            <h5><a href="">Phosphatase Assay Kit</a></h5>
        </div>
        <div class="col-8">
            <p>
                Continuous spectrophotometric enzyme assay to monitor the activity of any enzymes (phosphatase; protein
                phosphatases; ATPase; GTPases; helicases) liberating inorganic phosphate (Pi) during enzymatic
                reactions.
            </p>
        </div>
    </div>
</section>



CONTENT;

addContent($page_content);
render();
