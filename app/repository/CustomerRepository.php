<?php
//CUSTOMER CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Customer.php";

//ENCRYPTION CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/security/Encryption.php";

//DB CONNECTION
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/db/connect";

class CustomerRepository
{
    protected ?PDO $pdo;
    protected Encryption $enc;

    public function __construct()
    {
        try {
            $this->pdo = connect_db();
            $this->enc = new Encryption();
        } catch (Error $e) {
            echo 'Error' . "<br>" . $e->getMessage();
            exit;
        }
    }

    public function __destruct()
    {
        $this->pdo = null;
    }

    public $select = "SELECT id AS customer_id, first_name, last_name, email, private_id, password, uuid, data, company_id FROM customers";
    public $insert = "INSERT INTO customers (first_name, last_name, email, private_id, password, company_id, uuid, data) VALUES (:first_name, :last_name, :email, :private_id, :password, :company_id, :uuid, :data)";
    public $update = "UPDATE customers SET first_name = :first_name, last_name = :last_name, email = :email, company_id = :company_id, uuid = :uuid, data = :data  WHERE id = :id";
    public $setCardId = "UPDATE customers SET data = :data  WHERE private_id = :private_id";

    /**
     * Saves or updates a Customer record.
     * If the customer_id is null, it inserts a new record.
     * Otherwise, it updates the existing record.
     */
    public function save(Customer $customer): int
    {
        if ($customer->customer_id === null)
            $query = $this->insert;
        else
            $query = $this->update;

        $stmt = $this->pdo->prepare($query);

        // Bind encrypted data
        $stmt->bindValue(':first_name', $this->enc->store($customer->first_name));
        $stmt->bindValue(':last_name', $this->enc->store($customer->last_name));
        $stmt->bindValue(':email', $this->enc->store($customer->email));
        $stmt->bindValue(':company_id', $customer->company_id);
        $stmt->bindValue(':uuid', $this->enc->store($customer->uuid));
        $stmt->bindValue(':private_id', $customer->private_id);
        $stmt->bindValue(':password', $this->enc->store($customer->password));
        $stmt->bindValue(':data', $this->enc->store($customer->data));
        if ($customer->customer_id !== null) {
            $stmt->bindValue(':id', $customer->customer_id);
        } else {
            $stmt->bindValue(':uuid', $this->enc->store($customer->uuid));
            $stmt->bindValue(':data', $this->enc->store($customer->data));
        }

        $stmt->execute();

        // Return the last inserted id or the updated customer id
        return $customer->customer_id ?? $this->pdo->lastInsertId();
    }


    public function updateCardId(string $private_id, string $cardId)
    {
        $stmt = $this->pdo->prepare($this->setCardId);
        $stmt->bindValue(':data', $this->enc->store($cardId));
        $stmt->bindValue(':data', $private_id);
        $stmt->execute();
    }


    /**
     * Fetches all customers and returns an array of Customer objects.
     */
    public function findAll(): array
    {
        $query = $this->select;
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        $customers = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $customer_objects = [];

        foreach ($customers as $customer) {
            $customer_objects[] = new Customer(
                customer_id: $customer['customer_id'],
                first_name: $this->enc->read($customer['first_name']),
                last_name: $this->enc->read($customer['last_name']),
                email: $this->enc->read($customer['email']),
                password: $this->enc->read($customer['password']),
                private_id: $customer['private_id'],
                uuid: $this->enc->read($customer['uuid']),
                data: $this->enc->read($customer['data']),
                company_id: $customer['company_id'] // Assuming this is encrypted as well
            );
        }

        return $customer_objects;
    }

    /**
     * Finds a customer by ID and returns a Customer object or null if not found.
     */
    public function findById(int $id): ?Customer
    {
        $query = $this->select . " WHERE id = :id  LIMIT 1";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $customer = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($customer) {
            return new Customer(
                customer_id: $customer['customer_id'],
                first_name: $this->enc->read($customer['first_name']),
                last_name: $this->enc->read($customer['last_name']),
                email: $this->enc->read($customer['email']),
                private_id: $customer['private_id'],
                password: $this->enc->read($customer['password']),
                uuid: $this->enc->read($customer['uuid']),
                data: $this->enc->read($customer['data']),
                company_id: $customer['company_id']
            );
        } else {
            return null;
        }
    }

    public function findByPrivateId(string $private_id): ?Customer
    {
        $query = $this->select . " WHERE private_id = :private_id  LIMIT 1";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':private_id', $private_id);
        $stmt->execute();

        $customer = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($customer) {
            return new Customer(
                customer_id: $customer['customer_id'],
                first_name: $this->enc->read($customer['first_name']),
                last_name: $this->enc->read($customer['last_name']),
                email: $this->enc->read($customer['email']),
                private_id: $customer['private_id'],
                password: $this->enc->read($customer['password']),
                uuid: $this->enc->read($customer['uuid']),
                data: $this->enc->read($customer['data']),
                company_id: $customer['company_id']
            );
        } else {
            return null;
        }
    }

    public function delete(int $customer_id): bool
    {
        // Prepare the delete statement
        $query = "DELETE FROM customer WHERE id = :id";
        $stmt = $this->pdo->prepare($query);

        // Bind the customer ID parameter
        $stmt->bindParam(':id', $customer_id, PDO::PARAM_INT);

        // Execute the statement and return whether the deletion was successful
        return $stmt->execute();
    }
}
