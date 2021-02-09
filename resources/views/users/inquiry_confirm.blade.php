@extends('layouts.template')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col font-o-lg txt-shadow text-center my-3">{{ __('問い合わせ')}}</div>
    </div>

    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center">
        <form method="POST" action="{{ route('inquiry.send') }}">
          @csrf
          
          <div class="form-group row mx-0">
            <label>{{ __('メールアドレス')}}</label>
            <input name="email_inquiry" class="form-control" value="{{ $inputs['email_inquiry'] }}" style="height: 1.5em;" readonly>
          </div>
          
          <div class="form-group row mx-0">
            <label>{{ __('タイトル')}}</label>
            <input name="title_inquiry" class="form-control" value="{{ $inputs['title_inquiry'] }}" style="height: 1.5em;" readonly>
          </div>
      
          <div class="form-group row mx-0">
            <label>{{ __('お問い合わせ内容')}}</label>
            <textarea name="body_inquiry" class="form-control" rows="10" value="{{ $inputs['body_inquiry'] }}" readonly>{{ $inputs['body_inquiry'] }}</textarea>
          </div>
      
          <button type="button" onclick="history.back()">{{ __('入力内容修正')}}</button>
          <button type="submit btn-primary" name="action" value="submit">{{ __('送信')}}</button>
        </form>
      </div>
    </div>
    
  </div>
@endsection
 