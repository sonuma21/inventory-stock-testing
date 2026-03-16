<?php
namespace App\Actions;

use App\Data\ProductData;
use App\Models\Product;

class StoreProductAction
{
    public function execute (ProductData $dta) : Product
    {
        return Product::create([
            'name' => $dta->name,
            'quantity' => $dta->quantity,
            'low_stock_threshold' => $dta->low_stock_threshold
        ]);
    }
}
