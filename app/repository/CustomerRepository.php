<?php
//ENCRYPTION CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/security/Encryption.php";

class CustomerRepository
{
    protected ?PDO $pdo;
    protected Encryption $enc;

    public function __construct()
    {
        try {
            $this->pdo = require_once $_SERVER['DOCUMENT_ROOT'] . "/app/db/connect.php";
            $this->enc = new Encryption();
        } catch (Error $e) {
            echo 'Error' . "<br>" . $e->getMessage();
            exit;
        }
    }
    function save($first_name, $last_name, $email, $company, $address, $country, $state, $zip_code, $uuid, $data)
    {
        $query = "INSERT INTO customer (first_name, last_name, email, company, address, country, state, zip_code, uuid, data)
              VALUES (:first_name, :last_name, :email, :company, :address, :country, :state, :zip_code, :uuid, :data)";

        $stmt = $this->pdo->prepare($query);

        // Encrypt data before inserting
        $stmt->bindParam(':first_name', $this->enc->store($first_name));
        $stmt->bindParam(':last_name', $this->enc->store($last_name));
        $stmt->bindParam(':email', $this->enc->store($email));
        $stmt->bindParam(':company', $this->enc->store($company));
        $stmt->bindParam(':address', $this->enc->store($address));
        $stmt->bindParam(':country', $this->enc->store($country));
        $stmt->bindParam(':state', $this->enc->store($state));
        $stmt->bindParam(':zip_code', $this->enc->store($zip_code));
        $stmt->bindParam(':uuid', $this->enc->store($uuid));
        $stmt->bindParam(':data', $this->enc->store($data));

        return $stmt->execute();
    }

    function findAll(): array
    {
        $query = "SELECT * FROM customer";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        $customers = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (empty($customers)) return [];
        $decrypted_customers = [];

        // Decrypt each customer's details
        foreach ($customers as $customer) {
            $decrypted_customers[] = [
                'id' => $customer['id'],
                'first_name' => $this->enc->read($customer['first_name']),
                'last_name' => $this->enc->read($customer['last_name']),
                'email' => $this->enc->read($customer['email']),
                'company' => $this->enc->read($customer['company']),
                'address' => $this->enc->read($customer['address']),
                'country' => $this->enc->read($customer['country']),
                'state' => $this->enc->read($customer['state']),
                'zip_code' => $this->enc->read($customer['zip_code']),
                'uuid' => $this->enc->read($customer['uuid']),
                'data' => $this->enc->read($customer['data']),
            ];
        }
        return $decrypted_customers;
    }


    function findById(int $id)
    {
        $query = "SELECT * FROM customer WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $customer = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($customer) {
            // Decrypt data after fetching
            return [
                'id' => $customer['id'],
                'first_name' => $this->enc->read($customer['first_name']),
                'last_name' => $this->enc->read($customer['last_name']),
                'email' => $this->enc->read($customer['email']),
                'company' => $this->enc->read($customer['company']),
                'address' => $this->enc->read($customer['address']),
                'country' => $this->enc->read($customer['country']),
                'state' => $this->enc->read($customer['state']),
                'zip_code' => $this->enc->read($customer['zip_code']),
                'uuid' => $this->enc->read($customer['uuid']),
                'data' => $this->enc->read($customer['data']),
            ];
        } else {
            return null;
        }
    }
}
