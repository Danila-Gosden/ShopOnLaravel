<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected function index($categoryName)
    {
        $product = Product::where('categoryName',$categoryName)->all();
        return view('product.index', ['product' => $product]);
    }
}
