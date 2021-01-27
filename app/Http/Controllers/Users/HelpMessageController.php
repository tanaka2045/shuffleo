<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelpMessageController extends Controller
{
  public function announceAccess()
  {
    return view('users.announce');
  }

  public function tutorialAccess()
  {
    return view('users.tutorial');
  }

  public function policyAccess()
  {
    return view('users.policy');
  }
}
