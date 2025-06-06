<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/internal/admin/session/check_session.php";

//UTILITY CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/utils/Utility.php";

//CUSTOMER REPO
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CustomerRepository.php";


function output($link)
{
    ob_start(); ?>
    <main style="height: 94vh; display: flex; align-items: center; justify-content: center;">
        <h3><?= $link ?> <button onclick="navigator.clipboard.writeText('<?= $link ?>');">Copy</button></h3>
    </main>
<?php return ob_get_clean();
}

function serve(): void
{
    if (!Utility::check_array($_POST, ["first_name", "last_name", "e_mail"])) return;
    $password = substr(str_shuffle('0123456789_.#$ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 20);
    $uid = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 16);
    $customer = new Customer(null, ucfirst($_POST["first_name"]), strtoupper($_POST["last_name"]), strtolower($_POST["e_mail"]), $uid, $password, null, null, null);
    $customerRepo = new CustomerRepository();
    $id = $customerRepo->save($customer);
    header("Location: /app/internal/admin/customer-info.php");
}

if ($_SERVER['REQUEST_METHOD'] !== "POST") header("Location: index.php");
else serve();

?>