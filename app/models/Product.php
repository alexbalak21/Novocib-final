<?php
class Product
{
    public function __construct(
        public readonly ?int $product_id,
        public readonly string $reference,
        public readonly string $title,
        public readonly ?string $size,
        public readonly int $price,
        public readonly ?string $page_url,
        public readonly ?string $updated_on
    ) {}
}
