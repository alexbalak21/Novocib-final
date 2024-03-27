<?php
class Nav
{
  static function bar()
  {
    return <<<NAVBAR

        <nav class="navbar-default navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"> <img src="/app/static/img/logo.png" alt="Novocib logo" height="40"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/products">Products</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Convenient Assay Kits
              </a>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/convenient-assay-kits">Convenient Assay Kits</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/convenient-assay-kits/hprt-assay-kit">HPRT Assay Kit</a></li>
              <li><a class="dropdown-item" href="/convenient-assay-kits/prpp-s-assay-kit">PRPP-S Assay Kit</a></li>
              </ul>
            </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/services">Services</a></li>
                <li><a class="dropdown-item" href="/analytical-services">Analytical Services</a></li>
                <li><a class="dropdown-item" href="/analytical-services/yeast-extract-nucleotide-analysis">Yeast Extract Nucleotide Analysis</a></li>
                <li><a class="dropdown-item" href="/nucleotides">Nucleotides</a></li>
                <li><a class="dropdown-item" href="/cellular-nucleotides-analysis">Cellular Nucleotides Analysis</a></li>
                <li><a class="dropdown-item" href="/active-purified-enzymes">Active Purified Enzymes</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/inquiry">Inquiry</a></li>
                <li><a class="dropdown-item" href="/hplc-analysis-of-bases-nucleosides">HPLC analysis of bases nucleosides</a></li>
                </ul>
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