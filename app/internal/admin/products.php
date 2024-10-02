<?php
$title = "Products";
require_once __DIR__ . "/templates/head.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/db_operations.php";


ob_start(); ?>
<main class="container mt-3">
    <h1 class="text-center">Update Product</h1>
    <?php if (isset($_GET['product']) && $_GET['product'] == "added") echo $successAlert; ?>
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
            <div class="text-center"><button class="btn btn-success me-3" <?php if (isset($_GET['product']) && $_GET['product'] == "added") { ?> disabled <?php } ?>>Update</button> <a class="btn btn-outline-primary" href="products.php">Close</a></div>
        </div>
    </form>
</main>
<?php $update_product = ob_get_clean();


?>

<?= Nav::gen() ?>
<h2 class="text-center">Products</h2>
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
        <table class="table table-bordered">
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
                            <a href="<?= "https://www.novocib.com/" . $product['page_url'] ?>"><?= $product['title'] ?></a>
                        </td>
                        <td>
                            <?= $product['updated_on'] ?>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="products.php?id_update=<?= $product['id'] ?>" role="button">Update</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
<?php
require_once __DIR__ . "/templates/foot.php";
?>