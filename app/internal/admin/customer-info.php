<?php
$title = "Customer Info";
require_once __DIR__ . "/templates/base.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CustomerRepository.php";

$customerRepo = new CustomerRepository();

$customers = $customerRepo->findAll();

ob_start(); ?>
<div class="row mt-4 mb-2">
    <div class="d-flex">
        <i class="fa-regular fa-user fs-2 mt-4 ms-2"></i>
        <h2 class="underlinedTitl mt-4 mb-4 flex-grow-1 text-center"><span class="underlined novoblue">Customer Information</span></h2>
    </div>
    <?= InputArea::gen(name: "first name", required: true) ?>
    <?= InputArea::gen(name: "last name", required: true) ?>
    <?= InputArea::gen(name: "e-mail", class: "col-12", required: true) ?>
</div>
<?php $customer_form = ob_get_clean();

function modal(string $pid, string $password)
{
    $link = "https://novocib.com/secure/transfer?pid=$pid";
    ob_start(); ?>
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="text-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>

                <div class="modal-body text-center">
                    <span class="text-muted"><?= $link ?></span>
                    <button onclick="navigator.clipboard.writeText('<?= $link ?>')" class="btn btn-success btn-sm mt-2">Copy</button>

                    <div class="mt-4">
                        <label class="form-label">Password</label> <br>
                        <input type="password" value="<?= $password ?>" class="form-control text-center w-50 mx-auto mb-0"> <br>
                        <button onclick="navigator.clipboard.writeText('<?= $password ?>')" class="btn btn-success btn-sm">Copy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php return ob_get_clean();
}

?>




<main class="container">
    <div class="col-lg-8 mx-auto">
        <form action="controllers/set-customer-info.php" method="POST">
            <?= $customer_form ?>
            <div class="my-5 text-center"><button type="submit" class="btn btn-success btn-lg">Set Information <i class="fa-solid fa-lock ms-2"></i></button></div>
        </form>
    </div>
</main>

<section class="mt-5">
    <style>
        th,
        td {
            text-align: center;
        }
    </style>
    <div class="mt-5 col-11 mx-auto">
        <h2 class="text-center mb-2">Customers</h2>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th class="col-3">First Name</th>
                    <th class="col-3">Last Name</th>
                    <th class="">E-mail</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer) : ?>
                    <?= modal($customer->private_id, $customer->password) ?>
                    <tr>
                        <td>
                            <?= $customer->first_name ?>
                        </td>
                        <td>
                            <?= $customer->last_name ?>
                        </td>
                        <td>
                            <?= $customer->email ?>
                        </td>
                        <td>
                            <a class="btn btn-danger btn-sm" role="button">Payment <i class="fa-solid fa-credit-card"></i></a>
                            <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#myModal" role="button">Link <i class="fa-solid fa-paper-plane"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>