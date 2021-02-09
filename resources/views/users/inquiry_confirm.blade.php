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
          
          <div>
            <label>メールアドレス</label>
            {{ $inputs['email_inquiry'] }}
            <input name="email_inquiry" value="{{ $inputs['email_inquiry'] }}" type="hidden">
          </div>
          
          <div>
            <label>タイトル</label>
            {{ $inputs['title_inquiry'] }}
            <input name="title_inquiry" value="{{ $inputs['title_inquiry'] }}" type="hidden">
          </div>
      
          <div>
            <label>お問い合わせ内容</label>
            {!! nl2br(e($inputs['body_inquiry'])) !!}
            <input name="body_inquiry" value="{{ $inputs['body_inquiry'] }}" type="hidden">
          </div>
      
          <button type="submit" name="action" value="back">
              入力内容修正
          </button>
          <button type="submit" name="action" value="submit">
              送信する
          </button>
      </form>





      </div>
    </div>
    
    
  </div>
@endsection
 