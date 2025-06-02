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
<script src="/app/js/fish-freshness-page.js" defer></script>
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
            <p class="fs-5 fw-bold border text-center">
                ATP ➜ ADP ➜ AMP ➜&nbsp;<span class="text-primary">IMP<i class="fa-solid fa-arrow-down"></i></span>&nbsp;➜ Inosine ➜ <span class="text-danger">Hypoxanthine<i class="fa-solid fa-arrow-up"></i></span>
            </p>
            <p>
                The degree to which ATP breaks down into IMP, inosine, and hypoxanthine is a key indicator of fish freshness (Saito et al 1959). Kit is suitable for use with fresh, frozen, and cooked fish and seafood products, including canned fish.
            </p>
        </div>
        <div class="col-lg-6 text-center">

        </div>
    </div>
    <div class="my-4">
        <h4 class="">Principle</h4>
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
    <hr>

    <div class="mt-5 ms-3 mb-5 row">
        <h3 class="">Kit composition:</h3>
        <div class="col-lg-6 d-flex align-items-center ps-5">
            <ol class="kit-composition">
                <li>"Reaction Buffer"</li>
                <li>"Cofactors"</li>
                <li>Microplate prefilled with lyophilized enzymes sealed.</li>
            </ol>
        </div>
        <div class="col-lg-6 text-center text-lg-">
            <img class="border" style="width: 280px;" src="/app/static/img/freshness-kit.jpg" alt="fish freshness kit composition">
        </div>
    </div>
    <div class="mt-5">
        <h4 class="">Simple:</h4>
        <ol class="ms-4">
            <li>Cook fish in the water, homogenize and clarify by filtration or centrifugation</li>
            <li>Add 200µL to four wells of the same column</li>
            <li>Incubate 30min at 30°C to convert enzymatically IMP, inosine, and hypoxanthine to NADH<sub>2</sub></li>
            <li>4. Read absorbance at 340 nm using a microplate reader.</li>
            <li>Calculate absolute concentrations of each nucleotide or relative molar concentrations directly from absorbance values using formulas:</li>
        </ol>
        <div class="row justify-content-center ">
            <div class="col-lg-9 col-12">
                <div class="mt-3 text-center border">
                    <img id="formula-img-1" class="w-100" src="/app/static/img/Fish-freshness/HxMolar.jpg" alt="mathematical expression" title="Hx, molar % =((Abs C1-Abs B1))/((Abs D1-Abs A1))=(([Hypoxanthine]))/(([IMP]+[inosine]+[hypoxanthine]))">
                    <i class="fa-solid fa-angle-down"></i>
                    <p class="mt-1" id="formula-1">Hx, molar % =((Abs C1-Abs B1))/((Abs D1-Abs A1))=(([Hypoxanthine]))/(([IMP]+[inosine]+[hypoxanthine]))</p>
                </div>

                <div class="mt-3 text-center border">
                    <img id="formula-img-2" class="w-100" src="/app/static/img/Fish-freshness/ImpMolar.jpg" alt="mathematical expression" title="IMP, molar % =((Abs B1-Abs A1))/((Abs D1-Abs A1))=(([IMP]))/(([IMP]+[inosine]+[hypoxanthine]))">
                    <i class="fa-solid fa-angle-down"></i>
                    <p class="mt-1" id="formula-2">IMP, molar % =((Abs B1-Abs A1))/((Abs D1-Abs A1))=(([IMP]))/(([IMP]+[inosine]+[hypoxanthine]))</p>
                </div>
                <div class="mt-3 text-center border">
                    <img id="formula-img-3" class="w-100" src="/app/static/img/Fish-freshness/KiMolar.jpg" alt="mathematical expression" title="Ki, molar % =((Abs D1-Abs B1))/((Abs D1-Abs A1))=(([inosine]+[hypoxanthine]))/(([IMP]+[inosine]+[hypoxanthine]))">
                    <i class="fa-solid fa-angle-down"></i>
                    <p class="mt-1" id="formula-3">Ki, molar % =((Abs D1-Abs B1))/((Abs D1-Abs A1))=(([inosine]+[hypoxanthine]))/(([IMP]+[inosine]+[hypoxanthine]))</p>
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

    .kit-composition {
        font-size: 17px;
    }

    #formula-1,
    #formula-2,
    #formula-3 {
        display: none;
    }
</style>