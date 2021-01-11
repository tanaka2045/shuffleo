<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function test()
  {
    return view('layouts.template');
  }
  
   public function test1()
  {
    return view('shuffleout.user_edit');
  }
}
