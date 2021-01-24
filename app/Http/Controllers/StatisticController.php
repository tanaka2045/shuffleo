<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticController extends Controller
{
  public function rankingTotalAccess()
  {
    return view('shuffleout.ranking_total');
  }
  
   public function rankingTermAccess()
  {
    return view('shuffleout.ranking_term');
  }
  
   public function rankingRateAccess()
  {
    return view('shuffleout.ranking_rate');
  }
  
}
