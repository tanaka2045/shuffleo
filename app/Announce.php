<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    //
  protected $guarded = array('id');
  
  //
  public static $rules = array(
    'title' => 'required',
  );
  
  // Newsモデルに関連付けを行う
  //public function histories()
  //{
  //  return $this->hasMany('App\History');
  //}
  
  protected $table = 'announces';
}
