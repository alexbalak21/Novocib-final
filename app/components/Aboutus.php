<?php
class Aboutus
{
    static function get()
    {
        return <<<ABOUTUS

        <div class="contactus container-fluild pt-3">
        <div class="container">
        <h2 class="text-center mb-5">About us</h2>
        <div class="row">
            <div class="col-lg-5 d-flex align-items-center">
                <img class="mb-5 w-100" src="/app/static/img/analysis4.jpg" alt="analysis" />
            </div>
            <div class="text-container col-lg-7 d-flex justify-content-center align-items-center">
                <div>
                    <p>
                    Novocib is a biotechnology company created in 2005 and focused on nucleotides metabolism. Company has developed a range of innovative products and services for nucleotide analysis in cells, food, feed ingredients:
                    </p>
                    <ul>
                    <li>
                    Analytical service for whole spectra of nucleotides (heterocyclic bases, nucleosides, nucleotides and nucleic acids, DNA and RNA);
                    </li>
                    <li>
                    Enzymatic Assay kits for nucleotides;
                    </li>
                    <li>
                    Purified active enzymes of nucleotide metabolism;
                    </li>
                    <li>
                    Assistance in the development of new products and ingredients enriched in nucleotides.
                    </li>
                    </ul>
                    <div class="text-center my-5"><a cl href="#" class="btn btn-primary">Read More</a></div>
                </div>
            </div>
        </div>
    </div>
</div>


ABOUTUS;
    }
}
?>

<style>
    .contactus {
        background-color: WhiteSmoke;
    }

    .contactus h2 {
        margin-bottom: 10px;
        position: relative;
    }

    .contactus h2:after {
        content: "";
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        height: 4px;
        width: 80px;
        background-color: #4167b1;
    }
</style>