<?php
namespace App\Data;

final class ProductData
{
    public function __construct(
        public readonly string $name,
        public readonly int $quantity,
        public readonly int $low_stock_threshold
    )
    {}
}
