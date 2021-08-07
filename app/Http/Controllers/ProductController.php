<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected function index($categoryName, $productId)
    {
        $product = Product::where('id', $productId)->first();
        if ($product->in_stock == 0) {
            $in_stock = 'Out Of Stock';
        } else {
            $in_stock = 'In Stock';
        }
        return view('product.index', ['product' => $product, 'inStock' => $in_stock]);
    }
}
