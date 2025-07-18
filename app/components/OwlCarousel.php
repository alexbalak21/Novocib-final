<?php
class OwlCarousel
{
    static function gen()
    {
        ob_start(); ?>
        <section class="partners py-2" id="partners">
            <div class="container text-center mb-3">
                <h2 class="underlinedTitle center">
                    <span class="underlined novoblue center">Our Partners</span>
                </h2>
            </div>

            <div class="owl-carousel owl-theme mt-5 mx-auto">
                <div class="owl-item">
                    <div class="card">
                        <div class="card-img">
                            <a href="https://www.business-angels.info/">
                                <img src="/app/img/xmp.png" alt="xmp investers logo" />
                            </a>
                        </div>
                        <h5 class="card-title name text-center">XMP</h5>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="card">
                        <div class="card-img">
                            <a href="https://samba-investisseurs.fr/">
                                <img src="/app/img/samba.jpg" alt="samba logo" />
                            </a>
                        </div>
                        <h5 class="card-title name text-center">SAMBA</h5>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="card">
                        <div class="card-img">
                            <a href="https://www.poleaquimer.com/en/">
                                <img src="/app/img/aquimer.png" alt="aquimer logo" />
                            </a>
                        </div>
                        <h5 class="card-title name text-center">Aquimer</h5>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="card">
                        <div class="card-img">
                            <a href="https://www.agglo-boulonnais.fr/">
                                <img src="/app/img/cab.jpg" alt="boulogne comune association logo" />
                            </a>
                        </div>
                        <h5 class="card-title name text-center">C A B</h5>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="card">
                        <div class="card-img">
                            <a href="https://www.pfinouvellesvagues.com/">
                                <img src="/app/img/nouvelle-vagues.png" alt="Pfi Nouvelles Vagues Logo" />
                            </a>
                        </div>
                        <h5 class="card-title name text-center">Nouvelles<br>vagues</h5>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="card">
                        <div class="card-img">
                            <a href="https://www.inextenso.fr/en/">
                                <img src="/app/img/InExtenso.jpg" alt="Inextenso Logo" />
                            </a>
                        </div>
                        <h5 class="card-title name text-center">In Extenso</h5>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="card">
                        <div class="card-img">
                            <a href="https://www.e.leclerc/ ">
                                <img src="/app/img/Leclerc.jpg" alt="Leclerc brand logo" />
                            </a>
                        </div>
                        <h5 class="card-title name text-center">E Leclerc</h5>
                    </div>
                </div>
            </div>
        </section>
<?php return ob_get_clean();
    }
}
