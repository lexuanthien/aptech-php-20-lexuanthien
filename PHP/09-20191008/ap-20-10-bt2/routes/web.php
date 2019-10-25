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

Route::get('/bangusers', 'UsersController@dulieuusers');
//Route::get('/bangusers', 'UsersController@dulieuusers')->name('url-user'); : có thể dùng lệnh như thế này để đặt tên cho route rồi điền vào action ở trang khác, chỗ đó để như sau: {{route('url-user')}}


Route::get('/hienthidulieunguoidung', 'UserssController@index');
Route::get('/hienthidulieunguoidung/create', 'UserssController@create'); //đưa dòng này lên trên dòng vào show vì nó chạy {$i} trước create sẽ vào show
Route::get('/hienthidulieunguoidung/{id}/edit', 'UserssController@edit');
Route::put('/hienthidulieunguoidung/{id}', 'UserssController@update');

Route::get('/hienthidulieunguoidung/{id}', 'UserssController@show')->name('user.show'); //ví dụ đặt name cho route có làm mẫu ở phần nút Show trong view index
Route::delete('/hienthidulieunguoidung/{id}', 'UserssController@destroy');
Route::post('/hienthidulieunguoidung', 'UserssController@store');

//index đi một mình, show đi một mình, destroy đi một mình
// create và store đi chung, edit và update đi chung