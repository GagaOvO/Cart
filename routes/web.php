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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('/add_product','ProductController@store');
Route::get('/index','ProductController@index');

Route::get('/AddToCart/{id}',[
		'uses' => 'ProductController@AddToCart',
		'as' =>'AddToCart'
	]);
Route::get('/shopping-cart',[
		'uses' => 'ProductController@getCart',
		'as' =>'shopping-cart'
	]);