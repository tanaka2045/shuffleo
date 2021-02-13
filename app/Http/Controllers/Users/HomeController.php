<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\User;
use App\TermResult;
use App\Announce;
use Carbon\Carbon;
use Storage;

class HomeController extends Controller

{
  public function __construct()
  {
    $this->middleware('match.result');
  }
  
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

  public function userHomeAccess(Request $request)
  {
    
    
    $user_id = Auth::id();
    $user = User::find($user_id);
  
    $total_match_count = $request->total_match_count;
    TermResult::test($user_id)
    
    return view('users.user_home', ['user' => $user, 'total_match_count'=>$total_match_count]);
  }  
  
}
