<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAllCategory()
    {
        $categories = Category::all();
        return view('admin.foodCategory.list',compact('categories'));
    }
}
