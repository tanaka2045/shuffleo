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
  
  public static function matchResultCalculation($match_result)
  {
    $offence_point=0;
    $diffence_point=0;
    
    if ($match_result->offence_layout_1 > $match_result->diffence_layout_1){
      $offence_point++;
    }else{
      $diffence_point++;
    }
    
    if ($match_result->offence_layout_2 > $match_result->diffence_layout_2){
      $offence_point++;
    }else{
      $diffence_point++;
    }
    
    if ($match_result->offence_layout_3 > $match_result->diffence_layout_3){
      $offence_point++;
    }else{
      $diffence_point++;
    }
    
    if ($match_result->offence_layout_4 > $match_result->diffence_layout_4){
      $offence_point++;
    }else{
      $diffence_point++;
    }
    
    if ($match_result->offence_layout_5 > $match_result->diffence_layout_5){
      $offence_point++;
    }else{
      $diffence_point++;
    }
    
    if($offence_point > $diffence_point){
      $win_user = $match_result->offence_nickname;
    }else{
      $win_user = $match_result->diffence_nickname;
    }
    
    return array($offence_point, $diffence_point, $win_user);
  }
  
  public static function elorateCalculation($match_result, $win_user)
  {

    $k=8; // 係数設定 Kが大きいほど、最適レートに到達しやすいがレートは不安定になる
    
    if($win_user == $match_result->offence_nickname){
      $win_user_all = User::where('nickname', $match_result->offence_nickname)->first();
      $lose_user_all = User::where('nickname', $match_result->diffence_nickname)->first();
    }else{
      $win_user_all = User::where('nickname', $match_result->diffence_nickname)->first();
      $lose_user_all = User::where('nickname', $match_result->offence_nickname)->first();
    }
    
    $elorate_win_user_ini = $win_user_all->elorate;
    $elorate_lose_user_ini = $lose_user_all->elorate;
    
    $eij=1/(1+pow(10,(($elorate_lose_user_ini-$elorate_win_user_ini)/400)));
    $eji=1/(1+pow(10,(($elorate_win_user_ini-$elorate_lose_user_ini)/400)));
    
    $elorate_win_user = $elorate_win_user_ini + $k*(1-$eij);
    $elorate_lose_user = $elorate_lose_user_ini + $k*(0-$eji);
    
    $win_user_all->elorate = $elorate_win_user;
    $win_user_all->save();
    $lose_user_all->elorate = $elorate_lose_user;
    $lose_user_all->save();
  }
  
  public static function tipCalculation($match_result)
  {
    $card_status = CardStatus::where('user_id', $match_result->user_id)->latest()->take(1)->first();
    $tip_count = $card_status->tip_count;
    $tip_count++;
    $card_status->tip_count = $tip_count;
    $card_status->save();
  }
    
}
