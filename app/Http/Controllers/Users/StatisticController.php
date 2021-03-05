<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\TermResult;

class StatisticController extends Controller
{
   public function rankingRateAccess()
  {
    $ranks = User::orderBy('elorate', 'desc')->take(20)->get();
    $rank_counter = 0; //viewにて1～3位のテーブルカラーを変更するために使用する変数
    return view('users.ranking_rate', ['ranks' => $ranks, 'rank_counter' => $rank_counter]);
  }
  
   public function rankingTermAccess()
  {
    $ranks = User::orderBy('best_term_win_rate', 'desc')->take(20)->get();
    $rank_counter = 0; //viewにて1～3位のテーブルカラーを変更するために使用する変数
    return view('users.ranking_term', ['ranks' => $ranks, 'rank_counter' => $rank_counter]);
  }
  
  public function rankingTotalAccess()
  {
    $ranks = User::whereHas('termResults', function($query){
      $query->where('term_count','>',2);})->orderBy('total_win_rate', 'desc')->take(20)->get();
    $rank_counter = 0; //viewにて1～3位のテーブルカラーを変更するために使用する変数
    return view('users.ranking_total', ['ranks' => $ranks, 'rank_counter' => $rank_counter]);
  }
  
}
