<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/sec";

class SecEnc
{
    protected string $key;
    protected string $method;
    protected int $iter;
    protected $salt;


    public function __construct()
    {
        ["Senc" => $this->key, "s_enc_m" => $this->method, "iterations" => $this->iter] = get_sec();
    }

    public function setSalt($salt)
    {
        $this->salt = $salt;
    }


    public function store(string $data, ?string $key = null)
    {
        if ($data === null) return null;
        if (!isset($this->salt)) {
            throw new Exception("salt must be set");
            exit;
        }


        $hashKey = hash_pbkdf2('sha256', $key ?? $this->key, $this->salt, $this->iter, 32, true);
        $iv = random_bytes(16);
        $encrypted_data = openssl_encrypt($data, $this->method, $hashKey, OPENSSL_RAW_DATA, $iv);
        return $iv . $encrypted_data;
    }

    public function read($data, ?string $key = null)
    {
        if ($data === null) return null;
        if (!isset($this->salt)) {
            throw new Exception("salt must be set");
            exit;
        }
        $hashKey = hash_pbkdf2('sha256', $key ?? $this->key, $this->salt,  $this->iter, 32, true);
        $iv = substr($data, 0, 16);
        $encrypted_data = substr($data, 16);
        return openssl_decrypt($encrypted_data, $this->method, $hashKey, OPENSSL_RAW_DATA, $iv);
    }
}
