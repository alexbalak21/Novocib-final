<?php
class Customer
{
    public function __construct(
        public readonly int $customer_id,
        public readonly string $first_name,
        public readonly string $last_name,
        public readonly string $email,
    ) {}
}
