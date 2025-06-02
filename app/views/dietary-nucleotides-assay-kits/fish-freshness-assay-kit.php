<?php
$title = "Fish freshness assay kit";

// META TAGS 
ob_start(); ?>
<meta name="description" content="">
<meta name="keywords" content="">
<?php $metas = ob_get_clean();


require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>

<?= Banner::gen() ?>
<main class="container mt-5">
    <h2 class="underlinedTitle center"><span class="underlined novoblue">IMP, Inosine and Hypoxanthine Assay Kit</span></h2>
    <div class="row">
        <div class="col-lg-6">
            <p>
                Fish muscle is particularly rich in ATP, which is a most abundant muscle metabolite after amino acids. Post-mortem transformation of ATP in fish muscle is a well-documented process that has significant implications for food quality and shelf life.
            </p>
            <p style="font-weight: 600;">
                Post-Mortem ATP Degradation Pathway in Fish Muscle.
            </p>
            <p class="fs-5 fw-bold">
                ATP ➜ ADP ➜ AMP ➜&nbsp;<span class="text-primary">IMP<i class="fa-solid fa-arrow-down"></i></span>&nbsp;➜ Inosine ➜ <span class="text-danger">Hypoxanthine<i class="fa-solid fa-arrow-up"></i></span>
            </p>
            <p>
                The degree to which ATP breaks down into IMP, inosine, and hypoxanthine is a key indicator of fish freshness (Saito et al 1959). Kit is suitable for use with fresh, frozen, and cooked fish and seafood products, including canned fish.
            </p>
        </div>
        <div class="col-lg-6">

        </div>
    </div>
    <div>
        <h4 class="mt-4">Principle</h4>
        <p>
            <span class="fw-bold">The PRECICE® IMP, Inosine, and Hypoxanthine Assay Kit</span> is a colorimetric enzymatic assay allowing the conversion of measurement of concentration of three nucleotides, formed from ATP: IMP, inosine, and hypoxanthine, in a single sample.
        </p>
        <div class="d-flex justify-content-center text-center">
            <div class="row justify-content-center enzymatic-conversion">
                <div class="col-4" style="width: 150px;">
                    <span>IMP</span><br>
                    <span class="arrow"><img src="/app/static/img/arrow.jpg" alt="arrow down"></span>
                    <span>NADH<sub>2</sub></span>
                </div>
                <div class="col-4" style="width: 150px;">
                    <span>Inosine</span><br>
                    <span class="arrow"><img src="/app/static/img/arrow.jpg" alt="arrow down"></span>
                    <span>NADH<sub>2</sub></span>
                </div>
                <div class="col-4" style="width: 150px;">
                    <span>Hypoxanthine</span><br>
                    <span class="arrow"><img src="/app/static/img/arrow.jpg" alt="arrow down"></span>
                    <span>NADH<sub>2</sub></span>
                </div>
                <div class="text-center conversion">
                    <div><span class="middle">Enzymatic conversion</span></div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .arrow {
        display: block;
    }

    .enzymatic-conversion {
        position: relative;
    }

    .conversion {
        display: inline-block;
        background-color: #007bff;
        /* Adjust the color */
        color: white;
        border: 2px solid #004a99;
        /* Dark border */
        border-radius: 10px;
        /* Rounded corners */
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        position: absolute;
        top: 46px;
        width: 84%;
        ;
    }

    .enzymatic-conversion span:not(.arrow):not(.middle) {
        font-size: large;
    }
</style>