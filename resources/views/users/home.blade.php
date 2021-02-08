@extends('layouts.template')

@include('layouts.titleImage')

@section('content')
    
  <div class="container-fluid">
    <div class="row">
      
      <div class="col title_comment text-center txt-shadow my-5" >
        <span>中期的戦略が必要な<br>オンライン対戦型<br>ハイアンドローゲームです</span>
      </div>
    </div>
  
    <div class="row mx=0">
      <div class="col-lg-6 offset-lg-3 text-center mt-3">
        <a href="{{ action('Users\HelpMessageController@announceAccess') }}" class="font-o-md border-bottom" style="margin-bottom: 20px;">インフォメーション</a>
        <div class="cardtext-black border-0 mt-3" style="background-color: transparent;">
          @foreach($extract as $announce)
            <div class="font-o-sm-norm">
              {{ $announce->date }}　{{ $announce->title }}
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="row mx-0">
      <div class="col text-center">
        <div class="btn-group-vertical my-4">
          <a href="{{ action('Users\StatisticController@rankingTotalAccess') }}" role="button" class="btn btn-blue btn-shadow mx-0" style="text-align: center;">{{ __('ランキング') }}</a>
          <a href="{{ action('Users\MatchController@matchHistoryAccess') }}" role="button"  class="btn btn-blue btn-shadow mx-0" style="text-align: center;">{{ __('対戦履歴') }}</a>
        </div>
      </div>
    </div>
        
    <div class="row mx-0">
      <div class="col font-o-sm mb-5">
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" class="border-bottom" style="color:#DEEBF7;">{{ __('ログアウト') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        </div> 
    </div>
        
        
      </div>
    </div>
  </div>
    
                
@endsection
 