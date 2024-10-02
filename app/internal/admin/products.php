<?php
global $title;
$title = "Products";
require_once __DIR__ . "/templates/head.php";
global $user;
?>

<?= Nav::gen() ?>
<main class="container mt-5">
    <h1 class="text-center">Add new Product</h1>
    <form action="addProduct.php" method="POST">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="mb-3 col-12">
                <div class="col-8 mx-auto">
                    <label for="title" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" id="title">
                </div>
            </div>
            <div class="mb-3 col-6 col-lg-2">
                <label for="ref" class="form-label">Ref</label>
                <input name="ref" type="text" class="form-control" id="ref">
            </div>
            <div class="mb-3 col-8 col-lg-5">
                <label for="size" class="form-label">Size</label>
                <input name="size" type="text" class="form-control" id="size">
            </div>
            <div class="mb-3 col-lg-2 col-6">
                <label for="price" class="form-label">Price</label>
                <input name="price" type="number" class="form-control" id="price">
            </div>
            <div class="col-12 mb-3">
                <div class="col-8 mx-auto">
                    <label for="url" class="form-label">Page Url</label>
                    <input name="url" type="text" class="form-control" id="url">
                </div>
            </div>
            <div class="text-center"><button class="btn btn-success">Add</button></div>
        </div>
    </form>
</main>

<?php
require_once __DIR__ . "/templates/foot.php";
?>