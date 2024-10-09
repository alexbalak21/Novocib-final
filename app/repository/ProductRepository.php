<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Product.php";

class ProductRepository
{
    private ?PDO $conn;

    public function __construct()
    {
        try {
            $this->conn = require_once $_SERVER['DOCUMENT_ROOT'] . "/app/db/connect.php";
        } catch (Error $e) {
            echo 'Database Connection Error' . "<br>" . $e->getMessage();
            exit;
        }
    }

    public function __destruct()
    {
        $this->conn = null;
    }

    public function addProduct(Product $product): bool
    {
        $query = "INSERT INTO products (reference, title, size, price, page_url)
              VALUES (:reference, :title, :size, :price, :page_url)";

        $stmt = $this->conn->prepare($query);

        // Use bindValue instead of bindParam for readonly properties
        $stmt->bindValue(':reference', $product->reference);
        $stmt->bindValue(':title', $product->title);
        $stmt->bindValue(':size', $product->size);
        $stmt->bindValue(':price', $product->price);
        $stmt->bindValue(':page_url', $product->page_url);

        return $stmt->execute();
    }

    public function findById(int $id): ?Product
    {
        $query = "SELECT ID AS product_id, reference, title, size, price, page_url, updated_on FROM products WHERE ID = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data ? $this->mapToProduct($data) : null;
    }

    public function findProductByReference(string $reference): ?Product
    {
        $query = "SELECT ID AS product_id, reference, title, size, price, page_url, updated_on FROM products WHERE reference = :reference LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':reference', $reference);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data ? $this->mapToProduct($data) : null;
    }

    public function updateProduct(Product $product): bool
    {
        $query = "UPDATE products SET reference = :reference, title = :title, size = :size, 
                  price = :price, page_url = :page_url WHERE ID = :id";

        $stmt = $this->conn->prepare($query);

        // Bind parameters
        $stmt->bindValue(':reference', $product->reference);
        $stmt->bindValue(':title', $product->title);
        $stmt->bindValue(':size', $product->size);
        $stmt->bindValue(':price', $product->price);
        $stmt->bindValue(':page_url', $product->page_url);
        $stmt->bindValue(':id', $product->product_id);

        return $stmt->execute();
    }

    public function deleteProduct(int $id): bool
    {
        $query = "DELETE FROM products WHERE ID = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function getAllProducts(): array
    {
        $query = "SELECT ID AS product_id, reference, title, size, price, page_url, updated_on FROM products";
        $stmt = $this->conn->query($query);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return array_map([$this, 'mapToProduct'], $data);
    }

    private function mapToProduct(array $data): Product
    {
        return new Product(
            (int)$data['product_id'],
            $data['reference'],
            $data['title'],
            $data['size'],
            (int)$data['price'],
            $data['page_url'],
            $data['updated_on']
        );
    }
}

//TESTING REPO 

$newProduct = new Product(null, '#R123X', "Test Product", "10mL", 10, "example.url", null);

$productRepository = new ProductRepository();

$updatedProduct = new Product(11, "#U123X", "Updated product", "15mL", 15, "updated.url", null);

$productRepository->updateProduct($updatedProduct);


echo "<pre>";
var_dump($productRepository->findById(11));
echo "</pre>";
die;
