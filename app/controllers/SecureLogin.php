<?php
//UTILITY CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/utils/Utility.php";



if ($_SERVER['REQUEST_METHOD'] !== "POST") header("Location: /");
if (!Utility::check_array($_POST, ["e_mail", "password", "pid"])) header("Location: /");
check_customer();


function check_customer()
{
    $email = $_POST['e_mail'];
    $password = $_POST['password'];
    $pid = $_POST['pid'];
    require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CustomerRepository.php";
    $customerRepo = new CustomerRepository();
    $customer = $customerRepo->findByPrivateId($pid);
    if ($customer == null) header("Location: /");
    if ($password !== $customer->password) header("Location: /");
    session_start();
    $_SESSION['pid'] = $pid;
    $_SESSION['first_name'] = $customer->first_name;
    $_SESSION['last_name'] = $customer->last_name;
    $_SESSION['email'] = $customer->email;
    header("Location: /secure/transfer");
}
