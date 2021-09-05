<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin-panel.categories.main', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin-panel.categories.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        $image_path = $request->file('image')->store('categories');
        $param = $request->all();
        $param['image_path'] = $image_path;
        Category::create($param);

        return redirect('/admin-panel/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Category $category
     */
    public function show(Category $category)
    {
        return view('admin-panel.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Category $category
     */
    public function edit(Category $category)
    {
        return view('admin-panel.categories.form', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
     */
    public function update(Request $request, Category $category)
    {
        $image_path = $request->file('image')->store('categories');
        $param = $request->all();
        $param['image_path'] = $image_path;
        $category->update($param);
        return redirect('/admin-panel/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $category
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/admin-panel/categories');
    }
}
