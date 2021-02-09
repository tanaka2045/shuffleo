<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InquiryController extends Controller
{
  
  public function inquiryAccess()
  {
    return view('users.inquiry');
  }

  public function inquiryConfirm(Request $request)
  {
    
    $request -> validate([
      'email_inquiry' => 'required|email',
      'title_inquiry' => 'required|max:100',
      'body_inquiry'  => 'required',
      ]);
      
    $inputs = $request->all();
    
    return view('users.inquiry_confirm', ['inputs' => $inputs,]);
    
  }

  public function inquirySend(Request $request)
  {
    
  }
  
}
