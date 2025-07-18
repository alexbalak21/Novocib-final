<?php

class Nav
{
  static function bar()
  {
    return <<<NAVBAR

        <nav class="navbar-default navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"> <img src="/app/img/logo.png" alt="Novocib logo" height="40"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
              </li>


      <!-- FRESHNESS -->
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/freshness-assay-kits" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Freshness Assay Kits
              </a>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/freshness-assay-kits">Freshness Assay Kits</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/freshness-assay-kits/freshness-principle">Freshness Principle</a></li>
              <li><a class="dropdown-item" href="/freshness-assay-kits/fish-freshness">Fish Freshness</a></li>
              </ul>
            </li>


      <!-- CONVENIENT ASSAY KITS -->
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/convenient-assay-kits" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Convenient Assay Kits
              </a>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/convenient-assay-kits">Convenient Assay Kits</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/convenient-assay-kits/hprt-assay-kit">HPRT Assay Kit</a></li>
              <li><a class="dropdown-item" href="/convenient-assay-kits/prpp-s-assay-kit">PRPP-S Assay Kit</a></li>
              <li><a class="dropdown-item" href="/convenient-assay-kits/ampda-assay-kit">AMPDA Assay Kit</a></li>
              <li><a class="dropdown-item" href="/convenient-assay-kits/itp-ase-deficiency-assay-kit">ITP-ase Deficiency Assay Kit</a></li>
              <li><a class="dropdown-item" href="/convenient-assay-kits/adk-phosphorylation-assay-kit">ADK Phosphorylation Assay Kit</a></li>
              <li><a class="dropdown-item" href="/convenient-assay-kits/dck-phosphorylation-assay-kit">dCK Phosphorylation Assay Kit</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/convenient-assay-kits/human-recombinant-impdh">Human IMPDH type II</a></li>
              <li><a class="dropdown-item" href="/convenient-assay-kits/human-recombinant-pnp">Human Recombinant PNP</a></li>
              <li><a class="dropdown-item" href="/convenient-assay-kits/bacterial-recombinant-impdh">Bacterial IMPDH</a></li>
              <li><a class="dropdown-item" href="/convenient-assay-kits/adk-assay-kit">ADK Assay Kit</a></li>
              <li><a class="dropdown-item" href="/convenient-assay-kits/phosphatase-assay-kit">Phosphatase Assay Kit</a></li>
              </ul>
            </li>


      <!-- ACTIVE PURIFIED ENZYMES -->
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/active-purified-enzymes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Active Purified Enzymes
              </a>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/active-purified-enzymes">Active Purified Enzymes</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/active-purified-enzymes/impdh-recombinant-enzyme">IMPDH Recombinant Enzyme</a></li>
              <li><a class="dropdown-item" href="/active-purified-enzymes/human-recombinant-hgprt">Human Recombinant HGPRT</a></li>
              <li><a class="dropdown-item" href="/active-purified-enzymes/recombinant-adenosine-kinase">Recombinant Adenosine Kinase</a></li>
              <li><a class="dropdown-item" href="/active-purified-enzymes/recombinant-deoxycytidine-kinase">Recombinant Deoxycytidine Kinase</a></li>
              <li><a class="dropdown-item" href="/active-purified-enzymes/human-ump-cmp-kinase">Human UMP-CMP Kinase</a></li>
              </ul>
            </li>


            
      <!-- SERVICES -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/analytical-services">Analytical Services</a></li>
                <li><a class="dropdown-item" href="/analytical-services/yeast-extract-nucleotide-analysis">Yeast Extract Nucleotide Analysis</a></li>
                
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/inquiry">Inquiry <i class="fa-solid fa-comment"></i></a></li>
                <li><a class="dropdown-item" href="/hplc-analysis-of-bases-nucleosides">HPLC analysis of bases nucleosides</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/nucleotides">Nucleotides</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about-us">About Us</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>    

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
    margin: 0 20px;
    font-weight: 500 !important;
  }

  .dropdown-item:hover {
    background-color: initial !important;
  }

  nav ul li a:hover {
    color: var(--novo-blue) !important;
  }
</style>