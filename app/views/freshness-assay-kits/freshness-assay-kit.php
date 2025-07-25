<?php
global $title;
$title = "Seafood Quality Control - Seafood Freshness Assay Kit - Fish Freshness Assay Kit - K value";

$metas = <<<META
<meta name="description" content="Novocib's freshness assay kit is the first enzymatic kit for measurement of fish freshness using measurement of three major ATP degradation products.">
<meta name="service" content="kit to precisly mesure the freshness of fish">
<meta name="keywords" content="ATP degradation, fish freshness measurement, food quality">
META;


require_once "app/templates/base.php";

$novoblue = "#4167b1";





addContent(Banner::gen("/app/img/fish-water.jpg"));

$page_content = <<<CONTENT
<section class="container mt-5">
    <h2 class="underlinedTitle right">
        <span class="underlined novoblue right">Measure nucleotides to assess seafood quality</span>
    </h2>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <p>
                Since seafood and fish are highly perishable products, the quality of raw material is of primary concern
                for seafood processing industry. Testing raw material is first main stage of currently used procedure of
                Quality Control.
            </p>
            <p>
                While sensory analysis allows rapid evaluation of the quality of whole wet fish, the assessment of the
                quality of frozen fish, or that of frozen blocks of fillets or crumbed seafood products remains more
                difficult.
            </p>
            <p>
                PRECICE® Freshness Assay Kit is a first microplate assay for routine physico-chemical assessment of
                quality of seafood freshness. The enzymes provided with kit allow specific conversion of three major ATP
                catabolites - IMP, inosine (Ino) and hypoxanthine (Hx) to NADH2. The quantification of nucleotides is
                done by measuring sample absorbance at 340nm. Used enzymatic reactions are: highly specific and
                selective toward each particular nucleotides; fast and irreversible; brings three nucleotides to one
                common denominator (NADH2).
            </p>
        </div>
        <div class="col-lg-6 text-center">
            <img
                class="col-lg-8 col-12"
                src="/app/img/Freshness_Assay_Kit_Principle.png"
                alt="Fish Freshness Assay Kit photo" />
            <h4 class="novo-blue mt-3">PRECICE® Freshness Assay Kits</h4>
            <h5>Ref. #K0700-01-03</h5>
        </div>
        <div class="col-lg-6 col-10 my-5 text-center">
            <img
                class="w-100"
                src="/app/static//img/Freshness_Assay_Protocol.png"
                alt="Fish Freshness Assay Kit porsses" />
        </div>
        <div class="d-flex justify-content-center mt-4">
            <div class="col-lg-10 col-12">
                <table class="table product mb-2">
                    <thead>
                        <tr>
                            <th>#REF</th>
                            <th class="text-center">Kit Version</th>
                            <th class="text-center">SIZE</th>
                            <th class="text-center">PRICE</th>
                            <th class="pe-5"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#K0700-001-15</td>
                            <td class="text-center"><strong>PRECICE® K(IMP)</strong></td>
                            <td class="text-center"><strong>15 Kits</strong></td>
                            <td class="price text-center">€ 250.00</td>
                            <td class="text-end pe-3">
                                <a
                                    class="btn btn-primary"
                                    href="/inquiry?ref=K0709-01-2&product=PRCE® Freshness Assay Kit - K(IMP) - K0700-001-15">
                                    Inquiry
<i class="fa-solid fa-comment"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#K0700-001-31</td>
                            <td class="text-center"><strong>PRECICE® K(IMP)</strong></td>
                            <td class="text-center"><strong>31 Kits</strong></td>
                            <td class="price text-center">€ 370.00</td>
                            <td class="text-end pe-3">
                                <a
                                    class="btn btn-primary"
                                    href="/inquiry?ref=K0709-01-2&product=PRCE® Freshness Assay Kit - K(IMP) - K0700-001-31">
                                    Inquiry
<i class="fa-solid fa-comment"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#K0700-001-31</td>
                            <td class="text-center"><strong>PRECICE® (IMP, Ino & Hx)</strong></td>
                            <td class="text-center"><strong>22 Kits</strong></td>
                            <td class="price text-center">€ 370.00</td>
                            <td class="text-end pe-3">
                                <a
                                    class="btn btn-primary"
                                    href="/inquiry?ref=K0709-01-2&product=PRCE® Freshness Assay Kit - (IMP, Ino & Hx) - K0700-001-22">
                                    Inquiry
<i class="fa-solid fa-comment"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p class="text-center mt-3">
                    <strong>
                        Kit is provided in stable lyophilized form and
                        <span class="text-danger">shipped without dry ice</span>
                    </strong>
                </p>
                <p class="my-5 text-center">
                    <strong>
                        You can ask us for a quotation
                        <a href="mailto:contact@novocib.com">here</a>
                        or write at
                        <a href="mailto:contact@novocib.com">contact@novocib.com</a>
                    </strong>
                </p>
                <p class="mt-4 text-end">
                    <i class="fa-solid fa-download"></i>
                    Download
                    <a target="_blank" href="/app/documents/PRECICE Ultra-Freshness Assay Manual K0700-01 131124E.pdf">
                        <strong>PRECICE® K (IMP) Assay Kit</strong>
                        <i class="fa-regular fa-file-pdf"></i>
                    </a>
                    (User manual)
                    <i class="fa-solid fa-book"></i>
                </p>
                <p class="text-end mb-5">
                    <i class="fa-solid fa-download"></i>
                    Download
                    <a target="_blank" href="/app/documents/PRECICE Freshness Assay Manual K0700-003 140709.pdf">
                        <strong>PRECICE® Freshness (IMP, Ino, Hx) Assay Kit</strong>
                        <i class="fa-regular fa-file-pdf"></i>
                    </a>
                    (User manual)
                    <i class="fa-solid fa-book"></i>
                </p>
            </div>
        </div>
        <div class="row">
            <h2 class="novo-blue mb-3 text-center">Key Features</h2>
            <div class="col-lg-3 text-center bg-light pt-3">
                <h4 class="novo-blue">Wide Application Range</h4>
            </div>
            <div class="col-lg-9 bg-light d-flex justify-content-center">
                <ul>
                    <li>Byproducts of animal origin</li>
                    <li>Fish, crustaceans, mollusks</li>
                    <li>Frozen and fresh</li>
                    <li>Salted, smoked, sterilized and canned seafood products</li>
                </ul>
            </div>
            <div class="col-lg-3 text-center pt-3">
                <h4 class="novo-blue">Rapid</h4>
            </div>
            <div class="col-lg-9 d-flex justify-content-center">
                <ul class="py-3">
                    <li>Allows to perform 31 analysis at once (2h30)</li>
                </ul>
            </div>
            <div class="col-lg-3 text-center bg-light pt-3">
                <h4 class="novo-blue">Cost-efficient</h4>
            </div>
            <div class="col-lg-9 bg-light d-flex justify-content-center">
                <ul>
                    <li class="py-3">&lt; 12€ per analysis</li>
                </ul>
            </div>
            <div class="col-lg-3 text-center pt-3">
                <h4 class="novo-blue">Precise</h4>
            </div>
            <div class="col-lg-9 d-flex justify-content-center">
                <ul class="py-3">
                    <li>Total imprecision &lt; 5.5%</li>
                </ul>
            </div>
            <div class="col-lg-3 text-center bg-light pt-3">
                <h4 class="novo-blue">Simple</h4>
            </div>
            <div class="col-lg-9 bg-light d-flex justify-content-center">
                <ul>
                    <li>
                        The samples are extracted by simple boiling. The enzymes are added directly to filtered extracts
                        and optical density of samples is mesured 30min later. No wash.
                    </li>
                </ul>
            </div>
            <p class="my-5 text-center">
                <a href="/freshness-assay-kits/fish-freshness">
                    Freshness Quality Assessment examples here
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
            </p>
        </div>
    </div>
</section>

<section class="bg-light py-3">
    <div class="container">
        <div class="mb-5">
            <h2 class="novo-blue">Nucleotides as freshness indicators</h2>
            <p>
                The content of ATP is particularly high in muscle where ATP is used for contraction. As soon as an
                animal dies, cell respiration stops as well as ATP formation. Post-mortem ATP degradation leads to rapid
                formation of IMP (5-24h), Inosine (days) and Hypoxanthine (weeks). The formation of IMP and inosine is
                mainly due to autolytic reactions, whereas hypoxanthine is a result of both autolytic and microbial
                degradation. The utilisation of nucleotides as freshness indicators were first suggested by pioneer
                works of Japanese scientists in the late 1950's (Saito et al.1958) and was further confirmed by numerous
                scentific articles. In difference to TVB-N or TMA widely used to detect biochemical changes that appear
                at a medium- or a late-stage of spoilage, nucleotides provide the tools to detect very beginning of
                spoilage process(Scheme 1).
            </p>
        </div>

        <div class="d-flex justify-content-center mb-5">
            <figure class="col-lg-7">
                <img src="/app/img/newE.png" alt="ATP degradation Graph" class="w-100" />
                <figcaption style="font-weight: 600" class="text-center mt-1">
                    (Scheme 1): Postmortem ATP degradation in muscle
                </figcaption>
            </figure>
        </div>
    </div>
</section>

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