<?php
$title = "Nucleotide Analysis Service";
$metas = <<<META
<meta name="description" content="NOVOCIB provides accurate analysis of Total Potentially Available Nucleotides (TPAN, including  nucleosides, nucleotides and nucleic acids RNA and DNA) in feed and food products and ingredients by ion-paired HPLC-UV">
<meta name="full spectra dietary nucleotides analysis">
<meta name="keywords" content="Dietary nucleotides analysis, HPLC, TPAN, Total Potentially Available Nucleotides">
META;

require_once "app/templates/base.php";

$novoblue = "#4167b1";

$banner = Banner::gen("app/static/img/hplc9.jpg");
addContent($banner);

ob_start(); ?>
<div class="container mt-5">
    <h2 class="underlinedTitle center">
        <span class="underlined novoblue center">Full dietary nucleotides spectra by HPLC</span>
    </h2>

    <article class="row">
        <div class="col-lg-6 d-flex align-items-center">
            <img class="h-50 w-100 h-auto" style="border: 1px solid silver" src="/app/static/img/nucleotides-3.jpg" alt="nucleosides structure" />
        </div>
        <div class="col-lg-6 list-1">

            <div>
                <h5 class="mt-4 novo-blue">Nucleotides are present in cells in different forms:</h5>
                <ul>
                    <li>
                        Apolar free heterocyclic bases adenine, guanine, cytosine, and uracil
                        (RNA) or thymine (DNA);
                    </li>
                    <li>
                        Apolar free ribo- and deoxyribonucleosides <br />
                        purines: adenosine/deoxyadenosine, guanosine/deoxyguanosine, inosine;
                        <br />
                        pyrimidines: cytidine/deoxycystidine, uridine, thymidine;
                    </li>
                    <li>
                        Negatively charged free ribo- and deoxyribonucleotides mono-, di- and
                        triphosphates (AMP/dAMP, GMP/dGMP, IMP, CMP/dCMP, UMP, dTMP, ADP/dADP,
                        GDP/dGDP, CDP/dCDP, UDP, ATP/dATP, GTP/dGTP, CTP/dCTP, UTP)
                    </li>
                    <li>
                        Polymeric negatively charged nucleic acids RNA and DNA composed of
                        ribo- and deoxynucleotides monophosphates, respectively.
                    </li>
                </ul>
                <h5 class="novo-blue mt-5 mb-0">
                    There are several analytical methods for separating and analyzing nucleotides:

                </h5>
                <ol>
                    <li>Anion Exchange Chromatography allows the separation and quantification of nucleotides mono-, di- and tr-phosphates. <br>
                        😒 However, this method does not allow the analysis of corresponding bases and nucleosides that can be present along with negatively charged nucleotides. </li>
                    <li>Acidic hydrolysis of nucleotides to corresponding bases followed by separation of heterocyclic bases. <br>
                        😒 However, this approach does not allow to discriminate whether heterocyclic bases result from the degradation of ribo- or deoxynucleotides or even from nucleic acids degradation.
                    </li>
                    <li>
                        Ion-paired chromatography is a technique that allows to separate both apolar (bases and nucleosides) and negatively charged compounds (nucleotides mono- di- and triphosphates) in one-run.<br>
                        😀 This technique overcomes challenges faced by other ion chromatography methods; <br>
                        😒 but requires careful selection of ion-pairing reagents and has limited column lifetime.
                    </li>
                </ol>
            </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center mt-5">
            <div class="mb-5">
                <p>
                    Using ion-paired high-performance liquid chromatography with diode array detection NOVOCIB provides HPLC analytical services of full spectra of nucleotides in cell extracts and in feed/ food products and ingredients.
                </p>
                <h5 class="novo-blue">Our analytical system</h5>
                <p>
                    Agilent 1120 series HPLC liquid chromatograph fitted with binary pump,
                    vacuum degasser, well-plate autosampler, thermostatic column
                    compartment and multiple wavelength and diode array detector. Run and
                    data acquisision are controlled by Agilent Chem Station software.
                    Zorbax Extend-C18 4.6x150mm, 3.5μm particle size and guard column
                    (Agilent). Calibrations are performed with standards prepared in
                    mobile phase and with standards mixed with cell extracts, which are
                    run immediately before and after every series of samples. Peak
                    assignment of different bases, ribonucleosides and ribonucleoside
                    monophosphatesis is done by comparing both retention times and
                    characteristics of UV absorption spectra (254/280 ratio) with those of
                    standards. The area of individual peaks was measured using ChemStation
                    software (Agilent).
                </p>
            </div>
        </div>
        <div class="col-lg-6">
            <figure class="">
                <img class="w-100" style="border: 1px solid silver" src="/app/static/img/column-evolution-time.jpg" alt="HPLC spectra" title="Column evolution time" />
                <figcaption class="text-muted text-center">
                    <small><b>Fig. 1:</b> Representative chromatogram of a mixture of nucleotides mono-, di- and triphosphates, nucleosides and heterocyclic bases separated using ion-paired reverse-phase HPLC coupled to a UV detector set at 254nm.</small>
                </figcaption>
            </figure>
        </div>
        <div class="col-12 d-flex justify-content-center mt-5">
            <figure class="col-lg-6 col-10">
                <img class="w-100" src="/app/static/img/hplc-photo.jpg" alt="Photo HPLC Analysis and spectra" title="Photo HPLC Analysis" />
            </figure>
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
                                HPLC-UV analysis for full spectra of soluble dietary nucleotides
                                (bases, nucleosides and NMP, unhydrolyzed DNA and RNA nucleic acids) present
                                in feed or ingredients
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
                            <h6>Celullar Nucleotides Analysis:</h6>
                            <p>
                                HPLC-UV analysis for full spectra of cellular nucleotides
                                (bases, nucleosides, NMP, NDP and NTP) in cell extracts.
                            </p>
                        </td>
                        <td class="price">€ 350.00 / sample</td>
                        <td>
                            <a class="btn btn-primary" href="/inquiry?product=Celullar Nucleotides Analysis&ref=S1200-04">Inquiry</a>
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
