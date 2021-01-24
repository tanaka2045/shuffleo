@extends('layouts.template')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col font-o-lg txt-shadow text-center my-3">ランキング</div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3 font-o-md px-0">
        <div class="d-flex justify-content-start">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="{{ action('StatisticController@rankingTotalAccess') }}">トータル勝率</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ action('StatisticController@rankingTermAccess') }}">ターム勝率</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ action('StatisticController@rankingRateAccess') }}">レート</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    @component('layouts.ranking')
    @endcomponent
  
  </div>
  
@endsection
