<?php
class Nav
{
    static function gen()
    {
        global $user;
        global $page;
        ob_start(); ?>

        <nav class="navbar bg-light navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <h6 class="navbar-brand"><?= ucfirst($page ?? "Admin") ?></h6>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/app/internal/admin/index.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="search.php">Search</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.php">Products</a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin Menu
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="user.php">Modify User</a></li>
                            <li><a class="dropdown-item" href="createProduct.php">Create Product</a></li>
                            <li><a class="dropdown-item" href="login.php">Disconnect</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

<?php return ob_get_clean();
    }
} ?>