<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post_all()
    {
      return  $posts = Post::all();
    }
}
