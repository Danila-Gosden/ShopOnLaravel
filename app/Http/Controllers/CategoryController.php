<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected function index(Request $request, $categoryName)
    {
        $products = Product::where('category_name', $categoryName)->get();
        if (isset($request->orderBy)) {
            switch ($request->orderBy) {
                default:
                    $products = Product::where('category_name', $categoryName)->get();
                    break;
                case 'price-hight-low':
                    $products = Product::where('category_name', $categoryName)->orderBy('current_price')->get();
                    break;
                case 'price-low-hight':
                    $products = Product::where('category_name', $categoryName)->orderBy('current_price')->get();

                    break;
                case 'name-a-z':
                    $products = Product::where('category_name', $categoryName)->orderBy('product_name')->get();
                    break;
                case 'name-z-a':
                    $products = Product::where('category_name', $categoryName)->orderBy('product_name')->get();
                    break;
            }
            return view('ajax.order-by', ['products' => $products])->render();

        }
        return view('categories.index', ['products' => $products]);
    }
}
