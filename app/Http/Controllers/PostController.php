<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  public function post_all()
  {
    $category = Category::with('posts')->get();
    return $category;
  }

  public function showPost()
  {
    $posts = Post::with('user', 'category')->orderBy('id', 'DESC')->get();
    return response()->json([
      'posts' => $posts
    ], 200);
  }
  public function savePost(Request $request)
  {
    $strpos = strpos($request->photo, ';');
    $sub = substr($request->photo, 0, $strpos);
    $explode = explode('/', $sub)[1];
    $name = time() . "." . $explode;
    $img = Image::make($request->photo)->resize(300, 200);
    $upload_path = public_path() . "/uploadimage/";
    $img->save($upload_path . $name);
    $post = new post();
    $post->title = $request->title;
    $post->description = $request->description;
    $post->cat_id = $request->cat_id;
    $post->user_id = Auth::user()->id;
    $post->photo = $name;
    $post->save();
  }

  public function deletePost($id)
  {
    $post = Post::find($id);
    $img_path = public_path() . "/uploadimage/";
    $img = $img_path . $post->photo;
    if (file_exists($img)) {
      @unlink($img);
    }
    $post->delete();
  }
  public function editPost($id)
  {
    $post = Post::find($id);
    return response()->json([
      'post' => $post
    ], 200);
  }
  public function updatePost(Request $request, $id)
  {
    $post = Post::find($id);

    if ($request->photo != $post->photo) {
      $strpos = strpos($request->photo, ';');
      $sub = substr($request->photo, 0, $strpos);
      $explode = explode('/', $sub)[1];
      $name = time() . "." . $explode;
      $img = Image::make($request->photo)->resize(300, 200);
      $upload_path = public_path() . "/uploadimage/";
      $image = $upload_path . $post->photo;
      $img->save($upload_path . $name);
      if (file_exists($image)) {
        @unlink($image);
      }
    } else {
      $name = $post->photo;
    }
    $post->title = $request->title;
    $post->description = $request->description;
    $post->cat_id = $request->cat_id;
    $post->user_id = Auth::user()->id;
    $post->photo = $name;
    $post->save();
  }
}
