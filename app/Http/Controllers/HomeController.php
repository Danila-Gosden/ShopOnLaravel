<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected function index()
    {
        $products = Product::all();
        dd($products);
        return view('home.index');
    }
}
