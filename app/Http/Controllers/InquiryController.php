<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InquiryController extends Controller
{
  
  public function inquiryAccess()
  {
    return view('shuffleout.inquiry');
  }
  
}
