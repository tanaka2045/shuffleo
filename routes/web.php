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
Route::get('shuffleo/home', 'HomeController@test3');
Route::get('shuffleo/user_home', 'HomeController@test4');
Route::get('shuffleo/ranking', 'HomeController@test5');
Route::get('shuffleo/ranking_term', 'HomeController@test6');
Route::get('shuffleo/ranking_rate', 'HomeController@test7');
Route::get('shuffleoWoNav/', 'HomeController@test8');
Route::get('shuffleo/home_bef_login', 'HomeController@test9');
Route::get('shuffleo/user_register_1', 'HomeController@test10');
Route::get('shuffleo/user_register_2', 'HomeController@test11');
Route::get('shuffleo/login', 'HomeController@test12');
Route::get('shuffleo/match_result', 'HomeController@test13');
Route::get('shuffleo/match_diffence', 'HomeController@test14');
Route::get('shuffleo/user_home_test', 'HomeController@test15');