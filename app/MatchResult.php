<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\TermResult;
use App\CardStatus;
use Carbon\Carbon;

class MatchResult extends Model
{
  protected $dates = [
    'matched_at'
  ];
  
  //MatchResultオブジェクトの作成(新規守備登録
  public static function createNewMatchResult($user_id, $request)
  {
    //カードステータスの取得
    list($diffence_card_point_1, $diffence_card_point_2, $diffence_card_point_3,
    $diffence_card_point_4, $diffence_card_point_5) = CardStatus::diffenceCardStatus($user_id);
   
    //カードNoをカードポイントへ置換、オープンカードをカードナンバーへ置換（int型へ）
    $replace_before = [$request->diffenceLayout1, $request->diffenceLayout2, $request->diffenceLayout3,
      $request->diffenceLayout4, $request->diffenceLayout5, $request->openCard];
    $search = ['DNo1', 'DNo2', 'DNo3', 'DNo4', 'DNo5', 'openCard1', 'openCard2','openCard3','openCard4','openCard5'];
    $replace = [$diffence_card_point_1, $diffence_card_point_2, $diffence_card_point_3, $diffence_card_point_4, $diffence_card_point_5,
      '1', '2', '3', '4', '5'];
    $replace_after =str_replace($search, $replace, $replace_before);
    
    //MatchResultオブジェクトの作成
    $diffence_entry = new MatchResult;
    $diffence_entry->user_id = $user_id;
    $diffence_entry->diffence_nickname = User::find($user_id)->nickname;
    $diffence_entry->diffence_layout_1 = str_replace('DNo', '', $replace_before[0]); //diffence_layout_1にカードNoを格納
    $diffence_entry->diffence_layout_2 = str_replace('DNo', '', $replace_before[1]); //diffence_layout_1にカードNoを格納
    $diffence_entry->diffence_layout_3 = str_replace('DNo', '', $replace_before[2]); //diffence_layout_1にカードNoを格納
    $diffence_entry->diffence_layout_4 = str_replace('DNo', '', $replace_before[3]); //diffence_layout_1にカードNoを格納
    $diffence_entry->diffence_layout_5 = str_replace('DNo', '', $replace_before[4]); //diffence_layout_1にカードNoを格納
    $diffence_entry->diffence_layout_1_pt = $replace_after[0]; //diffence_layout_1_ptにポイントを格納
    $diffence_entry->diffence_layout_2_pt = $replace_after[1]; //diffence_layout_2_ptにポイントを格納
    $diffence_entry->diffence_layout_3_pt = $replace_after[2]; //diffence_layout_3_ptにポイントを格納
    $diffence_entry->diffence_layout_4_pt = $replace_after[3]; //diffence_layout_4_ptにポイントを格納
    $diffence_entry->diffence_layout_5_pt = $replace_after[4]; //diffence_layout_5_ptにポイントを格納
    $diffence_entry->open_card = $replace_after[5];
    $diffence_entry->diffence_entry = 1;
    $diffence_entry->save();
  }
  
  public static function updateMatchReslut($user_id, $request, $match_result)
  {
    //CardStatusから自分のカードポイントの取得
    list($offence_card_point_1, $offence_card_point_2, $offence_card_point_3,
    $offence_card_point_4, $offence_card_point_5) = CardStatus::offenceCardStatus($user_id);
    
    //カードNoをカードポイントへ置換
    $replace_before = [$request->offenceLayout1, $request->offenceLayout2, $request->offenceLayout3,
      $request->offenceLayout4, $request->offenceLayout5];
    $search = ['ONo1', 'ONo2', 'ONo3', 'ONo4', 'ONo5'];
    $replace = [$offence_card_point_1, $offence_card_point_2, $offence_card_point_3, $offence_card_point_4, $offence_card_point_5,];
    $replace_after =str_replace($search, $replace, $replace_before);
    
    $match_result->offence_nickname = User::find($user_id)->nickname;
    $match_result->offence_layout_1 = str_replace('ONo', '', $replace_before[0]); //offence_layout_1にカードNoを格納
    $match_result->offence_layout_2 = str_replace('ONo', '', $replace_before[1]); //offence_layout_2にカードNoを格納
    $match_result->offence_layout_3 = str_replace('ONo', '', $replace_before[2]); //offence_layout_3にカードNoを格納
    $match_result->offence_layout_4 = str_replace('ONo', '', $replace_before[3]); //offence_layout_4にカードNoを格納
    $match_result->offence_layout_5 = str_replace('ONo', '', $replace_before[4]); //offence_layout_5にカードNoを格納
    $match_result->offence_layout_1_pt = $replace_after[0]; //offence_layout_1_ptにポイントを格納
    $match_result->offence_layout_2_pt = $replace_after[1]; //offence_layout_2_ptにポイントを格納
    $match_result->offence_layout_3_pt = $replace_after[2]; //offence_layout_3_ptにポイントを格納
    $match_result->offence_layout_4_pt = $replace_after[3]; //offence_layout_4_ptにポイントを格納
    $match_result->offence_layout_5_pt = $replace_after[4]; //offence_layout_5_ptにポイントを格納
    $match_result->save();
  }
  
  
  public static function matchResultCalculation($match_result)
  {
    $offence_point=0;
    $diffence_point=0;
    
    if ($match_result->offence_layout_1_pt > $match_result->diffence_layout_1_pt){
      $offence_point++;
    }elseif ($match_result->diffence_layout_1_pt > $match_result->offence_layout_1_pt){
      $diffence_point++;
    }
    
    if ($match_result->offence_layout_2_pt > $match_result->diffence_layout_2_pt){
      $offence_point++;
    }elseif ($match_result->diffence_layout_2_pt > $match_result->offence_layout_2_pt){
      $diffence_point++;
    }
    
    if ($match_result->offence_layout_3_pt > $match_result->diffence_layout_3_pt){
      $offence_point++;
    }elseif ($match_result->diffence_layout_3_pt > $match_result->offence_layout_3_pt){
      $diffence_point++;
    }
    
    if ($match_result->offence_layout_4_pt > $match_result->diffence_layout_4_pt){
      $offence_point++;
    }elseif ($match_result->diffence_layout_4_pt > $match_result->offence_layout_4_pt){
      $diffence_point++;
    }
    
    if ($match_result->offence_layout_5_pt > $match_result->diffence_layout_5_pt){
      $offence_point++;
    }elseif ($match_result->diffence_layout_5_pt > $match_result->offence_layout_5_pt){
      $diffence_point++;
    }
    
    if($offence_point > $diffence_point){
      $win_user = $match_result->offence_nickname;
    }else{
      $win_user = $match_result->diffence_nickname;
    }
    
    //勝カード数をデータベースへ登録
    $match_result->win_card_count_offence = $offence_point;
    $match_result->win_card_count_diffence = $diffence_point;
    $match_result->save();
    
    return array($match_result, $win_user);
  }
  
  //カードレイアウトの取得
  public static function cardLayoutGet($id)
  {
    $offence_layout_1 =MatchResult::find($id)->offence_layout_1;
    $offence_layout_2 =MatchResult::find($id)->offence_layout_2;
    $offence_layout_3 =MatchResult::find($id)->offence_layout_3;
    $offence_layout_4 =MatchResult::find($id)->offence_layout_4;
    $offence_layout_5 =MatchResult::find($id)->offence_layout_5;
    $diffence_layout_1 =MatchResult::find($id)->diffence_layout_1;
    $diffence_layout_2 =MatchResult::find($id)->diffence_layout_2;
    $diffence_layout_3 =MatchResult::find($id)->diffence_layout_3;
    $diffence_layout_4 =MatchResult::find($id)->diffence_layout_4;
    $diffence_layout_5 =MatchResult::find($id)->diffence_layout_5;
    
    return array($offence_layout_1, $offence_layout_2, $offence_layout_3, $offence_layout_4, $offence_layout_5,
          $diffence_layout_1, $diffence_layout_2, $diffence_layout_3, $diffence_layout_4, $diffence_layout_5);
  }
  
  //レイアウト毎カードポイントの取得
  public static function cardPointForEachLayoutGet($id)
  {
    $offence_layout_1_pt =MatchResult::find($id)->offence_layout_1_pt;
    $offence_layout_2_pt =MatchResult::find($id)->offence_layout_2_pt;
    $offence_layout_3_pt =MatchResult::find($id)->offence_layout_3_pt;
    $offence_layout_4_pt =MatchResult::find($id)->offence_layout_4_pt;
    $offence_layout_5_pt =MatchResult::find($id)->offence_layout_5_pt;
    $diffence_layout_1_pt =MatchResult::find($id)->diffence_layout_1_pt;
    $diffence_layout_2_pt =MatchResult::find($id)->diffence_layout_2_pt;
    $diffence_layout_3_pt =MatchResult::find($id)->diffence_layout_3_pt;
    $diffence_layout_4_pt =MatchResult::find($id)->diffence_layout_4_pt;
    $diffence_layout_5_pt =MatchResult::find($id)->diffence_layout_5_pt;
    
    return array($offence_layout_1_pt, $offence_layout_2_pt, $offence_layout_3_pt, $offence_layout_4_pt, $offence_layout_5_pt,
          $diffence_layout_1_pt, $diffence_layout_2_pt, $diffence_layout_3_pt, $diffence_layout_4_pt, $diffence_layout_5_pt);
  }
  
  //オープンカード情報
  public static function openCardGet($id)
  {
    $open_card = MatchResult::find($id)->open_card;
    
    return ($open_card);
  }
  
  //過去の対戦結果表示用に勝利ユーザーの再計算
  public static function winUserReCalculation($match_result)
  {
    if($match_result->win_card_count_offence > $match_result->win_card_count_diffence){
      $win_user = $match_result->offence_nickname;
    }else{
      $win_user = $match_result->diffence_nickname;
    }
    
    return ($win_user);
  }
  
  //未閲覧試合の確認
  public static function notAccessedResult($user_id)
  {
    //攻撃ユーザーがアクセス済(1), 守備ユーザーが未アクセス(0)かつ自分自身の試合を取得
    $not_accessed_results = MatchResult::where('user_id',$user_id)->where('offence_user_access', 1)
      ->where('diffence_user_access', 0)->get();
      
    //攻撃ユーザーがアクセス済(1), 守備ユーザーが未アクセス(0)かつ自分自身の試合数を取得  
    $not_accessed_count = MatchResult::where('user_id',$user_id)->where('offence_user_access', 1)
      ->where('diffence_user_access', 0)->count();
    
    return array($not_accessed_results, $not_accessed_count);
  }
    
}
