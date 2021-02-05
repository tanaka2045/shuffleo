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


Route::get('shuffleo/home_bef_login', 'HomeController@test9');
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


Route::group(['prefix' => 'admin', 'middleware' => 'guest:admin'], function() {
  Route::get('/', function () {
    return view('admin.welcome');
  });
  Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
  Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.login');
  /*Route::get('register', 'Admin\Auth\RegisterController@showRegisterForm')->name('admin.register');
  Route::post('register', 'Admin\Auth\RegisterController@register')->name('admin.register');             //登録はできないようにする
  Route::get('password/rest', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');//このアクroute::listでエラーになる、アクションがどこにあるが不明 
  */
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function(){
    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
    Route::get('home', 'Admin\HomeController@index')->name('admin.home');
    
    Route::get('announce_create', 'Admin\AnnounceAdminController@announceAdd');
    Route::post('announce_create', 'Admin\AnnounceAdminController@announceCreate');
    
    Route::get('announce_edit', 'Admin\AnnounceAdminController@announceEdit');
    Route::post('announce_edit', 'Admin\AnnounceAdminController@announceUpdate');
    
    Route::get('announce_index', 'Admin\AnnounceAdminController@announceIndex');
});
