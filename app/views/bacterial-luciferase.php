<?php
global $title;
$title = "Bacterial Luciferase";
require_once "app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen("/app/static/img/bacterial-luciferase.webp"));

$page_content = <<<CONTENT
<section class="container mt-5">
    <h2 class="underlinedTitle center"><span class="underlined novoblue center">Highly Pure Bacterial Luciferase (E.C.1.14.14.3)</span></h2>
    <h5 class="text-center">from Photobacterium phosphoreum.</h5>
    <div class="row justify-content-center">
      <h4 class="mt-5 text-center text-muted">Ref. #E-Nov10</h4>
        <div class="d-flex justify-content-center mt-4">
            <div class="col-lg-10 col-12">
                <table class="table product mb-2">
                    <thead>
                        <tr>
                            <th>#REF</th>
                           
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="pe-5"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#E-Nov10-1</td>
                           
                            <td class="text-center"><strong>1 mg    </strong></td>
                            <td class="price text-center">€ 295.00</td>
                            <td class="text-end pe-3">
                                <a
                                    class="btn btn-primary"
                                    href="/inquiry?ref=K0709-01-2&product=Bacterial Luciferase - 1mg - #E-Nov10-1">
                                    Inquiry
<i class="fa-solid fa-comment"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#E-Nov10-2</td>
                           
                            <td class="text-center"><strong>2 mg</strong></td>
                            <td class="price text-center">€ 488.00</td>
                            <td class="text-end pe-3">
                                <a
                                    class="btn btn-primary"
                                    href="/inquiry?ref=K0709-01-2&product=Bacterial Luciferase - 2mg - #E-Nov10-2">
                                    Inquiry
<i class="fa-solid fa-comment"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#E-Nov10-5</td>
                           
                            <td class="text-center"><strong>5 mg</strong></td>
                            <td class="price text-center">€ 1106.00</td>
                            <td class="text-end pe-3">
                                <a
                                    class="btn btn-primary"
                                    href="/inquiry?ref=K0709-01-2&product=Bacterial Luciferase - 5mg - #E-Nov10-5">
                                    Inquiry
<i class="fa-solid fa-comment"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p class="text-center mt-4">
                    <strong>
                        Kit is provided in stable lyophilized form and
                        <span class="text-danger">shipped without dry ice</span>
                    </strong>
                </p>

                <p class="mt-5 text-center">
                    <strong>
                        Bulk quantity available.
                    </strong>
                </p>
                <p class="mb-5 text-center">
                    <strong>
                        You can ask us for a quotation
                        <a href="mailto:contact@novocib.com">here</a>
                        or write at
                        <a href="mailto:contact@novocib.com">contact@novocib.com</a>
                    </strong>
                </p>
                <p class="my-4 mb-5 text-end">
                    <i class="fa-solid fa-download"></i>
                    Download
                    <a target="_blank" href="/app/documents/NovoCIB E-Nov10.pdf">
                        <strong>NOVOCIB's Bacterial Luciferase</strong>
                        <i class="fa-regular fa-file-pdf"></i>
                    </a>
                    <i class="fa-solid fa-book"></i>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-3">
    <div class="container">
        <div class="my-4">
            <p>
                <strong class="novo-blue">NOVOCIB</strong>'s bacterial luciferase is purified from a Photobacterium phosphoreum strain isolated from squid by our team and selected for its brightest luminescence. The luxab gene was amplified by PCR and cloned. The sequences of cloned α and β subunits have shown 94% and 92% identity to P24113 and P12744 proteins of Photobacterium phosphoreum (SwissProt Entry).
            </p>
            <p><strong>Applications:</strong> Applications: In luminescent marine photobacteria, the production of light results from two successive reactions. The first one is catalyzed by the NAD(P)H-FMN oxidoreductase (EC 1.6.8.1), that produces FMNH2 acting as a substrate for the second reaction, which is catalyzed by a luciferase (EC 1.14.14.3) to generate light in the presence of an aliphatic aldehyde and molecular oxygen. In the presence of limiting concentrations of NADH substrate, light intensity is proportional to NAD(P)H concentration. The coupling of bacterial luciferase to FMN-NAD(P)H oxidoreductase has been used to provide ultrasensitive analytical tools for the quantification of NAD(P)H and the substrates of NADH-, NADPH- dependent enzymes (e.g. glucose, lactate, malate, ethanol, sorbitol, oxaloacetate)(1).</p>
        <i style="font-size: small;">Synonyms: Alkanal, reduced-FMN:oxygen oxidoreductase (1-hydroxylating, luminescing)</i>
        </div>
        <div class="row justify-content-center">
            <p><strong class="novo-blue">NOVOCIB</strong> 's Highly Pure Bacterial Luciferase can be used for NAD(P)H quantification or in dehydrogenase-coupled assays.</p>
        <div class="col-lg-3  d-flex justify-content-center">
            <figure class="col-lg-12 col-6">
                <img src="/app/static/img/Lux_Gel.png" alt="Lux gel photo" class="w-100" />
                <figcaption class="text-center mt-1">
                    <strong>Activity:</strong> > 500,000 RLU per second
                    per µg of protein in the presence of
                    10µM NADH and 3.5mU/ml FMNreductase (ref. E-Nov-8) as measured
                    with an Optocomp 1 (Celsis)
                    luminometer.
                </figcaption>
                <figcaption class="mt-3"><strong>Purity</strong> controlled by 10% AA SDSPAGE</figcaption>
            </figure>
        </div>
        <div class="col-lg-9 d-flex justify-content-center mb-5">
            <figure class="col-lg-9">
                <img src="/app/static/img/Lux_Calibration.png" alt="Lux Calibration Graph" class="w-100" />
                <figcaption class="text-center mt-1">
                    <strong>Fig. 1. Calibration curves (log-log plot) for NADH</strong> obtained using Highly Pure
                    Bacterial Luciferase (50µg/ml, NovoCIB, E-Nov 10).
                    Assay condition: Luminescence signal (15-seconds) was measured after NADH addition
                    (5µL) to 200µL-well containing 0.1M KH2PO4 pH=6.9, 0.02% dodecanal, 50µM FMN,
                    2mg/ml BSA. Reaction was followed in an Optocomp 1 (Celsis) luminometer. 
                </figcaption>
            </figure>
        </div>
        </div>

        <div class="d-flex justify-content-center mb-5">
            <figure class="col-lg-7">
                <img src="/app/static/img/newE.png" alt="ATP degradation Graph" class="w-100" />
                <figcaption style="font-weight: 600" class="text-center mt-1">
                    (Scheme 1): Postmortem ATP degradation in muscle
                </figcaption>
            </figure>
        </div>
    </div>
</section>

<div class="container">
    <div class="referances my-4 row justify-content-center py-3">
    <h6 class="ps-5"><i>References (with external links to PubMed) </i><i class="text-muted fa-solid fa-arrow-up-right-from-square"></i></h6>
    <div class="col-2">
    <img class="w-100 pt-3" src="/app/static/img/pubmed.png" alt="pubmed logo">
    </div>
    <div class="col-8">
    <ol>
    <li><a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/2490522/">P.R. Coulet, L.J. Blum, S.M. Gautier (1989): Optically-based chemical and biochemical sensors for the detection of some drugs and biological compounds J. Pharm. Biomed. Anal. 7(12), 1361-1376</a></li>
    </ol>
    </div>
    </div>
    </div>

CONTENT;

addContent($page_content);
render();


?>

<style>
    .nucleoside-analogues {
        border: 1px solid silver;

        tr {
            border: 1px solid silver;
        }

        th {
            padding: 12px 0;
        }

        th,
        td {
            text-align: center;

        }
    }
</style>