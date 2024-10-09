<?php
class Company
{
    function __construct(
        public readonly int $company_id,
        public readonly string $company,
        public readonly string $address,
        public readonly string $country,
        public readonly string $state,
        public readonly string $zip,
    ) {}
}
