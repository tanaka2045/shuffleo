@extends('layouts.templateWoNav')

@include('layouts.titleImage')

@section('content')
    
  <div class="container">
    
    <div class="row">
      <div class="col text-center pt-3">
        <div class="font-o-lg txt-shadow mb-4"></div>
      </div>
    </div>
  
    <form method="POST" action="{{ route('login') }}">
    @csrf
      
      <div class="row">
        <div class="font-o-md col-lg-6 offset-lg-3" style="text-align: left;">
        
          <div class="form-group row mx-0">
            <label for="name">{{ __('ログインID') }}</label>
            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="半角英数字6文字以上で入力" style="height: 1.5em; background-color:#000000; color:#FFFFFF;">
            @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group row mx-0">
            <label for="password">{{ __('パスワード') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="半角英数字6文字以上で入力" style="height: 1.5em; background-color:#000000; color:#FFFFFF;">
            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          
          <div class="form-group row mx-0 mt-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember">
                  {{ __('ログイン状態を保存する') }}
              </label>
            </div>
          </div>
          
        </div>
      </div>
    
      <div class="row mt-5 mb-2">
        <div class="col text-center">
          <button type="submit" class="btn btn-blue text-center btn-shadow">{{ __('ログイン') }}</button>
            <div>
            @if (Route::has('password.request'))
              <a class="btn btn-link mt-2" href="{{ route('password.request') }}" style="color:#DEEBF7;">
                {{ __('パスワードお忘れの方') }}
              </a>
            @endif
              
            </div>
        </div>
      </div>

    </form>
  </div>
  
@endsection
 