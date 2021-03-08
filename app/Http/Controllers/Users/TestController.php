<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\CardStatus;
use App\MatchResult;
use App\TermResult;
use Carbon\Carbon;

class TestController extends Controller
{
  
  public function test()
  {
    return view('auth.user_register_1');
  }
  
  public function test2()
  {
    return view('users.user_register_2');
  }
  
     /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'min:6', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'nickname' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'age' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nickname' => $data['nickname'],
            'gender' => $data['gender'],
            'age' => $data['age'],
        ]);
    }
    
    public function jstest()
    {
    $user_id = Auth::id();
    list($diffence_card_point_1, $diffence_card_point_2, $diffence_card_point_3,
      $diffence_card_point_4, $diffence_card_point_5) = CardStatus::diffenceCardStatus($user_id);
    
    //登録ボタンスイッチング初期値（0=非活性）の呼び出し
    $button_switch = User::find($user_id)->button_switch;
    
    //タームエンドポイントの取得
    $term_result = TermResult::where('user_id', $user_id)->latest()->first();
    $term_end_point = $term_result->term_end_point;
    
    return view('users.zzztest', [
      'diffence_card_point_1' => $diffence_card_point_1,
      'diffence_card_point_2' => $diffence_card_point_2,
      'diffence_card_point_3' => $diffence_card_point_3,
      'diffence_card_point_4' => $diffence_card_point_4,
      'diffence_card_point_5' => $diffence_card_point_5,
      'button_switch' => $button_switch,
      'term_end_point' => $term_end_point
    ]);
  }
}
