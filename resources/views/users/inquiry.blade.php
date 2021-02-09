@extends('layouts.template')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col font-o-lg txt-shadow text-center my-3">{{ __('問い合わせ')}}</div>
    </div>

    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center">
        <form method="POST" action="{{ route('inquiry.confirm') }}">
          @csrf
          
          <div class="form-group row mx-0">
            <label for="email_inquiry"></label>
            <input id="email_inquiry" type="email_inquiry" class="form-control  @error('email_inquiry') is-invalid @enderror" name="email_inquiry" value="{{ old('email_inquiry') }}" required autocomplete="email_inquiry" placeholder="メールアドレスを入力" style="height: 1.5em;">
            @error('email_inquiry')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
  
           <div class="form-group row mx-0">
            <label for="title_inquiry"></label>
            <input id="title_inquiry" type="title_inquiry" class="form-control  @error('title_inquiry') is-invalid @enderror" name="title_inquiry" value="{{ old('title_inquiry') }}" required autocomplete="title_inquiry" placeholder="タイトルを入力" style="height: 1.5em;">
            @error('title_inquiry')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
  
          <div class="form-group row mx-0">
            <textarea class="form-control" name="body_inquiry" rows="10" placeholder="お問い合わせ内容を入力" >{{ old('body_inquiry') }}</textarea>
            @error('body_inquiry')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          
          <button type="submit" class="btn btn-blue">{{ __('入力内容確認') }}
          </button>
          
        </form>
      </div>
    </div>
    
    
  </div>
@endsection
 