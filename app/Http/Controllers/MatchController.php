<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MatchController extends Controller
{
  public function matchMakeAccess()
  {
    return view('shuffleout.match_make');
  }
}
