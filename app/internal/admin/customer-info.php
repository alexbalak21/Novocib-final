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
    <section>
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Your content here.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>