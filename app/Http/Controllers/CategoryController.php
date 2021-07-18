<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function getAllCategory()
    {
        $categories = Category::paginate(5);
        return view('admin.foodCategory.list', compact('categories'));
    }

    public function addCategory()
    {
        return view('admin.foodCategory.add');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();
        $message = "Add new category success";
        return redirect()->route('category.list')->with('success', 'message')->with('success', 'Add Category Success !');
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.foodCategory.edit', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->save();
        return redirect()->route('category.list')->with('success', 'Update Category Success');
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.list');
    }

    public function searchCategory(Request $request)
    {
        $keyword = $request->input('search');
        $categories = Category::where('name', 'LIKE', '%' . $keyword . '%')->paginate(3);
        return view('admin.foodCategory.list', compact('categories'));
    }
}
