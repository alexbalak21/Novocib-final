<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/connect_db.php";

class Secure
{
    public function store($company_name, $person_name, $data1, $data2, $data3, $data4, $passphrase): string
    {
        // Connect to the database
        $pdo = connect_db();
        if ($pdo == null) {
            return "";
        }
        // Generate a random 16-byte salt
        $salt = random_bytes(16); // 16 bytes = 16-byte salt in binary (no need for hex as we store binary)

        // Derive a 32-byte key using PBKDF2 (10000 iterations)
        $key = hash_pbkdf2('sha256', $passphrase, $salt, 10000, 32, true); // Derived key in binary

        $id = uniqid();

        // Encrypt each piece of data using AES-256-CBC
        $iv1 = random_bytes(16);
        $iv2 = random_bytes(16);
        $iv3 = random_bytes(16);
        $iv4 = random_bytes(16);

        $encrypted_data1 = openssl_encrypt($data1, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv1);
        $encrypted_data2 = openssl_encrypt($data2, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv2);
        $encrypted_data3 = openssl_encrypt($data3, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv3);
        $encrypted_data4 = openssl_encrypt($data4, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv4);

        // Prepare the SQL query to insert the encrypted data
        $stmt = $pdo->prepare("
        INSERT INTO u_info (id, company_name, person_name, salt, v2r3ep32, zb5410x8, me9n2rvs, lbdafa6f) 
        VALUES (:id, :company_name, :person_name, :salt, :v2r3ep32, :zb5410x8, :me9n2rvs, :lbdafa6f)
    ");
        try {
            // Execute the query with the salt and encrypted data
            $stmt->execute([
                ':id' => $id, // Generate a unique ID for this entry
                ':company_name' => $company_name,
                ':person_name' => $person_name,
                ':salt' => $salt, // Store salt as binary
                ':v2r3ep32' => $iv1 . $encrypted_data1, // Store IV + encrypted data for each
                ':zb5410x8' => $iv2 . $encrypted_data2,
                ':me9n2rvs' => $iv3 . $encrypted_data3,
                ':lbdafa6f' => $iv4 . $encrypted_data4
            ]);
            return $id;
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        } finally {
            $pdo = null;
        }
    }

    public function read($id, $passphrase)
    {
        // Connect to the database
        $pdo = connect_db();
        if ($pdo == null) {
            return;
        }
        // Prepare the SQL query to select the data by ID
        $stmt = $pdo->prepare("SELECT company_name, person_name, salt,  v2r3ep32, zb5410x8, me9n2rvs, lbdafa6f FROM u_info WHERE id = :id");
        $stmt->execute([':id' => $id]);

        // Fetch the data from the query
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            echo "No data found for the given ID.";
            return;
        }

        // Extract the salt and encrypted data from the row
        $salt = $row['salt'];
        $encrypted_data1 = $row['v2r3ep32']; // Already in binary
        $encrypted_data2 = $row['zb5410x8']; // Already in binary
        $encrypted_data3 = $row['me9n2rvs']; // Already in binary
        $encrypted_data4 = $row['lbdafa6f']; // Already in binary

        // Derive the 32-byte key using PBKDF2 with the same salt and passphrase
        $key = hash_pbkdf2(
            'sha256',
            $passphrase,
            $salt,
            10000,
            32,
            true
        ); // Derived key in binary

        // Separate the IV and encrypted data (IV is the first 16 bytes)
        $iv1 = substr($encrypted_data1, 0, 16);
        $encrypted_data1 = substr($encrypted_data1, 16);

        $iv2 = substr($encrypted_data2, 0, 16);
        $encrypted_data2 = substr($encrypted_data2, 16);

        $iv3 = substr($encrypted_data3, 0, 16);
        $encrypted_data3 = substr($encrypted_data3, 16);

        $iv4 = substr($encrypted_data4, 0, 16);
        $encrypted_data4 = substr($encrypted_data4, 16);

        // Decrypt each piece of data using AES-256-CBC
        $decrypted_data1 = openssl_decrypt($encrypted_data1, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv1);
        $decrypted_data2 = openssl_decrypt($encrypted_data2, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv2);
        $decrypted_data3 = openssl_decrypt($encrypted_data3, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv3);
        $decrypted_data4 = openssl_decrypt($encrypted_data4, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv4);


        $pdo = null;
        return ["company_name" => $row["company_name"], "person_name" => $row["person_name"], "c_name" => $decrypted_data1, "c_number" => $decrypted_data2, "c_ex" => $decrypted_data3, "c_cv" => $decrypted_data4];
    }
}
