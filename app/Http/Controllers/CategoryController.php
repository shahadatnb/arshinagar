<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.index');
    }

    public function show(Category $category)
    {
        //
    }
    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
