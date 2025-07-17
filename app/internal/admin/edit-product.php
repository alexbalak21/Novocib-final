<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/db_operations.php";

$id = intval($_GET['product_id'] ?? 0);
$product = $id ? get_product_by_id($id) : null;

if (!$product) {
    header('Location: products.php?update=error');
    exit;
}

global $title;
$title = "Edit Product";
require_once __DIR__ . "/templates/base.php";




// if still null, redirect and halt



?>

<main class="container mt-5">
    <h1 class="text-center pt-5">Edit Product</h1>
    <form action="updateProduct.php" method="POST">
        <div class="row mt-3 d-flex justify-content-center">
            <div class="mb-3 col-12">
                <input type="hidden" name="id" value="<?= $product['ID'] ?>">
                <div class="col-8 mx-auto">
                    <label for="title" class="form-label">Title</label>
                    <input name="title" value="<?= $product['title'] ?>" type="text" class="form-control" id="title">
                </div>
            </div>
            <div class="mb-3 col-6 col-lg-2">
                <label for="ref" class="form-label">Ref</label>
                <input name="ref" value="<?= $product['reference'] ?>" type="text" class="form-control" id="ref">
            </div>
            <div class="mb-3 col-8 col-lg-5">
                <label for="size" class="form-label">Size</label>
                <input name="size" value="<?= $product['size'] ?>" type="text" class="form-control" id="size">
            </div>
            <div class="mb-3 col-lg-2 col-6">
                <label for="price" class="form-label">Price</label>
                <input name="price" value="<?= $product['price'] ?>" type="number" class="form-control" id="price">
            </div>
            <div class="col-12 mb-3">
                <div class="col-8 mx-auto">
                    <label for="url" class="form-label">Page Url</label>
                    <input name="url" value="<?= $product['page_url'] ?>" type="text" class="form-control" id="url">
                </div>
            </div>
            <div class="text-center"><button class="btn btn-primary me-3">Update</button> <a class="btn btn-outline-primary" href="products.php">Back</a></div>
        </div>
    </form>
</main>