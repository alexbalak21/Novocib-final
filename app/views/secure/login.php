<?php


//CUSTOMER REPO
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CustomerRepository.php";

if (isset($_GET['pid'])) check_customer($_GET['pid']);
else header("Location: /");



function check_customer(string $pid)
{
    if (empty($pid)) return header("Location: /");
    $customRepo = new CustomerRepository();
    $customer = $customRepo->findByPrivateId($pid);
    if ($customer == null) return header("Location: /");

    $title = "Secure Login";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/head.php";
    echo Banner::gen("/app/static/img/secure-login.jpg");


    ob_start(); ?>
    <main class="container" style="height: 55vh; display: flex; align-items: center; justify-content: center;">
        <div class="col-lg-4 mx-auto">
            <form action="/secure/login-c" method="POST">
                <input type="hidden" class="d-none" name="pid" value="<?= $pid ?>">
                <div class="form-group mb-4 text-center">
                    <label class="fw-bold" for="email">Email</label>
                    <input type="email" name="e_mail" readonly="true" value="<?= $customer->email ?>" class="form-control text-center" id="email">
                </div>
                <div class="form-group mb-4 text-center">
                    <label class="fw-bold">Password</label>
                    <input type="password" name="password" autofocus class="form-control" placeholder="Password">
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
            </form>
        </div>

    </main>
<?php echo ob_get_clean();
}





require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/foot.php";
