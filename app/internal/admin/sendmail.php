<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/Mail.php";

$mail = "Test Mail Server, this is the content";

$sent = Mail::send("alex.balak@mail.com", "Test", $mail);

echo $sent ? "Sent" : "Failed to Send";
