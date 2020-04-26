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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shop', function(){
    return view('shop');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/blog', function(){
    return view('blog');
});

Route::get('/blog/id', function(){
    return view('blogSingle');
});

Route::get('/admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('/admin/profile', function(){
    return view('adminProfile');
});

Route::get('/admin/orders', 'TransactionController@getTransaction');

Route::get('/admin/products', 'ProductController@getProducts');
Route::get('/admin/product/add', function(){
    return view('adminProductAdd');
});

Route::get('/admin/users', 'UserController@getUsers');
Route::get('/admin/user/add', function(){
    return view('adminUserAdd');
});