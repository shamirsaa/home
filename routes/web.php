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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ProductosController@index');
 
Route::get('cart', 'ProductosController@cart');
 
Route::get('add-to-cart/{id}', 'ProductosController@addToCart');

Route::patch('update-cart', 'ProductosController@update');
 
Route::delete('remove-from-cart', 'ProductosController@remove');

// Route::resource('productos', 'ProductosController');