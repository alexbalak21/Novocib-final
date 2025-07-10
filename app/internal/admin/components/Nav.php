<?php
class Nav
{
    static function bar($title = null)
    {
        global $user;
        global $page;

        ob_start(); ?>
        <nav class="navbar bg-light navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <h6 class="navbar-brand"><?= $title ?></h6>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/app/internal/admin/index.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/app/internal/admin/search.php">Search</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/app/internal/admin/products.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/app/internal/admin/customer-info.php">Payment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/app/internal/admin/visitor-searches.php">Visitor Searches</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/app/internal/admin/404-requests.php">404 Requests</a>
                        </li>
                    </ul>
                    <?php if (isset($_SESSION['username'])): ?>
                        <span class="ms-3 text-dark small">
                            <h6><i class="fa-solid fa-user me-2"></i><strong><?= htmlspecialchars($_SESSION['username']) ?></strong></h6>
                        </span>
                    <?php endif; ?>

                    <div class="d-flex align-items-center ms-3">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                User Menu
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="user.php">Modify User</a></li>
                                <li><a class="dropdown-item" href="createProduct.php">Create Product</a></li>
                                <li><a class="dropdown-item" href="login.php">Disconnect</a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </nav>


<?php return ob_get_clean();
    }
} ?>