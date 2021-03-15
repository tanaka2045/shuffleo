@extends('layouts.template')

@section('content')
    
  <div class="container">
    <div class="row">
      <div class="col font-o-lg-norm txt-shadow text-center my-3">ランキング</div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3 font-o-sm px-0">
        <div class="d-flex justify-content-start">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link" href="{{ action('Users\StatisticController@rankingRateAccess') }}">レート</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ action('Users\StatisticController@rankingTermAccess') }}">過去ターム勝率</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ action('Users\StatisticController@rankingTotalAccess') }}">トータル勝率</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
   <div class="row">
      <div class="col-md-6 offset-md-3 px-0">
        <table class="table table-sm btn-shadow"  align="center" style="font-size: 0.9em; margin-x: 0px;">
          <thead class="thead-navcolor text-center">
            <tr>
              <th scope="col" class="align-middle" style="border: 1px solid #001F5C;">順位</th>
              <th scope="col" class="align-middle" style="border: 1px solid #001F5C;">ユーザー名</th>
              <th scope="col" class="align-middle" style="border: 1px solid #001F5C;">過去ターム勝率</th>
            </tr>
          </thead>
          <tbody>
           @foreach($ranks as $rank)
            @php
              $rank_counter++;
            @endphp
              <tr class="table-ranking">
                @if ($rank_counter == 1)
                  <th scope="row" class="color-gold align-middle font-o-lg-norm txt-shadow-dark p-0">{{ ($rank_counter)  }}</th>
                @elseif ($rank_counter == 2)
                  <th scope="row" class="color-silver align-middle font-o-lg-norm txt-shadow-dark p-0">{{ ($rank_counter)  }}</th>
                @elseif ($rank_counter == 3)
                  <th scope="row" class="color-blonze align-middle font-o-lg-norm txt-shadow-dark p-0">{{ ($rank_counter)  }}</th>
                @else
                  <th scope="row" class="bg-nav-base-gradient text-white">{{ ($rank_counter)  }}</th>
                @endif
                <td><a href="{{ action('Users\OtherUserController@otherUserAccess', $rank->id) }}" class="font-o-sm-norm" style="text-decoration:underline; color:#FFFFFF;" > 
                  {{ $rank->nickname }}</a></td>
                <td class="font-o-sm-norm" style="color:#FFFFFF;">{{ number_format($rank->best_term_win_rate,1)."%" }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div> 
    </div>
    <div class="row">
      <div class="col font-o-esm-norm text-white mb-3">{{ __('過去ターム勝率は次ターム開始時に反映されます') }}</div>
    </div>
    
  </div>
                
@endsection
 