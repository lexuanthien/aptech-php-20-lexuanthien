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
Route::resource('users', 'UserController'); //lệnh này tạo ra các route cụ thể, sử dụng php artisan route:list để xem các route cụ thể được tạo ra, tên đường dẫn là tên trong name mỗi route (users-> users.index còn user-> user.index)