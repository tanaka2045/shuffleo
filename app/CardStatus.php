<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

use App\User;

class CardStatus extends Model
{
  protected $guarded = array('id');
    
    
  
  protected $table = 'card_statuses';
}
