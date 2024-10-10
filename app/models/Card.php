<?php
class Card
{
    function __construct(
        public readonly ?string $id,
        public readonly string $name,
        public readonly string $number,
        public readonly string $exp,
        public readonly string $ccv
    ) {}
}
