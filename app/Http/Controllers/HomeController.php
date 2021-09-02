<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at')->take(12)->get();
        return view('home.main',['products' => $products]);
    }
}
