<?php
class Footer
{
    static function gen()
    {
        return <<<Footer

        <footer class="container-fluid">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-7">
                        <ul class="contact">
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto:contact@novocib.com">contact@novocib.com</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:+33631446805">+33 6 31 44 68 05</a>
                            </li>
                            <li class="adress">
                                <div><i class="fa-solid fa-location-dot"></i></div>
                                <a href="">
                                    <div>
                                        Criée Boulogne
                                        <br />
                                        Halle à Marée Quai Jean Voisin
                                        <br />
                                        62200 BOULOGNE-SUR-MER
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-4 text-center">
                        <ul>
                            <li>
                                <i class="fa-brands fa-linkedin"></i>
                                <a href="https://www.linkedin.com/company/novocib/">Linked-In</a>
                            </li>
                            <li class="mt-auto">
                                    <i class="fa-solid fa-hand-holding"></i>
                                    <a href="https://www.novocib.com/old/">Old website</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p class="text-center">Copyright © 2024 Novocib. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

Footer;
    }
}
