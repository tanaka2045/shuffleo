<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\User;
use App\TermResult;
use App\MatchResult;
use App\Announce;
use App\CardStatus;
use Carbon\Carbon;
use Storage;

class HomeController extends Controller

{
  
  public function homeBeforeLogin()
  {
    return view('home_before_login');
  }

  public function userEdit()
  {
    return view('users.user_edit');
  }

  public function homeAccess()
  {
    $extract = Announce::where('public',1)->latest()->take(5)->get();
    
    return view('users.home', ['extract' => $extract]);
  }

  public function userHomeAccess(Request $request)
  {
    $user_id = Auth::id();
    $user = User::find($user_id);

    //ユーザーホーム内のテーブル情報の取得
    $total_count = TermResult::totalCount($user_id);
    $total_win_rate =TermResult::totalWinRate($user_id);
    $current_term_count = TermResult::currentTermCount($user_id);
    $current_count = TermResult::currentCount($user_id);
    $current_win_rate = TermResult::currentWinRate($user_id);
    $residual_count =TermResult::residualCount($user_id);
    
    //チップ枚数の取得
    $tip_count = $user->tip_count;
    
    //タームエンドポイントの確認（99試合以下→0、100試合→1)
    $max = TermResult::where('user_id', $user_id)->max('term_count');
    $term_result = TermResult::where('user_id', $user_id)->where('term_count', $max)->first();
    $term_end_point = $term_result->term_end_point;
    
    //本日の対戦数の確認
    $day_match_count = $user->day_match_count;

    //未閲覧試合ならびに試合数の確認
    list($not_accessed_results,$not_accessed_count) = MatchResult::notAccessedResult($user_id);

    //userMatchDetailedAceess()のように書き換えることが望ましいが、書き方の例として残しておいた
    return view('users.user_home', ['user' => $user, 'total_count' => $total_count,
      'total_win_rate' => $total_win_rate, 'current_term_count' => $current_term_count, 'current_count' => $current_count, 
      'current_win_rate' => $current_win_rate, 'residual_count' => $residual_count, 
      'tip_count' => $tip_count, 'term_end_point' => $term_end_point, 'day_match_count' => $day_match_count,
      'not_accessed_count' => $not_accessed_count]);
  }  

  public function userMatchDetailedAccess(Request $request)
  {
    $user_id = Auth::id();

    return view('users.user_match_detailed', [
      'total_win_count_offence' => TermResult::totalWinCountOffnece($user_id), 
      'total_lose_count_offence' => TermResult::totalLoseCountOffnece($user_id), 
      'total_count_offence' =>TermResult::totalCountOffnece($user_id),
      'total_win_rate_offence' => TermResult::totalWinRateOffnece($user_id),
      'total_win_count_diffence' => TermResult::totalWinCountDiffnece($user_id), 
      'total_lose_count_diffence' => TermResult::totalLoseCountDiffnece($user_id), 
      'total_count_diffence' =>TermResult::totalCountDiffnece($user_id), 
      'total_win_rate_diffence' => TermResult::totalWinRateDiffnece($user_id), 
      'total_win_count' => TermResult::totalWinCount($user_id), 
      'total_lose_count' => TermResult::totalLoseCount($user_id), 
      'total_count' =>TermResult::totalCount($user_id), 
      'total_win_rate' => TermResult::totalWinRate($user_id),
      'current_win_count_offence' => TermResult::currentWinCountOffnece($user_id), 
      'current_lose_count_offence' => TermResult::currentLoseCountOffnece($user_id), 
      'current_count_offence' => TermResult::currentCountOffnece($user_id),
      'current_win_rate_offence' => TermResult::currentWinRateOffnece($user_id),
      'current_win_count_diffence' => TermResult::currentWinCountDiffnece($user_id), 
      'current_lose_count_diffence' => TermResult::currentLoseCountDiffnece($user_id), 
      'current_count_diffence' =>TermResult::currentCountDiffnece($user_id), 
      'current_win_rate_diffence' => TermResult::currentWinRateDiffnece($user_id), 
      'current_win_count' => TermResult::currentWinCount($user_id), 
      'current_lose_count' => TermResult::currentLoseCount($user_id), 
      'current_count' => TermResult::currentCount($user_id), 
      'current_win_rate' => TermResult::currentWinRate($user_id)
      ]);
  }
  
  public function toNextTerm()
  {
    $user_id = Auth::id();
    
    //チップポイントのリセット
    TermResult::tipReset($user_id);
    
    //ターム最高勝率の計算
    TermResult::bestTermWinRateUpdate($user_id);
    
    //ターム終了日時の記録
    TermResult::termFinishedAtRecord($user_id);
    
    //カードポイントのリセット(カードステータスマスタのインスタンス作成)
    CardStatus::cardReset($user_id);
    
    //ターム成績のリセット（ターム成績マスタのインスタンス作成）
    TermResult::termResultCreate($user_id);
    /*$old_term_result = TermResult::where('user_id', $user_id)->latest()->first();
    $old_term_count = $old_term_result->term_count;
    $old_term_count++;
    
    $term_result = new TermResult; 
    $term_result->user_id = $user_id;
    $term_result->term_count = $old_term_count;
    $term_result->win_count_offence = 0;
    $term_result->win_count_diffence = 0;
    $term_result->lose_count_offence = 0 ;
    $term_result->lose_count_diffence = 0;
    $term_result->term_end_point = 0;
    
    $term_result->save();*/
    
    return redirect (route('user.home'));
  }
  
}
