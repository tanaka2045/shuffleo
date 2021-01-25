<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelpMessageController extends Controller
{
  public function announceAccess()
  {
    return view('shuffleout.announce');
  }

  public function tutorialAccess()
  {
    return view('shuffleout.tutorial');
  }

  public function policyAccess()
  {
    return view('shuffleout.policy');
  }
}
