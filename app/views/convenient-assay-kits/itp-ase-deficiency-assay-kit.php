<?php
global $title;
$title = "ITP-ase Assay Kit";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

addContent(Banner::gen());
$content_title = UnderlinedTitle::get("One-step ITP pyrophosphatase assay", "novoblue", "right");

ob_start(); ?>
<main class="container mt-5">
    <?= $content_title ?>
    <div class="row">
        <div class="col-lg-6">
            <p><strong>PRECICE® ITPase Assay kit</strong> provides the first <strong>non radioactive and continuous</strong> protocol for measurement of <strong>ITP pyrophosphatase activity</strong> (also known as inosine triphosphatase and inosine triphosphate pyrophosphohydrolase) in cellular lysates in a convenient 96-well plate format.</p>
            <p>ITP pyrophosphatase, or ITPase (EC 3.6.1.19), is an intracellular enzyme that catalyzes the pyrophosphohydrolysis of ITP/dITP and xanthosine triphosphate to prevent unusual nucleoside triphosphates from accumulating in (deoxy) nucleoside triphosphate (d)NTP pools and being integrated into RNA and DNA.<br>
                This enzyme is encoded by the ITPA gene in mammals. Certain ITPA variants causing ITPase deficiency have been linked to adverse reactions to the immunosuppressive thiopurine drugs azathioprine and 6-mercaptopurine, and protection against ribavirin-induced anemia.
            </p>
        </div>
        <div class="col-lg-6">
            <img class="w-100" src="/app/img/ITPase-assay-reaction.jpg" alt="">
            <h4 class="novo-blue text-center">PRECICE® ITPase Assay Kit</h4>
            <h5 class="text-center">Ref. #K0709-06-2</h5>
        </div>
        <div class=" d-flex justify-content-center mt-3">
            <div class="col-lg-10 col-12">

                <?= Product::gen("ITP-ase Assay Kit") ?>

                <p class="text-center"><strong>Kit provided in stable lyophilized form and <span class="text-danger">shipped without dry ice</span> </strong></p>
                <p class="mt-4 mb-5 text-end">Download <a target="_blank" href="/app/documents/NovoCIB K0709-06-02 User Manual 230924.pdf"> <strong>ITPase assay Protocol <i class="fa-regular fa-file-pdf"></i></a> </strong>(User manual)</p>

                <p class="text-center"><strong>Please, <a href="/inquiry">Contact us</a> for any questions.</strong></p>
                <p class="text-center mb-5"><strong>Or ask us by email: <a href="mailto:contact@novocib.com">contact@novocib.com</a></strong></p>

            </div>
        </div>

        <div class="col-lg-3 text-center bg-light pt-3">
            <h4 class="novo-blue">Validated</h4>
        </div>
        <div class="col-lg-9 text-center bg-light">
            <p class="pt-2">
                Specific activitiy of ITP pyrophosphohydrolase in lysates of human erythrocytes measured by PRECICE® ITPase Assay kit.
            </p>
        </div>
        <div style="margin:0px" class="row mb-3 py-2 align-items-center bg-light">
            <div class="text-center col-lg-6">
                <img src="/app/img/ITPase_reaction.jpg" alt="ITPase activity Graph" />
            </div>
            <div class="col-lg-6">
                <table class="w-100">
                    <tr>
                        <td><strong>RBC speciment 1 (n=2)</strong></td>
                        <td>94+/-3 nmol/hour/mg Hb</td>
                    </tr>
                    <tr>
                        <td><strong>RBC speciment 2 (n=2)</strong></td>
                        <td>83+/-3 nmol/hour/mg Hb</td>
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
                <li>No sample preparation required. Cell lysates are directly used for continuous monitoring of ITPA activity</li>
            </ul>
        </div>
        <div class="col-lg-3 text-center bg-light pt-3">
            <h4 class="novo-blue">Fast</h4>
        </div>
        <div class="col-lg-9 text-center bg-light">
            <p class="pt-3"> Simultaneous analysis of up to 12 samples in duplicate in 1h.</p>
        </div>
        <div class="col-lg-3 text-center pt-4">
            <h4 class="novo-blue">Principle</h4>
        </div>
        <div class="col-lg-9">
            <p class="pt-3 pb-5">Inosine triphosphatase activity is measured as a rate of production of IMP with concomitant formation of NADH2 after one enzymatic reaction using highly active IMPDH. The formation of NADH2 is continuously monitored spectrophotometrically at 340nm.</p>
        </div>
    </div>
    <div class="bg-light">
        <div class="referances my-5">
            <h5 class="ms-5 pt-4 pb-3 novo-blue">Scientific Articles citing PRECICE® HPRT Assay kit from <span class="text-secondary">NOVOCIB</span>:</h5>
            <ul>
                <li class="text-center pb-3">
                    <a target="_blank" href="https://journals.plos.org/plospathogens/article?id=10.1371/journal.ppat.1010332">A.A. Valli, R.G. López, M. Ribaya, F.J. Martínez, D.G. Gómez, B. García, I. Gonzalo, A.G. de Prádena, F. Pasin, I. Montanuy, E. Rodríguez-Gonzalo 2, J.A. García <br>
                        Maf/ham1-like pyrophosphatases of non-canonical nucleotides are host-specific partners of viral RNA-dependent RNA polymerases. <br>
                        PLoS Pathog 2022 18(2): e1010332 <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </li>
            </ul>
        </div>
    </div>
</main>
<?php $page_content = ob_get_clean();

addContent($page_content);
render();
