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

//Route::get('/login', 'Auth\AuthController@getLogin');
Route::get('/login', array('as' => 'login', 'uses' => 'Auth\AuthController@getLogin'));
Route::post('/login', 'Auth\AuthController@postLogin');

Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');

Route::get('/logout', 'Auth\AuthController@getLogout');

Route::group(['middleware' => 'home'], function () {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/index', function () {
        return view('index');
    });
    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/feedback', function () {
        return view('feedback');
    });
    Route::get('/profile', function () {
        return view('profile');
    });
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

