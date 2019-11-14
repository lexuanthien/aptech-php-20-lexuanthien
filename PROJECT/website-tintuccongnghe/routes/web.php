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

Route::get('master', function () {
    return view('admin.master');
});

Route::get('admin/login', 'LoginAdminController@getLoginAdmin')->name('login.input');
Route::post('admin/login', 'LoginAdminController@postLoginAdmin')->name('login.store');

Route::get('admin/register', 'LoginAdminController@getRegisterAdmin')->name('register.input');
Route::post('admin/register', 'LoginAdminController@postRegisterAdmin')->name('register.store');

Route::get('admin/logout', 'LoginAdminController@LogoutAdmin')->name('logout');

//  'middleware' => 'LoginPageAdmin'

Route::group(['prefix' => 'admin', 'middleware'=> 'LoginPageAdmin'], function () {
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('categories', 'CategoryController');
    Route::resource('posts', 'PostController');
    Route::resource('comments', 'CommentController');
});

Route::get('trangchu', 'HomeController@TrangChu')->name('trang_chu');
Route::get('tintuc/{id}.html', 'HomeController@TinTuc')->name('tintuc');
Route::get('xemchitiet/{id}.html', 'HomeController@XemChiTiet')->name('xemchitiet');

Route::get('home', 'WebsiteController@TrangChu')->name('trangchu');
Route::get('news/{slug}.html', 'WebsiteController@TinTuc')->name('news');
Route::get('show/{slug}.html', 'WebsiteController@XemChiTiet')->name('xembaiviet');

Route::get('tinmoinhat', 'WebsiteController@MoiNhat')->name('moinhat');


Route::get('login', 'WebsiteController@getLogin')->name('login');
Route::post('login', 'WebsiteController@postLogin')->name('login.post');
Route::get('logout', 'WebsiteController@Logout')->name('dangxuat');

Route::get('register', 'WebsiteController@getRegister')->name('register');
Route::post('register', 'WebsiteController@postRegister')->name('register.post');

Route::get('timkiem', 'WebsiteController@TimKiem')->name('timkiem');

Route::post('comment/{id}', 'CommentController@store')->name('comment');




