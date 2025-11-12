<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/db/connect";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/db_operations.php";

function log404request()
{
  // Define the array of unwanted extensions
  $unwantedExtensions = ["jpg", "png", "pdf", "css", "js", "ico", "mp4", "map", "svg", "json", "scss", "webp", "gif", "JPG", "jpeg"];
  $time = date('Y-m-d H:i:s');
  $ip   = $_SERVER['REMOTE_ADDR'];

  // Parse the requested URL
  $parsed_url = parse_url($_SERVER['REQUEST_URI']);
  $path       = isset($parsed_url['path']) ? $parsed_url['path'] : '';

  // 1) Skip anything containing "/FA6/"
  if (strpos($path, '/FA6/') !== false) {
    return;
  }

  // 2) Only log if it doesn't end with one of the unwanted extensions
  if ($path && query_ends_with($path, $unwantedExtensions)) {
    log404toDB($time, $ip, $path);
  }
}

function query_ends_with($query, $arr)
{
  // Check if the query is a valid string before processing
  if (!is_string($query)) {
    return true; // Skip logging if the query is invalid
  }

  // Loop through each unwanted extension and check the string ending
  foreach ($arr as $ext) {
    if (substr($query, -strlen(".$ext")) === ".$ext") {
      return false; // Match found, no need to log
    }
  }
  return true; // No matches, ready to log
}

// Call the function to log 404 requests
log404request();

if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
  header("Location: /404");
  exit('Forbidden');
}
