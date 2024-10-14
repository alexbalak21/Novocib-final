<?php
spl_autoload_register('MyAutoLoader');
function MyAutoLoader($className)
{


    $path = $_SERVER['DOCUMENT_ROOT'] . "/app/internal/admin/components/";
    include_once $path . $className . ".php";
}
