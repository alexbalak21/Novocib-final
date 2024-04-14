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
            <li>
                <a href="/freshness-assay-kits"
                    >Freshness Assay Kits <i class="fa-solid fa-caret-down"></i
                ></a>
                <ul>
                    <li>
                        <a href="/freshness-assay-kits/freshness-principle">Freshness Principle</a>
                    </li>
                    <li>
                        <a href="/freshness-assay-kits/fish-freshness">Fish Freshness</a>
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
