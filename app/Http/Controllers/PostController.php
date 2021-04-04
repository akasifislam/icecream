<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function post_all()
  {
    $category = Category::with('posts')->get();
    return $category;
  }

  public function showPost()
  {
    $posts = Post::with('user', 'category')->get();
    return response()->json([
      'posts' => $posts
    ], 200);
  }
}
