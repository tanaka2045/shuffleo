<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class StatisticController extends Controller
{
   public function rankingRateAccess()
  {
    $ranks = User::orderBy('elorate', 'desc')->take(20)->get();
    $rank_counter = 0;
    return view('users.ranking_rate', ['ranks' => $ranks, 'rank_counter' => $rank_counter]);
  }
  
   public function rankingTermAccess()
  {
    $ranks = User::orderBy('best_term_win_rate', 'desc')->take(20)->get();
    $rank_counter = 0;
    return view('users.ranking_term', ['ranks' => $ranks, 'rank_counter' => $rank_counter]);
  }
  
  public function rankingTotalAccess()
  {
    return view('users.ranking_total');
  }
  
  
}
