<?php



class ProductRepository
{
    protected ?PDO $conn;

    public function __construct()
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . "/app/db/connect";
        try {
            $this->conn = connect_db();
        } catch (Error $e) {
            echo 'Database Connection Error' . "<br>" . $e->getMessage();
            exit;
        }
    }

    public function __destruct()
    {
        $this->conn = null;
    }

    public function create_product(Product $product): ?int
    {
        $query = "INSERT INTO products (reference, title, size, price, page_url) 
                  VALUES (:reference, :title, :size, :price, :page_url)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':reference', $product->reference);
        $stmt->bindValue(':title', $product->title);
        $stmt->bindValue(':size', $product->size);
        $stmt->bindValue(':price', $product->price);
        $stmt->bindValue(':page_url', $product->page_url);
        $stmt->execute();

        return $this->conn->lastInsertId();
    }

    public function update_product(Product $product): bool
    {
        if ($product->product_id === null) {
            throw new InvalidArgumentException("Product ID must be provided for update.");
        }

        $query = "UPDATE products 
                  SET reference = :reference, title = :title, size = :size, price = :price, page_url = :page_url 
                  WHERE ID = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':reference', $product->reference);
        $stmt->bindValue(':title', $product->title);
        $stmt->bindValue(':size', $product->size);
        $stmt->bindValue(':price', $product->price);
        $stmt->bindValue(':page_url', $product->page_url);
        $stmt->bindValue(':id', $product->product_id);

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

    public function delete(int $id): bool
    {
        $query = "DELETE FROM products WHERE ID = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function findAll(): array
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
