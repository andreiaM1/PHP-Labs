<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::resource('/admin-products', 'Admin\ProductsController')->middleware('role:admin');
Route::get('/buyer-dashboard', 'Buyer\ProductsController@index')->middleware('role:buyer');
Route::get('/', 'ProductCategoryController@index');
Route::get('/home', 'ProductCategoryController@index');
Route::get('add-to-cart/{id}', 'Buyer\ProductsController@addToCart')->middleware('role:buyer');
Route::patch('update-cart', 'Buyer\ProductsCOntroller@update')->middleware('role:buyer');
Route::get('remove-from-cart/{id}','Buyer\ProductsController@remove')->name('remove-from-cart')->middleware('role:buyer');
Route::get('cart', 'Buyer\ProductsController@cart')->name('cart')->middleware('role:buyer');
Route::get('remove-all-from-cart', 'Buyer\ProductsController@removeAll')->name('remove-all-from-cart')->middleware('role:buyer');
Route::get('orders', 'Buyer\OrdersController@index')->name('orders')->middleware('role:buyer');
Route::get('place-order/{totalPrice}/{totalQuantity}', 'Buyer\OrdersController@placeOrder')->name('place-order')->middleware('role:buyer');
Route::get('product/{id}', 'Buyer\ProductsController@showProduct')->middleware('role:buyer');
Route::resource('admin-orders', 'Admin\OrdersController')->middleware('role:admin');


