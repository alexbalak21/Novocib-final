<?php
spl_autoload_register('MyAutoloader');
function MyAutoloader($className)
{
    $path = "./components/";
    include_once $path . $className . ".php";
}
