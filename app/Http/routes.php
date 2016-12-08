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

// 管理后台登陆
Route::get('/admin/login', ['as' => 'admin.login', function () {
    return view('admin.login');
}]);

Route::group(['prefix' => 'admin'], function () {

    // 登陆
    Route::post('/admin/login', 'Admin\AdminController@login', function (){
    });

    // 退出
    Route::get('/admin/logout', 'Admin\AdminController@logout');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    
    Route::resource('/users','Admin\UsersController');
    Route::resource('/post','Admin\PostController');
    Route::resource('/product','Admin\ProductController');
});

