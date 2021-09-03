<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index($category_alias,$product_id)
    {
        $product = Product::findOrFail($product_id);
        return view('product.main', compact('product'));
    }
}
