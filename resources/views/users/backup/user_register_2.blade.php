@extends('layouts.templateWoNav')

@include('layouts.titleImage')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col text-center pt-3">
        <div class="font-o-lg txt-shadow mb-3">ユーザー登録</div>
      </div>
    </div>
  
    <div class="row">
      <div class="col-lg-6 offset-lg-3 font-weight-bold" style="text-align: left;">
        <form method="POST" action="{{ route('register') }}">
          @csrf
        
          {{-- ニックネームの登録 --}}
          <div class="form-group row mx-0">
            <label for="nickname">{{ __('【ニックネーム】' ) }}</label>
            <input id="nickname" type="text" class="form-control mx-2 @error('nickname') is-invalid @enderror" maxlength="10" name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname" autofocus 
            placeholder="10文字以内で入力" style="height: 1.5em; background-color:#000000; color:#FFFFFF">
            @error('nickname')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        
          {{-- 性別の登録 --}}
          <div>
            <label for="gender">{{ __('【性別】' ) }}</label>
          </div>
          <span class="radio-inline ml-2 mr-4">
            <label>
              <input type="radio" name="gender" value="male" {{ old('gender','male') == 'male' ? 'checked' : '' }}> 男
            </label>
          </span>
          <span class="radio-inline">
            <label>
              <input id="gender" type="radio" name="gender" value="female" {{ old('gender')? 'checked' : '' }}> 女
            </label>
          </span>
          <span class="form-group @if(!empty($errors->first('gender'))) has-error @endif">
            <span class="help-block">{{$errors->first('gender')}}</span>
          </span>
        
          {{-- 年代の登録 --}}
          <div class="form-group @if(!empty($errors->first('age'))) has-error @endif" >
            <div>
              <label for="age">{{ __('【年代】' ) }}</label>
            </div>
            <select id="age" type="text" class="mx-2" name="age" id="age" style="background-color:#000000; color:#FFFFFF;">
              <option value=""></option>
              <option value="10代">10代</option>
              <option value="20代">20代</option>
              <option value="30代">30代</option>
              <option value="40代">40代</option>
              <option value="50代">50代</option>
              <option value="60代">60代</option>
              <option value="70代">70代</option>
              <option value="80代">80代</option>
              <option value="90代">90代</option>
            </select>
            <span class="help-block">{{$errors->first('area')}}</span>
          </div>
        
          {{-- ログインIDの登録 --}}
          <div class="form-group row mx-0">
            <label for="name">{{ __('【ログインID】' ) }}</label>
            <input id="name" type="text" class="form-control mx-2 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="6文字以上で入力" style="height: 1.5em; background-color:#000000; color:#FFFFFF;">
            @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        
          {{-- パスワードの登録 --}}
          <div class="form-group row mx-0">
            <label for="password">{{ __('【パスワード】' ) }}</label>
            <input id="password" type="text" class="form-control mx-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="6文字以上で入力" style="height: 1.5em; background-color:#000000; color:#FFFFFF;">
            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        
          {{-- パスワード確認 --}}
          <div class="form-group row mx-0">
            <label for="password-confirm">{{ __('【パスワード（確認用）】' ) }}</label>
            <input id="password-confirm" type="text" class="form-control mx-2 @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" style="height: 1.5em; background-color:#000000; color:#FFFFFF;">
          </div>

          {{-- メールアドレスの登録 --}}
          <div class="form-group row mx-0">
            <label for="email">{{ __('【メールアドレス】' ) }}</label>
            <input id="email" type="email" class="form-control mx-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="メールアドレス" style="height: 1.5em; background-color:#000000; color:#FFFFFF;">
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          
          <div class="row">
            <div class="col text-center my-5">
              <button type="submit" class="btn btn-blue text-center btn-shadow">{{ __('登録') }}</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
    
    
  </div>
  
@endsection
 