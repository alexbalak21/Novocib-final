<?php

function insertEncryptedData($pdo, $data, $passphrase)
{
    // Generate a random 16-byte salt
    $salt = bin2hex(random_bytes(16)); // 16 bytes = 32 hex chars

    // Derive a 32-byte key using PBKDF2 (10000 iterations)
    $key = hash_pbkdf2('sha256', $passphrase, $salt, 10000, 32, true); // Derived key in binary

    // Encrypt the data using AES-256-CBC
    $iv = random_bytes(16); // AES-256 requires a 16-byte IV
    $encrypted_data = openssl_encrypt($data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);

    // Prepare the SQL query to insert the data
    $stmt = $pdo->prepare("INSERT INTO t (salt, encrypted_data) VALUES (:salt, :encrypted_data)");

    // Execute the query with the salt and encrypted data
    $stmt->execute([
        ':salt' => $salt,
        ':encrypted_data' => bin2hex($iv . $encrypted_data) // Store IV + encrypted data as hex
    ]);

    echo "Data encrypted and inserted successfully.";
}

// Usage
$pdo = new PDO("mysql:host=localhost;dbname=test", "root", "password");
insertEncryptedData($pdo, 'This is secret text.', 'My secret passphrase');



function selectAndDecryptData($pdo, $id, $passphrase)
{
    // Fetch the encrypted data and salt from the database
    $stmt = $pdo->prepare("SELECT salt, encrypted_data FROM t WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $salt = $row['salt'];
        $encrypted_data = hex2bin($row['encrypted_data']);

        // Extract the IV (first 16 bytes) and actual encrypted data
        $iv = substr($encrypted_data, 0, 16);
        $encrypted_data = substr($encrypted_data, 16);

        // Derive the key using PBKDF2 with the same passphrase and salt
        $key = hash_pbkdf2('sha256', $passphrase, $salt, 10000, 32, true);

        // Decrypt the data using AES-256-CBC
        $decrypted_data = openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);

        echo "Decrypted data: " . $decrypted_data;
    } else {
        echo "No record found for ID: $id";
    }
}

// Usage
$pdo = new PDO("mysql:host=localhost;dbname=test", "root", "password");
selectAndDecryptData($pdo, 1, 'My secret passphrase');
