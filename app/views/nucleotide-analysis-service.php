<?php
$title = "Nucleotide Analysis Service";

ob_start(); ?>
Nucleotide Analysis Service
<meta name="description" content="company provides accurate analysis of dietary nucleosides, nucleotides and nucleic acids in feed and food ingredients">
<meta name="keywords" content="Dietary nucleotides, 5'-nucleotides,  5'AMP, 5'GMP,5'IMP,5'CMP,5'UMP, nucleic acids, hplc nucleotides analysis">
<?php $metas = ob_get_clean();


require_once "app/templates/base.php";

$novoblue = "#4167b1";

$banner = Banner::gen("app/static/img/hplc9.jpg");
addContent($banner);

ob_start(); ?>
<div class="container mt-5">
    <h2 class="underlinedTitle center">
        <span class="underlined novoblue center">Full dietary nucleotides spectra by HPLC</span>
    </h2>
    <p class="col-lg-10 mx-auto text-center mb-5">
        <strong class="lead">Using ion-paired high-performance liquid chromatography with diode array
            detection <span class="novo-blue">NOVOCIB</span> provides HPLC analytical
            services of full spectra of nucleotides in cell extracts and in feed/ food
            products and ingredients.</strong>
    </p>

    <article class="row">
        <div class="col-lg-6 d-flex align-items-center">
            <img class="h-50 w-100 h-auto" style="border: 1px solid silver" src="/app/static/img/nucleotides-3.jpg" alt="nucleosides structure" />
        </div>
        <div class="col-lg-6 list-1 d-flex align-items-center">
            <div>
                <h4 class="mt-4 novo-blue">
                    Nucleotides are present in cells in different forms:
                </h4>
                <ul>
                    <li>
                        Apolar free heterocyclic bases adenine, guanine, cytosine, and
                        uracil (RNA) or thymine (DNA);
                    </li>
                    <li>
                        Apolar free ribo- and deoxyribonucleosides <br />
                        purines: adenosine/deoxyadenosine, guanosine/deoxyguanosine,
                        inosine;
                        <br />
                        pyrimidines: cytidine/deoxycystidine, uridine, thymidine;
                    </li>
                    <li>
                        Negatively charged free ribo- and deoxyribonucleotides mono-, di-
                        and triphosphates (AMP/dAMP, GMP/dGMP, IMP, CMP/dCMP, UMP, dTMP,
                        ADP/dADP, GDP/dGDP, CDP/dCDP, UDP, ATP/dATP, GTP/dGTP, CTP/dCTP,
                        UTP)
                    </li>
                    <li>
                        Polymeric negatively charged nucleic acids RNA and DNA composed of
                        ribo- and deoxynucleotides monophosphates, respectively.
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6 mt-5 d-flex align-items-center">
            <div>
                <h4 class="novo-blue">
                    There are several analytical methods for separating and analyzing
                    nucleotides:
                </h4>
                <ol>
                    <li>
                        Anion Exchange Chromatography allows the separation and
                        quantification of nucleotides mono-, di- and tr-phosphates. <br />
                        😒 However, this method does not allow the analysis of corresponding
                        bases and nucleosides that can be present along with negatively
                        charged nucleotides.
                    </li>
                    <li>
                        Acidic hydrolysis of nucleotides to corresponding bases followed by
                        separation of heterocyclic bases. <br />
                        😒 However, this approach does not allow to discriminate whether
                        heterocyclic bases result from the degradation of ribo- or
                        deoxynucleotides or even from nucleic acids degradation.
                    </li>
                    <li>
                        Ion-paired chromatography is a technique that allows to separate
                        both apolar (bases and nucleosides) and negatively charged compounds
                        (nucleotides mono- di- and triphosphates) in one-run.<br />
                        😀 This technique overcomes challenges faced by other ion
                        chromatography methods; <br />
                        😒 but requires careful selection of ion-pairing reagents and has
                        limited column lifetime.
                    </li>
                    <p class="mt-3">
                        <b>Using ion-paired chromatography with diode array detection
                            (HPLC-UV), <span class="novo-blue">NOVOCIB</span> provides
                            analytical service for complete dietary nucleotides spectra
                            characterization (bases, nucleosides, nucleotides mono-, di- and
                            triphosphates).</b>
                    </p>
                </ol>
                <div class="text-center d-flex justify-content-center mt-4">
                    <h4 class="mt-1 me-3">To know more</h4>
                    <a class="btn btn-primary" href="/contact-us"><span class="lead">Contact Us</span></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-5">
            <figure class="">
                <img class="w-100" style="border: 1px solid silver" src="/app/static/img/column-evolution-time.jpg" alt="HPLC spectra" title="Column evolution time" />
                <figcaption class="text-muted text-center">
                    <small><b>Fig. 1:</b> Representative chromatogram of a mixture of
                        nucleotides mono-, di- and triphosphates, nucleosides and
                        heterocyclic bases separated using ion-paired reverse-phase HPLC
                        coupled to a UV detector set at 254nm.</small>
                </figcaption>
            </figure>
        </div>
        <div class="col-lg-6 mt-5 d-flex align-items-center">
            <div>
                <h4 class="novo-blue text-center mb-3">
                    Dietary Nucleic acids DNA and RNA quantification:
                </h4>
                <ol>
                    <li class="mb-3">
                        <b>UV spectroscopy</b>
                        Nucleic acids can be quantified by measuring the absorbance at 260
                        nm and 280 nm with 1A 260 corresponding to 50µg/ml of dsDNA, to
                        ~40µg/ml RNA and to 33µg/ml ssDNA. <br />
                        😒 This method can be applied only to purified DNA or RNA.
                    </li>
                    <li class="mb-3">
                        <b>Acid hydrolysis/ chromatography</b>
                        Acidic hydrolysis of nucleic acids in perchloric or formic acid
                        leads to the formation of purine and pyrimidine bases that are
                        analyzed by LC-MS/MS or HPLC-UV chromatography. <br />
                        😒 Using environmental pollutant perchlorate or toxic formic acid
                        together with high cost are major limitations of this powerful
                        analytical method.
                    </li>
                    <li>
                        <b>Enzymatic/HPLC-UV</b>
                        Nuclease digestion of DNA and RNA into constituent nucleotides NMP
                        and dNMP prior to HPLC-UV analysis. <br />
                        😀 This technique overcomes environment and cost challenges of
                        acidic hydrolysis; <br />
                        😒 requires careful selection of conditions to achieve complete
                        nucleic acid digestion.
                    </li>
                    <p class="mt-4">
                        <b>To quantify dietary nucleic acids
                            <span class="novo-blue">NOVOCIB</span> uses enzymatic/HPLC-UV
                            approach where nucleic acids are converted enzymatically to 5'NMP
                            and analyzed before and after nuclease treatment. Nucleic acid
                            concentration is calculated as a difference in 5'NMP concentration
                            before and after nuclease.</b>
                    </p>
                </ol>
                <div class="text-center d-flex justify-content-center mt-4">
                    <h4 class="mt-1 me-3">To know more</h4>
                    <a class="btn btn-primary" href="/contact-us"><span class="lead">Contact Us</span></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-5">
            <figure class="">
                <img class="w-100" style="border: 1px solid silver" src="/app/static/img/nucleotide_spectra.jpg" alt="Nucleotide spectra of yeast extract" title="Nucleotide spectra" />
                <figcaption class="text-muted text-center">
                    <small><b>Fig. 2:</b>Nucleotide spectra of yeast extract before (blue) and
                        (red) after nuclease treatment obtained using ion-paired
                        reverse-phase HPLC with UV detector.</small>
                </figcaption>
            </figure>
        </div>
        <div class="col-lg-6 my-5">
            <figure class="col-10 mx-auto">
                <img class="w-100" src="/app/static/img/hplc-photo.jpg" alt="Photo HPLC Analysis and spectra" title="Photo HPLC Analysis" />
            </figure>
        </div>
        <div class="my-5 col-lg-6">
            <h4 class="novo-blue mb-3">Our analytical system</h4>
            <p>
                Agilent 1120 series HPLC liquid chromatograph fitted with binary pump,
                vacuum degasser, well-plate autosampler, thermostatic column compartment
                and multiple wavelength and diode array detector. Run and data
                acquisision are controlled by Agilent Chem Station software.
                Calibrations are performed with standards prepared in mobile phase and
                with standards mixed with cell extracts, which are run immediately
                before and after every series of samples. Peak assignment of different
                bases, ribonucleosides and ribonucleoside monophosphatesis is done by
                comparing both retention times and characteristics of UV absorption
                spectra (254/280 ratio) with those of standards. The area of individual
                peaks was measured using ChemStation software (Agilent).
            </p>
        </div>
    </article>

    <article class="my-5">
        <div class="d-flex justify-content-center">
            <table class="table w-100 product">
                <thead>
                    <tr>
                        <th>#REF</th>
                        <th class="w-75 text-center" style="width: 800px !important">
                            PRODUCT NAME
                        </th>
                        <th class="text-center">PRICE</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#S1200-03</td>
                        <td class="text-center">
                            <h6>Dietary Nucleotides Analysis:</h6>
                            <p>
                                HPLC-UV analysis for full spectra of dietary nucleotides (bases,
                                nucleosides and NMP, unhydrolyzed DNA and RNA nucleic acids)
                                present in feed or ingredients
                            </p>
                        </td>
                        <td class="price">€ 420.00 / sample</td>
                        <td>
                            <a class="btn btn-primary" href="/inquiry?product=Dietary Nucleotides Analysis&ref=S1200-03">Inquiry</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#S1200-04</td>
                        <td class="text-center">
                            <h6>Cellular Nucleotides Analysis:</h6>
                            <p>
                                HPLC-UV analysis for full spectra of cellular nucleotides
                                (bases, nucleosides, NMP, NDP and NTP) in cell extracts.
                            </p>
                        </td>
                        <td class="price">€ 350.00 / sample</td>
                        <td>
                            <a class="btn btn-primary" href="/inquiry?product=Cellular Nucleotides Analysis&ref=S1200-04">Inquiry</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#S1200-05</td>
                        <td class="text-center">
                            Nucleic acid RNA and DNA quantification by HPLC-UV analysis <br />
                            &nbsp;
                        </td>
                        <td class="price">€ 300.00 / sample</td>
                        <td>
                            <a class="btn btn-primary" href="/inquiry?product=RNA and DNA quantification HPLC-UV analysis&ref=S1200-05">Inquiry</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#S1200-06</td>
                        <td class="text-center">
                            HPLC-UV analysis for purines <br />
                            &nbsp;
                        </td>
                        <td class="price">€ 300.00 / sample</td>
                        <td>
                            <a class="btn btn-primary" href="/inquiry?product=Purines HPLC-UV Analysis&ref=S1200-06">Inquiry</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>
</div>
<?php $page_content = ob_get_clean();


addContent($page_content);
render();
