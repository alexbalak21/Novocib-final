<?php
class Nav
{
    static function bar()
    {
        return <<<NAVBAR
    <div class="navigation">
    <a class="logo" href=""><img src="logo.png" /></a>
    <input type="checkbox" id="nav-toggle" />
    <label class="navbars" for="nav-toggle"><i id="nav-bars" class="fa-solid fa-bars"></i></label>
    <nav>
        <ul>
            <li><a href="">LINK</a></li>
            <li>
                <a>
                    LINK
                    <i class="fa-solid fa-caret-down"></i>
                </a>
                <ul>
                    <li class="">
                        <a>
                            DOWN
                            <i class="fa-solid fa-caret-right"></i>
                        </a>
                        <ul>
                            <li><a href="">LINK 1</a></li>
                            <li><a href="">LINK2</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a>
                            DWON
                            <i class="fa-solid fa-caret-right"></i>
                        </a>
                        <ul>
                            <li><a href="">LINK 1</a></li>
                            <li><a href="">LINK2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a>
                    LINK
                    <i class="fa-solid fa-caret-down"></i>
                </a>
                <ul>
                    <li><a href="">LINK</a></li>
                </ul>
            </li>
            <li><a href="">LINK</a></li>
        </ul>
    </nav>
</div>
NAVBAR;
    }
}
?>
<script src="./app/components/navbar.js" defer></script>

<style>
    .navigation {
        position: initial;
        top: 0;
        left: 0;
        right: 0;
        background: white;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 99;
    }

    .navigation .logo img {
        height: 56px;
    }

    nav ul {
        list-style: none;
    }

    nav ul li {
        position: relative;
        float: left;
    }

    nav ul li a {
        font-size: 18px;
        padding: 20px;
        width: 160px;
        text-align: center;
        text-decoration: none;
        display: block;
        color: black;
    }

    nav ul li a:hover {
        background: grey;
        color: white;
    }

    nav ul li ul {
        position: absolute;
        left: 0;
        background: white;
        display: none;
    }

    nav ul li ul li {
        width: 100%;
        border-top: 1px solid grey;
    }

    nav ul li ul li ul {
        left: 160px;
        top: 0;
    }

    nav ul li.open>ul {
        display: initial;
    }

    nav ul li.subopen>ul {
        display: initial;
    }

    #nav-toggle {
        display: none;
    }

    .navigation .navbars {
        font-size: 18px;
        color: dimgray;
        cursor: pointer;
        display: none;
        font-size: 32px;
        padding: 2px 10px;
        margin: 10px;
        border: 1px solid LightGray;
        border-radius: 6px;
    }

    @media (max-width: 1200px) {
        .navigation .navbars {
            display: block;
        }

        nav {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background-color: white;
            border: 1px solid grey;
            display: none;
        }

        nav ul li {
            width: 100%;
        }

        nav ul li a {
            width: 100%;
        }

        nav ul li ul {
            position: relative;
            width: 100%;
        }

        nav ul li ul li {
            background-color: lightgray;
        }

        nav ul li ul li i {
            transform: rotate(90deg);
        }

        nav ul li ul li ul {
            width: 100%;
            left: 0;
        }

        nav ul li ul li ul li {
            background-color: darkgrey;
        }

        #nav-toggle:checked~nav {
            display: initial;
        }
    }
</style>