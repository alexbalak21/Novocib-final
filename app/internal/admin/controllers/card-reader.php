<?php
if ($_SERVER['REQUEST_METHOD'] !== "POST") header("Location: /");
$title = "Card Viewer";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/internal/admin/templates/base.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CardRepository.php";


$card_id = $_POST['card_id'];
$c_key = $_POST['c_key'];

$cardRepo = new CardRepository();
$card = $cardRepo->findById($card_id, $c_key);
?>

<main class="container" style="height: 80vh; display: flex; align-items: center; justify-content: center;">
    <div class="col-lg-8 col-8 mx-auto">
        <form action="/app/internal/admin/controllers/delete-card.php" method="POST">
            <input type="hidden" class="d-none" name="pid" value="<?= $pid ?>">
            <div class="form-group mb-4">
                <label class="fw-bold" for="email">Name on the Card</label>
                <input type="text" name="card_name" readonly="true" value="<?= $card->name ?>" class="form-control">
            </div>
            <div class="form-group mb-4">
                <label class="fw-bold">Card Number</label>
                <input type="text" name="card_number" readonly class="form-control text-center" value="<?= $card->number ?>">
            </div>
            <div class="form-group mb-4 row">
                <div class="col-5">
                    <label class="fw-bold">Expiration</label>
                    <input type="text" name="card_number" readonly class="form-control" value="<?= $card->exp ?>">
                </div>
                <div class="col-5 ms-5">
                    <label class="fw-bold">CCV</label>
                    <input type="text" name="card_number" readonly class="form-control" value="<?= $card->ccv ?>">
                </div>
            </div>
        </form>
        <div class="text-center"><a href="/app/internal/admin/customer-info.php" class="btn btn-primary btn-lg">Back</a></div>
    </div>

</main>