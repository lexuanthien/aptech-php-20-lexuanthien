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

Route::get('/artitles', 'ArtitlesController@Artitles_dulieu');
Route::get('/dulieuhaibang', function() {
    $dulieu = DB::table('categories')->join('artitles','artitles.category_id', '=', 'categories.id')->get();
    return view('data2table', ['data'=> $dulieu]);
});
