<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    protected function index()
    {
        return view('cart.index');
    }
}
