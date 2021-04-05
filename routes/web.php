<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/post', 'PostController@post_all');

// Route::get('/{anypayh}', 'HomeController@index')->where('path', '.*');

// ============= category route ================== 

Route::post('/add-category', 'CategoryController@addCategory');
Route::get('/show-category', 'CategoryController@showCategory');
Route::get('/delete-category/{id}', 'CategoryController@deleteCategory');
Route::get('/edit-category/{id}', 'CategoryController@editCategory');
Route::post('/update-category/{id}', 'CategoryController@updateCategory');

// ================ post route ====================== 
Route::get('/show-post', 'PostController@showPost');
Route::post('/save-post', 'PostController@savePost');
