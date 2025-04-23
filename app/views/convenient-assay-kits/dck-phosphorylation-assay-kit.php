<?php
$title = "Deoxycytidine Kinase Phosphorylation Assay Kit";

ob_start(); ?>

<meta name="keywords" content="buy recombinant 5'-nucleotidase enzyme, cytosolic 5'-nucleotidase E.C.3.1.3.5, High Km 5'-nucleotidase, hkm-NT, purine 5'-NT enzyme, ribavirin phosphorylation assay, GMP and IMP dephosphorylation, cloned human nucleotidase, antiviral nucleoside analog phosphorylation">
<meta name="description" content="Explore NovoCIB's active human cytosolic 5'-nucleotidase II: a recombinant enzyme characterized for its ability to dephosphorylate GMP/IMP and phosphorylate natural nucleosides and antiviral analogs such as ribavirin.">

<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";

echo Banner::gen();
?>


<section class="container mt-5">
    <h2 class="underlinedTitle right"><span class="underlined novoblue right">Anticancer nucleosides phosphorylation</span></h2>
    <div class="row">
        <div class="col-lg-6">
            <p>
                Human deoxycytidine kinase enzyme has a broad substrate specificity and provides the phosphorylation of purine/pyrimidine deoxynucleosides and pyrimidine ribonucleosides. Deoxycytidine kinase is critical for phosphorylation of cytidine analogs and provides first steps of activation of highly effective anti-cancer prodrugs, such as aracytidine, gemcitabine and cladribine.
            </p>
            <p>
                <strong>PRECICE® dCK Phosphorylation Assay Kit</strong> is a first tool for rapid evaluation of substrates properties of novel nucleoside analogues for human deoxycytidine kinase.
            </p>
            <p>
            <h4 class="novo-blue">Principle</h4>
            <strong>PRECICE® dCK Phosphorylation Assay Kit</strong> is based on competitive inhibition of deoxyinosine (dIR) phosphorylation by dCK enzyme. In the absence of nucleoside competitor, deoxycytidine kinase phosphorylates deoxyinosine resulting in the formation of dIMP. dIMP is further oxidized by IMPDH to dXMP and NADH2 continuously monitored at 340nm. In the presence of nucleoside competitor, the phosphorylation of deoxyinosine, poor dCK substrate, is inhibited detected as a decrease in NADH2 formation.
            </p>
            <p>
                <strong>PRECICE® dCK Phosphorylation Assay Kit</strong> is based on competitive inhibition of deoxyinosine (dIR) phosphorylation by dCK enzyme. In the absence of nucleoside competitor, deoxycytidine kinase phosphorylates deoxyinosine resulting in the formation of dIMP. dIMP is further oxidized by IMPDH to dXMP and NADH2 continuously monitored at 340nm. In the presence of nucleoside competitor, the phosphorylation of deoxyinosine, poor dCK substrate, is inhibited detected as a decrease in NADH2 formation.
            </p>
        </div>
        <div class="col-lg-6 text-center">
            <img class="w-100" src="/app/static/img/dCK-phosphorylation-kit.png" alt="dCK phosphorylation kit reaction schema" />
            <h4 class="novo-blue">PRECICE® dCK Phosphorylation Assay Kit</h4>
            <h5>Ref. #K0307-01</h5>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <div class="col-lg-10 col-12">

                <?= Product::gen("dCK Phosphorylation Assay Kit") ?>

                <p class="text-center">
                    <strong>
                        Kit is provided in stable lyophilized form and
                        <span class="text-danger">shipped without dry ice</span>
                    </strong>
                </p>
                <p class="text-center my-4">
                    <strong>Screening service by <span class="novo-blue">NOVOCIB</span> also available<br>For HTS evaluation of dCK activity in lysates, <span class="novo-blue">NOVOCIB</span> offers <span class="novo-blue">dCK Assay Kit</span></strong>
                </p>
                <p class="mt-4 mb-5 text-end">
                    Download
                    <a target="_blank" href="/app/documents/NovoCIB K0307-01-User Manual v140213SR Phosphorylation.pdf">
                        <strong> dCK Phosphorylation Assay protocol </strong>
                        <i class="fa-regular fa-file-pdf"></i>
                    </a>
                    (User manual)
                </p>
            </div>
        </div>
        <div class="col-12">
            <h4 class="novo-blue">Validated with anticancer nucleoside analogues</h4>
            <p class="ms-5"><i class="novo-blue fa-solid fa-arrow-right"></i> Such as gemcitabine, cladribine, aracytidine, efficiently phosphorylated by tumor cells and natural pyrimidine and purine nucleosides.</p>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <img class="w-100" src="/app/static/img/dCK-competitors.png" alt="">
                </div>
                <div class="col-lg-8">
                    <table class="my-4 w-100 nucleoside-analogues">
                        <thead>
                            <tr>
                                <th>Nucleoside Analogues</th>
                                <td>Deoxycytidine</td>
                                <td>Cladribine</td>
                                <td>Aracytidine</td>
                                <td>Gemcitabine</td>
                                <td>Fludarabine</td>
                                <td>Deoxyguanosine</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>IC50</strong> <br>(Competitive Inhibition)</td>
                                <td>5µM</td>
                                <td>30µM</td>
                                <td>30µM</td>
                                <td>100µM</td>
                                <td>400µM</td>
                                <td>1,2mM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <h4 class="novo-blue">Simple</h4>
    <p class="ms-5"><i class="novo-blue fa-solid fa-arrow-right"></i> Homogenous and continuous (add-and-measure)</p>
    <h4 class="novo-blue mt-4">High-Throughput Analysis</h4>
    <p class="ms-5"><i class="novo-blue fa-solid fa-arrow-right"></i> The assay allows the test of 12 analogues at 7 different concentrations at the same time (or 6 analogues in duplicata)</p>
    <p class="ms-5 mb-5"><i class="novo-blue fa-solid fa-arrow-right"></i> Readout is peformed with plate reader fitted with 340nm filter</p>

    <div class="container">
        <div class="referances my-5">
            <h5 class="ms-5 pt-4 pb-3 novo-blue">Scientific Articles citing Dck Phosphorylation Assay Kit from <span class="text-secondary">NOVOCIB</span>:</h5>
            <ol>
                <li>
                    <a target="_blank" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6779049/">Disparate Effects of Cytotoxic Chemotherapy on the Antiviral Activity of Antiretroviral Therapy: Implications for Treatments of HIV-Infected Cancer Patients (2019) <br> S. Medina-Moreno, J.C. Zapata, M.L. Cottrell, N.M. Le, S. Tao, J. Bryant, E. Sausville, R.F. Schinazi, A.D.M. Kashuba, R.R Redfield, A. Heredia* Antivir Ther. 2019; 24(3): 17-186.</a>
                </li>
                <li>
                    <a target="_blank" href="https://pubs.acs.org/doi/10.1021/acschembio.6b00788#">Activation Pathway of a Nucleoside Analog Inhibiting Respiratory Syncytial Virus Polymerase (2017) <br> P.C. Jordan, S.K. Stevens, Y.Tam, R.P. Pemberton, S.Chaudhuri, A.D. Stoycheva, N. Dyatkina, G.Wang, J.A. Symons, J. Deval, L. Beigelman ACS Chem. Biol. 2017, 12, 1, 83-91</a>
                </li>
                <li>
                    <a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/30251630/">Combined Proteomic and In Silico Target Identification Reveal a Role for 5-Lipoxygenase in Developmental Signaling Pathways (2018) Brand et al., Cell Chemical Biology 25, 1095-1106 <br> S. Brand, S. Roy, P. Schröder, B. Rathmer, J. Roos, S. Kapoor , S. Patil, C. Pommerenke , T. Maier, P. Janning , S. Eberth, D. Steinhilber, D. Schade, G. Schneider, K. Kumar, S. Ziegler, H. Waldmann</a>
                </li>
                <li>
                    <a target="_blank" href="https://www.sciencedirect.com/science/article/abs/pii/S0753332217326318">N (4)-[B-(4,4,5,5-tetramethyl-1,3,2-dioxaborolan)methyl]-2'-deoxycytidine as a potential boron delivery agent with respect to glioblastoma (2017) <br> Ł. Uram , J. Nizioł, P. Maj, J. Sobich , W. Rode, T. Ruman Biomedicine & Pharmacotherapy V. 95, Pages 749-755</a>
                </li>
                <li>
                    <a target="_blank" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC8919275/">Rational Design of an Orally Active Anticancer Fluoropyrimidine, Pencitabine, a Hybrid of Capecitabine and Gemcitabine (2022) <br> Thomas I. Kalman ACS Med Chem Lett. 13(3): 409-416</a>
                </li>
            </ol>
        </div>
    </div>
</section>