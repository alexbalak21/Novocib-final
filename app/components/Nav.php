<?php

class Nav
{
    static function bar()
    {
        return <<<NAVBAR
    
    <header>
    <a class="logo" href="/home"><img src="/app/static/img/logo.png" /></a>
    <label class="hamburger-menu"><input type="checkbox" id="nav-toggle" /></label>
    <nav>
        <ul>
            <!-- FRESHNESS -->
            <li>
                <a href="/freshness-assay-kits">
                    Freshness Assay Kits
                    <i class="fa-solid fa-caret-down"></i>
                </a>  
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
                <a class="larger" href="/convenient-assay-kits">
                    Convenient Assay Kits
                    <i class="fa-solid fa-caret-down"></i>
                </a>
                <ul>
                    <li><a href="/convenient-assay-kits/hprt-assay-kit">HPRT Assay Kit</a></li>
                    <li><a href="/convenient-assay-kits/prpp-s-assay-kit">PRPP-S Assay Kit</a></li>
                    <li><a href="/convenient-assay-kits/ampda-assay-kit">AMPDA Assay Kit</a></li>
                    <li>
                        <a href="/convenient-assay-kits/itp-ase-deficiency-assay-kit">ITP-ase Deficiency Assay Kit</a>
                    </li>
                    <li>
                        <a href="/convenient-assay-kits/adk-phosphorylation-assay-kit">ADK Phosphorylation Assay Kit</a>
                    </li>
                    <li>
                        <a href="/convenient-assay-kits/dck-phosphorylation-assay-kit">dCK Phosphorylation Assay Kit</a>
                    </li>
                    <li><a href="/convenient-assay-kits/human-recombinant-impdh">Human IMPDH type II</a></li>
                    <li><a href="/convenient-assay-kits/human-recombinant-pnp">Human Recombinant PNP</a></li>
                    <li><a href="/convenient-assay-kits/bacterial-recombinant-impdh">Bacterial IMPDH</a></li>
                    <li><a href="/convenient-assay-kits/adk-assay-kit">ADK Assay Kit</a></li>
                    <li><a href="/convenient-assay-kits/phosphatase-assay-kit">Phosphatase Assay Kit</a></li>
                </ul>
            </li>

            <!-- ACTIVE PURIFIED ENZYMES -->
            <li>
                <a class="larger" href="/active-purified-enzymes">
                    Active Purified Enzymes
                    <i class="fa-solid fa-caret-down"></i>
                </a>
                <ul>
                    <li><a href="/active-purified-enzymes">Active Purified Enzymes</a></li>
                    <li><a href="/active-purified-enzymes/impdh-recombinant-enzyme">IMPDH Recombinant Enzyme</a></li>
                    <li><a href="/active-purified-enzymes/human-recombinant-hgprt">Human Recombinant HGPRT</a></li>
                    <li>
                        <a href="/active-purified-enzymes/recombinant-adenosine-kinase">Recombinant Adenosine Kinase</a>
                    </li>
                    <li>
                        <a href="/active-purified-enzymes/recombinant-deoxycytidine-kinase">
                            Recombinant Deoxycytidine Kinase
                        </a>
                    </li>
                    <li><a href="/active-purified-enzymes/human-ump-cmp-kinase">Human UMP-CMP Kinase</a></li>
                </ul>
            </li>

            <!-- SERVICES -->
            <li>
                <a class="large">
                    Services
                    <i class="fa-solid fa-caret-down"></i>
                </a>
                <ul>
                    <li><a href="/analytical-services">Analytical Services</a></li>
                    <li>
                        <a href="/analytical-services/yeast-extract-nucleotide-analysis">
                            Yeast Extract Nucleotide Analysis
                        </a>
                    </li>
                    <li><a href="/cellular-nucleotides-analysis">HPLC analysis of bases nucleosides</a></li>
                    <li><a href="/yeast-extract-nucleotide-analysis">Yeast Nucleotide Analysis</a></li>
                </ul>
            </li>
            <li><a href="/inquiry">Contact Us</a></li>
        </ul>
    </nav>
</header>

NAVBAR;
    }
}
