<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/internal/admin/session/check_session.php";

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/CustomerRepository.php";

if ($_SERVER['REQUEST_METHOD'] !== "POST") header("Location: /app/internal/admin/index.php");

$customer_id = $_POST['DELETE_CUST_ID'];

$repo = new CardRepository();

if ($repo->delete($customer_id)) header("Location: /app/internal/admin/customer-info.php");
