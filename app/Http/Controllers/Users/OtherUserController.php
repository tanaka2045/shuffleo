<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\TermResult;

class OtherUserController extends Controller
{
  public function otherUserAccess($id)
  {
    $user_id = User::find($id)->id;
    $user = User::find($id);
    $total_count = TermResult::totalCount($user_id);
    $total_win_rate =TermResult::totalWinRate($user_id);
    
    $current_term_count = TermResult::currentTermCount($user_id);
    $current_count = TermResult::currentCount($user_id);
    $current_win_rate = TermResult::currentWinRate($user_id);
    $residual_count =TermResult::residualCount($user_id);
    
    return view('users.other_user', ['user'=>$user, 'total_count' => $total_count,
      'total_win_rate' => $total_win_rate, 'current_term_count' => $current_term_count, 
      'current_count' => $current_count, 'current_win_rate' => $current_win_rate, 
      'residual_count' => $residual_count]);
  }
}
