<?php
class Company
{
    public int $company_id;
    private string $company;
    private string $address;
    private string $country;
    private string $state;
    private string $zip;
}

class Customer extends Company
{
    public int $id;
    private string $first_name;
    private string $last_name;
    private string $email;
}
