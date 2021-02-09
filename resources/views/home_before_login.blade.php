@extends('layouts.templateWoNavWoFooter')

@include('layouts.titleImage')

@section('content')
    
  <div class="container-fluid">
    <div class="row">
      
      <div class="col title_comment text-center txt-shadow my-5" >
        <span>中期的戦略が必要な<br>オンライン対戦型<br>ハイアンドローゲームです</span>
      </div>
    </div>
  
    <div class="row">
      <div class="col text-center">
        <div class="btn-group-vertical">
        <a href="{{ route('register') }}" role="button" class="btn btn-blue btn-shadow mt-5" style="text-align: center;">{{ __('はじめから') }}</a>
        <a href="{{ route('login') }}" role="button" class="btn btn-blue btn-shadow" style="text-align: center;">{{ __('つづきから') }}</a>
        </div>
      </div>
    </div>
  </div>
    
@endsection
 