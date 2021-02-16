<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\TermResult;

class TermResult extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
    //'user_id' => 'required',
  );
  
  //トータルの戦績計算
  public static function totalMatchCalc($user_id)
  {
    //$term_result = TermResult::where('user_id',$user_id)->get();
    $win_count_offence = TermResult::where('user_id', $user_id)->sum("win_count_offence");
    $win_count_diffence = TermResult::where('user_id', $user_id)->sum("win_count_diffence");
    $lose_count_offence = TermResult::where('user_id', $user_id)->sum("lose_count_offence");
    $lose_count_diffence = TermResult::where('user_id', $user_id)->sum("lose_count_diffence");
    //トータルの対戦数計算
    $total_match_count = $win_count_offence + $win_count_diffence + $lose_count_offence + $lose_count_diffence;
    
    //トータルの勝率計算
    if ($total_match_count == 0){
      $total_win_rate= 0;
    }else{
      $total_win_rate = ($win_count_offence + $win_count_diffence) *100 / $total_match_count;
    }
    
    return [$total_match_count, $total_win_rate];  
  }
  
  //最新タームの戦績計算
  public static function currentMatchCalc($user_id)
  {
    $max = TermResult::where('user_id',$user_id)->max('term_count');
    $current_term_result = TermResult::where('user_id',$user_id)->where('term_count',$max)->first();
    
    //最新タームカウントの取得
    $term_count = $current_term_result->term_count;
    
    //最新タームの対戦数計算
    $win_count_offence = $current_term_result->win_count_offence;
    $win_count_diffence = $current_term_result->win_count_diffence;
    $lose_count_offence = $current_term_result->lose_count_offence;
    $lose_count_diffence = $current_term_result->lose_count_diffence;
    $current_match_count = $win_count_offence + $win_count_diffence + $lose_count_offence + $lose_count_diffence;
    
    //最新タームの勝率計算
    if ($current_match_count == 0){
      $current_win_rate = 0;
    }else{
      $current_win_rate = ($current_term_result->win_count_offence + $current_term_result->win_count_diffence)*100 
        / $current_match_count;
    }
    
    //最新タームの残対戦数
    $residual_match_count = 100 - $current_match_count;
    
    return [$term_count, $current_match_count, $current_win_rate, $residual_match_count];  
  }
  
  //トータル＆攻撃＆勝回数の計算
  public static function totalWinCountOffnece($user_id)
  {
   $total_win_count_offence = TermResult::where('user_id', $user_id)->sum("win_count_offence");
   
   return($total_win_count_offence);
  }
  
  //トータル＆攻撃＆負回数の計算
  public static function totalLoseCountOffnece($user_id)
  {
   $total_lose_count_offence = TermResult::where('user_id', $user_id)->sum("lsoe_count_offence");
   
   return($total_lose_count_offence);
  }

  //トータル＆攻撃回数の計算
  public static function totalCountOffnece()
  {
   $total_count_offence = $total_win_count_offence + $total_lose_count_offence;
   dd($total_count_offence);
   
   return($total_count_offence);
  }
  
  
  
  
  protected $table = 'term_results';
}