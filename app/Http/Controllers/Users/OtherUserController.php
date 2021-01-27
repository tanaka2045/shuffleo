<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OtherUserController extends Controller
{
  public function otherUserAccess()
  {
    return view('users.other_user');
  }
}
