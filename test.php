<?php
function clean($string)
{
    $string = trim($string);
    $string = str_replace(' ', '_', $string); // Replaces all spaces with hyphens.
    $string = preg_replace('/[^A-Za-z0-9\_]/', '', $string); // Removes special chars.
    return str_replace('_', ' ', $string);
}
