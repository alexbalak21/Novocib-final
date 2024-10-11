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

    /**
     * Checks if all specified keys exist in an array and are not empty.
     *
     * @param array $arr The array to check.
     * @param array $keys The keys to check in the array.
     * @return bool True if all keys exist and are not empty, false otherwise.
     */
    public static function check_array(array $arr, array $keys): bool
    {
        foreach ($keys as $key)
            if (!array_key_exists($key, $arr) || empty($arr[$key])) return false;
        return true;
    }
}
