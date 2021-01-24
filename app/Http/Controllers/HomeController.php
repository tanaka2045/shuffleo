<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
  
  
  
  
  
  
  public function test()
  {
    return view('layouts.template');
  }
  
   public function test1()
  {
    return view('shuffleout.user_edit');
  }
  
   public function test2()
  {
    return view('shuffleout.announce');
  }
  
   public function test3()
  {
    return view('shuffleout.home');
  }
  
   public function test4()
  {
    return view('shuffleout.user_home');
  }
  
   public function test5()
  {
    return view('layouts.ranking');
  }
  
   public function test8()
  {
    return view('layouts.templateWoNav');
  }
   public function test9()
  {
    return view('shuffleout.home_bef_login');
  }
   public function test10()
  {
    return view('shuffleout.user_register_1');
  }
   public function test11()
  {
    return view('shuffleout.user_register_2');
  }
   public function test12()
  {
    return view('shuffleout.login');
  }
   public function test13()
  {
    return view('shuffleout.match_result');
  }
   public function test14()
  {
    return view('shuffleout.match_diffence');
  }
   public function test15()
  {
    return view('shuffleout.match_make');
  }  
   public function test16()
  {
    return view('shuffleout.match_offence');
  }  
    
  
  
  
  
   public function test99()
  {
    return view('shuffleout.zzztest');
  }
}
