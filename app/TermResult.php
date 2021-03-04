<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\TermResult;
use App\MatchResult;
use Carbon\Carbon;

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
  
  //対戦結果をTermResultの成績へ反映
  public static function termResultUpdate($match_result, $offence_point, $diffence_point, $win_user)
  {
    $max_offence = TermResult::where('user_id',$match_result->offence_user_id)->max('term_count');
    $offence_term_result=TermResult::where('user_id', $match_result->offence_user_id)->where('term_count', $max_offence)->first();
    $max_diffence = TermResult::where('user_id',$match_result->user_id)->max('term_count');
    $diffence_term_result=TermResult::where('user_id', $match_result->user_id)->where('term_count', $max_diffence)->first();
    
   if($win_user == $match_result->offence_nickname){
      $offence_term_result->win_count_offence++;
      $diffence_term_result->lose_count_diffence++;
    }else{
      $offence_term_result->lose_count_offence++;
      $diffence_term_result->win_count_diffence++;
    }
    
    $offence_term_result->save();
    $diffence_term_result->save();
    
    return array($offence_term_result, $diffence_term_result);
  }
  //オフェンスアクセスフラグの変更 0->1
  public static function offneceAccessFlag($match_result)
  {
    $match_result->offence_user_access = 1;
    $match_result->save();
  }
  
  //トータル勝率をusersテーブルへ反映(Offence)
  public static function totalWinRateOffenceUpdate($match_result)
  {
    $user_id = $match_result->offence_user_id;
    $total_win_rate = self::totalWinRate($user_id);
    $user = User::find($user_id);
    $user->total_win_rate = $total_win_rate;
    $user->save();
  }

  //トータル勝率をusersテーブルへ反映(diffence)
  public static function totalWinRatediffenceUpdate($match_result)
  {
    $user_id = $match_result->user_id;
    $total_win_rate = self::totalWinRate($user_id);
    $user = User::find($user_id);
    $user->total_win_rate = $total_win_rate;
    $user->save();
  }
  
  //守備登録時のタームエンドポイントの計算＿守備ユーザー（100x試合目かどうかの確認
  public static function termEndPointDiffenceEntryCalculation($user_id)
  {
    //実対戦数
    $current_term_count = self::currentCount($user_id);
    $max = TermResult::where('user_id', $user_id)->max('term_count');
    
    //守備登録中の数
    $under_entry_count = MatchResult::where('user_id', $user_id)->where('diffence_entry', '1')->get()->count();
    ($current_term_count+$under_entry_count);
    
    $max_game_count = 40;
    
    if ($current_term_count % $max_game_count == 0.000 && $current_term_count !== 0)
    {
      $term_result = TermResult::where('user_id', $user_id)->where('term_count',$max)->first(); 
      $term_result->term_end_point = 2;
      $term_result->save();
    }elseif (($current_term_count+$under_entry_count) % $max_game_count == 0.000 && $current_term_count !== 0){
      $term_result = TermResult::where('user_id', $user_id)->where('term_count',$max)->first(); 
      $term_result->term_end_point = 1;
      $term_result->save();
    }else{
      $term_result = TermResult::where('user_id', $user_id)->where('term_count',$max)->first();
      $term_result->term_end_point = 0;
      $term_result->save();
    }
  }
  
  //対戦時のタームエンドポイントの計算＿攻撃ユーザー（100x試合目かどうかの確認）
  public static function termEndPointOffenceCalculation($match_result)
  {
    $user_id = $match_result->offence_user_id;
    //実対戦数
    $current_term_count = self::currentCount($user_id);
    $max = TermResult::where('user_id', $user_id)->max('term_count');
    
    //守備登録中の数
    $under_entry_count = MatchResult::where('user_id', $user_id)->where('diffence_entry', '1')->get()->count();
    ($current_term_count+$under_entry_count);
    
    $max_game_count = 40;
    
    if ($current_term_count % $max_game_count == 0.000 && $current_term_count !== 0)
    {
      $term_result = TermResult::where('user_id', $user_id)->where('term_count',$max)->first(); 
      $term_result->term_end_point = 2;
      $term_result->save();
    }elseif (($current_term_count+$under_entry_count) % $max_game_count == 0.000 && $current_term_count !== 0){
      $term_result = TermResult::where('user_id', $user_id)->where('term_count',$max)->first(); 
      $term_result->term_end_point = 1;
      $term_result->save();
    }else{
      $term_result = TermResult::where('user_id', $user_id)->where('term_count',$max)->first();
      $term_result->term_end_point = 0;
      $term_result->save();
    }
  }
  
  //対戦時のタームエンドポイントの計算＿守備ユーザー（100x試合目かどうかの確認）
  public static function termEndPointDiffenceCalculation($match_result)
  {
    $user_id = $match_result->user_id; //user_id = Diffence_user_idに注意
    //実対戦数
    $current_term_count = self::currentCount($user_id);
    $max = TermResult::where('user_id', $user_id)->max('term_count');
    $term_result = TermResult::where('user_id', $user_id)->where('term_count',$max)->first(); 
    $term_end_point = $term_result->term_end_point;
    
    //守備登録中の数
    $under_entry_count = MatchResult::where('user_id', $user_id)->where('diffence_entry', '1')->get()->count();
    
    $max_game_count = 40;
    
    if ($current_term_count % $max_game_count == 0.000 && $current_term_count !== 0)
    {
      $term_result = TermResult::where('user_id', $user_id)->where('term_count',$max)->first(); 
      $term_result->term_end_point = 2;
      $term_result->save();
    }elseif (($current_term_count+$under_entry_count) % $max_game_count == 0.000 && $current_term_count !== 0){
      $term_result = TermResult::where('user_id', $user_id)->where('term_count',$max)->first(); 
      $term_result->term_end_point = 1;
      $term_result->save();
    }else{
      $term_result = TermResult::where('user_id', $user_id)->where('term_count',$max)->first();
      $term_result->term_end_point = 0;
      $term_result->save();
    }
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
  
  //チップ計算(守備対戦によりチップ++)
  public static function tipCalculation($match_result)
  {
    $user = User::find($match_result->user_id)->first();
    $tip_count = $user->tip_count;
    $tip_count++;
    $user->tip_count = $tip_count;
    $user->save();
  }
  
  //次ターム移行時のアクション
  //チップカウンターリセット
  public static function tipReset($user_id)
  {
    $user = User::find($user_id)->first();
    $user->tip_count = 0;
    $user->save();
  }
  
  //過去最高ターム勝率の計算
  public static function bersTermWinRateUpdate($user_id)
  {
    $user = User::find($user_id)->first();
    $current_win_rate = self::currentWinRate($user_id);
    
    if ($current_win_rate > $user->best_term_win_rate){
      $user->best_term_win_rate = $current_win_rate;
    }

    $user->save();
  }
  
  //ターム終了日時の記録
  public static function termFinishedAtRecord($user_id)
  {
   $term_result = TermResult::where('user_id', $user_id)->latest()->first();
   $term_result->finished_at = Carbon::now();
   $term_result->save();
  }
  
  //ターム成績のリセット（ターム成績マスタのインスタンス作成）
  public function termResultCreate($user_id)
  {
    $old_term_result = TermResult::where('user_id', $user_id)->latest()->first();
    
    $term_result = new TermResult;
    $term_result->user_id = $user_id;
    $term_result->term_count = $old_term_result++;
    $term_result->win_count_offence = 0;
    $term_result->win_count_diffence = 0;
    $term_result->lose_count_offence = 0 ;
    $term_result->lose_count_diffence = 0;
    $term_result->term_end_point = 0;
    
    $term_result->save();
  }
  
  protected $table = 'term_results';
}
