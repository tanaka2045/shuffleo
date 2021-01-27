<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MatchController extends Controller
{
  public function matchMakeAccess()
  {
    return view('users.match_make');
  }
  
  public function matchDiffenceAccess()
  {
    return view('users.match_diffence');
  }
    
  public function matchOffenceAccess()
  {
    return view('users.match_offence');
  }
  
  public function matchResultAccess()
  {
    return view('users.match_result');
  }
  
  public function matchHistoryAccess()
  {
    return view('users.match_history');
  }
}
