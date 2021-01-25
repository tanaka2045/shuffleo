<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MatchController extends Controller
{
  public function matchMakeAccess()
  {
    return view('shuffleout.match_make');
  }
  
  public function matchDiffenceAccess()
  {
    return view('shuffleout.match_diffence');
  }
    
  public function matchOffenceAccess()
  {
    return view('shuffleout.match_offence');
  }
  
  public function matchResultAccess()
  {
    return view('shuffleout.match_result');
  }
  
  public function matchHistoryAccess()
  {
    return view('shuffleout.match_history');
  }
}
