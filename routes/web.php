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

Route::get('shuffleo', 'HomeController@test');
Route::get('shuffleo/user_edit', 'HomeController@test1');
Route::get('shuffleo/announce', 'HomeController@test2');
