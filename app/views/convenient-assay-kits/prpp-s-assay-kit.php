<?php
$title = "PRPP-S Assay Kit";

ob_start(); ?>
<meta name="keywords" content="PRPP-S Assay Kit, Non-radioactive assay, Phosphoribosylpyrophosphate synthetase, PRPP measurement, Enzymatic assay, Purine salvage pathway, Genetic disorders, Continuous monitoring, 96-well plate format, NADH formation, HGPRT enzyme, IMPDH enzyme, PRPP-S activity, Cell lysates, Convenient assay kit">
<meta name="description" content="Discover the PRECICE® PRPP-S Assay Kit, the first non-radioactive solution for precise measurement of PRPP-S activity in cellular lysates. Designed for convenience, this enzymatic assay utilizes highly active HGPRT and IMPDH enzymes to continuously monitor PRPP synthesis via NADH formation. Ideal for research on purine salvage pathways and genetic disorders, the kit offers a fast, reliable, and user-friendly protocol in a 96-well plate format. Enhance your studies with this innovative tool for accurate PRPP quantification.">
<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";

echo Banner::gen()
?>

<section class="container mt-5">
    <h2 class="underlinedTitle right"><span class="underlined novoblue right">Non radioactive PRPP-S assay</span></h2>
    <div class="row">
        <div class="col-lg-6">
            <p>
                <strong>PRECICE® PRPP-S Assay kit</strong>
                provides the first non radioactive and one-step protocol for measurement of
                <strong>PRPP-S activity</strong>
                in cellular lysates in a convenient 96-well plate format.
            </p>
            <p>
                Phosphoribosylpyrophosphate synthetase (PRS; EC 2.7.6.1), an essential enzyme for the purine salvage
                pathway, is encoded by PRPS1 gene. Several mutations in this gene associated with genetic disorders have
                been described leading to
                <strong>PRS superactivity</strong>
                . This condition is inherited in an X-linked pattern.
                <br />
                PRPS1 gene overactivity increases the production of normal PRPP synthetase 1 enzyme, which increases the
                availability of PRPP. Excessive amounts of purines are generated leading to an accumulation of uric acid, a
                waste product of purine breakdown, in the body. A buildup of uric acid can cause gout, which is a form of
                arthritis resulting from uric acid crystals in the joints. Affected individuals may also develop kidney or
                bladder stones formed from uric acid crystals.
                <br />
                Increase of the availability of PRPP can be due to PRPP-S superactivity or HPRT deficiency (know more about
                <a href="/convenient-assay-kits/hprt-assay-kit">HPRT assay</a>
                ).
            </p>
        </div>
        <div class="col-lg-6 text-center">
            <img class="w-100" src="/app/static/img/PRPP-S-Assay-Kit.png" alt="" />
            <h4 class="novo-blue">PRECICE® PRPP-S Assay Kit</h4>
            <h5>Ref. #K0709-04-2</h5>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <div class="col-lg-10 col-12">

                <!-- FETCHING PRODUCT FROM THE DATABASE -->
                <?= Product::gen("PRPP-S Assay Kit") ?>

                <p class="text-center">
                    <strong>
                        Kit is provided in stable lyophilized form and
                        <span class="text-danger">shipped without dry ice</span>
                    </strong>
                </p>
                <p class="mt-4 mb-5 text-end">
                    <i class="fa-solid fa-download"></i>&nbsp; Download
                    <a target="_blank" href="/app/documents/NovoCIB K0709-02-2 User Manual.pdf">
                        <strong>PRPP-S</strong>
                        <i class="fa-regular fa-file-pdf"></i>
                    </a>
                    (User manual) <i class="fa-solid fa-book"></i>
                </p>
            </div>
        </div>

        <div class="col-lg-3 text-center bg-light pt-3">
            <h4 class="novo-blue">Validated</h4>
        </div>
        <div class="col-lg-9 text-center bg-light">
            <p class="pt-2">
                Specific activitiy of PRS in lysates of human erythrocytes measured by PRECICE® PRPP-S Assay kit is close to
                previously published data.
            </p>
        </div>
        <div style="margin:0px" class="row mb-3 py-2 align-items-center bg-light">
            <div class="text-center col-lg-6">
                <img src="/app/static/img/PRPP-S-assay.png" alt="PRPP-S assay graph" />
            </div>
            <div class="col-lg-6">
                <table class="w-100">
                    <tr>
                        <td><strong>RBC speciment 1 (n=4)</strong></td>
                        <td>65+/-2 nmol/hour/mg Hb</td>
                    </tr>
                    <tr>
                        <td><strong>RBC speciment 2 (n=4)</strong></td>
                        <td>76+/-12 nmol/hour/mg Hb</td>
                    </tr>
                    <tr>
                        <td><strong>RBC speciment 3 (n=4)</strong></td>
                        <td>78+/-10 nmol/hour/mg Hb</td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td><strong>Published data
                                R. B. Gordon et al
                                J. Inher. Metab. Dis. 10 (1987) 82, 88</strong></td>
                        <td>102+/-20nmol/hour/mg Hb</td>
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
                <li>No sample preparation required. Cell lysates are directly used for continuous monitoring of PRPP-Synthetase activity</li>
            </ul>
        </div>
        <div class="col-lg-3 text-center bg-light pt-3">
            <h4 class="novo-blue">Fast</h4>
        </div>
        <div class="col-lg-9 text-center bg-light">
            <p>Simultaneous analysis of up to 6 samples in duplicate in 1h.</p>
        </div>
        <div class="col-lg-3 text-center pt-3">
            <h4 class="novo-blue pt-1">Principle</h4>
        </div>
        <div class="col-lg-9">
            <p>PRS activity is measured as a rate of production of PRPP with concomitant formation of NADH2 after two enzymatic reactions using highly active HPRT and IMPDH. The formation of NADH2 is continuously monitored spectrophotometrically at 340nm.</p>
        </div>

    </div>
</section>
<div class="bg-light">
    <div class="referances mt-5 pb-2 container">
        <h5 class="ms-5 pt-4 pb-3 novo-blue">Scientific Works citing <span class="text-secondary">NOVOCIB</span> PRPP-S Assay Kit:</h5>
        <ol>
            <li>
                <a target="_blank" href="https://www.nature.com/articles/s41589-023-01354-x">Direct stimulation of de novo nucleotide synthesis by O-GlcNAcylation 2024 L. Chen, Q. Zhou, P. Zhang, W. Tan, Y. Li, Z. Xu, J. Ma, G.M. Kupfer , Y. Pei, Q. Song 5, H. Pei Nature Chem Biol; 20(1):19-29</a>
            </li>
            <li>
                <a target="_blank" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC11126974/">Ablation of Atp5if1 impairs metabolic reprogramming and proliferation of T lymphocytes and compromises mouse survival I. Romero-Carraminana, S. Dominguez-Zorita, P.B. Esparza-Molto, J. M. Cuezva (2024) iScience 27, 109863</a>
            </li>
            <li>
                <a href="https://www.scielo.org.mx/scielo.php?pid=S1665-14562021000200141&script=sci_arttext&tlng=en">Effect of hypoxia on purine metabolism in human skeletal muscle cells. (2021) Rivera-Pérez et al: Biotecnia / XXIII (2): 141-148
                </a>
            </li>
            <li>
                <a href="https://www.pulsus.com/scholarly-articles/prps1-is-a-regulative-for-neuroprotection-and-cells-regenerative-proliferation-4897.html">PRPS-1 is a regulative for neuroprotection and cells regenerative proliferation (2018), Danielyan KE, Vardanyan R, Paronyan ZK , Barkhudaryants IM , Chailyan SG, Bisharyan MS. J Biomol Biochem Vol.2 No.2 6-10</a>
            </li>
            <li>
                <a href="https://pubmed.ncbi.nlm.nih.gov/28432611/">Comparison of human erythrocyte purine nucleotide metabolism and blood purine and pyrimidine degradation product concentrations before and after acute exercise in trained and sedentary subjects (2018) W. Dudzinska, M Suska, A Lubkowska, K Jakubowska, M Olszewska, K Safranow, D Chlubek <br> J Physiol Sci 68(3):293-305.</a>
            </li>
            <li>
                <a href="https://pubmed.ncbi.nlm.nih.gov/23734909/">Cell cycle regulation of purine synthesis by phosphoribosyl pyrophosphate and inorganic phosphate (2013) Fridman; A. Saha; A. Chan; D.E. Casteel; R.B. Pilz; G.R. Boss Biochem J 454 (1): 91-99 A.</a>
            </li>
        </ol>
    </div>
</div>