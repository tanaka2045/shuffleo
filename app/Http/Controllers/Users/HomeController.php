<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\User;
use App\TermResult;
use App\Announce;
use Carbon\Carbon;
use Storage;

class HomeController extends Controller

{
  
  public function homeBeforeLogin()
  {
    return view('home_before_login');
  }

  public function userEdit()
  {
    return view('users.user_edit');
  }

  public function homeAccess()
  {
    $extract = Announce::where('public',1)->latest()->take(5)->get();
    
    return view('users.home', ['extract' => $extract]);
  }

  public function userHomeAccess(Request $request)
  {
    $user_id = Auth::id();
    $user = User::find($user_id);
    
    $total_count = TermResult::totalCount($user_id);
    $total_win_rate =TermResult::totalWinRate($user_id);
    
    $current_term_count = TermResult::currentTermCount($user_id);
    $current_count = TermResult::currentCount($user_id);
    $current_win_rate = TermResult::currentWinRate($user_id);
    $residual_count =TermResult::residualCount($user_id);
    
    return view('users.user_home', ['user' => $user, 'total_count' => $total_count,
      'total_win_rate' => $total_win_rate, 'current_term_count' => $current_term_count, 'current_count' => $current_count, 
      'current_win_rate' => $current_win_rate, 'residual_count' => $residual_count
      ]);
  }  

  public function userMatchDetailedAccess(Request $request)
  {
    $user_id = Auth::id();

    return view('users.user_match_detailed', [
      'total_win_count_offence' => TermResult::totalWinCountOffnece($user_id), 
      'total_lose_count_offence' => TermResult::totalLoseCountOffnece($user_id), 
      'total_count_offence' =>TermResult::totalCountOffnece($user_id),
      'total_win_rate_offence' => TermResult::totalWinRateOffnece($user_id),
      'total_win_count_diffence' => TermResult::totalWinCountDiffnece($user_id), 
      'total_lose_count_diffence' => TermResult::totalLoseCountDiffnece($user_id), 
      'total_count_diffence' =>TermResult::totalCountDiffnece($user_id), 
      'total_win_rate_diffence' => TermResult::totalWinRateDiffnece($user_id), 
      'total_win_count' => TermResult::totalWinCount($user_id), 
      'total_lose_count' => TermResult::totalLoseCount($user_id), 
      'total_count' =>TermResult::totalCount($user_id), 
      'total_win_rate' => TermResult::totalWinRate($user_id),
      'current_win_count_offence' => TermResult::currentWinCountOffnece($user_id), 
      'current_lose_count_offence' => TermResult::currentLoseCountOffnece($user_id), 
      'current_count_offence' => TermResult::currentCountOffnece($user_id),
      'current_win_rate_offence' => TermResult::currentWinRateOffnece($user_id),
      'current_win_count_diffence' => TermResult::currentWinCountDiffnece($user_id), 
      'current_lose_count_diffence' => TermResult::currentLoseCountDiffnece($user_id), 
      'current_count_diffence' =>TermResult::currentCountDiffnece($user_id), 
      'current_win_rate_diffence' => TermResult::currentWinRateDiffnece($user_id), 
      'current_win_count' => TermResult::currentWinCount($user_id), 
      'current_lose_count' => TermResult::currentLoseCount($user_id), 
      'current_count' => TermResult::currentCount($user_id), 
      'current_win_rate' => TermResult::currentWinRate($user_id)
      ]);
  }
  
  
}
