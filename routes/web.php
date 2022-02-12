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

Auth::routes();
Route::get('/', 'productController@index')->name('products.index');
//Route::resource('products', 'productController')->only(['show']);
Route::resource('products', 'productController')->except(['index'])->middleware('auth');
Route::post('/products/download/{product}', 'productController@download')->name('products.download');
Route::get('/users/{user}', 'userController@show')->name('users.show')->middleware('auth');
Route::get('/tags/{name}', 'TagController@show')->name('tags.show');


