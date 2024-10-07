<?php
function randString($length = 10)
{
    $range = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/()[],.:;=-_";
    $max = strlen($range) - 1;
    $output = "";
    for ($i = 0; $i < $length; $i++)
        $output .= $range[rand(0, $max)];
    return $output;
}



function serve(): array
{
    if ($_SERVER['REQUEST_METHOD'] != "POST") return [false, 'Bad Request'];
}
