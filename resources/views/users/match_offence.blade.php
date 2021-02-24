@extends('layouts.templateWoNavWoFooter')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center px-0">
        <div class="font-o-lg txt-shadow my-2">対戦ルーム</div>
        <p>
          <a data-toggle="collapse" class="border-bottom font-o-sm" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            設定方法
          </a>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="text-left" style=" font-size:11px; color: #FFFFFF;">
            <ul class="pl-3">
              <li>ドロップダウンメニューから５枚のカードが重複しないよう攻撃カードを選択（メニューは攻No+カードポイントで表示）</li>
              <li>セットボタンで実際のカードレイアウト（表面）を表示</li>
              <li>必要に応じてリセットボタンで初期状態に戻すこともできます</li>
              <li>対戦ボタンで対戦画面へ（対戦ボタンを押すまではカード選択は変更可能）</li>
            </ul>
          </div>
        </div>
        <div class="row">          
          <div class="col text-center text-danger font-o-sm">
            @if ($errors ->any())
              @foreach($errors->all() as $e)
                  {{ $e }}
              @endforeach
            @endif
          </div>
        </div>
        
        <form action="{{ route('offence.layout') }}" method="post" enctype="multipart/form-data">
          <div class="row mx-0">
            
            {{-- 攻撃側のレイアウト開始 --}}
            <div class="col-6 px-0">
              <div class="row mx-0">
                <div class="col mb-3 font-o-sm txt-shadow">
                  {{ $offence_nickname }}
                </div>
              </div>
              {{--攻1--}}
              <div class="row mx-0">
                <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                    @csrf
                    <div class="form-group pr-1">
                      <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="offenceLayout1" id="offenceLayout1">
                        <option value="ONo0" disabled selected>{{ ('選択') }}</option>
                        <option value="ONo1" @if(old('offenceLayout1')=='ONo1') selected @endif>{{ ('攻1_'. $offence_card_point_1) }}</option>
                        <option value="ONo2" @if(old('offenceLayout1')=='ONo2') selected @endif>{{ ('攻2_'. $offence_card_point_2) }}</option>
                        <option value="ONo3" @if(old('offenceLayout1')=='ONo3') selected @endif>{{ ('攻3_'. $offence_card_point_3) }}</option>
                        <option value="ONo4" @if(old('offenceLayout1')=='ONo4') selected @endif>{{ ('攻4_'. $offence_card_point_4) }}</option>
                        <option value="ONo5" @if(old('offenceLayout1')=='ONo5') selected @endif>{{ ('攻5_'. $offence_card_point_5) }}</option>
                      </select>
                    </div>
                    <img src="../images/back_red.png" style="max-width: 30%; height:auto;">
                </div>
              </div>
              {{--攻2--}}            
              <div class="row mx-0">
                <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                    @csrf
                    <div class="form-group pr-1">
                      <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="offenceLayout2" id="offencelayout2">
                        <option value="ONo0" disabled selected>{{ ('選択') }}</option>
                        <option value="ONo1" @if(old('offenceLayout2')=='ONo1') selected @endif>{{ ('攻1_'. $offence_card_point_1) }}</option>
                        <option value="ONo2" @if(old('offenceLayout2')=='ONo2') selected @endif>{{ ('攻2_'. $offence_card_point_2) }}</option>
                        <option value="ONo3" @if(old('offenceLayout2')=='ONo3') selected @endif>{{ ('攻3_'. $offence_card_point_3) }}</option>
                        <option value="ONo4" @if(old('offenceLayout2')=='ONo4') selected @endif>{{ ('攻4_'. $offence_card_point_4) }}</option>
                        <option value="ONo5" @if(old('offenceLayout2')=='ONo5') selected @endif>{{ ('攻5_'. $offence_card_point_5) }}</option>
                      </select>
                    </div>
                    <img src="../images/back_red.png" style="max-width: 30%; height:auto;">
                </div>
              </div>
              {{--攻3--}}
              <div class="row mx-0">
                <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                    @csrf
                    <div class="form-group pr-1">
                      <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="offenceLayout3" id="offenceLayout3">
                        <option value="ONo0" disabled selected>{{ ('選択') }}</option>
                        <option value="ONo1" @if(old('offenceLayout3')=='ONo1') selected @endif>{{ ('攻1_'. $offence_card_point_1) }}</option>
                        <option value="ONo2" @if(old('offenceLayout3')=='ONo2') selected @endif>{{ ('攻2_'. $offence_card_point_2) }}</option>
                        <option value="ONo3" @if(old('offenceLayout3')=='ONo3') selected @endif>{{ ('攻3_'. $offence_card_point_3) }}</option>
                        <option value="ONo4" @if(old('offenceLayout3')=='ONo4') selected @endif>{{ ('攻4_'. $offence_card_point_4) }}</option>
                        <option value="ONo5" @if(old('offenceLayout3')=='ONo5') selected @endif>{{ ('攻5_'. $offence_card_point_5) }}</option>
                      </select>
                    </div>
                    <img src="../images/back_red.png" style="max-width: 30%; height:auto;">
                </div>
              </div> 
              {{--攻4--}}            
              <div class="row mx-0">
                <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                    @csrf
                    <div class="form-group pr-1">
                      <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="offenceLayout4" id="offenceLayout4">
                        <option value="ONo0" disabled selected>{{ ('選択') }}</option>
                        <option value="ONo1" @if(old('offenceLayout4')=='ONo1') selected @endif>{{ ('攻1_'. $offence_card_point_1) }}</option>
                        <option value="ONo2" @if(old('offenceLayout4')=='ONo2') selected @endif>{{ ('攻2_'. $offence_card_point_2) }}</option>
                        <option value="ONo3" @if(old('offenceLayout4')=='ONo3') selected @endif>{{ ('攻3_'. $offence_card_point_3) }}</option>
                        <option value="ONo4" @if(old('offenceLayout4')=='ONo4') selected @endif>{{ ('攻4_'. $offence_card_point_4) }}</option>
                        <option value="ONo5" @if(old('offenceLayout4')=='ONo5') selected @endif>{{ ('攻5_'. $offence_card_point_5) }}</option>
                      </select>
                    </div>
                    <img src="../images/back_red.png" style="max-width: 30%; height:auto;">
                </div>
              </div>
              {{--攻5--}}
              <div class="row mx-0">
                <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                    @csrf
                    <div class="form-group pr-1">
                      <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="offenceLayout5" id="offenceLayout5">
                        <option value="ONo0" disabled selected>{{ ('選択') }}</option>
                        <option value="ONo1" @if(old('offenceLayout5')=='ONo1') selected @endif>{{ ('攻1_'. $offence_card_point_1) }}</option>
                        <option value="ONo2" @if(old('offenceLayout5')=='ONo2') selected @endif>{{ ('攻2_'. $offence_card_point_2) }}</option>
                        <option value="ONo3" @if(old('offenceLayout5')=='ONo3') selected @endif>{{ ('攻3_'. $offence_card_point_3) }}</option>
                        <option value="ONo4" @if(old('offenceLayout5')=='ONo4') selected @endif>{{ ('攻4_'. $offence_card_point_4) }}</option>
                        <option value="ONo5" @if(old('offenceLayout5')=='ONo5') selected @endif>{{ ('攻5_'. $offence_card_point_5) }}</option>
                      </select>
                    </div>
                    <img src="../images/back_red.png" style="max-width: 30%; height:auto;">
                </div>
              </div>
            </div>
           {{-- 攻撃側のレイアウト終了 --}}
          
           {{-- 守備側のレイアウト開始 --}}
            <div class="col-6 px-0">
              <div class="row mx-0">
                <div class="col mb-3 font-o-sm">
                  {{ $diffence_info->diffence_nickname }}
                </div>
              </div>
              {{--守1--}}
              <div class="row mx-0">
                <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                  <img src="../images/back_blue.png" style="max-width: 30%; height:auto;">  
                </div>
              </div>
              {{--守2--}}            
              <div class="row mx-0">
                <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                  <img src="../images/back_blue.png" style="max-width: 30%; height:auto;">
                </div>
              </div>
              {{--守3--}}
              <div class="row mx-0">
                <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                  <img src="../images/back_blue.png" style="max-width: 30%; height:auto;">
                </div>
              </div> 
              {{--守4--}}            
              <div class="row mx-0">
                <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                  <img src="../images/20_blue.png" style="max-width: 30%; height:auto;">
                </div>
              </div>
              {{--守5--}}
              <div class="row mx-0">
                <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                  <img src="../images/back_blue.png" style="max-width: 30%; height:auto;">
                </div>
              </div>
            </div>
          {{-- 守備側のレイアウト終了 --}}
          </div>
          
          {{-- ボタン設定 --}}
          <div class="row mx-0">
            <div class="col text-center mt-4 px-0">
              {{--@php
              dd($diffence_info);
              @endphp--}}
              <input type="hidden" name="diffence_info" value="{{ $diffence_info->id }}">
              <button type="submit" class="btn-green text-center font-o-sm btn-shadow mx-2" name="reset">{{ __('リセット') }}</button>
              <button type="submit" class="btn-green text-center font-o-sm btn-shadow mx-2" name="set">{{  __('セット')  }}</button>
              <button type="submit" class="btn-blue text-center font-o-sm btn-shadow mx-2" name="entry">{{  __('　対戦　')  }}</button>
            </div>
          </div>
        </form>
        
        <div class="row px-3 mx-0">
          <div class="col text-left text-warning mt-5" style="font-size:11px;"><ブラウザバック注意>
            <span clas="justyfy-content-left text-warning mt-4" style="color:#FFFFFF">本画面からのブラウザバックは,
            対戦が無効になったうえで攻撃ユーザーの負け数が+1されます
            </span>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
@endsection
 