<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\TermResult;

class TermResult extends Model
{
  protected $guarded = array('id');
  
  //トータル対戦結果の計算
  
  //トータル＆攻撃＆勝回数の計算
  public static function totalWinCountOffnece($user_id)
  {
    $total_win_count_offence = TermResult::where('user_id', $user_id)->sum("win_count_offence");
   
    return($total_win_count_offence);
  }
  
  //トータル＆攻撃＆負回数の計算
  public static function totalLoseCountOffnece($user_id)
  {
    $total_lose_count_offence = TermResult::where('user_id', $user_id)->sum("lose_count_offence");
   
    return($total_lose_count_offence);
  }

  //トータル＆攻撃対戦数の計算
  public static function totalCountOffnece($user_id)
  {
    $total_count_offence = self::totalWinCountOffnece($user_id) + self::totalLoseCountOffnece($user_id);
   
    return($total_count_offence);
  }

  //トータル攻撃時勝率の計算
  public static function totalWinRateOffnece($user_id)
  {
    if (self::totalCountOffnece($user_id) == 0)
    {
    $total_win_rate_offence = 0;
    }else{
    $total_win_rate_offence = (self::totalWinCountOffnece($user_id)*100)/ self::totalCountOffnece($user_id);
    }
    
   return($total_win_rate_offence);
  }

  //トータル＆守備＆勝回数の計算
  public static function totalWinCountDiffnece($user_id)
  {
    $total_win_count_diffence = TermResult::where('user_id', $user_id)->sum("win_count_diffence");
   
    return($total_win_count_diffence);
  }
  
  //トータル＆守備＆負回数の計算
  public static function totalLoseCountDiffnece($user_id)
  {
    $total_lose_count_diffence = TermResult::where('user_id', $user_id)->sum("lose_count_diffence");
   
    return($total_lose_count_diffence);
  }

  //トータル＆守備対戦数の計算
  public static function totalCountDiffnece($user_id)
  {
    $total_count_diffence = self::totalWinCountDiffnece($user_id) + self::totalLoseCountDiffnece($user_id);
   
    return($total_count_diffence);
  }

  //トータル守備時勝率の計算
  public static function totalWinRateDiffnece($user_id)
  {
    if (self::totalCountDiffnece($user_id) == 0)
    {
    $total_win_rate_diffence = 0;
    }else{
    $total_win_rate_diffence = (self::totalWinCountDiffnece($user_id)*100)/ self::totalCountDiffnece($user_id);
    }
    
   return($total_win_rate_diffence);
  }

  //トータル&勝回数の計算
  public static function totalWinCount($user_id)
  {
    $total_win_count = self::totalWinCountOffnece($user_id) + self::totalWinCountDiffnece($user_id);
   
    return($total_win_count);
  }
  
  //トータル＆負回数の計算
  public static function totalLoseCount($user_id)
  {
    $total_lose_count = self::totalLoseCountOffnece($user_id) + self::totalLoseCountDiffnece($user_id);
   
    return($total_lose_count);
  }

  //トータル対戦回数の計算
  public static function totalCount($user_id)
  {
    $total_count = self::totalWinCount($user_id) + self::totalLoseCount($user_id);
   
    return($total_count);
  }

  //トータル勝率の計算
  public static function totalWinRate($user_id)
  {
    if (self::totalCount($user_id) == 0)
    {
    $total_win_rate = 0;
    }else{
    $total_win_rate = (self::totalWinCount($user_id)*100)/ self::totalCount($user_id);
    }
    
   return($total_win_rate);
  }

  //現ターム対戦結果の計算
  
  //現タームの対戦結果の取得
  public static function currentTermResult($user_id)
  {
    $max = TermResult::where('user_id',$user_id)->max('term_count');
    $current_term_result = TermResult::where('user_id',$user_id)->where('term_count',$max)->first();
    
    return($current_term_result);
  }
  
  //現タームカウントの計算
  public static function currentTermCount($user_id)
  {
    $current_term_count = self::currentTermResult($user_id)->term_count;
    
    return($current_term_count);
  }
  
  
  //現ターム＆攻撃＆勝回数の計算
  public static function currentWinCountOffnece($user_id)
  {
    $current_win_count_offence = TermResult::where('user_id', $user_id)->sum("win_count_offence");
    return($current_win_count_offence);
  }
  
  //現ターム＆攻撃＆負回数の計算
  public static function currentLoseCountOffnece($user_id)
  {
    $current_lose_count_offence = TermResult::where('user_id', $user_id)->sum("lose_count_offence");
   
    return($current_lose_count_offence);
  }

  //現ターム＆攻撃対戦数の計算
  public static function currentCountOffnece($user_id)
  {
    $current_count_offence = self::currentWinCountOffnece($user_id) + self::currentLoseCountOffnece($user_id);
   
    return($current_count_offence);
  }

  //現ターム攻撃時勝率の計算
  public static function currentWinRateOffnece($user_id)
  {
    if (self::currentCountOffnece($user_id) == 0)
    {
    $current_win_rate_offence = 0;
    }else{
    $current_win_rate_offence = (self::currentWinCountOffnece($user_id)*100)/ self::currentCountOffnece($user_id);
    }
    
   return($current_win_rate_offence);
  }

  //現ターム＆守備＆勝回数の計算
  public static function currentWinCountDiffnece($user_id)
  {
    $current_win_count_diffence = TermResult::where('user_id', $user_id)->sum("win_count_diffence");
   
    return($current_win_count_diffence);
  }
  
  //現ターム＆守備＆負回数の計算
  public static function currentLoseCountDiffnece($user_id)
  {
    $current_lose_count_diffence = TermResult::where('user_id', $user_id)->sum("lose_count_diffence");
   
    return($current_lose_count_diffence);
  }

  //現ターム＆守備対戦数の計算
  public static function currentCountDiffnece($user_id)
  {
    $current_count_diffence = self::currentWinCountDiffnece($user_id) + self::currentLoseCountDiffnece($user_id);
   
    return($current_count_diffence);
  }

  //現ターム守備時勝率の計算
  public static function currentWinRateDiffnece($user_id)
  {
    if (self::currentCountDiffnece($user_id) == 0)
    {
    $current_win_rate_diffence = 0;
    }else{
    $current_win_rate_diffence = (self::currentWinCountDiffnece($user_id)*100)/ self::currentCountDiffnece($user_id);
    }
    
   return($current_win_rate_diffence);
  }

  //現ターム&勝回数の計算
  public static function currentWinCount($user_id)
  {
    $current_win_count = self::currentWinCountOffnece($user_id) + self::currentWinCountDiffnece($user_id);
   
    return($current_win_count);
  }
  
  //現ターム＆負回数の計算
  public static function currentLoseCount($user_id)
  {
    $current_lose_count = self::currentLoseCountOffnece($user_id) + self::currentLoseCountDiffnece($user_id);
   
    return($current_lose_count);
  }

  //現ターム対戦回数の計算
  public static function currentCount($user_id)
  {
    $current_count = self::currentWinCount($user_id) + self::currentLoseCount($user_id);
   
    return($current_count);
  }

  //現ターム勝率の計算
  public static function currentWinRate($user_id)
  {
    if (self::currentCount($user_id) == 0)
    {
    $current_win_rate = 0;
    }else{
    $current_win_rate = (self::currentWinCount($user_id)*100)/ self::currentCount($user_id);
    }
    
   return($current_win_rate);
  }
  
  //現タームの残対戦数
  public static function residualCount($user_id)
  {
    $residual_count = 100 - self::currentCount($user_id);
    
    return ($residual_count);  
  }
  
  protected $table = 'term_results';
}
