<?php
function get_country_code($ip)
{
    $url = "https://ipapi.co/$ip/country/";
    $response = file_get_contents($url);
    return $response ? trim($response) : 'Unknown';
}

echo get_country_code("43.156.21.71"); // Example IP address