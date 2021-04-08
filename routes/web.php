<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/post', 'PostController@post_all');

// Route::get('/{anypayh}', 'HomeController@index')->where('path', '.*');

Route::group(['middleware' => ['auth']], function () {
    // ============= category route ================== 
    Route::post('/add-category', 'CategoryController@addCategory');
    Route::get('/show-category', 'CategoryController@showCategory');
    Route::get('/delete-category/{id}', 'CategoryController@deleteCategory');
    Route::get('/edit-category/{id}', 'CategoryController@editCategory');
    Route::post('/update-category/{id}', 'CategoryController@updateCategory');

    // ================ post route ====================== 
    Route::get('/show-post', 'PostController@showPost');
    Route::post('/save-post', 'PostController@savePost');
    Route::get('/delete-post/{id}', 'PostController@deletePost');
    Route::get('/edit-post/{id}', 'PostController@editPost');
    Route::post('/update-post/{id}', 'PostController@updatePost');
});
