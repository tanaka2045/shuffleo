<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller

{
  
  public function userEdit()
  {
    return view('users.user_edit');
  }

  public function homeAccess()
  {
    return view('users.home');
  }

  public function userHomeAccess()
  {
    return view('users.user_home');
  }  
  
}
