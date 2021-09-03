<?php

namespace App\Http\Controllers;

use App\Models\Product;


class ProductController extends Controller
{
    /**
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
     */

    /**
     * @param $category_alias
     * @param $product_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($category_alias,$product_id)
    {
        $product = Product::findOrFail($product_id);
        return view('product.main', compact('product'));
    }
}
