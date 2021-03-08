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
  
  public static function matchResultCalculation($match_result)
  {
    $offence_point=0;
    $diffence_point=0;
    
    if ($match_result->offence_layout_1 > $match_result->diffence_layout_1){
      $offence_point++;
    }elseif ($match_result->diffence_layout_1 > $match_result->offence_layout_1){
      $diffence_point++;
    }
    
    if ($match_result->offence_layout_2 > $match_result->diffence_layout_2){
      $offence_point++;
    }elseif ($match_result->diffence_layout_2 > $match_result->offence_layout_2){
      $diffence_point++;
    }
    
    if ($match_result->offence_layout_3 > $match_result->diffence_layout_3){
      $offence_point++;
    }elseif ($match_result->diffence_layout_3 > $match_result->offence_layout_3){
      $diffence_point++;
    }
    
    if ($match_result->offence_layout_4 > $match_result->diffence_layout_4){
      $offence_point++;
    }elseif ($match_result->diffence_layout_4 > $match_result->offence_layout_4){
      $diffence_point++;
    }
    
    if ($match_result->offence_layout_5 > $match_result->diffence_layout_5){
      $offence_point++;
    }elseif ($match_result->diffence_layout_5 > $match_result->offence_layout_5){
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
