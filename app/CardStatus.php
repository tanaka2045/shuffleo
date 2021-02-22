<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

use App\User;

class CardStatus extends Model
{
  protected $guarded = array('id');
  
  public static function diffenceCardStatus($user_id)
  {
    $diffence_card_status = CardStatus::where('user_id', $user_id)->orderBy('id', 'desc')->first();
    $diffence_card_point_1 = $diffence_card_status->diffence_card_point_1;
    $diffence_card_point_2 = $diffence_card_status->diffence_card_point_2;
    $diffence_card_point_3 = $diffence_card_status->diffence_card_point_3;
    $diffence_card_point_4 = $diffence_card_status->diffence_card_point_4;
    $diffence_card_point_5 = $diffence_card_status->diffence_card_point_5;
    
    return array($diffence_card_point_1, $diffence_card_point_2, $diffence_card_point_3, 
      $diffence_card_point_4, $diffence_card_point_5);
  }
  
  public static function offenceCardStatus($user_id)
  {
    $offence_card_status = CardStatus::where('user_id', $user_id)->orderBy('id', 'desc')->first();
    $offence_card_point_1 = $offence_card_status->offence_card_point_1;
    $offence_card_point_2 = $offence_card_status->offence_card_point_2;
    $offence_card_point_3 = $offence_card_status->offence_card_point_3;
    $offence_card_point_4 = $offence_card_status->offence_card_point_4;
    $offence_card_point_5 = $offence_card_status->offence_card_point_5;
    
    return array($offence_card_point_1, $offence_card_point_2, $offence_card_point_3, 
      $offence_card_point_4, $offence_card_point_5);
  }
    
  
  protected $table = 'card_statuses';
}
