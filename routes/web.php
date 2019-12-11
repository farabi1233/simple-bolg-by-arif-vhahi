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

Route::get('/','Blog\HomeController@index' );
Route::get('/insert','Blog\HomeController@input' );
Route::get('/blog/show_blog/{id}','Blog\HomeController@show_blog' );
Route::get('/admin_access','Blog\HomeController@admin_acess' );
//Route::post('/blog/input','Blog\HomeController@input' );
