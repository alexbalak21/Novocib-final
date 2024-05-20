<?php
require_once "app/logic/connect_db.php";
require_once "app/logic/db_operations.php";

function log404request()
{
  $time = date('Y-m-d H:i:s');
  $ip = $_SERVER['REMOTE_ADDR'];
  $query = parse_url($_SERVER['REQUEST_URI'])['path'];
  log404toDB($time, $ip, $query);
}

log404request();
