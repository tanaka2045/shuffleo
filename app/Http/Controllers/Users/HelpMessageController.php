<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Announce;
use Carbon\Carbon;
use Storage;

class HelpMessageController extends Controller
{
  public function announceAccess()
  {
    $extract = Announce::where('public',1)->latest()->take(10)->get();
    
    return view('users.announce', ['extract' => $extract]);
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
