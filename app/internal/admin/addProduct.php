<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/internal/admin/session/check_session.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/db_operations.php";

/**
 * Checks if any of the provided arguments are empty.
 *
 * This function takes a variable number of arguments and checks if any of them
 * are considered empty. The `empty()` function in PHP considers the following as empty:
 * - `null`
 * - `false`
 * - `0`, `0.0`, `"0"`
 * - Empty string `""`
 * - Empty array `[]`
 *
 * @return bool Returns `false` if any argument is empty, and `true` if all are non-empty.
 */
function check_if_empty(): bool
{
    $params = func_get_args();
    foreach ($params as $value)
        if (empty($value)) return false;

    return true;
}

function addProduct(): void
{
    extract($_POST);
    if (!check_if_empty($title, $ref, $size, $price, $url)) return;
    if (str_starts_with($ref, "#")) $ref = substr($ref, 1);
    $url = str_replace("https://www.novocib.com/", "", $url);
    if (str_starts_with($url, "/")) $url = substr($url, 1);
    $done = add_product($ref, $title, $size, $price, $url);
    if ($done) header("Location: products.php?product=added");
    else header("Location: products.php?error=failed to add product");
}

if ($_SERVER['REQUEST_METHOD'] === "POST") addProduct();
