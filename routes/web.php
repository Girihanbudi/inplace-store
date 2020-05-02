<?php

use App\Http\Controllers\CartController;
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

Route::get('/', 'ProductController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shop', 'ProductController@shopProducts');
Route::get('/shop/type?={name}', 'ProductController@productByType');
Route::get('/shop/category?={name}', 'ProductController@productByCategory');

Route::get('/product/{id}', 'ProductController@showProduct');

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/blog', function(){
    return view('blog');
});

Route::get('/blog/id', function(){
    return view('blogSingle');
});

Route::post('/cart/addproduct', 'CartController@addToCart');
Route::get('/cart', 'CartController@showCart');
Route::get('/cart/discard/cartID={cart_id}&quantity={quantity}&infoID={info_id}', 'CartController@discard');

Route::get('/admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('/admin/profile', function(){
    return view('adminProfile');
});

Route::get('/admin/orders', 'TransactionController@getTransaction');

Route::get('/admin/products', 'ProductController@getProducts');
Route::get('/admin/product/add', 'ProductController@getCategoryAndType');

Route::get('/admin/users', 'UserController@getUsers');
Route::get('/admin/user/add', function(){
    return view('adminUserAdd');
});

