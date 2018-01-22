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
//home page
Route::get('/', "HomeController@index");
Route::get('/cart/content', "CartController@getContent");

Route::post('/cart/add-content', "CartController@addContent");
Route::get('/cart/detail', 'CartController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
