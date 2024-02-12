<?php

$autoload = spl_autoload_functions();


function MyTest()
{
    echo "Test Function";
}

print_r($autoload);

MyTest();
