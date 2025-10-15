<?php
global $title;
$title = "Nucleotides Assay Kits";

// META TAGS 
ob_start(); ?>
<meta name="description" content="High-quality Nucleotides Assay Kits for accurate measurement and analysis of nucleotides in various samples.">
<meta name="keywords" content="nucleotides, assay kits, IMP, GMP, AMP, analysis, measurement, biochemistry">
<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/base_temp.php";
?>

<?= Banner::gen("/app/img/adn3dm.jpg") ?>
<main class="container mt-5">
    <h2 class="underlinedTitle"><span class="underlined novoblue">Taste-Enhancing Nucleotides</span></h2>
    <p>
        Taste-potentiating nucleotides—including inosine monophosphate (IMP, inosinic acid and its salts E630-E633), guanosine monophosphate (GMP, guanylic acid and its salts E626-E629), and adenosine monophosphate (AMP, E629)—play a pivotal role in enhancing umami perception through synergistic interactions with glutamate.
    </p>
    <p>
        IMP is naturally present in the muscle tissues of animals, particularly in fresh seafood, chicken, pork, and beef and is a key contributor to the umami flavor.
    </p>

    <p>
        GMP, AMP, and IMP can also be produced via microbial fermentation using yeasts or specific bacterial strains such as Corynebacterium and Bacillus. These nucleotides are commonly used as food additives in processed products such as soups, snacks, sauces, and instant noodles to intensify savory flavor profiles and elevate overall taste experience.
    </p>
<section class="mt-5">
    <h3><span class="novo-blue">NOVOCIB</span> provides:</h3>
    <ol>
        <li>analytical service for the determination of full spectra of nucleotides in food and feed using HPLC-UV.;</li>
        <li>PRECICE® enzymatic assay kits for nucleotides determination in fishmeal, yeast extracts and related products:</li>
    </ol>
    
        <h4 class="text-center mt-3">Available Assay Kits</h4>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h5 card-title">PRECICE® Fishmeal IMP Assay kit</h3>
                        <p class="card-text">For the quantitative determination of Inosine Monophosphate (IMP) in various samples.</p>
                        <ul class="list-unstyled">
                            <li><strong>Sensitivity:</strong> 0.1 µM</li>
                            <li><strong>Range:</strong> 0.2-50 µM</li>
                            <li><strong>Sample Type:</strong> Food, biological fluids</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h5 card-title">PRECICE® GMP-IMP Assay kit</h3>
                        <p class="card-text">For the quantitative determination of Guanosine Monophosphate (GMP).</p>
                        <ul class="list-unstyled">
                            <li><strong>Sensitivity:</strong> 0.15 µM</li>
                            <li><strong>Range:</strong> 0.3-60 µM</li>
                            <li><strong>Sample Type:</strong> Food, biological samples</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h5 card-title">Yeast Extract IMP-AMP Assay kit</h3>
                        <p class="card-text">For the quantitative determination of Adenosine Monophosphate (AMP).</p>
                        <ul class="list-unstyled">
                            <li><strong>Sensitivity:</strong> 0.2 µM</li>
                            <li><strong>Range:</strong> 0.5-100 µM</li>
                            <li><strong>Sample Type:</strong> Biological fluids, tissue extracts</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4">
  <h2 class="mb-3">PRECICE® Nucleotides Kits</h2>
  <p>PRECICE® Nucleotides kits have been developed in a user-friendly 96-well format.</p>
  <p>Microplates provided with the kit are prefilled:</p>
  <ul>
    <li>With the enzymes that simplify the assay procedure</li>
    <li>With calibration standards</li>
  </ul>

  <h3 class="mt-4">Advantages of Using PRECICE® Nucleotides Kits</h3>
  <ul>
    <li>Enzymes are stereospecific towards 5'NMP</li>
    <li>Enzymatic approach is faster than analytical approach</li>
    <li>Ecologic (no solvent, extraction by boiling)</li>
    <li>Time and cost-efficient</li>
  </ul>
</div>

    </section>

    <section class="mb-5">
        <h2 class="underlinedTitle"><span class="underlined novoblue">Features & Benefits</span></h2>
        <ul>
            <li>High sensitivity and specificity</li>
            <li>Simple and rapid procedure</li>
            <li>No need for specialized equipment</li>
            <li>Compatible with various sample types</li>
            <li>Includes all necessary reagents</li>
            <li>Comprehensive technical support</li>
        </ul>
    </section>

    <section class="mb-5">
        <h2 class="underlinedTitle"><span class="underlined novoblue">Applications</span></h2>
        <div class="row">
            <div class="col-md-6">
                <h3 class="h5">Food Industry</h3>
                <p>Quality control of umami taste in food products, flavor enhancement analysis, and food processing monitoring.</p>
            </div>
            <div class="col-md-6">
                <h3 class="h5">Research</h3>
                <p>Biochemical research, metabolic studies, and nucleotide pathway analysis in various organisms.</p>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h2 class="underlinedTitle"><span class="underlined novoblue">Technical Support</span></h2>
        <p>Our technical support team is available to assist with any questions regarding our Nucleotides Assay Kits. Please contact our technical support for protocol optimization, troubleshooting, and application-specific advice.</p>
    </section>

    <div class="text-center my-5">
        <a href="/contact" class="btn btn-primary">Contact Us for More Information</a>
    </div>
</main>