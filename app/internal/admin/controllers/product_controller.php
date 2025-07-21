<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/ProductRepository.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Product.php";
$ProductRepo = new ProductRepository();

// POST handler
if ($_SERVER['REQUEST_METHOD'] === "POST" && $_POST['_method'] === "POST") {
    // Optional: sanitize input for security
    $ref   = $_POST['ref'] ?? '';
    $title = $_POST['title'] ?? '';
    $size  = $_POST['size'] ?? '';
    $price = isset($_POST['price']) ? (int)$_POST['price'] : 0;
    $url   = $_POST['url'] ?? '';

    // Create product instance
    $newProduct = new Product(null, $ref, $title, $size, $price, $url, null);

    // Save using ProductRepository
    $productId = $ProductRepo->create_product($newProduct);

    // Redirect or output success (optional)
    header("Location: ../products.php?product=added");
}


//DELETE
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['_method']) && $_POST['_method'] === "DELETE") {
    $id = $_POST['product'] ? (int) $_POST["product"] : 0;
    if ($ProductRepo->delete($id)) header("Location: ../products.php?product=deleted");
    else header("Location: ../products.php?update=error");
}
