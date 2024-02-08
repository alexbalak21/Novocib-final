<?php
class Lol
{
    function lol($content = "Test")
    {
        return  <<<COMP
    <div>
    <h1>$content</h1>
    </div>
    COMP;
    }
}
