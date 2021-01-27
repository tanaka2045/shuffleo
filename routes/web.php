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


Route::get('shuffleo/user_edit', 'HomeController@userEdit');
Route::get('shuffleo/home', 'HomeController@homeAccess');
Route::get('shuffleo/user_home', 'HomeController@userHomeAccess');
Route::get('shuffleo/match_make', 'MatchController@matchMakeAccess');
Route::get('shuffleo/match_diffence', 'MatchController@matchDiffenceAccess');
Route::get('shuffleo/match_offence', 'MatchController@matchOffenceAccess');
Route::get('shuffleo/match_result', 'MatchController@matchResultAccess');
Route::get('shuffleo/match_history', 'MatchController@matchHistoryAccess');
Route::get('shuffleo/ranking_total', 'StatisticController@rankingTotalAccess');
Route::get('shuffleo/ranking_term', 'StatisticController@rankingTermAccess');
Route::get('shuffleo/ranking_rate', 'StatisticController@rankingRateAccess');
Route::get('shuffleo/other_user', 'OtherUserController@otherUserAccess');
Route::get('shuffleo/announce', 'HelpMessageController@announceAccess');
Route::get('shuffleo/tutorial', 'HelpMessageController@tutorialAccess');
Route::get('shuffleo/policy', 'HelpMessageController@policyAccess');
Route::get('shuffleo/inquiry', 'InquiryController@inquiryAccess');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
