<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function post_all()
  {
    // $posts = Post::with('category', 'user')->get();

    // return $posts;

    $category = Category::with('posts')->get();
    return $category;
  }

  public function showPost()
  {
    $posts = Post::all();
    return response()->json([
      'posts' => $posts
    ], 200);
  }
}
