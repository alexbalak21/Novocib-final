<?php

class Nav
{
  static function bar()
  {
    return <<<NAVBAR

    <header>
    <a class="logo" href=""><img src="/app/static/img/logo.png" /></a>
    <label class="hamburger-menu"
        ><input type="checkbox" id="nav-toggle"
    /></label>
    <nav>
        <ul>
            <li><a href="">LINK</a></li>
            <li>
                <a href=""
                    >LINK <i class="fa-solid fa-caret-down"></i
                ></a>
                <ul>
                    <li>
                        <a href=""
                            >DOWN <i class="fa-solid fa-caret-right"></i
                        ></a>
                        <ul>
                            <li><a href="">LINK 1</a></li>
                            <li><a href="">LINK2 </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""
                            >DWON <i class="fa-solid fa-caret-right"></i
                        ></a>
                        <ul>
                            <li><a href="">LINK 1</a></li>
                            <li><a href="">LINK2 </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href=""
                    >LINK <i class="fa-solid fa-caret-down"></i
                ></a>
                <ul>
                    <li><a href="">LINK</a></li>
                </ul>
            </li>
            <li><a href="">LINK</a></li>
        </ul>
    </nav>
</header>

NAVBAR;
  }
}

?>

<style>
  nav {
    margin-bottom: 0px;
  }

  nav ul li a {
    font-size: 18px !important;
    font-weight: 500 !important;
  }

  .dropdown-item:hover {
    background-color: initial !important;
  }

  nav ul li a:hover {
    color: var(--novo-blue) !important;
  }
</style>