<?php
require_once "./session/check_session.php";

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/db_operations.php";

$done = create_user("admin", "lbalakireva@novcib.com", "Azerty123+", "admin");

if ($done) echo "DONE";
else echo "NOT DONE";
