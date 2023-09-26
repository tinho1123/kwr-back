<?php

namespace App\Services;

use App\Services\BaseServices;
use App\Models\Product;

class ProductServices extends BaseServices
{
    public function __construct() {
        parent::__construct(Product::class);
    }
}
