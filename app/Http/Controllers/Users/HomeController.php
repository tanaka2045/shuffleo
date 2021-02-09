<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Announce;
use Carbon\Carbon;
use Storage;

class HomeController extends Controller

{
  public function homeBeforeLogin()
  {
    return view('home_before_login');
  }

  public function userEdit()
  {
    return view('users.user_edit');
  }

  public function homeAccess()
  {
    $extract = Announce::where('public',1)->latest()->take(5)->get();
    
    return view('users.home', ['extract' => $extract]);
  }

  public function userHomeAccess()
  {
    return view('users.user_home');
  }  
  
}
