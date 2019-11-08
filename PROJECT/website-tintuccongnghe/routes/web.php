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

Route::get('master', function() {
    return view('admin.master');
});

Route::get('admin/login', 'LoginAdminController@getLoginAdmin')->name('login.input');
Route::post('admin/login', 'LoginAdminController@postLoginAdmin')->name('login.store');

Route::group(['prefix'=>'admin'], function() {
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('categories', 'CategoryController');
    Route::resource('posts', 'PostController');
    Route::resource('comments', 'CommentController');
});

Route::get('trangchu', 'HomeController@TrangChu')->name('trangchu');
Route::get('tintuc/{id}.html','HomeController@TinTuc')->name('tintuc');
Route::get('xemchitiet/{id}.html','HomeController@XemChiTiet')->name('xemchitiet');

Route::get('home', 'WebsiteController@TrangChu')->name('trangchu');
Route::get('news/{id}.html','WebsiteController@TinTuc')->name('news');
Route::get('show/{id}.html','WebsiteController@XemChiTiet')->name('xembaiviet');

Route::get('login', 'WebsiteController@Login')->name('login');
Route::get('register', 'WebsiteController@Register')->name('register');
