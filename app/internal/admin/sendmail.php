<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/Mail.php";

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/mail.php";

$mail = gen_mail("alex", "balak", "123jsqnhdujsqnhdonh6456516");

$sent = Mail::send("alex.balak@mail.com", "Test", $mail);

echo $sent;
