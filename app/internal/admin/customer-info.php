<?php
$title = "Customer Info";
require_once __DIR__ . "/templates/base.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CustomerRepository.php";
// global $user;

$customerRepo = new CustomerRepository();

$customers = $customerRepo->findAll();

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
                            <a class="btn btn-outline-danger" role="button">Payment Info <i class="fa-solid fa-lock"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>