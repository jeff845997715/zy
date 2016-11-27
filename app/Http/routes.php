<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('admin.demo');
});

//
//Route::resource('article','ArticlesController');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/users','Admin\UsersController');
    Route::resource('/post','Admin\PostController');
    Route::resource('/product','Admin\ProductController');
});