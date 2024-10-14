<?php
$title = "Payment Info";
require_once __DIR__ . "/templates/base.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CustomerRepository.php";
// global $user;

$customerRepo = new CustomerRepository();

ob_start(); ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <p class="text-center">Product Added successfully</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php $successAlert = ob_get_clean(); ?>

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