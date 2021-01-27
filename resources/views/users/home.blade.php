@extends('layouts.template')

@include('layouts.titleImage')

@section('content')
    
  <div class="container-fluid">
    <div class="row">
      
      <div class="col title_comment text-center txt-shadow my-5" >
        <span>中期的戦略が必要な<br>オンライン対戦型<br>ハイアンドローゲームです</span>
      </div>
    </div>
  
    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center mt-5">
        <a href="{{ action('Users\HelpMessageController@announceAccess') }}" class="font-o-md txt-shadow border-bottom" style="margin-bottom: 20px;">インフォメーション</a>
        <div class="cardtext-black border-0 mt-3" style="background-color: transparent;">
          <h5 class="font-o-sm">21/1/13　　作成中　まだ遊べません</h5>
          <h5 class="font-o-sm">21/1/12　　コメントサンプルYYY</h5>
           {{--@foreach($posts as $news)
            <tr>
              <th>{{ $news->id }}</th>
              <td>{{ \Str::limit($news->title, 100) }}</td>
              <td>{{ \Str::limit($news->body, 250) }}</td>
            </tr>
          @endforeach--}}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <div class="btn-group-vertical">
          <a href="{{ action('Users\StatisticController@rankingTotalAccess') }}" role="button" class="btn btn-blue btn-shadow mt-4" style="text-align: center;">ランキング</a>
          <a href="{{ action('Users\MatchController@matchHistoryAccess') }}" role="button"  class="btn btn-blue btn-shadow mb-2" style="text-align: center;">対戦履歴</a>
        </div>
      </div>
    </div>
  </div>
    
                
@endsection
 