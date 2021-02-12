<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TermResult extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        //'user_id' => 'required',
    );

    protected $table = 'term_results';
}
