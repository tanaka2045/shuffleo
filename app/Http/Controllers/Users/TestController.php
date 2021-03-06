<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
      return view('users.zzztest');
    }
}
