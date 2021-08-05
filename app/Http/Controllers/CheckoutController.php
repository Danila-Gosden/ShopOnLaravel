<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    protected function index()
    {
        return view('checkout.index');
    }
}
