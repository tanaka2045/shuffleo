<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;
use App\User;
use App\TermResult;

class MatchResult
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
  public function handle($request, Closure $next)
  {
    $user_id = Auth::id();
    $user = User::find($user_id);
  
    $term_result = TermResult::where('user_id',$user_id)->first();
    
    //トータル対戦数の計算
    $total_match_count = $term_result->win_count_offence
      + $term_result->win_count_diffence + $term_result->lose_count_offence + $term_result->lose_count_diffence;
    $request->merge(['total_match_count' => $total_match_count]);
    
    
    return $next($request);
  }
}
