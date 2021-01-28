@extends('layouts.template')

@section('content')
    
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="font-o-lg txt-shadow mt-3 mb-3">ユーザーホーム</div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6 mb-5 px-4">
        <div class="font-o-md txt-shadow mb-2">ユーザーステータス</div>
        <div class="bg-nav-base btn-shadow font-o-sm" style="border-radius: 0.25rem; border:1px solid #F2F2F2">
          <table class="table table-bordered table-sm mt-3 mb-2">
            <tbody>
              <tr class="table-transparent">
                <th scope="row" class="txt-shadow">ユーザー名</th>
                <td class="bg-status">あいうえおかきくけこ</td>
              </tr>
              <tr class="table-transparent">
                <th scope="row" class="txt-shadow">性別</th>
                <td class="bg-status">男性</td>
              </tr>
              <tr class="table-transparent">
                <th scope="row" class="txt-shadow">年齢</th>
                <td class="bg-status">30代</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered table-sm">
            <tbody>            
              <tr class="table-transparent">
                <th scope="row" class="txt-shadow">レート</th>
                <td class="bg-status">1500</td>
              </tr>
              <tr class="table-transparent">
                <th scope="row" class="txt-shadow">トータル対戦数</th>
                <td class="bg-status">140</td>
              </tr>
              <tr class="table-transparent">
                <th scope="row" class="txt-shadow">トータル勝率</th>
                <td class="bg-status">42.9%</td>
              </tr>
              <tr class="table-transparent">
                <th scope="row" class="txt-shadow">現ターム対戦数</th>
                <td class="bg-status">80</td>
              </tr>
              <tr class="table-transparent">
                <th scope="row" class="txt-shadow">現ターム勝率</th>
                <td class="bg-status">57.1%</td>
              </tr>
              <tr class="table-transparent">
                <th scope="row" class="txt-shadow">現ターム残対戦数</th>
                <td class="bg-status">20</td>
              </tr>
              <tr class="table-transparent">
                <th scope="row" class="txt-shadow">過去最高ターム勝率</th>
                <td class="bg-status">54.5%</td>
              </tr>   
            </tbody>
          </table>
          <div class="text-center">
            <button type="button" class="btn btn-gray-blue btn-shadow font-o-esm mb-3" style="text-align: center; width: 90%;">次タームへ</button>
          </div>
          <div class="mb-3">
           <a class="border-bottom font-o-esm txt-shadow" href="{{ action('Users\MatchController@matchResultAccess') }}">閲覧していない対戦結果
           </a>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 px-0 mb-3">
        <div class="font-o-md txt-shadow">カードステータス</div>
        <div class="row mx-0">
          {{-- 攻撃カードのレイアウト開始--}}
          <div class="col-5 offset-1 px-0">
            <div class="font-o-sm txt-shadow mt-2 mb-1" style="color:#FFCADC;">攻撃カード
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <div class="font-o-esm" style="font-weight: normal;">攻カードNo1</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/10_red.png" style="max-width: 52%; height:auto;">
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
                <img src="../images/20_red.png" style="max-width: 52%; height:auto;">
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
                <img src="../images/30_red.png" style="max-width: 52%; height:auto;">
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
                <img src="../images/40_red.png" style="max-width: 52%; height:auto;">
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
                <img src="../images/50_red.png" style="max-width: 52%; height:auto;">
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
            <div class="font-o-sm txt-shadow mt-2 mb-1" style="color: #C9D3F6;">守備カード
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <div class="font-o-esm" style="font-weight: normal;">守カードNo1</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/10_blue.png" style="max-width: 52%; height:auto;">
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
                <img src="../images/20_blue.png" style="max-width: 52%; height:auto;">
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
                <img src="../images/30_blue.png" style="max-width: 52%; height:auto;">
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
                <img src="../images/40_blue.png" style="max-width: 52%; height:auto;">
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
                <img src="../images/60_blue.png" style="max-width: 52%; height:auto;">
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
            <span class="font-o-sm">チップ数:</span>
            <span class="font-o-elg text-dark bg-light">20</span>
            <button type="button" class="btn btn-green text-center btn-shadow ml-3 mr-0">リセット</button>
            <button type="button" class="btn btn-blue text-center btn-shadow ml-1">確定</button>
            @csrf
          </div>
         </div>
        {{--カードポイント更新ボタン 終了--}}
      </div>
  　</div>
  　
  　{{-- 戦績テーブル --}}
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="font-o-md txt-shadow"><詳細>トータル戦績</div>
          <table class="table table-o-bordered table-sm btn-shadow text-white font-o-sm">
            <thead class="bg-nav-base">
              <tr>
                <th></th>
                <th>攻撃時</th>
                <th>守備時</th>
                <th>計</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="bg-nav-base">対戦数</th>
                <td class="bg-status">80</td>
                <td class="bg-status">60</td>
                <td class="bg-status" style="border-right-color: #dee2e6;">140</td>
              </tr>
              <tr>
                <th scope="row" class="bg-nav-base">勝ち数</th>
                <td class="bg-status">40</td>
                <td class="bg-status">20</td>
                <td class="bg-status" style="border-right-color: #dee2e6;">60</td>
              </tr>
              <tr>
                <th scope="row" class="bg-nav-base">負け数</th>
                <td class="bg-status">40</td>
                <td class="bg-status">40</td>
                <td class="bg-status" style="border-right-color: #dee2e6;">80</td>
              </tr>
              <tr>
                <th scope="row" class="bg-nav-base">勝率</th>
                <td class="bg-status" style="border-bottom-color: #dee2e6;">50.0%</td>
                <td class="bg-status" style="border-bottom-color: #dee2e6;">33.3%</td>
                <td class="bg-status" style="border-right-color: #dee2e6; border-bottom-color: #dee2e6;">42.9%</td>
              </tr>            
            </tbody>
          </table>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6 offset-md-3 mb-5">
        <div class="font-o-md txt-shadow"><詳細>現ターム戦績</div>
        <table class="table table-o-bordered table-sm btn-shadow text-white font-o-sm">
            <thead class="bg-nav-base">
              <tr>
                <th></th>
                <th>攻撃時</th>
                <th>守備時</th>
                <th>計</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="bg-nav-base">対戦数</th>
                <td class="bg-status">80</td>
                <td class="bg-status">60</td>
                <td class="bg-status" style="border-right-color: #dee2e6;">140</td>
              </tr>
              <tr>
                <th scope="row" class="bg-nav-base">勝ち数</th>
                <td class="bg-status">40</td>
                <td class="bg-status">20</td>
                <td class="bg-status" style="border-right-color: #dee2e6;">60</td>
              </tr>
              <tr>
                <th scope="row" class="bg-nav-base">負け数</th>
                <td class="bg-status">40</td>
                <td class="bg-status">40</td>
                <td class="bg-status" style="border-right-color: #dee2e6;">80</td>
              </tr>
              <tr>
                <th scope="row" class="bg-nav-base">勝率</th>
                <td class="bg-status" style="border-bottom-color: #dee2e6;">50.0%</td>
                <td class="bg-status" style="border-bottom-color: #dee2e6;">33.3%</td>
                <td class="bg-status" style="border-right-color: #dee2e6; border-bottom-color: #dee2e6;">42.9%</td>
              </tr>            
            </tbody>
          </table>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <div class="btn-group-vertical">
          <a href="{{ action('Users\StatisticController@rankingTotalAccess') }}" role="button" tabindex="0" class="btn btn-blue text-center btn-shadow mt-3">ランキング</a>
          <a href="{{ action('Users\MatchController@matchHistoryAccess') }}" role="button" tabindex="0" class="btn btn-blue text-center btn-shadow mb-5">対戦履歴</a>
        </div>
      </div>
    </div>
     

  </div>
@endsection
 