<?php
$title = "ITP-ase Assay Kit";
require_once "app/templates/base.php";

$novoblue = "#4167b1";




addContent(Banner::gen());
$content_title = UnderlinedTitle::get("One-step ITP pyrophosphatase assay", "novoblue", "right");

$page_content = <<<CONTENT
<main class="container mt-5">
$content_title
<div class="row">
<div class="col-lg-6">
<p><strong>PRECICE® ITPase Assay kit</strong> provides the first <strong>non radioactive and continuous</strong> protocol for measurement of <strong>ITP pyrophosphatase activity</strong> (also known as inosine triphosphatase and inosine triphosphate pyrophosphohydrolase) in cellular lysates in a convenient 96-well plate format.</p>
<p>ITP pyrophosphatase, or ITPase (EC 3.6.1.19), is an intracellular enzyme that catalyzes the pyrophosphohydrolysis of ITP/dITP and xanthosine triphosphate to prevent unusual nucleoside triphosphates from accumulating in (deoxy) nucleoside triphosphate (d)NTP pools and being integrated into RNA and DNA.<br>
This enzyme is encoded by the ITPA gene in mammals. Certain ITPA variants causing ITPase deficiency have been linked to adverse reactions to the immunosuppressive thiopurine drugs azathioprine and 6-mercaptopurine, and protection against ribavirin-induced anemia.
</p>
</div>
<div class="col-lg-6">
<img class="w-100" src="/app/static/img/ITPase-assay-reaction.jpg" alt="">
<h4 class="novo-blue text-center">PRECICE® ITPase Assay Kit</h4>
<h5 class="text-center">Ref. #K0709-06-2</h5>
</div>
<div class=" d-flex justify-content-center mt-3">
<div class="col-lg-10 col-12">
<table class="table product mb-2">
    <thead>
        <tr>
            <th>
                #REF
            </th>
            <th class="text-center">
                SIZE
            </th>
            <th class="text-center">
                PRICE
            </th>
            <th class="pe-5"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>#K0709-05-2</td>
            <td class="text-center"> <strong>For 10 mL of reaction mixture (half 96-well plate)</strong></td>
            <td class="price text-center">€ 350.00</td>
            <td class="text-end pe-3"><a class="btn btn-primary" href="/inquiry?ref=K0709-06-2&product=ITPase Assay Kit - 10 mL of reaction mixture">Inquiry</a></td>
        </tr>
    </tbody>
</table>
<p class="text-muted text-center" > <em>* Pricing updated September 16th, 2024.</em><br></p>
<p class="text-center"><strong>Kit provided in stable lyophilized form and <span class="text-danger">shipped without dry ice</span> </strong></p>
<p class="mt-4 mb-5 text-end">Download <a target="_blank" href="/app/documents/NovoCIB_K0709-06-2_User_Manual_140428.pdf"> <strong>ITPase assay Protocol <i class="fa-regular fa-file-pdf"></i></a> </strong>(User manual)</p>

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
    <img src="/app/static/img/ITPase_reaction.jpg" alt="ITPase activity Graph" />
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
<div class="container">
        <div class="referances my-5">
            <h5 class="ms-5 pt-4 pb-3 novo-blue">Scientific Articles citing PRECICE® HPRT Assay kit from <span class="text-secondary">NOVOCIB</span>:</h5>
            <ol>
                <li>
                    <a target="_blank" href="https://journals.plos.org/plospathogens/article?id=10.1371/journal.ppat.1010332">Maf/ham1-like pyrophosphatases of non-canonical nucleotides are host-specific partners of viral RNA-dependent RNA polymerases</a>
                </li>
            </ol>
        </div>
    </div>
</main>
CONTENT;

addContent($page_content);
render();
