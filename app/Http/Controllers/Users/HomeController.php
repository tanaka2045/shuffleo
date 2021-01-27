<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller

{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
   
  public function index()
  {
      return view('home');
  }
  
  
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
