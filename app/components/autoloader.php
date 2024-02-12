<?php
spl_autoload_register('MyAutoloader');
function MyAutoloader($className)
{
    $path = "app/components/";
    include_once $path . $className . ".php";
}
