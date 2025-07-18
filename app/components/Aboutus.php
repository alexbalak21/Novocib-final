<?php
class Aboutus
{

    static function gen()
    {
        $aboutus_title = UnderlinedTitle::get("Our Partners", "novoblue", "center");
        return <<<ABOUTUS

        <div class="contactus container-fluild pt-3">
        <div class="container">
        $aboutus_title
        <div class="row">
            <div class="col-lg-5 d-flex align-items-center">
                <img class="mb-5 w-100" src="/app/img/analysis4.jpg" alt="analysis" alt="photo of biological analysis"/>
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
                </div>
            </div>
        </div>
    </div>
</div>


ABOUTUS;
    }
}
