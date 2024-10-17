<?php
$title = "Set customer info";
require_once __DIR__ . "/templates/base.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/db_operations.php";


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
        <form action="controllers/customer-link-generator.php" method="POST">
            <?= $customer_form ?>
            <div class="my-5 text-center"><button type="submit" class="btn btn-primary btn-lg">Send Information <i class="fa-solid fa-lock ms-2"></i></button></div>
        </form>
    </div>

</main>