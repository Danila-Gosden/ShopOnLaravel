<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    protected function index()
    {
        return view('categories.index');
    }
}
