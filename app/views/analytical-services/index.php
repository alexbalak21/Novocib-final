<?php
global $title;
$title = "Analytical Services for Nucleotide Analysis";

ob_start(); ?>
<meta name="keywords" content="nucleotide analysis, HPLC services, yeast extract analysis, cellular nucleotides, dietary nucleotides, nucleotide profiling, IMPDH inhibitors, food ingredient analysis, pharmaceutical testing, NOVOCIB">
<meta name="description" content="NOVOCIB's analytical services provide comprehensive nucleotide analysis using advanced HPLC technology. Specializing in yeast extract, cellular nucleotides, and dietary nucleotide testing for pharmaceutical and food industries.">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<link rel="canonical" href="https://www.novocib.com/analytical-services" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.novocib.com/analytical-services/">
<meta property="og:title" content="Analytical Services for Nucleotide Analysis | NOVOCIB">
<meta property="og:description" content="Comprehensive nucleotide analysis services using HPLC technology for pharmaceutical and food industries. Accurate, reliable results from industry experts.">
<meta property="og:image" content="https://www.novocib.com/app/img/analytical-services-og.jpg">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Analytical Services for Nucleotide Analysis | NOVOCIB">
<meta name="twitter:description" content="Advanced HPLC analysis of nucleotides for research and industry. Specialized in yeast extract and cellular nucleotide profiling.">
<meta name="twitter:image" content="https://www.novocib.com/app/img/analytical-services-twitter.jpg">

<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>

<!-- Schema.org markup for WebPage -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Analytical Services for Nucleotide Analysis",
        "description": "Comprehensive nucleotide analysis services using HPLC technology for pharmaceutical and food industries.",
        "publisher": {
            "@type": "Organization",
            "name": "NOVOCIB",
            "logo": {
                "@type": "ImageObject",
                "url": "https://www.novocib.com/app/img/logo.png"
            }
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.novocib.com/analytical-services/"
        }
    }
</script>

<?= Banner::gen("/app/img/analytical-services.jpg", "Nucleotide Analysis Services - Advanced HPLC Testing") ?>

<section class="container my-5">
    <div class="row">
        <div class="col-lg-8 mx-auto text-center mb-5">
            <h2 class="underlinedTitle center">
                <span class="underlined novoblue center">Advanced Nucleotide Analysis Services</span>
            </h2>
            <p class="lead">Precise, reliable HPLC analysis for pharmaceutical, food, and research applications. Our award-winning laboratory provides comprehensive nucleotide profiling with fast turnaround times and expert interpretation.</p>
        </div>
    </div>

    <div class="row g-4">
        <!-- Service 1 -->
        <div class="col-lg-6" itemscope itemtype="https://schema.org/Service">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fa-flask fa-2x text-primary"></i>
                        </div>
                        <h2 class="h4 mb-0" itemprop="name">
                            <a href="/nucleotide-analysis-service" class="text-decoration-none" itemprop="url">Nucleotide Analysis</a>
                        </h2>
                    </div>
                    <p class="card-text" itemprop="description">
                        Our advanced ion-paired high-performance liquid chromatography (HPLC) with diode array detection provides comprehensive analysis of nucleotide profiles in cell extracts, food products, and ingredients. Ideal for quality control and research applications.
                    </p>
                    <a href="/nucleotide-analysis-service" class="btn btn-outline-primary mt-2" aria-label="Learn more about our Nucleotide Analysis service">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="col-lg-6" itemscope itemtype="https://schema.org/Service">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fa-wine-bottle fa-2x text-primary"></i>
                        </div>
                        <h2 class="h4 mb-0" itemprop="name">
                            <a href="/analytical-services/yeast-extract-nucleotide-analysis" class="text-decoration-none" itemprop="url">Yeast Extract Analysis</a>
                        </h2>
                    </div>
                    <p class="card-text" itemprop="description">
                        Specialized analysis of yeast extracts for flavor nucleotides. Our service includes characterization of free 5' nucleotides and comprehensive profiling of nucleotides in yeast extracts, essential for food and flavoring industries.
                    </p>
                    <a href="/analytical-services/yeast-extract-nucleotide-analysis" class="btn btn-outline-primary mt-2" aria-label="Learn more about our Yeast Extract Analysis service">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="col-lg-6" itemscope itemtype="https://schema.org/Service">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fa-dna fa-2x text-primary"></i>
                        </div>
                        <h2 class="h4 mb-0" itemprop="name">
                            <a href="/cellular-nucleotides-analysis" class="text-decoration-none" itemprop="url">Cellular Nucleotides</a>
                        </h2>
                    </div>
                    <p class="card-text" itemprop="description">
                        Comprehensive profiling of over 31 cellular (deoxy-)ribonucleotides (mono-, di-, and triphosphate) in antimetabolite-treated cells. Our SPE extraction and ion-paired HPLC analysis provides detailed insights for pharmaceutical research and development.
                    </p>
                    <a href="/cellular-nucleotides-analysis" class="btn btn-outline-primary mt-2" aria-label="Learn more about our Cellular Nucleotides Analysis service">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="col-lg-6" itemscope itemtype="https://schema.org/Service">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fa-utensils fa-2x text-primary"></i>
                        </div>
                        <h2 class="h4 mb-0" itemprop="name">
                            <a href="/dietary-nucleotides" class="text-decoration-none" itemprop="url">Dietary Nucleotides</a>
                        </h2>
                    </div>
                    <p class="card-text" itemprop="description">
                        Essential for growth and development, nucleotides play crucial roles in energy metabolism and cellular function. Our analysis services help ensure optimal nucleotide content in dietary supplements and functional foods.
                    </p>
                    <a href="/dietary-nucleotides" class="btn btn-outline-primary mt-2" aria-label="Learn more about our Dietary Nucleotides service">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="row mt-5 pt-4 border-top">
        <div class="col-12 text-center mb-4">
            <h2 class="h3">Why Choose Our Analytical Services?</h2>
        </div>
        <div class="col-md-4 mb-4">
            <div class="text-center p-3 h-100">
                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="fas fa-award fa-2x text-primary"></i>
                </div>
                <h3 class="h5">National Award-Winning Lab</h3>
                <p>Honored at the national level for pioneering analytical services and excellence in nucleotide research.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="text-center p-3 h-100">
                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="fas fa-chart-line fa-2x text-primary"></i>
                </div>
                <h3 class="h5">Advanced Technology</h3>
                <p>State-of-the-art HPLC equipment with diode array detection for precise and comprehensive nucleotide analysis.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="text-center p-3 h-100">
                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="fas fa-user-tie fa-2x text-primary"></i>
                </div>
                <h3 class="h5">Expert Team</h3>
                <p>Our experienced scientists provide detailed reports and expert consultation to help you interpret your results.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center mb-5">
                    <h2 class="h1 mb-3">Frequently Asked Questions</h2>
                    <p class="lead text-muted">Find answers to common questions about our analytical services</p>
                </div>

                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                What is the typical turnaround time for analysis?
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Standard turnaround time is 5-7 business days from sample receipt. Expedited services are available upon request for an additional fee. Contact our team for specific project timelines.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What information is included in the analysis report?
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our comprehensive reports include detailed chromatograms, quantitative results, method parameters, and expert interpretation. We also provide raw data in standard formats for your further analysis.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What are the sample requirements?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The analysis requires 5-10g of yeast extract powder or 10-20mL of liquid sample. Samples should be shipped under refrigerated conditions to preserve integrity.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <p class="mb-3">Have more questions? Our team is here to help.</p>
                    <a href="/contact" class="btn btn-primary btn-lg">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>