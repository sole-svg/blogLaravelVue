<?php

use Illuminate\Support\Facades\Route;

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



Route::get('home', function () {
    return view("home");
})->name("home");




/*Route::get('post', 'PostCategoryController@index');*/
Route::resource('dashboard/post', 'dashboard\PostController');
Route::post('dashboard/post/{post}/image', 'dashboard\PostController@image')->name('post.image');

Route::resource('dashboard/category', 'dashboard\categoryController');
Route::resource('dashboard/user', 'dashboard\UserController');

Route::get('/', 'web\WebController@index')->name("index");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
