<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        $this->validate($request, [
            'cat_name' => 'required|string'
        ]);
        $category = new Category();
        $category->cat_name = $request->cat_name;
        $category->save();
        return ['message' => 'okay'];
    }

    public function showCategory()
    {
        $categories = Category::all();
        return response()->json([
            'categories' => $categories,
        ], 200);
    }
}
