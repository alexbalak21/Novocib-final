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
                                <a href="">contact@novocib.com</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <a href="">+33 6 58 37 06 05</a>
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
                                <a href="">Linked-In</a>
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

?>

<style>
    footer {
        --novo-blue: rgb(55, 113, 200);
        --novo-grey: #39515b;
        --darker-blue: #4167b1;
        --grey: #dbdbdb;
        --dark-blue: rgb(39, 79, 140);
        --primary: #3771c8;
    }

    .overlay {
        background-color: rgba(39, 79, 140, 0.7);
    }

    footer {
        background-image: url(/app/static/img/helix.jpg);
        padding: 0 !important;


        .copyright {
            border-top: 1px solid rgba(256, 256, 256, 0.1);
            color: white;
            padding-top: 16px;
            padding-bottom: 4px;
        }

        ul {
            list-style: none;
            color: white;
            font-size: larger;

            li {
                margin: 24px 0;
            }

            li.adress {
                display: flex;
                align-items: center;
            }

            li i {
                background-color: white;
                padding: 10px;
                border-radius: 50%;
                margin-right: 20px;
                color: #336293;
            }

            li a {
                text-decoration: none;
                color: white;
                font-weight: 600;
            }

            li a:hover {
                color: lightgrey;
            }
        }
    }
</style>