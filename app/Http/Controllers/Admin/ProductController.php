<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $products = Product::all();
        return view('admin-panel.products.main', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin-panel.products.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(ProductRequest $request)
    {
        $param = $request->all();
        unset($param['image_path']);
        if ($request->has('image')) {

            $image_path = $request->file('image')->store('products');
            $param['image_path'] = $image_path;
        }
        Product::create($param);
        return redirect('/admin-panel/products');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     */
    public function show(Product $product)
    {
        return view('admin-panel.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin-panel.products.form', compact(['product', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     */
    public function update(ProductRequest $request, Product $product)
    {
        $param = $request->all();
        unset($param['image_path']);
        if ($request->has('image')) {
            Storage::delete($product->image_path);
            $image_path = $request->file('image')->store('products');
            $param['image_path'] = $image_path;
        }
        $product->update($param);
        return redirect('/admin-panel/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/admin-panel/products');
    }
}
