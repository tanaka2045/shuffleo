<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
