@extends('layouts.template')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center px-0">
        <div class="font-o-lg txt-shadow mt-2">新規対戦ルーム登録</div>
          {{-- プルダウン説明 --}}
        <p>
          <a data-toggle="collapse" class="border-bottom font-o-sm" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            設定方法
          </a>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="text-left" style=" font-size:11px; color: #FFFFFF;">
            <ul class="pl-3">
              <li>ドロップダウンメニューから５枚のカードが重複しないよう守備カードを選択（メニューは守No+カードポイントで表示）</li>
              <li>オープンカードを選択（デフォルトは最上段のカード）</li>
              <li>セットボタンでカード配置</li>
              <li>確定ボタンで登録完了</li>
            </ul>
          </div>
        </div>

        <div class="row mx-0">
          {{-- 守備側のレイアウト開始 --}}
          <div class="col-9 offset-2 px-0">
            <form action="">
              @csrf
              <div class="form-group pr-1 mb-0">
                      
              <div class="row mx-0">
                <div class="col-4 offset-8 font-o-esm text-left pl-3 pr-0">オープン<br>カード
                </div>
              </div>
                {{--守1--}}
                <div class="row mx-0">
                  <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                    <img src="../images/back_blue.png" style="max-width: 20%; height:auto;">
                    <form action="">
                      @csrf
                      <div class="form-group pr-1 mb-0">
                        <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="diffencePoint1" id="diffencePoint1">
                          <option value="DNo0" disabled selected>{{ ('選択') }}</option>
                          <option value="DNo1">{{ ('守1_'. $diffence_card_point_1) }}</option>
                          <option value="DNo2">{{ ('守2_'. $diffence_card_point_2) }}</option>
                          <option value="DNo3">{{ ('守3_'. $diffence_card_point_3) }}</option>
                          <option value="DNo4">{{ ('守4_'. $diffence_card_point_4) }}</option>
                          <option value="DNo5">{{ ('守5_'. $diffence_card_point_5) }}</option>
                        </select>
                      </div>
                    </form>
                    <div class="form-check">
                      <input class="form-check-input position-static" type="radio" name="openCard" id="openCard1" value="openCard1" checked>
                    </div>
                  </div>
                </div>
                {{--守2--}}
                <div class="row mx-0">
                  <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                      <img src="../images/back_blue.png" style="max-width: 20%; height:auto;">
                    <form action="">
                      @csrf
                      <div class="form-group pr-1 mb-0">
                        <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="diffencePoint2" id="diffencePoint2">
                          <option value="DNo0" disabled selected>{{ ('選択') }}</option>
                          <option value="DNo1">{{ ('守1_'. $diffence_card_point_1) }}</option>
                          <option value="DNo2">{{ ('守2_'. $diffence_card_point_2) }}</option>
                          <option value="DNo3">{{ ('守3_'. $diffence_card_point_3) }}</option>
                          <option value="DNo4">{{ ('守4_'. $diffence_card_point_4) }}</option>
                          <option value="DNo5">{{ ('守5_'. $diffence_card_point_5) }}</option>
                        </select>
                      </div>
                    </form>
                    <div class="form-check">
                      <input class="form-check-input position-static" type="radio" name="openCard" id="openCard2" value="openCard2">
                    </div>
                  </div>
                </div>
                {{--守3--}}
                <div class="row mx-0">
                  <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                    <img src="../images/back_blue.png" style="max-width: 20%; height:auto;">
                    <form action="">
                      @csrf
                      <div class="form-group pr-1 mb-0">
                        <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="diffencePoint3" id="diffencePoint3">
                          <option value="DNo0" disabled selected>{{ ('選択') }}</option>
                          <option value="DNo1">{{ ('守1_'. $diffence_card_point_1) }}</option>
                          <option value="DNo2">{{ ('守2_'. $diffence_card_point_2) }}</option>
                          <option value="DNo3">{{ ('守3_'. $diffence_card_point_3) }}</option>
                          <option value="DNo4">{{ ('守4_'. $diffence_card_point_4) }}</option>
                          <option value="DNo5">{{ ('守5_'. $diffence_card_point_5) }}</option>
                        </select>
                      </div>
                    </form>
                    <div class="form-check">
                      <input class="form-check-input position-static" type="radio" name="openCard" id="openCard3" value="openCard3">
                    </div>
                  </div>
                </div>
                {{--守4--}}
                <div class="row mx-0">
                  <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                    <img src="../images/back_blue.png" style="max-width: 20%; height:auto;">
                    <form action="">
                      @csrf
                      <div class="form-group pr-1 mb-0">
                        <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="diffencePoint4" id="diffencePoint4">
                          <option value="DNo0" @if(old('diffencePoint4')=='DNo0') selected @endif>{{ ('選択') }}</option>
                          <option value="DNo1" @if(old('diffencePoint4')=='DNo1') selected @endif>{{ ('守1_'. $diffence_card_point_1) }}</option>
                          <option value="DNo2" @if(old('diffencePoint4')=='DNo2') selected @endif>{{ ('守2_'. $diffence_card_point_2) }}</option>
                          <option value="DNo3" @if(old('diffencePoint4')=='DNo3') selected @endif>{{ ('守3_'. $diffence_card_point_3) }}</option>
                          <option value="DNo4" @if(old('diffencePoint4')=='DNo4') selected @endif>{{ ('守4_'. $diffence_card_point_4) }}</option>
                          <option value="DNo5" @if(old('diffencePoint4')=='DNo5') selected @endif>{{ ('守5_'. $diffence_card_point_5) }}</option>
                        </select>
                      </div>
                    </form>
                    <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="openCard" id="openCard4" value="openCard4">
                    </div>
                  </div>
                </div>
                {{--守5--}}
                <div class="row mx-0">
                  <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                    <img src="../images/back_blue.png" style="max-width: 20%; height:auto;">
                    <form action="">
                      @csrf
                      <div class="form-group pr-1 mb-0">
                        <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="diffencePoint5" id="diffencePoint5">
                          <option value="DNo0" disabled selected>{{ ('選択') }}</option>
                          <option value="DNo1">{{ ('守1_'. $diffence_card_point_1) }}</option>
                          <option value="DNo2">{{ ('守2_'. $diffence_card_point_2) }}</option>
                          <option value="DNo3">{{ ('守3_'. $diffence_card_point_3) }}</option>
                          <option value="DNo4">{{ ('守4_'. $diffence_card_point_4) }}</option>
                          <option value="DNo5">{{ ('守5_'. $diffence_card_point_5) }}</option>
                        </select>
                      </div>
                    </form>
                    <div class="form-check">
                      <input class="form-check-input position-static" type="radio" name="openCard" id="openCard5" value="openCard5">
                    </div>
                  </div>
                </div>
             </div>
            </form>
          </div>
         {{-- 守備側のレイアウト終了 --}}
        </div>
        
        {{-- ボタン設定 --}}
        <div class="row mx-0">
          <div class="col text-center my-4 px-0">
            <button type="button" class="btn btn-green text-center btn-shadow mx-2">リセット</button>
            <a href="{{ action('Users\MatchController@matchDiffenceLayout') }}" role="button" tabindex="0" class="btn btn-green text-center btn-shadow mx-2">セット</a>
            <a href="{{ action('Users\MatchController@matchMakeAccess') }}" role="button" tabindex="0" class="btn btn-blue text-center btn-shadow mx-2">登録</a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
@endsection
 