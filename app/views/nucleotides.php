<?php
$title = "Dietary Nucleotides";
require_once "app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen("/app/static/img/adn3d.jpg"));
$table_nucleotides = Table::gen();

$page_content = <<<CONTENT
<main class="container mt-5">
    <section class="mb-5">
    <h3>Biological role of nucleotides</h3>
        <p>Nucleotides participate in nearly all biochemical processes important for growth: ATP is an universal energy currency in all biological systems particularly abundant in muscles. Adenine nucleotides are components of three major coenzymes, NAD+, FAD, and CoA. Being building blocks of the nucleic acids (DNA and RNA), nucleotides are particularly required for actively proliferating cells of the immune system or intestinal epithelium.</p>
        $table_nucleotides
        <h3>Nucleotides: 'conditionally essential' nutrients</h3>
        <p class="my-4">
        Since nucleotides can be synthesized de novo and recycled through salvage pathways, they are considered as semi-essential nutrients.
        </p>
        <div class="nucleotides-schema mt-5 row justify-content-center">
        <div class="row w-75">
            <div class="col-lg-6 col-sm-12">
                <img class="w-100" src="/app/static/img/nucleotides-p1.png" alt="" />
            </div>
            <div class="col-lg-6 col-sm-12 d-flex align-items-center">
                <p class="mt-2">
                    <span class="novo-blue">De novo pathway of AMP and GMP biosynthesis</span>
                    is long and energy consuming process (6 moles of ATP per each mole of nucleotide produced).
                </p>
            </div>
        </div>
        <hr />
        <div class="row w-75">
            <div class="col-lg-6 col-sm-12">
                <img class="w-100" src="/app/static/img/nucleotides-p2.png" alt="" />
            </div>
            <div class="col-lg-6 col-sm-12 mt-3">
                <p class="mt-2">
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
    <section class="container">
    <div class="row">
        <h3 class="text-center col-12 bg-blue">DIETARY NUCLEOTIDES : EFFECT OF SUPPLEMENTATION</h3>
        <div class="card col-lg-4 col-md-4 col-sm-6">
            <img
                class="card-img-top"
                src="/app/static/img/baby.jpg"
                style="height: 200px; object-fit: contain"
                alt="dna" />
            <div class="card-body">
                <h5 class="card-title text-center mb-4">INFANT FORMULA</h5>
                <p class="card-text mb-4">
                    After being identified as one of the components of human milk enhancing immune function, 5’ NMP have
                    been added to infant formulas and have beneficial effects on early infant growth, small intestinal
                    growth and development, intestinal microflora, and immune function.
                </p>
            </div>
        </div>
        <div class="card col-lg-4 col-md-4 col-sm-6">
            <img
                class="card-img-top"
                src="/app/static/img/aquaculture.jpg"
                style="height: 200px; object-fit: contain"
                alt="dna" />
            <div class="card-body">
                <h5 class="card-title text-center mb-4">AQUACULTURE</h5>
                <p class="card-text mb-4">
                    Nucleotides supplementation of aquafeed has been shown to improve growth performance of fish at
                    early stages of development; to enhance fish immune response and resistance against pathogens; by
                    improving osmoregulation.
                </p>
            </div>
        </div>
        <div class="card col-lg-4 col-md-4 col-sm-6">
            <img
                class="card-img-top"
                src="/app/static/img/dog.jpg"
                style="height: 200px; object-fit: contain"
                alt="dna" />
            <div class="card-body">
                <h5 class="card-title text-center mb-4">PETFOOD</h5>
                <p class="card-text mb-4">
                    Dietary nucleotides supports the natural growth process and improve the immune response of puppies
                    and young animals at weaning.
                </p>
            </div>
        </div>

        <h3 class="col-12 text-center bg-blue">DIETARY NUCLEOTIDES : SOURCES</h3>
        <div class="card col-lg-4 col-md-4 col-sm-6">
            <img
                class="card-img-top"
                src="/app/static/img/yeast.webp"
                style="height: 200px; object-fit: contain"
                alt="dna" />
            <div class="card-body">
                <h5 class="card-title text-center mb-4">YEAST EXTRACT</h5>
                <p class="card-text mb-4">
                    Yeasts are naturally rich in RNA and are known as an excellent source of both purine and pyrimidine
                    nucleotides for decades. Prior to RNA hydrolysis to NMP, yeast phosphatases must be inactivated or
                    separated from RNA. Palatability of yeast extracts can be further improved by enzymatic conversion
                    of AMP to IMP.
                </p>
            </div>
        </div>

        <div class="card col-lg-4 col-md-4 col-sm-6">
            <img
                class="card-img-top"
                src="/app/static/img/fish-meal.jpg"
                style="height: 200px; object-fit: contain"
                alt="dna" />
            <div class="card-body">
                <h5 class="card-title text-center mb-4">FISHMEAL</h5>
                <p class="card-text mb-4">
                    Fish meal is a natural source of nucleotides IMP, inosines and hypoxanthine issued from post-mortem
                    breakdown of fish muscle ATP. Since fishmeal is a limited natural resource, considerable efforts are
                    done toward its replacement by alternative products.
                </p>
            </div>
        </div>

        <div class="card col-lg-4 col-md-4 col-sm-6">
            <img
                class="card-img-top"
                src="/app/static/img/cells.jpeg"
                style="height: 200px; object-fit: contain"
                alt="dna" />
            <div class="card-body">
                <h5 class="card-title text-center mb-4">SCP producers:</h5>
                <p class="card-text mb-4">
                    Edible unicellular microorganisms, used in the production of single-cell proteins are also rich in
                    RNA and can be used also excellent source of nucleotides.
                </p>
            </div>
        </div>
    </div>
</section>

</main>
CONTENT;

addContent($page_content);
render();
?>

<style>
</style>