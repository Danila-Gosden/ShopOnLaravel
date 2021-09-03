<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.main',['categories' => $categories]);
    }
    public function category($category_alias){
        $category = Category::where('alias', $category_alias)->firstOrFail();
        return view('categories.single-category', compact('category'));
    }
}
