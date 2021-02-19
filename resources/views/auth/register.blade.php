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
      <div class="col-lg-6 offset-lg-3 font-o-md" style="text-align: left;">
        <form method="POST" action="{{ route('register') }}">
        @csrf
        
          {{-- ニックネームの登録 --}}
          <div class="form-group row mx-0">
            <label for="nickname">{{ __('ニックネーム' ) }}</label>
            <input id="nickname" type="text" class="form-control  @error('nickname') is-invalid @enderror" maxlength="10" name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname" autofocus 
            placeholder="10文字以内で入力" style="height: 1.5em; background-color:#000000; color:#FFFFFF">
            @error('nickname')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        
          {{-- 性別の登録 --}}
          <div>
            <label for="gender">{{ __('性別' ) }}</label>
          </div>
          <span class="radio-inline mr-4">
            <label>
              <input type="radio" name="gender" value="男性" checked {{ old('gender') == '男性' ? 'checked' : '' }}> 男
            </label>
          </span>
          <span class="radio-inline">
            <label>
              <input id="gender" type="radio" name="gender" value="女性" {{ old('gender') == '女性' ? 'checked' : '' }}> 女
            </label>
          </span>
          {{--<span class="form-group @if(!empty($errors->first('gender'))) has-error @endif">
            <span class="help-block">{{$errors->first('gender')}}</span>
          </span>--}}
        
          {{-- 年代の登録 --}}
          <div class="form-group @if(!empty($errors->first('age'))) has-error @endif mt-2" >
            <div>
              <label for="age">{{ __('年代' ) }}</label>
            </div>
            <select id="age" type="text" class="@error('age') is-invalid @enderror " name="age" id="age" style="background-color:#000000; color:#FFFFFF;">
              <option value=""></option>
              <option value="10代" @if(old('age')=='10代') selected @endif>10代</option>
              <option value="20代" @if(old('age')=='20代') selected @endif>20代</option>
              <option value="30代" @if(old('age')=='30代') selected @endif>30代</option>
              <option value="40代" @if(old('age')=='40代') selected @endif>40代</option>
              <option value="50代" @if(old('age')=='50代') selected @endif>50代</option>
              <option value="60代" @if(old('age')=='60代') selected @endif>60代</option>
              <option value="70代" @if(old('age')=='70代') selected @endif>70代</option>
              <option value="80代" @if(old('age')=='80代') selected @endif>80代</option>
              <option value="90代以上" @if(old('age')=='90代以上') selected @endif>90代以上</option>
            </select>
            @error('age')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
            {{-- <span class="help-block">{{$errors->first('age')}}</span>--}}
          </div>
        
          {{-- ログインIDの登録 --}}
          <div class="form-group row mx-0">
            <label for="name">{{ __('ログインID' ) }}</label>
            <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="半角英数字6文字以上で入力" style="height: 1.5em; background-color:#000000; color:#FFFFFF;">
            @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        
          {{-- パスワードの登録 --}}
          <div class="form-group row mx-0">
            <label for="password">{{ __('パスワード' ) }}</label>
            <input id="password" type="text" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="半角英数字6文字以上で入力" style="height: 1.5em; background-color:#000000; color:#FFFFFF;">
            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        
          {{-- パスワード確認 --}}
          <div class="form-group row mx-0">
            <label for="password-confirm">{{ __('パスワード（確認用）' ) }}</label>
            <input id="password-confirm" type="text" class="form-control  @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" style="height: 1.5em; background-color:#000000; color:#FFFFFF;">
          </div>

          {{-- メールアドレスの登録 --}}
          <div class="form-group row mx-0">
            <label for="email">{{ __('メールアドレス' ) }}</label>
            <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="メールアドレス" style="height: 1.5em; background-color:#000000; color:#FFFFFF;">
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          
          <div class="row">
            <div class="col text-center mt-5">
              <button type="submit" class="btn btn-blue text-center btn-shadow">{{ __('登録') }}</button>
            </div>
          </div>
          
          <div class="row mt-3 mb-5">
            <div class="col text-center">
              <div>
                {{-- home(login前画面へ変更する） --}}
                <a class="btn btn-link" href="{{ action('Users\HomeController@homeBeforeLogin') }}" style="color:#DEEBF7;">
                  {{ __('前の画面に戻る') }}
                </a>
              </div>
            </div>
          </div>

        </form>
      </div>
    </div>
    
  </div>
  
@endsection
 