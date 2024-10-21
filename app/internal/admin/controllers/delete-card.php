<?php
if ($_SERVER['REQUEST_METHOD'] !== "POST") header("Location: /");


$card_id = $_POST['card_id'];
