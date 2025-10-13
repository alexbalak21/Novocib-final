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
                <!-- Brand / Title -->
                <h6 class="navbar-brand"><?= $title ?></h6>

                <!-- Username + User Menu (before toggler so it stays beside it on small screens) -->
                <div class="d-lg-none d-flex align-items-center ms-auto me-1">
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?= $_SESSION['username'] ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="user.php">Modify User</a></li>
                            <li><a class="dropdown-item" href="createProduct.php">Create Product</a></li>
                            <li><a class="dropdown-item" href="login.php">Disconnect</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Burger toggler (always on screen) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible nav -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/"><i class="fa-solid fa-house"></i> NOVO.COM</a></li>
                        <li class="nav-item"><a class="nav-link" href="/app/internal/admin/search.php">
                                Search <i class="fa-solid fa-file-lines"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="/app/internal/admin/products.php">Products</a> <i class="fa-solid fa-box"></i></li>
                        <li class="nav-item"><a class="nav-link" href="/app/internal/admin/customer-info.php">Payment</a> <i class="fa-solid fa-credit-card"></i></li>
                        <li class="nav-item"><a class="nav-link" href="/app/internal/admin/visitor-searches.php">User <i class="fa-solid fa-magnifying-glass"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="/app/internal/admin/404-requests.php">404 <i class="fa-solid fa-xmark"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="/app/internal/admin/messages.php">Messages <i class="fa-solid fa-envelope"></i></a></li>

                    </ul>

                    <!-- Right-aligned Username + Menu for large screens -->
                    <div class="d-none d-lg-flex align-items-center">
                        <?php if (isset($_SESSION['username'])): ?>
                            <span class="me-2 text-dark small">
                                <i class="fa-solid fa-user me-1"></i><strong><?= htmlspecialchars($_SESSION['username']) ?></strong>
                            </span>
                        <?php endif; ?>
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                User Menu
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
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