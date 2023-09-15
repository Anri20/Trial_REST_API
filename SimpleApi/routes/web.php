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

Route::get('/books/index', "BookController@index");
Route::get('/books/show/{id}', "BookController@show");
Route::get('/books/store', "BookController@store");
Route::get('/books/update/{id}', "BookController@update");
Route::get('/books/destroy/{id}', "BookController@destroy");
