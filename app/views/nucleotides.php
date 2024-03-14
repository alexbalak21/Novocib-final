<?php
$title = "Nucleotides";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

global $path_way;
$path_way = ["home", "nucleotides"];

addContent(Banner::gen("/app/static/img/adn3d.jpg"));
$content_title = UnderlinedTitle::get("Biological role of nucleotides", "novoblue", "center");
$table_nucleotides = Table::gen();

$page_content = <<<CONTENT
<main class="container mt-5">
    <section class="mb-5">
        $content_title
        $table_nucleotides
        <h3>Nucleotides: 'conditionally essential' nutrients</h3>
        <p class="my-4">
        Since nucleotides can be synthesized de novo and recycled through salvage pathways, they are considered as semi-essential nutrients.
        </p>
        <div class="nucleotides-schema mt-5">
        <div class="row">
            <div class="col-6">
                <img class="w-100" src="/app/static/img/nucleotides-p1.png" alt="" />
            </div>
            <div class="col-6 d-flex align-items-center">
                <p class="">
                    <span class="novo-blue">De novo pathway of AMP and GMP biosynthesis</span>
                    is long and energy consuming process (6 moles of ATP per each mole of nucleotide produced).
                </p>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-6">
                <img class="w-100" src="/app/static/img/nucleotides-p2.png" alt="" />
            </div>
            <div class="col-6 mt-3">
                <p class="">
                    <span class="novo-blue">Purine salvage produces</span>
                    GMP or AMP directly from nucleosides and bases in one step.
                </p>
            </div>
        </div>
    </div>
        <p class="mt-4">
            However, rapidly growing tissues or proliferating immune cells during infection have higher requirements for
            nucleotides that cannot be met only through de novo synthesis. In these cases, nucleotides become
            "essential" nutrients that can be provided with aliments and assimilated through shorter salvage pathways (2
            steps) compared to de novo synthesis (9 steps for purines). Because of the fundamental importance of
            nucleotides for growth, development and immune health nucleotides are now widely recognized as
            “conditionally essential” nutrients.
        </p>
    </section>
    <section>
    <h3 class="text-center bg-blue">BIOLOGICAL ROLE OF NUCLEOTIDES</h3>
    <div class="row">
        <div class="card col-lg-3 col-md-4 col-sm-6">
            <img
                class="card-img-top"
                src="/app/static/img/dna-card.png"
                style="height: 200px; object-fit: contain"
                alt="dna" />
            <div class="card-body">
                <h5 class="card-title text-center mb-4">PROLIFERATION</h5>
                <p class="card-text mb-4">
                    dNTPs are building blocks of DNA, required for rapidly proliferating cells of the immune
                    system, intestinal epithelium and unicellular microorganisms.
                </p>
            </div>
        </div>
        <div class="card col-lg-3 col-md-4 col-sm-6">
            <img
                class="card-img-top"
                src="/app/static/img/RNA.png"
                style="height: 200px; object-fit: contain"
                alt="dna" />
            <div class="card-body">
                <h5 class="card-title text-center mb-4">PROTEIN SYNTHESIS</h5>
                <p class="card-text mb-4">
                    NTPs are building blocks of tRNA, rRNA and mRNA involved in protein synthesis and cell
                    growth.
                </p>
            </div>
        </div>
        <div class="card col-lg-3 col-md-4 col-sm-6">
            <img
                class="card-img-top"
                src="/app/static/img/energy.png"
                style="height: 200px; object-fit: contain"
                alt="dna" />
            <div class="card-body">
                <h5 class="card-title text-center mb-4">ENERGY</h5>
                <p class="card-text mb-4">
                    ATP is an universal energy currency in all biological systems particularly abundant in
                    muscles.
                </p>
            </div>
        </div>
        <div class="card col-lg-3 col-md-4 col-sm-6">
            <img
                class="card-img-top"
                src="/app/static/img/coenzyme.png"
                style="height: 200px; object-fit: contain"
                alt="dna" />
            <div class="card-body">
                <h5 class="card-title text-center mb-4">COENZYME</h5>
                <p class="card-text mb-4">
                    Adenine nucleotides are components of three major coenzymes, NAD+, FAD, and CoA involved in
                    numerous biosynthesis pathways.
                </p>
            </div>
        </div>
        <div class="card col-lg-3 col-md-4 col-sm-6">
            <img
                class="card-img-top"
                src="/app/static/img/glycogen.png"
                style="height: 200px; object-fit: contain"
                alt="dna" />
            <div class="card-body">
                <h5 class="card-title text-center mb-4">NEOGLYCOGENESIS</h5>
                <p class="card-text mb-4">
                    UDP-activated glucose is required for glycogen synthesis in liver and skeletal muscles.
                </p>
            </div>
        </div>
        <div class="card col-lg-3 col-md-4 col-sm-6">
            <img
                class="card-img-top"
                src="/app/static/img/neuron.png"
                style="height: 200px; object-fit: contain"
                alt="dna" />
            <div class="card-body">
                <h5 class="card-title text-center mb-4">PHOSPHOLIPIDS</h5>
                <p class="card-text mb-4">
                    CDP-activated choline is involved in the biosynthesis of phospholipids particularly in the
                    neuronal membranes.
                </p>
            </div>
        </div>
        <div class="card col-lg-3 col-md-4 col-sm-6">
            <img
                class="card-img-top"
                src="/app/static/img/salt.jpg"
                style="height: 200px; object-fit: contain"
                alt="dna" />
            <div class="card-body">
                <h5 class="card-title text-center mb-4">TASTE</h5>
                <p class="card-text mb-4">
                    GMP and IMP nucleotides are flavor compounds that drastically enhance the umami taste of
                    glutamate and improve the palatability of the food with reduced salt.
                </p>
            </div>
        </div>
        <div class="card col-lg-3 col-md-4 col-sm-6">
            <img
                class="card-img-top"
                src="/app/static/img/lumi.webp"
                style="height: 200px; object-fit: contain"
                alt="dna" />
            <div class="card-body">
                <h5 class="card-title text-center mb-4">LIGHT REFLECTANCE</h5>
                <p class="card-text mb-4">
                    Multilayer stacks of guanine crystals are responsible for the metallic luster of fish skin.
                </p>
            </div>
        </div>
    </div>
    </section>
</main>
CONTENT;

addContent($page_content);
render();
