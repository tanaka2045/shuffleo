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
Route::get('shuffleoWoNav/', 'HomeController@test8');

Route::get('shuffleo/home_bef_login', 'HomeController@test9');
Route::get('shuffleo/user_register_1', 'HomeController@test10');
Route::get('shuffleo/user_register_2', 'HomeController@test11');
Route::get('shuffleo/login', 'HomeController@test12');
Route::get('shuffleo/zzztest', 'HomeController@test99');

Route::group(['prefix' => 'shuffleo', 'namespace' => 'Users', 'middleware' => 'auth'], function() {
Route::get('home', 'HomeController@homeAccess');
Route::get('user_edit', 'HomeController@userEdit');
Route::get('user_home', 'HomeController@userHomeAccess');
Route::get('match_make', 'MatchController@matchMakeAccess');
Route::get('match_diffence', 'MatchController@matchDiffenceAccess');
Route::get('match_offence', 'MatchController@matchOffenceAccess');
Route::get('match_result', 'MatchController@matchResultAccess');
Route::get('match_history', 'MatchController@matchHistoryAccess');
Route::get('ranking_total', 'StatisticController@rankingTotalAccess');
Route::get('ranking_term', 'StatisticController@rankingTermAccess');
Route::get('ranking_rate', 'StatisticController@rankingRateAccess');
Route::get('other_user', 'OtherUserController@otherUserAccess');
Route::get('announce', 'HelpMessageController@announceAccess');
Route::get('tutorial', 'HelpMessageController@tutorialAccess');
Route::get('policy', 'HelpMessageController@policyAccess');
Route::get('inquiry', 'InquiryController@inquiryAccess');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


