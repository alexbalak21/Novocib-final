<?php
global $title;
$title = "Continuous Spectrophotometric Phosphatase Assay Kit";

ob_start(); ?>
<meta name="keywords" content="phosphatase assay kit, inorganic phosphate quantification, continuous phosphate detection, ATPase activity assay, GTPase assay kit, spectrophotometric phosphate assay, NADH absorbance 340nm, enzymatic phosphate detection, high-throughput phosphate assay, PNP-XDH enzymatic system, phosphate release measurement, non-radioactive assay kit, research-use phosphate assay, PRECICE® phosphatase kit, phosphate detection in cell lysates" />
<meta name="description" content="Explore the PRECICE® Phosphatase Assay Kit from NovoCIB—an easy one-step spectrophotometric solution for quantifying inorganic phosphate in enzymatic reactions. Ideal for ATPase and GTPase activity assays with continuous absorbance reading at 340nm. High-throughput, accurate, and research-ready." />
<?php $metas = ob_get_clean();
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";


?>



<?= Banner::gen("/app/static/img/phosphatase-assay-kit.jpg") ?>
<main class="container mt-5">
    <h2 class="underlinedTitle center">
        <span class="underlined novoblue center">Continuous Phosphatase Assay</span>
    </h2>
    <div class="row">
        <div class="col-lg-6">
            <p>
                <strong>PRECICE® Phosphatase Assay Kit</strong>
                developed by
                <strong class="novo-blue">NOVOCIB</strong>
                is a continuous spectrophotometric enzyme assay to monitor activity of any enzymes liberating inorganic
                phosphate (Pi) during enzymatic reactions. The kit can be used for:
            </p>
            <ul>
                <li>Phosphatase activity assay</li>
                <li>Alkaline phosphatase activity</li>
                <li>Protein phosphatases activity assay</li>
                <li>ATPase assay</li>
                <li>GTPases assay</li>
                <li>Helicases assay.</li>
            </ul>
            <h4 class="novo-blue">Principle:</h4>
            <p>
                The release of inorganic phosphate is measured through coupling to PNP-XDH enzymatic system. In the presence
                of inorganic phosphate, PNP (purine nucleoside phosphorylase) catalyzes inosine phosphorolysis leading to
                the formation of hypoxanthine and P-ribose. XDH enzyme catalyzes irreversible oxidation of hypoxanthine to
                uric acid with simultaneous reduction of NAD to NADH2, measurable by absorbance at 340nm. The formation of
                NADH2 is continuously monitored spectrophotometrically at 340nm. The assay is linear in 5-300µM range.
            </p>
        </div>
        <div class="col-lg-6 text-center">
            <img
                class="w-100"
                src="/app/static/img/Phosphatase_Assay_Principle.png"
                alt="Phosphatase Assay Kit Principle reaction schema"
                title="Phosphatase Assay Kit Principle" />
            <h4 class="novo-blue">PRECICE® Phosphatase Assay Kit</h4>
            <h5>Ref. #K0211-01</h5>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <div class="col-lg-10 col-12">
                <table class="table product mb-2">
                    <thead>
                        <tr>
                            <th class="d-none d-md-table-cell">#REF</th>
                            <th class="text-center">SIZE</th>
                            <th class="text-center d-none d-md-table-cell">PRICE</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="d-none d-md-table-cell">#K0211-01</td>
                            <td class="text-center">
                                PRECICE® Phosphatase Assay Kit<br>
                                1 plate (96 assays)
                            </td>
                            <td class="d-none d-md-table-cell text-center">410.00 €</td>
                            <td class="text-end pe-3">
                                <div class="d-block d-md-none text-end mb-1 fw-bold">410.00 €</div>
                                <a title="Order" class="btn btn-primary" href="/inquiry?ref=K0211-01&product=PRECICE® Phosphatase Assay Kit">
                                    Inquiry <i class="fa-solid fa-comment"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p class="text-muted text-center">
                    <em>Pricing updated November 25th, 2024.</em>
                    <br />
                </p>
                <p class="text-center">
                    <strong>
                        Kit is provided in stable lyophilized form and
                        <span class="text-danger">shipped without dry ice</span>
                    </strong>
                </p>
                <p class="my-4 text-center">
                    <strong>
                        You can ask us for a quotation
                        <a href="mailto:contact@novocib.com">
                            Here
                            <i class="fa-solid fa-envelopes-bulk"></i>
                        </a>
                        or write at
                        <a href="mailto:contact@novocib.com">contact@novocib.com</a>
                    </strong>
                </p>
                <p class="mt-4 mb-5 text-end">
                    Download
                    <a target="_blank" href="/app/documents/NovoCIB K0211-01 User Manual.pdf">
                        <strong>Our User Manual</strong>
                        <i class="fa-regular fa-file-pdf"></i>
                        <i class="fa-solid fa-download"></i>
                    </a>
                </p>
            </div>
        </div>
        <div class="mt-5 mb-5">
            <h4 class="mt-5 pt-4 novo-blue text-center">🔬 Key Features of the Assay Kit</h4>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-3">

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h6 class="mb-2">☑️ Convenient</h6>
                        <ul class="mb-0 ps-3">
                            <li>Non-radioactive</li>
                            <li>Homogenous</li>
                            <li>Continuous absorbance monitoring at 340 nm</li>
                            <li>Tolerant to inorganic phosphate contamination</li>
                            <li>Wide pH range</li>
                            <li>Compatible with reducing agents</li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h6 class="mb-2">📊 Quantitative</h6>
                        <ul class="mb-0 ps-3">
                            <li>IMP transformed into NADH₂ for kinetic analysis</li>
                            <li>Wide linearity range (5–300 µM)</li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h6 class="mb-2">🔁 Continuous</h6>
                        <ul class="mb-0 ps-3">
                            <li>Activity tracked via absorbance at 340 nm</li>
                            <li>Supports real-time monitoring</li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h6 class="mb-2">⚙️ High-Throughput Analysis</h6>
                        <ul class="mb-0 ps-3">
                            <li>Performed in standard multi-well microplates</li>
                            <li>Readout with plate reader fitted with 340 nm filter</li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h6 class="mb-2">🎯 Specific</h6>
                        <ul class="mb-0 ps-3">
                            <li>Quantifies only inorganic phosphate</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
</main>





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