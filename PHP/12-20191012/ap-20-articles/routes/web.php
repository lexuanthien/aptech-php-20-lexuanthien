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

Route::get('/articles', 'ArticleController@index')->name('articles.index');
route::get('/articles/{id}/edit', 'ArticleController@edit')->name('articles.edit');
route::put('/articles/{id}','ArticleController@update')->name('articles.update');
Route::get('/articlers/create', 'ArticleController@create')->name('articles.create');
Route::post('/articles','ArticleController@store')->name('articles.store');
Route::get('/articles/{id}', 'ArticleController@show')->name('articles.show');
Route::delete('/articles/{id}', 'ArticleController@destroy')->name('articles.destroy');



Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::delete('/categories/{id}', 'CategoryController@destroy')->name('categories.destroy');
route::get('/categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');
route::put('/categories/{id}','CategoryController@update')->name('categories.update');
Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
Route::post('/categories','CategoryController@store')->name('categories.store');
Route::get('/categories/{id}', 'CategoryController@show')->name('categories.show');

Route::get('/tableCategoriesEndArticles', function() {
    $dulieu = DB::table('categories')->join('articles','articles.cat_id', '=', 'categories.id')->get();
    return view('dulieu2bang', ['data2table'=> $dulieu]);
});
