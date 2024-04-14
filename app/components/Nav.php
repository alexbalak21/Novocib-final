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
            <!-- FRESHNESS -->       
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
            <!-- CONVENIENT ASSAY KITS -->
            <li>
                <a href="/convenient-assay-kits"> Convenient Assay Kits <i class="fa-solid fa-caret-down"></i></a>
                <ul>
                <li><a href="/convenient-assay-kits/hprt-assay-kit">HPRT Assay Kit</a></li>
                <li><a href="/convenient-assay-kits/prpp-s-assay-kit">PRPP-S Assay Kit</a></li>
                <li><a href="/convenient-assay-kits/ampda-assay-kit">AMPDA Assay Kit</a></li>
                <li><a href="/convenient-assay-kits/itp-ase-deficiency-assay-kit">ITP-ase Deficiency Assay Kit</a></li>
                <li><a href="/convenient-assay-kits/adk-phosphorylation-assay-kit">ADK Phosphorylation Assay Kit</a></li>
                <li><a href="/convenient-assay-kits/dck-phosphorylation-assay-kit">dCK Phosphorylation Assay Kit</a></li>
                <li><a href="/convenient-assay-kits/human-recombinant-impdh">Human IMPDH type II</a></li>
                <li><a href="/convenient-assay-kits/human-recombinant-pnp">Human Recombinant PNP</a></li>
                <li><a href="/convenient-assay-kits/bacterial-recombinant-impdh">Bacterial IMPDH</a></li>
                <li><a href="/convenient-assay-kits/adk-assay-kit">ADK Assay Kit</a></li>
                <li><a href="/convenient-assay-kits/phosphatase-assay-kit">Phosphatase Assay Kit</a></li>
                </ul>
            </li>
        </ul>
            <!-- CONVENIENT ASSAY KITS -->
            <li>
                <a href="/convenient-assay-kits"> Convenient Assay Kits <i class="fa-solid fa-caret-down"></i></a>
                <ul>
                <li><a href="/convenient-assay-kits/hprt-assay-kit">HPRT Assay Kit</a></li>
            </li>
        </ul>
    </nav>
</header>

NAVBAR;
  }
}
