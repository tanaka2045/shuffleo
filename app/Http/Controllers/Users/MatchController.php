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
    //select fromの重複チェック
    $select_array = [$request->diffenceLayout1, $request->diffenceLayout2, $request->diffenceLayout3, $request->diffenceLayout4, $request->diffenceLayout5];
    $unique_array = array_unique($select_array);
    //dd($unique_array);
    
    if (array_search(null, $unique_array) == true)
    {
      return redirect()->back()->withInput($request->all)->withErrors('選択されていないカードがあります');
    }elseif(count($unique_array) !== count($select_array)) 
    {
      return redirect()->back()->withInput($request->all)->withErrors('重複選択されているカードがあります');
    }else{
      return redirect('shuffleo/match_diffence')->withInput($request->all);
    }
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
