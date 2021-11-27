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

    public function productList()
    {
        $product_lists = ['cat', 'dog', 'monkey'];
        return view('product', ['products' => $product_lists]);
    }

    public function productDetail($product_id)
    {
        return "This is Product for Product Id: " . $product_id;
    }
}
