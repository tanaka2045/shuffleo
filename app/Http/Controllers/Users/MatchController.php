<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\CardStatus;

class MatchController extends Controller
{
  public function matchMakeAccess()
  {
    return view('users.match_make');
  }
  
  public function matchDiffenceAccess()
  {
    $user_id = Auth::id();
    list($diffence_card_point_1, $diffence_card_point_2, $diffence_card_point_3,
      $diffence_card_point_4, $diffence_card_point_5) = CardStatus::diffenceCardStatus($user_id);
    
    return view('users.match_diffence', [
      'diffence_card_point_1' => $diffence_card_point_1,
      'diffence_card_point_2' => $diffence_card_point_2,
      'diffence_card_point_3' => $diffence_card_point_3,
      'diffence_card_point_4' => $diffence_card_point_4,
      'diffence_card_point_5' => $diffence_card_point_5,
    ]);
  }
  
  public function matchDiffenceLayout(Request $request)
  {
    $test = $request->session()->all();
    dd($test);
    return redirect('shuffleo/match_diffence');
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
