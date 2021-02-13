<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TermResult extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
    //'user_id' => 'required',
  );
  
  public function matchInformation(){
    //トータル対戦数の計算
    //$total_match_count = $term_result->win_count_offence + $term_result->win_count_diffence + $term_result->lose_count_offence + $term_result->lose_count_diffence;
    
  }

  protected $table = 'term_results';
}
