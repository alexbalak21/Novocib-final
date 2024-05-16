<?php
spl_autoload_register('MyAutoLoader');
function MyAutoLoader($className)
{

    $path = __DIR__ . "/../components/";
    include_once $path . $className . ".php";
}
