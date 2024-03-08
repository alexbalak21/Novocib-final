<?php
class Awards
{
    static function gen($awards_title, $awards_introduction)
    {
        return <<<Awards
<article class="awards container mt-4 mb-5 text-center">
$awards_title
<p class="mb-5">$awards_introduction</p>
    <div class="row justify-content-center">
        <div class="award col-3">
            <img class="w-100 mt-2" src="/app/static/img/i-lab-1.jpg" alt="i-lab logo" />
            <h4 class="text-center mt-3 novo-blue">I-LAB</h4>
            <h5 class="text-center mb-3">2003 & 2005</h5>
            <p>
                I-Lab is the yearly innovation contest organized by the French Ministry of Research and Innovation in
                partnership with the French Public Investment Bank BpiFrance #France2030 to recognize and financially
                support the best innovative deeptech companies.
            </p>
            <div class="text-center my-4">
                <a
                    class="btn btn-outline-primary"
                    href="https://www.enseignementsup-recherche.gouv.fr/fr/le-concours-i-lab-49808">
                    Go to Website
                </a>
            </div>
        </div>

        <div class="award col-3">
            <img class="w-100 mt-2" src="/app/static/img/tremplin.png" alt="femmes en or brand" />
            <h4 class="text-center mt-3 novo-blue">Tremplin des Entreprises</h4>
            <h5 class="text-center mb-3">2005</h5>
            <p>
                This excellence competition is a financial support initiative funded by the France 2030 plan, which aims
                to select innovation projects with high potential for the French economy. The French Tech Tremplin
                program aims to promote diversity in the tech sector throughout France.
            </p>
            <div class="text-center my-4">
                <a
                    class="btn btn-outline-primary"
                    href="https://www.senat.fr/salle-de-presse/communiques-de-presse/presse/cp20150113a.html">
                    Go to Website
                </a>
            </div>
        </div>

        <div class="award col-3">
            <img class="w-100 mt-2" src="/app/static/img/femme-en-or.webp" alt="femmes en or brand" />
            <h4 class="text-center mt-3 novo-blue">Femmes en Or</h4>
            <h5 class="text-center mb-3">2011</h5>
            <p>
                The "Trophées Femmes en or" (Women in Gold Awards) are a prize created in 1993 by Framboise Holtz and
                Jean-Louis Sevez to reward women whose success in the past year, whether it be a culmination or a step,
                serves as an example and a source of inspiration for all.
            </p>
            <div class="text-center my-4">
                <a class="btn btn-outline-primary" href="https://www.facebook.com/femmesenor/">Go to Website</a>
            </div>
        </div>
    </div>
</article>

Awards;
    }
}
