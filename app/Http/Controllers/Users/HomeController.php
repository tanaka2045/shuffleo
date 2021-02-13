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

  public function userHomeAccess()
  {
    $user_id = Auth::id();
    $user = User::find($user_id);
    
    $term_result = TermResult::where('user_id',$user_id)->first();
    
    //トータル対戦数の計算
    $total_match_count = $term_result->win_count_offence + $term_result->win_count_diffence + $term_result->lose_count_offence + $term_result->lose_count_diffence;
    //トータル勝率の計算
    //$total_win_rate = ($term_result->win_count_offence + $term_result->win_count_diffence)/$total_match_count;
    
    return view('users.user_home', ['user' => $user, 'term_result' => $term_result, 'total_match_count'=>$total_match_count, 'total_win_rate'=>$total_win_rate]);
  }  
  
}
