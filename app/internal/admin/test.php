<?php
require_once "./session/check_session.php";

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/db_operations.php";


$clear = read_encrypted();

var_dump($clear);
