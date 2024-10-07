<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/connect_db.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/db_operations.php";

function log404request()
{
  $unwantedExtensions = ["jpg", "png", "pdf", "css", "js", "ico", "mp4", "map"];
  $time = date('Y-m-d H:i:s');
  $ip = $_SERVER['REMOTE_ADDR'];
  $query = parse_url($_SERVER['REQUEST_URI'])['path'];
  if (query_ends_with($query, $unwantedExtensions)) return
    log404toDB($time, $ip, $query);
}

log404request();


function query_ends_with($query, $arr)
{

  foreach ($arr as $ext) {
    if (str_ends_with($query, ".$ext")) return false;
  }
  return true;
}
