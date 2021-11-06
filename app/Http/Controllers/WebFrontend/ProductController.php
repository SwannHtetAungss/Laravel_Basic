<?php

namespace App\Http\Controllers\WebFrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productPage($product_id, $shop_id)
    {
        return "This is Product page for product id " . $product_id . "shop id is " . $shop_id;
    }
}
