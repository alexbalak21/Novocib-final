<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/Message_repository.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Product.php";
$MessageRepo = new Message_repository();


//DELETE
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['_method']) && $_POST['_method'] === "DELETE") {
    $id = $_POST['message'] ? (int) $_POST["message"] : 0;
    if ($MessageRepo->delete_message_by_id($id)) header("Location: ../messages.php?message=deleted");
    else header("Location: ../messages.php?message=error");
}
