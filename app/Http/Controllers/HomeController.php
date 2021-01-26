<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller

{
  public function userEdit()
  {
    return view('shuffleout.user_edit');
  }

  public function homeAccess()
  {
    return view('shuffleout.home');
  }

  public function userHomeAccess()
  {
    return view('shuffleout.user_home');
  }  
  
}
