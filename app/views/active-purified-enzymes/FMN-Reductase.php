<?php
$title = "Purified Active FMN Reductase";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/test_template.php";
?>
<?= Banner::gen(); ?>


<div class="container mt-5">
    <h2 class="underlinedTitle center">
        <span class="underlined novoblue">Bacterial Recombinant FMN Reductase (FRE) (E.C.1.5.1.29)</span>
    </h2>
    <p><span class="novo-blue"><b>NOVOCIB</b></span> bacterial (E. coli) NAD(P)H-dependent FMN-oxidoreductase is a recombinant protein of ca. 26kDa overexpressed in E.coli. The sequence of cloned Fre (SwissProt accession number P0AEN1) was confirmed by DNA sequencing (100% identity). NAD(P)H:flavin oxidoreductases (or flavin reductases) catalyze the reduction of riboflavin, FMN, and FAD by NADPH and NADH. These enzymes are present in all microorganisms, including luminous marine bacteria, and also in mammals. Flavin reductases have been classified into two groups. The first group includes flavoproteins that use a flavin prosthetic group for the electron transfer from NAD(P)H to the flavin substrate (flavin reductase P from Vibrio harveyi). In the second group, enzymes do not contain any prosthetic group. Fre, NAD(P)H:flavin oxidoreductase from E. coli, belongs to this second group of enzymes.</p>
    <p>
        <b>Applications</b><br>
        Coupling of bacterial luciferase to FMN-NAD(P)H oxidoreductase has been used to provide ultrasensitive analytical tools for the
        quantification of NADH and the substrates of NADH-, NADPH- dependent enzymes (e.g. glucose, lactate, malate, ethanol, sorbitol,
        oxaloacetate). Although FMN-reductase often present in luciferase enzyme preparations may be sufficient for producing light in the
        presence of NAD(P)H, highly purified and characterized Fre enzyme can offer some advantages such as an increased sensitivity,
        better control of the signal intensity and duration, and saving of the luciferase enzyme (Figure 1).
    </p>
    <h3 class="novo-blue text-center mt-5">Bacterial FMN-reductase from Escherichia coli (Fre)</h3>
    <div class="d-flex justify-content-center mt-4">
        <div class="col-lg-10 col-12">

            <!-- FETCHING PRODUCT FROM THE DATABASE -->
            <?= Products::gen("FMN-Reductase") ?>

            <p class="text-center">
                <strong>
                    Kit is provided in stable lyophilized form and
                    <span class="text-danger">shipped without dry ice</span>
                </strong>
            </p>
            <p class="mt-4 mb-4 text-end">
                Download
                <a target="_blank" href="/app/documents/NovoCIB E-Nov8.pdf">
                    <strong>FMN Reductase Documentation</strong>
                    <i class="fa-regular fa-file-pdf"></i>
                </a>
            </p>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <div>
            <b><u>Synonyms:</u></b>
            <p>NAD(P)H:flavin oxidoreductase, NAD(P)H:flavin mononucleotide oxidoreductase, NAD(P)H(2):FMN oxidoreductase, <br>
                NAD(P)H-FMN reductase, NAD(P)H-dependent FMN reductase, <br>
                NAD(P)H:FMN oxidoreductase, riboflavin mononucleotide reductase, <br>
                flavin mononucleotide reductase
            </p>
            <p class="text-end">E.C. 1.5.1.29</p>
        </div>
    </div>
    <div class="row mt-4 mb-5">
        <div class="col-xl-6  row">
            <div class="col-4">
                <b class="ms-3">FRE Gel</b>
                <img class="border" src="/app/static/img/FRE_Gel.png" alt="FRE Gel">
            </div>
            <div class="col-8 mt-5">
                <p>
                    <b>Unit Definition</b>: One unit of
                    FMN-reductase converts 1.0
                    µmole of FMN and NADH to
                    FMNH2 and NAD per minute at
                    pH 7.9 at 37°C.
                </p>
                <p>
                    <b>Assay conditions</b>: 100mM TrisHCl, pH 7.9, 250µM NADH,
                    25µM FMN.
                </p>
                <p>
                    <b>Specific activity</b>: >2U/mg.
                </p>
                <p>
                    <b>
                        Purity controlled by 10% AA <br>
                        SDS-PAGE
                    </b>
                </p>
            </div>
        </div>
        <div class="col-xl-6 mt-sm-5">
            <p>
                <b>Fig. 1. Calibration curves (log-log plot) for NADH</b> obtained using purified
                luciferase (50µg/ml, NovoCIB, # E-Nov 10) in the presence (red) or absence (blue) of
                exogenous Fre (10mU/ml).
            </p>
            <div class="d-flex justify-content-center"><img class="border" src="/app/static/img/FRE_Calibration.png" alt="FRE Calibration Graph"></div>
            <p><b>Assay conditions</b>: Luminescence signal (5 seconds) was measured immediately after
                NADH addition (5µL) to 200µL-well containing 0.1M KH2PO4 pH=6.9, 0.02% decanal,
                50µM FMN, 2mg/ml BSA. Reaction was followed in a FluoroSkan Ascent FL
                (ThermoLabsystems) microtiter plate reader. </p>

        </div>
    </div>

    <div class="container">
        <div class="referances my-4">
            <p class="pt-4 ps-3"><b>References (with links to PubMed)</b></p>
            <p class="ps-4">
                <a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/8530465/">F. Fieschi et al. (1995): The mechanism and substrate specificity of the NADPH:flavin oxidoreductase from Escherichia coli J. Biol. Chem. 270(51), 30392-400</a>
        </div>
    </div>


</div>