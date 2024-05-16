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
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <a href="login.php" class="btn btn-sm btn-outline-danger me-3">Disconnect</a>
                </div>
            </div>
        </nav>

<?php return ob_get_clean();
    }
} ?>