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
                <img class="mb-5" width="450" src="app/static/img/ceo.jpg" alt="ceo of Novocib" />
            </div>
            <div class="text-container col-lg-7 d-flex justify-content-center align-items-center">
                <div>
                    <p>
                        Novocib is a biotechnology company created in 2005 after winning National Innovation Contest
                        Award (I-Lab). Since 2005 the Company is focused on nucleotides and RNA metabolism and has
                        developed a range of innovative assays for nucleotide analysis in research and food safety. The
                        company manufactures active enzymes such as purine metabolism enzymes, nucleoside kinases,
                        bacterial bioluminescence enzymes, a number of assays for non-radioactive detection of several
                        purine metabolism disorders and for screening of novel inhibitors of nucleotide biosynthesis,
                        and kits for testing of fish, poultry and meat products in the food industry. Novocib also
                        offers analytical testing for RNA and nucleotides and research services. NovoCIB Founders:
                        Larissa Balakireva, Founder & CEO of NovoCIB, was awarded with the Trophy of "Femmes en Or,
                        Femme de l'Innovation" in September 2011.
                    </p>
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