<?php
$array = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];

$key = ['age'];

if (array_key_exists($key, $array)) {
    echo "Key '$key' exists in the array.";
} else {
    echo "Key '$key' does not exist in the array.";
}
