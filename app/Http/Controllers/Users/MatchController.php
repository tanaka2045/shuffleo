<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\CardStatus;
use App\MatchResult;

class MatchController extends Controller
{
  public function matchMakeAccess()
  {
    $diffence_users= MatchResult::where('diffence_entry',1)->get();
    
    return view('users.match_make', ['diffence_users' => $diffence_users]);
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
    //リセットボタン押下時の処理
    if ($request->has('reset'))
    {
      return redirect('shuffleo/match_diffence');
    }
    
    //セットボタン押下時の処理
    if ($request->has('set'))
    {
      //select formのエラーチェック
      $select_array = [$request->diffenceLayout1, $request->diffenceLayout2, $request->diffenceLayout3, $request->diffenceLayout4, $request->diffenceLayout5];
      $unique_array = array_unique($select_array);
      //選択されていないカードの有無チェック
      if (array_search(null, $unique_array) == true)
      {
        return redirect()->back()->withInput($request->all)->withErrors('選択されていないカードがあります');
      //重複して選択されているカードの有無チェック
      }elseif(count($unique_array) !== count($select_array)) 
      {
        return redirect()->back()->withInput($request->all)->withErrors('重複選択されているカードがあります');
      //問題ないときの処理 
      }else{
        return redirect('shuffleo/match_diffence')->withInput($request->all);
      }
    }
    
    //登録ボタン押下時の処理
    if ($request->has('entry'))
    {
      $user_id = Auth::id();
      $user = User::find($user_id);
      
      list($diffence_card_point_1, $diffence_card_point_2, $diffence_card_point_3,
      $diffence_card_point_4, $diffence_card_point_5) = CardStatus::diffenceCardStatus($user_id);
     
      //カードNoをカードポイントへ置換、オープンカードをカードナンバーへ置換（int型へ）
      $replace_before = [$request->diffenceLayout1, $request->diffenceLayout2, $request->diffenceLayout3,
        $request->diffenceLayout4, $request->diffenceLayout5, $request->openCard];
      $search = ['DNo1', 'DNo2', 'DNo3', 'DNo4', 'DNo5', 'openCard1', 'openCard2','openCard3','openCard4','openCard5',];
      $replace = [$diffence_card_point_1, $diffence_card_point_2, $diffence_card_point_3, $diffence_card_point_4, $diffence_card_point_5,
        '1', '2', '3', '4', '5'];
      $replace_after =str_replace($search, $replace, $replace_before);
      
      $diffence_entry = new MatchResult;
      $diffence_entry->user_id = $user_id;
      $diffence_entry->diffence_nickname = User::find($user_id)->nickname;
      $diffence_entry->diffence_layout_1 = $replace_after[0];
      $diffence_entry->diffence_layout_2 = $replace_after[1];
      $diffence_entry->diffence_layout_3 = $replace_after[2];
      $diffence_entry->diffence_layout_4 = $replace_after[3];
      $diffence_entry->diffence_layout_5 = $replace_after[4];
      $diffence_entry->open_card = $replace_after[5];
      $diffence_entry->diffence_entry = 1;
      $diffence_entry->save();

      return redirect('shuffleo/match_make');
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
