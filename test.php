<?php

function gen()
{
    ob_start(); ?>
    <h1>TEST</h1>
<?php
    return ob_get_clean();
}


echo gen();
