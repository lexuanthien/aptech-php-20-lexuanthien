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


Route::get('trangchu', function() {
    return view('trangchu');
});

Route::get('master', function() {
    return view('admin.master');
});

Route::get('admin/login', 'DangNhapAdminController@getLoginAdmin')->name('login.input');
Route::post('admin/login', 'DangNhapAdminController@postLoginAdmin')->name('login.store');

Route::group(['prefix'=>'admin'], function() {
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('categories', 'CategoryController');
    Route::resource('posts', 'PostController');
    Route::resource('comments', 'CommentController');
});
