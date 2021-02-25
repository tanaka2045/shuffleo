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
    
}
