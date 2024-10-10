<?php
spl_autoload_register('MyAutoloader');
function MyAutoloader($className)
{
    $path = $_SERVER['DOCUMENT_ROOT'] . "/app/components/";
    include_once $path . $className . ".php";
}
