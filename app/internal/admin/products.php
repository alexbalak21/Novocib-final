<?php
$title = "Products";
require_once __DIR__ . "/templates/head.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/db_operations.php";

function get_update_form(): void
{
    $id = intval($_GET['id_update']);
    $product = get_product_by_id($id);
    if (empty($product)) return;
    ob_start(); ?>
    <section class="container my-4">
        <h1 class="text-center">Update Product</h1>
        <form action="updateProduct.php" method="POST">
            <div class="d-none">
                <input name="id" type="number" value="<?= $id ?>">
            </div>
            <div class="row mt-5 d-flex justify-content-center">
                <div id="title_form" class="mb-3 col-12">
                    <div class="col-8 mx-auto">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" value="<?= $product['title'] ?>" type="text" class="form-control" id="title">
                    </div>
                </div>
                <div class="mt-3 mb-4 text-center">
                    <a onclick="document.getElementById('title_form').classList.toggle('d-none')" class="btn btn-outline-secondary btn-sm">Modify Title</a>
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
                <div id="url_form" class="col-12 mb-3 d-none">
                    <div class="col-8 mx-auto">
                        <label for="url" class="form-label">Page Url</label>
                        <input name="url" value="<?= $product['page_url'] ?>" type="text" class="form-control" id="url">
                    </div>
                </div>
                <div class="mt-3 mb-4 text-center">
                    <a onclick="document.getElementById('url_form').classList.toggle('d-none')" class="btn btn-outline-secondary btn-sm">Modify Url</a>
                </div>
                <div class="text-center"><button class="btn btn-primary  me-3" <?php if (isset($_GET['product']) && $_GET['product'] == "updated") { ?> disabled <?php } ?>>Update</button>
                    <a class="btn btn-outline-danger" href="products.php">Close</a>
                </div>
            </div>
        </form>
    </section>
<?php echo ob_get_clean();
}


ob_start(); ?>
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <p class="text-center">Product Updated Successfully</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php $updatedSuccess = ob_get_clean();

?>

<?= Nav::gen() ?>
<?php if (isset($_GET['id_update'])) get_update_form(); ?>
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
        <?php if (isset($_GET['product']) && $_GET['product'] == "updated") echo $updatedSuccess; ?>
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
                            <a href="<?= "https://www.novocib.com/" . $product['page_url'] ?>"><?= $product['title'] ?></a>
                        </td>
                        <td>
                            <?= $product['updated_on'] ?>
                        </td>
                        <td>
                            <a class="btn btn-outline-primary" href="products.php?id_update=<?= $product['ID'] ?>" role="button">Edit</a>
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