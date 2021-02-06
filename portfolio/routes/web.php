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
    return view('top');
});
Route::get('/home', 'ContentController@index');
Route::get('/search', 'ContentController@search');
Route::get('/detail', 'ContentController@show')->name('detail');
Route::get('/detail/{id}', 'ContentController@show');