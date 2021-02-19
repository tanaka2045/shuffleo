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
        
            
    <form action="{{ route('diffence.layout') }}" method="post" enctype="multipart/form-data">


        <div class="row mx-0">
          {{-- 守備側のレイアウト開始 --}}
          <div class="col-9 offset-2 px-0">
            <div class="text-danger font-o-sm">
            
              @if ($errors ->any())
                @foreach($errors->all() as $e)
                    {{ $e }}
                @endforeach
              @endif
              
            </div>
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
                      @csrf
                      <div class="form-group pr-1 mb-0">
                        <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="diffenceLayout1" id="diffenceLayout1">
                          <option value="DNo0" disabled selected>{{ ('選択') }}</option>
                          <option value="DNo1" @if(old('diffenceLayout1')=='DNo1') selected @endif>{{ ('守1_'. $diffence_card_point_1) }}</option>
                          <option value="DNo2" @if(old('diffenceLayout1')=='DNo2') selected @endif>{{ ('守2_'. $diffence_card_point_2) }}</option>
                          <option value="DNo3" @if(old('diffenceLayout1')=='DNo3') selected @endif>{{ ('守3_'. $diffence_card_point_3) }}</option>
                          <option value="DNo4" @if(old('diffenceLayout1')=='DNo4') selected @endif>{{ ('守4_'. $diffence_card_point_4) }}</option>
                          <option value="DNo5" @if(old('diffenceLayout1')=='DNo5') selected @endif>{{ ('守5_'. $diffence_card_point_5) }}</option>
                        </select>
                      </div>
                    <div class="form-check">
                      <input class="form-check-input position-static" type="radio" name="openCard" id="openCard1" value="openCard1"
                        checked {{ old('openCard') =='openCard1' ? 'checked' : '' }}>
                    </div>
                  </div>
                </div>
                {{--守2--}}
                <div class="row mx-0">
                  <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                      <img src="../images/back_blue.png" style="max-width: 20%; height:auto;">
                      @csrf
                      <div class="form-group pr-1 mb-0">
                        <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="diffenceLayout2" id="diffenceLayout2">
                          <option value="DNo0" disabled selected>{{ ('選択') }}</option>
                          <option value="DNo1" @if(old('diffenceLayout2')=='DNo1') selected @endif>{{ ('守1_'. $diffence_card_point_1) }}</option>
                          <option value="DNo2" @if(old('diffenceLayout2')=='DNo2') selected @endif>{{ ('守2_'. $diffence_card_point_2) }}</option>
                          <option value="DNo3" @if(old('diffenceLayout2')=='DNo3') selected @endif>{{ ('守3_'. $diffence_card_point_3) }}</option>
                          <option value="DNo4" @if(old('diffenceLayout2')=='DNo4') selected @endif>{{ ('守4_'. $diffence_card_point_4) }}</option>
                          <option value="DNo5" @if(old('diffenceLayout2')=='DNo5') selected @endif>{{ ('守5_'. $diffence_card_point_5) }}</option>
                        </select>
                      </div>
                    <div class="form-check">
                      <input class="form-check-input position-static" type="radio" name="openCard" id="openCard2" value="openCard2"
                        {{ old('openCard') == 'openCard2' ? 'checked' : '' }}>
                    </div>
                  </div>
                </div>
                {{--守3--}}
                <div class="row mx-0">
                  <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                    <img src="../images/back_blue.png" style="max-width: 20%; height:auto;">
                      @csrf
                      <div class="form-group pr-1 mb-0">
                        <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="diffenceLayout3" id="diffenceLayout3">
                          <option value="DNo0" disabled selected>{{ ('選択') }}</option>
                          <option value="DNo1" @if(old('diffenceLayout3')=='DNo1') selected @endif>{{ ('守1_'. $diffence_card_point_1) }}</option>
                          <option value="DNo2" @if(old('diffenceLayout3')=='DNo2') selected @endif>{{ ('守2_'. $diffence_card_point_2) }}</option>
                          <option value="DNo3" @if(old('diffenceLayout3')=='DNo3') selected @endif>{{ ('守3_'. $diffence_card_point_3) }}</option>
                          <option value="DNo4" @if(old('diffenceLayout3')=='DNo4') selected @endif>{{ ('守4_'. $diffence_card_point_4) }}</option>
                          <option value="DNo5" @if(old('diffenceLayout3')=='DNo5') selected @endif>{{ ('守5_'. $diffence_card_point_5) }}</option>
                        </select>
                      </div>
                    <div class="form-check">
                      <input class="form-check-input position-static" type="radio" name="openCard" id="openCard3" value="openCard3"
                        {{ old('openCard') == 'openCard3' ? 'checked' : '' }}>
                    </div>
                  </div>
                </div>
                {{--守4--}}
                <div class="row mx-0">
                  <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                    <img src="../images/back_blue.png" style="max-width: 20%; height:auto;">
                      @csrf
                      <div class="form-group pr-1 mb-0">
                        <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="diffenceLayout4" id="diffenceLayout4">
                          <option value="DNo0" disabled selected>{{ ('選択') }}</option>
                          <option value="DNo1" @if(old('diffenceLayout4')=='DNo1') selected @endif>{{ ('守1_'. $diffence_card_point_1) }}</option>
                          <option value="DNo2" @if(old('diffenceLayout4')=='DNo2') selected @endif>{{ ('守2_'. $diffence_card_point_2) }}</option>
                          <option value="DNo3" @if(old('diffenceLayout4')=='DNo3') selected @endif>{{ ('守3_'. $diffence_card_point_3) }}</option>
                          <option value="DNo4" @if(old('diffenceLayout4')=='DNo4') selected @endif>{{ ('守4_'. $diffence_card_point_4) }}</option>
                          <option value="DNo5" @if(old('diffenceLayout4')=='DNo5') selected @endif>{{ ('守5_'. $diffence_card_point_5) }}</option>
                        </select>
                      </div>
                    <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="openCard" id="openCard4" value="openCard4"
                        {{ old('openCard') == 'openCard4' ? 'checked' : '' }}>
                    </div>
                  </div>
                </div>
                {{--守5--}}
                <div class="row mx-0">
                  <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                    <img src="../images/back_blue.png" style="max-width: 20%; height:auto;">
                      @csrf
                      <div class="form-group pr-1 mb-0">
                        <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="diffenceLayout5" id="diffenceLayout5">
                          <option value="DNo0" disabled selected>{{ ('選択') }}</option>
                          <option value="DNo1" @if(old('diffenceLayout5')=='DNo1') selected @endif>{{ ('守1_'. $diffence_card_point_1) }}</option>
                          <option value="DNo2" @if(old('diffenceLayout5')=='DNo2') selected @endif>{{ ('守2_'. $diffence_card_point_2) }}</option>
                          <option value="DNo3" @if(old('diffenceLayout5')=='DNo3') selected @endif>{{ ('守3_'. $diffence_card_point_3) }}</option>
                          <option value="DNo4" @if(old('diffenceLayout5')=='DNo4') selected @endif>{{ ('守4_'. $diffence_card_point_4) }}</option>
                          <option value="DNo5" @if(old('diffenceLayout5')=='DNo5') selected @endif>{{ ('守5_'. $diffence_card_point_5) }}</option>
                        </select>
                      </div>
                    <div class="form-check">
                      <input class="form-check-input position-static" type="radio" name="openCard" id="openCard5" value="openCard5"
                        {{ old('openCard') == 'openCard5' ? 'checked' : '' }}>
                    </div>
                  </div>
                </div>
             </div>
          </div>
         {{-- 守備側のレイアウト終了 --}}
        </div>
        
        {{-- ボタン設定 --}}
        <div class="row mx-0">
          <div class="col text-center my-4 px-0">
            <button type="button" class="btn btn-green text-center btn-shadow mx-2">リセット</button>
            <button type="submit" class="btn-green text-center btn-shadow mx-2">{{  __('セット')  }}</button>
            <a href="{{ action('Users\MatchController@matchMakeAccess') }}" role="button" tabindex="0" class="btn btn-blue text-center btn-shadow mx-2">登録</a>
          </div>
        </div>
      </form>
        
      </div>
    </div>
  </div>
  
@endsection
 