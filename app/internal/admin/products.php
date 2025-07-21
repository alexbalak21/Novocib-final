<?php
global $title;
$title = "Products";
require_once __DIR__ . "/templates/base.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/db_operations.php";

ob_start(); ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <p class="text-center">Product Added successfully</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php $successAlert = ob_get_clean();

ob_start(); ?>
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <p class="text-center">Product Updated successfully</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php $updateAlert = ob_get_clean();

ob_start(); ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <p class="text-center">Error Updating the product</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php $errorAlert = ob_get_clean(); ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <p class="text-center">Product Deleted</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php $deleteAlert = ob_get_clean(); ?>


<?php
if (isset($_GET['product'])) echo "PRODUCT ";

?>


<?php if (isset($_GET['product']) && $_GET['product'] == "added") echo $successAlert; ?>
<?php if (isset($_GET['product']) && $_GET['product'] == "updated") echo $updateAlert; ?>
<?php if (isset($_GET['product']) && $_GET['product'] == "deleted") echo $deleteAlert; ?>
<?php if (isset($_GET['update']) && $_GET['update'] == "error") echo $errorAlert; ?>


<section class="container mt-3">
    <h1 class="text-center">Add Product</h1>

    <form action="controllers/product_controller.php" method="POST">
        <input type="hidden" name="_method" value="POST">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="mb-3 col-12">
                <div class="col-8 mx-auto">
                    <label for="title" class="form-label">Title</label>
                    <input name="title" value="<?= $product['title'] ?? "" ?>" type="text" class="form-control" id="title">
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
            <div class="text-center"><button class="btn btn-success me-3">Add</button> <a class="btn btn-outline-primary" href="createProduct.php">Reset</a></div>
        </div>
    </form>
</section>

<section class="mt-5">
    <style>
        th,
        td {
            text-align: center;
        }
    </style>
    <?php $products = read_all_products(); ?>
    <div class="mt-5 col-11 mx-auto">
        <h2 class="text-center mb-2">Products</h2>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th class="col-1">reference</th>
                    <th class="col-2">Title</th>
                    <th class="col-4">Size</th>
                    <th class="col-1">Price</th>
                    <th class="col-2">Url</th>
                    <th class="col-1">Updated On</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td>
                            <?= $product['reference'] ?>
                        </td>
                        <td>
                            <?= $product['title'] ?>
                        </td>
                        <td>
                            <?= $product['size'] ?>
                        </td>
                        <td>
                            <?= $product['price'] . ".00" ?>
                        </td>
                        <td>
                            <a href="<?= 'http://' . $_SERVER['HTTP_HOST'] . '/' . $product['page_url'] ?>"><?= $product['title'] ?></a>
                        </td>
                        <td>
                            <?= $product['updated_on'] ?>
                        </td>
                        <td>
                            <a class="btn btn-outline-primary mb-1" href="edit-product.php?product_id=<?= $product['ID'] ?>" role="button">Edit</a>
                            <div class="dropdown">
                                <button class="btn btn-danger" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Delete
                                </button>
                                <div class="dropdown-menu text-center">
                                    <h6>Confirm</h6>
                                    <form action="controllers/product_controller.php" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="product" value="<?= $product['ID'] ?>">
                                        <button class="btn btn-danger">Yes</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>