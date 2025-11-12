<?php
class Nav
{
    static function bar()
    {
        ob_start(); ?>
        <header>
            <a class="logo" href="/"><img src="/app/img/logo.png" alt="novocib logo" /></a>
            <label class="hamburger-menu"><input type="checkbox" id="nav-toggle" /></label>
            <nav>
                <ul>
                    <!-- FRESHNESS -->
                    <li>
                        <a href="/freshness-assay-kits">Freshness Assay Kits</a>
                        <ul>
                            <li>
                                <a href="/dietary-nucleotides-assay-kits/fish-freshness-assay-kit">Fish Freshness Assay Kit</a>
                            </li>
                            <li>
                                <a href="/freshness-assay-kits/freshness-principle">Freshness Principle</a>
                            </li>
                            <li>
                                <a href="/freshness-assay-kits/fish-freshness">Fish Freshness</a>
                            </li>
                            <li>
                                <a href="/freshness-assay-kits/freshness-assay-kit">Freshness Assay Kits</a>
                            </li>
                            <li>
                                <a href="/freshness-assay-kits/how-it-works">How It Works</a>
                            </li>
                        </ul>
                    </li>

                    <!-- CONVENIENT ASSAY KITS -->
                    <li>
                        <a class="larger" href="/convenient-assay-kits">Convenient Assay Kits</a>
                        <ul>
                            <li><a href="/convenient-assay-kits/hprt-assay-kit">HPRT Assay Kit</a></li>
                            <li><a href="/convenient-assay-kits/prpp-s-assay-kit">PRPP-S Assay Kit</a></li>
                            <li><a href="/convenient-assay-kits/ampda-assay-kit">AMPDA Assay Kit</a></li>
                            <li><a href="/convenient-assay-kits/itp-ase-assay-kit">ITP-ase Assay Kit</a></li>
                            <li><a href="/convenient-assay-kits/adk-phosphorylation-assay-kit">ADK Phosphorylation Assay Kit</a></li>
                            <li><a href="/convenient-assay-kits/dck-phosphorylation-assay-kit">dCK Phosphorylation Assay Kit</a></li>
                            <li><a href="/convenient-assay-kits/human-recombinant-impdh">Human Recombinant IMPDH</a></li>
                            <li><a href="/convenient-assay-kits/human-recombinant-pnp">Human Recombinant PNP</a></li>
                            <li><a href="/convenient-assay-kits/bacterial-recombinant-impdh">Bacterial Recombinant IMPDH</a></li>
                            <li><a href="/convenient-assay-kits/adk-assay-kit">ADK Assay Kit</a></li>
                            <!-- <li><a href="/convenient-assay-kits/phosphatase-assay-kit">Phosphatase Assay Kit</a></li> -->
                        </ul>
                    </li>

                    <!-- ACTIVE PURIFIED ENZYMES -->
                    <li>
                        <a class="larger" href="/active-purified-enzymes">Active Purified Enzymes</a>
                        <ul>
                            <!-- Nucleoside Kinases for Drug Development -->
                            <li><a href="/active-purified-enzymes/recombinant-adenosine-kinase">Recombinant Adenosine Kinase</a></li>
                            <li><a href="/active-purified-enzymes/recombinant-deoxycytidine-kinase">Recombinant Deoxycytidine Kinase</a></li>
                            <li><a href="/active-purified-enzymes/human-ump-cmp-kinase">Human UMP-CMP Kinase</a></li>
                            <li><a href="/active-purified-enzymes/cn-ii">Cytosolic 5'-nucleotidase II</a></li>

                            <!-- Purine Metabolism Enzymes for Biomedical Research -->
                            <li><a href="/active-purified-enzymes/human-recombinant-impdh">Human IMPDH type II</a></li>

                            <!-- <li><a href="/active-purified-enzymes/impdh-recombinant-enzyme">IMPDH Recombinant Enzyme</a></li> -->
                            <li>
                                <a href="/active-purified-enzymes/human-recombinant-hgprt">Human Recombinant HGPRT</a>
                            </li>
                            <li><a href="/active-purified-enzymes/fmn-reductase">Purified Active FMN Reductase</a></li>
                        </ul>
                    </li>

                    <!-- Analytical Services -->
                    <li>
                        <a class="large" href="/analytical-services">Analytical Services</a>
                        <ul>
                            <li><a href="/nucleotide-analysis-service">Nucleotide Analysis</a></li>
                            <li><a href="/analytical-services/yeast-extract-nucleotide-analysis">Yeast Extract Nucleotide Analysis</a></li>
                            <li><a href="/analytical-services/cellular-nucleotides-analysis">Cellular Nucleotides Analysis</a></li>
                            <li><a href="/dietary-nucleotides">Dietary Nucleotides</a></li>
                        </ul>
                    </li>
                    <li><a href="/contact-us">Contact Us</a></li>
                </ul>
            </nav>
        </header>
<?php return ob_get_clean();
    }
} ?>