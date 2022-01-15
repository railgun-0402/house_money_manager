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

// Top画面
Route::get('/', function () {
    return view('top');  
});

Auth::routes();

Route::get('/useFunc/useInfo', 'useController@useInfo'); // 使用金入力画面

//Route::get('/', 'HomeController@index')->name('welcome'); // メイン画面
