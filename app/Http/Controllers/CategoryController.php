<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected function index($categoryName)
    {
        $products = Product::where('category_name', $categoryName)->get();
        return view('categories.index', ['products' => $products]);
    }
}
