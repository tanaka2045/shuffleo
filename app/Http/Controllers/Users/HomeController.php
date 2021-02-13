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
    
    //トータル戦績の計算結果
    list($total_match_count, $total_win_rate) = TermResult::totalMatchCalc($user_id);
    
    //最新ターム戦績の計算結果
    list($current_match_count, $current_win_rate, $residual_match_count) = TermResult::currentMatchCalc($user_id);
    
    return view('users.user_home', ['user' => $user, 'total_match_count' => $total_match_count,
      'total_win_rate' => $total_win_rate, 'current_match_count' => $current_match_count, 
      'current_win_rate' => $current_win_rate, 'residual_match_count' => $residual_match_count]);
  }  
  
}
