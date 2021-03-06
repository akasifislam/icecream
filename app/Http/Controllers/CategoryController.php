<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        $this->validate($request, [
            'cat_name' => 'required|string|unique:categories'
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

    public function deleteCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->delete();
    }

    public function editCategory($id)
    {
        $category = Category::find($id);
        return response()->json([
            'category' => $category
        ], 200);
    }
    public function updateCategory(Request $request, $id)
    {
        $this->validate($request, [
            'cat_name' => 'required|string'
        ]);
        $category = Category::find($id);
        $category->cat_name = $request->cat_name;
        $category->save();
        return ['message' => 'okay'];
    }
}
