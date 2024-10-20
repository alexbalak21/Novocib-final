<?php
$title = "Secure Login";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/head.php";

//CUSTOMER REPO
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CustomerRepository.php";

echo
Banner::gen("/app/static/img/payment.jpg");

function check_customer(string $pid)
{
    if (empty($pid)) return;
    $customRepo = new CustomerRepository();
    $customer = $customRepo->findByPrivateId($pid);
    if ($customer == null) return;


    ob_start(); ?>
    <main class="container" style="height: 55vh; display: flex; align-items: center; justify-content: center;">
        <div class="col-lg-4 mx-auto">
            <form action="/secure/login-c" method="POST">
                <input type="password" class="d-none" name="pid" value="<?= $pid ?>">
                <div class="form-group mb-4 text-center">
                    <label class="fw-bold" for="email">Email</label>
                    <input type="email" name="e_mail" readonly="true" value="<?= $customer->email ?>" class="form-control text-center" id="email">
                </div>
                <div class="form-group mb-4 text-center">
                    <label class="fw-bold" for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" autofocus class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
            </form>
        </div>

    </main>
<?php echo ob_get_clean();
}


if (isset($_GET['pid'])) check_customer($_GET['pid']);
else header("Location: /");


require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/foot.php";
