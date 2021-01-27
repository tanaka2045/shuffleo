<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticController extends Controller
{
  public function rankingTotalAccess()
  {
    return view('users.ranking_total');
  }
  
   public function rankingTermAccess()
  {
    return view('users.ranking_term');
  }
  
   public function rankingRateAccess()
  {
    return view('users.ranking_rate');
  }
  
}
