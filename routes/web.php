<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/diary', 'DiaryController@index')->name('diary.list'); // URLでビューを呼び出すように記述
Route::get('/diary/create', 'DiaryController@create')->name('diary.new'); // URLで新規投稿を呼び出す
Route::get('/diary/{id}', 'DiaryController@show')->name('diary.show'); // URLで詳細ページを呼び出す
Route::delete('/diary/{id}', 'DiaryController@destroy')->name('diary.delete');