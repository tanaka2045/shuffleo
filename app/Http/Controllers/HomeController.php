<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function test()
  {
    return view('layouts.template_test');
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
    return view('shuffleout.ranking');
  }
  
   public function test6()
  {
    return view('shuffleout.ranking_term');
  }
   public function test7()
  {
    return view('shuffleout.ranking_rate');
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
}
