@extends('layouts.template')

@section('content')
    
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="font-o-elg txt-shadow mt-3 mb-3">ユーザーホーム</div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6 mb-5 px-4">
        <div class="font-o-md mb-2" style="color:#BFCBD7;">ユーザーステータス</div>
        <div class="bg-black-gradient btn-shadow font-o-sm-norm px-1 pt-2" style="border-radius: 0.1rem; border:1px solid transparent">
          <table class="table table-sm mb-1">
            <tbody>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;">ユーザー名</th>
                <td class="bg-status">{{ $user->nickname }}</td>
              </tr>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;" >性別</th>
                <td class="bg-status">{{ $user->gender }}</td>
              </tr>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;" >年齢</th>
                <td class="bg-status">{{ $user->age }}</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered table-sm mb-1">
            <tbody>            
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;" >レート</th>
                <td class="bg-status">{{ str_replace(',','', number_format($user->elorate,0)) }}</td>
              </tr>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;" >トータル対戦数</th>
                <td class="bg-status">{{ $total_count }}</td>
              </tr>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;" >トータル勝率</th>
                <td class="bg-status">{{ number_format($total_win_rate,1)."%" }}</td>
              </tr>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;" >現ターム対戦数</th>
                <td class="bg-status">{{ $current_count }}</td>
              </tr>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;" >現ターム勝率</th>
                <td class="bg-status">{{ number_format($current_win_rate,1)."%" }}</td>
              </tr>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;" >現ターム残対戦数</th>
                <td class="bg-status">{{ $residual_count }}</td>
              </tr>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;" >過去最高ターム勝率</th>
                <td class="bg-status">
                  @if ($current_term_count == 1)
                    {{ __('データ無し') }}
                  @else
                    {{ number_format($user->best_term_win_rate,1)."%" }}</td>
                  @endif
              </tr>   
            </tbody>
          </table>
          <div class="row text-center">
            <div class="col mb-2">
              {{ __('本日、残り') }}{{ 10-$day_match_count }}{{ __(' 対戦可能です') }}
            </div>
          </div>
          <div class="row text-center mx-0">
            <div class="col-6 px-1">
              <a href="{{ action('Users\HomeController@userMatchDetailedAccess') }}" role="button" tabindex="0" class="btn btn-gray-blue btn-shadow font-o-esm-norm mb-3 mx-1">成績 詳細</a>
            </div>
            <div class="col-6 px-1">
              @if ($term_end_point == 2)
                <a href="{{ action('Users\HomeController@toNextTerm') }}" role="button" class="btn btn-gray-blue btn-shadow font-o-esm mb-3">次タームへ</a>
              @else
                <button type="button" class="btn btn-gray-blue btn-shadow font-o-esm mb-3" disabled>次タームへ</button>
              @endif
            </div>
          </div>
          <div class="mb-3">
            @if ($not_accessed_count > 0)
            <a class="border-bottom font-o-esm" href="{{ action('Users\MatchController@matchHistoryAccess') }}">閲覧していない対戦結果
            </a>
            @endif
          </div>
        </div>
      </div>
      
      <div class="col-md-6 px-0 mb-3">
        <div class="font-o-md" style="color:#BFCBD7;">カードステータス</div>
        <div class="row mx-0">
          {{-- 攻撃カードのレイアウト開始--}}
          <div class="col-5 offset-1 px-0">
            <div class="font-o-sm mt-2 mb-1" style="color:#FFCADC;">攻撃カード
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <div class="font-o-esm" style="font-weight: normal;">攻カードNo1</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/10_red.png" style="max-width: 40%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>
            
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <div class="font-o-esm" style="font-weight: normal;">攻カードNo2</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/20_red.png" style="max-width: 40%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>            
 
             <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <div class="font-o-esm" style="font-weight: normal;">攻カードNo3</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/30_red.png" style="max-width: 40%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>                   
 
             <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <div class="font-o-esm" style="font-weight: normal;">攻カードNo4</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/40_red.png" style="max-width: 40%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>               
                
             <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <div class="font-o-esm" style="font-weight: normal;">攻カードNo5</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/50_red.png" style="max-width: 40%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>
            
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <div class="font-o-sm txt-shadow" style="color:#FFCADC;">計 150pt
                </div>
              </div>
            </div>
          </div>
          {{-- 攻撃カードのレイアウト終了--}}
          
          {{-- 守備カードのレイアウト開始--}}
          <div class="col-5 px-0">
            <div class="font-o-sm mt-2 mb-1" style="color: #C9D3F6;">守備カード
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <div class="font-o-esm" style="font-weight: normal;">守カードNo1</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/10_blue.png" style="max-width: 40%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>
            
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <div class="font-o-esm" style="font-weight: normal;">守カードNo2</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/20_blue.png" style="max-width: 40%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>            
 
             <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <div class="font-o-esm" style="font-weight: normal;">守カードNo3</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/30_blue.png" style="max-width: 40%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>                   
 
             <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <div class="font-o-esm" style="font-weight: normal;">守カードNo4</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/40_blue.png" style="max-width: 40%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>               
                
             <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <div class="font-o-esm" style="font-weight: normal;">守カードNo5</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/60_blue.png" style="max-width: 40%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                  
                </div>
            </div>
            
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <div class="font-o-sm txt-shadow"  style="color: #C9D3F6;">計 160pt
                </div>
              </div>
            </div>
           {{-- 守備カードのレイアウト終了--}}           
          </div>
        </div>
        {{--カードポイント更新ボタン　開始--}}
        <div class="row mx-0">
          <div class="col text-center mt-3">
            <span class="font-o-sm-norm">チップ数:</span>
            <span class="font-o-elg-norm text-dark bg-light px-1">{{ $tip_count }}</span>
            <button type="button" class="btn btn-green text-center btn-shadow ml-3 mr-0">リセット</button>
            <button type="button" class="btn btn-blue text-center btn-shadow ml-1">確定</button>
            @csrf
          </div>
         </div>
        {{--カードポイント更新ボタン 終了--}}
      </div>
  　</div>
  　
  　{{-- ランキングおよび対戦履歴への遷移ボタン --}}
    <div class="row">
      <div class="col text-center">
        <div class="btn-group-vertical">
          <a href="{{ action('Users\StatisticController@rankingRateAccess') }}" role="button" class="btn btn-blue text-center btn-shadow">ランキング</a>
          <a href="{{ action('Users\MatchController@matchHistoryAccess', $user->id) }}" role="button" class="btn btn-blue text-center btn-shadow mb-5">対戦履歴</a>
        </div>
      </div>
    </div>
     

  </div>
@endsection
 