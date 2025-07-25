<?php
global $title;
$title = "AMP Deaminase Deficiency Assay Kit";

ob_start(); ?>
<meta name="keywords" content="AMP Deaminase Assay Kit, non-radioactive assay, enzyme activity measurement, AMPDA kit, cell lysate assay, 96-well plate assay, NOVOCIB, purine metabolism, biochemical assay kits">
<meta name="description" content="Discover NOVOCIB's AMP Deaminase Assay Kit – a non-radioactive, one-step solution for measuring AMP deaminase activity in cell lysates using a convenient 96-well plate format. Fast, continuous, and easy-to-use.">
<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>


<?= Banner::gen() ?>
<main class="container mt-5">
    <h2 class="underlinedTitle center" style="margin-bottom: 0">
        <span class="underlined novoblue center">Non radioactive AMP Deaminase Assay</span>
    </h2>
    <h4 class="text-center mt-3 mb-4">Including active AMP-DA</h4>

    <div class="row">
        <div class="col-lg-6">
            <p><strong>PRECICE® AMP Deaminase Assay kit</strong> provides the first <strong>non radioactive</strong> and one-step protocol for measurement of <strong>AMP Deaminase activity</strong> in cellular lysates in a convenient 96-well plate format.</p>
        </div>
        <div class="col-lg-6">
            <img class="w-100" src="/app/img/AMPD-assay-reaction.jpg" alt="">
            <h4 class="novo-blue text-center">PRECICE® AMP Deaminase Assay Kit</h4>
            <h5 class="text-center">#K0709-05-2</h5>
        </div>
        <div class=" d-flex justify-content-center mt-3">
            <div class="col-lg-10 col-12">

                <?= Products::gen("AMP Deaminase Assay Kit") ?>

                <p class="text-center"><strong>Kit provided in stable lyophilized form and <span class="text-danger">shipped without dry ice</span> </strong></p>
                <p class="mt-4 mb-5 text-end">Download <a target="_blank" href="/app/documents/NovoCIB K0709-05-01 User Manual 300823.pdf"> <strong>AMPD assay Protocol <i class="fa-regular fa-file-pdf"></i></a> </strong>(User manual)</p>
            </div>
        </div>

        <div class="col-lg-3 text-center bg-light pt-3">
            <h4 class="novo-blue">Validated</h4>
        </div>
        <div class="col-lg-9 text-center bg-light">
            <p class="pt-2">
                Specific activitiy of AMP Deaminase in lysates of human erythrocytes measured by PRECICE® AMP Deaminase Assay kit.
            </p>
        </div>
        <div style="margin:0px" class="row mb-3 py-2 align-items-center bg-light">
            <div class="text-center col-lg-6">
                <img src="/app/img/AMPD-reaction.jpg" alt="AMPD Reaction Graph" />
            </div>
            <div class="col-lg-6">
                <table class="w-100">
                    <tr>
                        <td><strong>RBC speciment 1 (n=2)</strong></td>
                        <td>216+/-1 nmol/hour/mg Hb</td>
                    </tr>
                    <tr>
                        <td><strong>RBC speciment 2 (n=2)</strong></td>
                        <td>226+/-5 nmol/hour/mg Hb</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="col-lg-3 text-center pt-3">
            <h4 class="novo-blue">Convenient</h4>
        </div>
        <div class="col-lg-9">
            <ul>
                <li>Non radioactive</li>
                <li>Continuous</li>
                <li>No sample preparation required. Cell lysates are directly used for continuous monitoring of AMP Deaminase activity</li>

            </ul>
        </div>
        <div class="col-lg-3 text-center bg-light pt-3">
            <h4 class="novo-blue">Fast</h4>
        </div>
        <div class="col-lg-9 text-center bg-light">
            <p class="pt-3">Simultaneous analysis of up to 12 samples in duplicate in 1h.</p>
        </div>

        <p class="my-5"><strong>Principle</strong><br>
            AMP Deaminase activity is measured as a rate of production of IMP with concomitant formation of NADH2 after one enzymatic reaction using highly active IMPDH. The formation of NADH2 is continuously monitored spectrophotometrically at 340nm.</p>

        <p class="text-center"><strong>Please, <a href="/inquiry">Contact us</a> for any questions.</strong></p>
        <p class="text-center mb-5"><strong>Or ask us by email: <a href="mailto:contact@novocib.com">contact@novocib.com</a></strong></p>
    </div>
</main>