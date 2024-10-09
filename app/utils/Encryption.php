<?php
class Encryption
{
    private $data = "";
    function __construct()
    {
        $this->data = require_once $_SERVER['DOCUMENT_ROOT'] . "/config/data";
    }

    public function encryptData($data)
    {
        $key = $this->data;
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
        return base64_encode($iv . $encrypted);
    }

    public function decryptData($encryptedData)
    {
        $key = $this->data;
        $data = base64_decode($encryptedData);
        $iv_length = openssl_cipher_iv_length('aes-256-cbc');
        $iv = substr($data, 0, $iv_length);
        $encrypted = substr($data, $iv_length);
        return openssl_decrypt($encrypted, 'aes-256-cbc', $key, 0, $iv);
    }

    public function encrypt_string(string $data, string $key = "HQXtt4)5xqYyMjk0bI9Afj5Ejts(=eVm"): string
    {
        // Define the encryption method (AES-256-CBC)
        $encryption_method = 'AES-256-CBC';

        // Generate an initialization vector (IV) from the key, 16 bytes (128 bits)
        $iv = substr(hash('sha256', $key), 0, 16);

        // Encrypt the data using OpenSSL encryption
        $encrypted = openssl_encrypt($data, $encryption_method, $key, 0, $iv);

        // Encode the result in base64 to make it easier to store and transmit
        return base64_encode($encrypted);
    }
}
