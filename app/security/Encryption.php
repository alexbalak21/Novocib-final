<?php
class Encryption
{
    protected string $key;
    protected string $iv;
    protected string $enc;

    public function __construct()
    {
        try {
            ["ENC_METHOD" => $this->enc, "S_KEY" => $this->key, "S_IV" => $this->iv] = require_once $_SERVER['DOCUMENT_ROOT'] . "/config/data";
        } catch (Error $e) {
            echo $e;
            exit;
        }
    }

    public function store($data)
    {
        if ($data === null) return null;
        $key = hash('sha256', $this->key);  // Hash the key
        $iv = substr(hash('sha256', $this->iv), 0, 16);  // Create IV from hash
        return openssl_encrypt($data, $this->enc, $key, 0, $iv);
    }

    public function read($encrypted_data)
    {
        if ($encrypted_data === null) return null;
        $key = hash('sha256', $this->key);  // Hash the key
        $iv = substr(hash('sha256', $this->iv), 0, 16);  // Create IV from hash

        return openssl_decrypt($encrypted_data, $this->enc, $key, 0, $iv);
    }
}
