<?php

//ĐĂNG NHẬP TRANG ADMIN
Route::get('admin/login', 'LoginAdminController@getLoginAdmin')->name('login.input');
Route::post('admin/login', 'LoginAdminController@postLoginAdmin')->name('login.store');

//ĐĂNG KÝ TRANG ADMIN
Route::get('admin/register', 'LoginAdminController@getRegisterAdmin')->name('register.input');
Route::post('admin/register', 'LoginAdminController@postRegisterAdmin')->name('register.store');

//ĐĂNG XUẤT TRANG ADMIN
Route::get('admin/logout', 'LoginAdminController@LogoutAdmin')->name('logout');

// QUẢN LÝ TRANG ADMIN
//  'middleware' => 'LoginPageAdmin'
Route::group(['prefix' => 'admin', 'middleware'=> 'LoginPageAdmin'], function () {
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('categories', 'CategoryController');
    Route::resource('posts', 'PostController');
    Route::resource('comments', 'CommentController');
});

//TRANG WEB
Route::get('/', 'WebsiteController@TrangChu')->name('home');

Route::get('trangchu', 'WebsiteController@TrangChu')->name('trangchu');
Route::get('tintuc/{slug}.html', 'WebsiteController@TinTuc')->name('news');
Route::get('xemchitiet/{slug}.html', 'WebsiteController@XemChiTiet')->name('xembaiviet');
Route::get('tinmoinhat.html', 'WebsiteController@MoiNhat')->name('moinhat');

//ĐĂNG NHẬP WEBSITE
Route::get('login', 'WebsiteController@getLogin')->name('login');
Route::post('login', 'WebsiteController@postLogin')->name('login.post');

//ĐĂNG KÝ VÀO TRANG WEBSITE
Route::get('register', 'WebsiteController@getRegister')->name('register');
Route::post('register', 'WebsiteController@postRegister')->name('register.post');

//ĐĂNG XUẤT
Route::get('logout', 'WebsiteController@Logout')->name('dangxuat');

//TÌM KIẾM
Route::get('timkiem', 'WebsiteController@TimKiem')->name('timkiem');

//BÌNH LUẬN
Route::post('comment/{id}', 'CommentController@store')->name('comment');

Route::get('baitap', function() {
 $d = DB::table('users')->pluck('name');
 echo $d;
});




