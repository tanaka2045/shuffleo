<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactSendmail;

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
    //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
    $request->validate([
      'email_inquiry' => 'required|email',
      'title_inquiry' => 'required|max:100',
      'body_inquiry'  => 'required'
      ]);

    //フォームから受け取ったactionの値を取得
    $action = $request->input('action');
        
    //フォームから受け取ったactionを除いたinputの値を取得
    $inputs = $request->except('action');

    //actionの値で分岐
    if($action !== 'submit'){
        return redirect()
            ->route('inquiry')
            ->withInput($inputs);

      } else {
        //入力されたメールアドレスにメールを送信
        \Mail::to($inputs['email_inquiry'])->send(new ContactSendmail($inputs));

        //再送信を防ぐためにトークンを再発行
        $request->session()->regenerateToken();

        //送信完了ページのviewを表示
        return view('contact.thanks');
      }
  }
  
}
