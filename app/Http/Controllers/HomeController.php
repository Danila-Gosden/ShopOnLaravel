<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected function index()
    {
        $products = Product::orderBy('created_at')->take(8)->get();

        return view('home.index', ['products' => $products]);
    }
}
