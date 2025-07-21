<?php
global $title;
$title = "Messages";

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/internal/admin/templates/base.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/Message_repository.php";

$MessageRepo = new Message_repository();
$messages = $MessageRepo->get_all_messages();

print_r($messages);
die;
