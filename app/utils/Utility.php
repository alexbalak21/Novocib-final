<?php
class Utility
{
    public static function genRandString($length = 16)
    {
        $range = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/()[],.:;=-_";
        $max = strlen($range) - 1;
        $output = "";
        for ($i = 0; $i < $length; $i++)
            $output .= $range[rand(0, $max)];
        return $output;
    }
}
