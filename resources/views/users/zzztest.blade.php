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
            <div class="col">
              <div class="text-danger font-o-sm">
                @if ($errors ->any())
                  @foreach($errors->all() as $e)
                      {{ $e }}
                  @endforeach
                @endif
              </div>
              <table class="table table-bordered form-group">
                <div class="form-group pr-1 mb-0">
                  @csrf
                  <thead>
                    <th class="col-1"></th>
                    <th class="col-4"></th>
                    <th class="col-7" class="font-o-esm text-white">{{ __('オープン') }}<br>{{ __('カード') }}</th>
                  </thead>
                  
                  <tbody>
                  {{--守1--}}
                    <tr>
                      <th scope="row" class="px-0 mx-0">
                        <img src="../images/back_blue.png" style="max-width: 40%; height:auto;">
                      </th>
                      <td class="align-middle px-0 mx-0">
                          <select type="text" class="m-0" style="font-size: 13px;" name="diffenceLayout1" id="diffenceLayout1">
                            <option value="DNo0" disabled selected>{{ ('選択') }}</option>
                            <option value="DNo1" @if(old('diffenceLayout1')=='DNo1') selected @endif>{{ ('守1_'. $diffence_card_point_1) }}</option>
                            <option value="DNo2" @if(old('diffenceLayout1')=='DNo2') selected @endif>{{ ('守2_'. $diffence_card_point_2) }}</option>
                            <option value="DNo3" @if(old('diffenceLayout1')=='DNo3') selected @endif>{{ ('守3_'. $diffence_card_point_3) }}</option>
                            <option value="DNo4" @if(old('diffenceLayout1')=='DNo4') selected @endif>{{ ('守4_'. $diffence_card_point_4) }}</option>
                            <option value="DNo5" @if(old('diffenceLayout1')=='DNo5') selected @endif>{{ ('守5_'. $diffence_card_point_5) }}</option>
                          </select>
                      </td>
                      <td class="align-middle">
                        <input class="form-check-input position-static" type="radio" name="openCard" id="openCard1" value="openCard1"
                          checked {{ old('openCard') == 'openCard1' ? 'checked' : '' }}>
                      </td>
                    </tr>
                    {{--守2--}}
                    <tr>
                      <th scope="row" class="px-0 mx-0">
                        <img src="../images/back_blue.png" style="max-width: 40%; height:auto;">
                      </th>
                      <td class="align-middle px-0 mx-0">
                          <select type="text" class="m-0" style="font-size: 13px;" name="diffenceLayout" id="diffenceLayout1">
                            <option value="DNo0" disabled selected>{{ ('選択') }}</option>
                            <option value="DNo1" @if(old('diffenceLayout2')=='DNo1') selected @endif>{{ ('守1_'. $diffence_card_point_1) }}</option>
                            <option value="DNo2" @if(old('diffenceLayout2')=='DNo2') selected @endif>{{ ('守2_'. $diffence_card_point_2) }}</option>
                            <option value="DNo3" @if(old('diffenceLayout2')=='DNo3') selected @endif>{{ ('守3_'. $diffence_card_point_3) }}</option>
                            <option value="DNo4" @if(old('diffenceLayout2')=='DNo4') selected @endif>{{ ('守4_'. $diffence_card_point_4) }}</option>
                            <option value="DNo5" @if(old('diffenceLayout2')=='DNo5') selected @endif>{{ ('守5_'. $diffence_card_point_5) }}</option>
                          </select>
                      </td>
                      <td class="align-middle">
                        <input class="form-check-input position-static" type="radio" name="openCard" id="openCard2" value="openCard2"
                          checked {{ old('openCard') == 'openCard2' ? 'checked' : '' }}>
                      </td>
                    </tr>
                  </tbody>

                </div>
              </table>
            </div>
           {{-- 守備側のレイアウト終了 --}}
          </div>
          
          {{-- ボタン設定 --}}
          <div class="row mx-0">
            <div class="col text-center my-4 px-0">
              <button type="submit" id="reset" name="reset" class="btn-green text-center font-o-sm btn-shadow mx-2">{{ __('リセット') }}</button>
              <button type="submit" id="set" name="set" class="btn-green text-center font-o-sm btn-shadow mx-2">{{  __('セット')  }}</button>
              {{-- テストなので登録防止対策 --}}
              {{--@if ($button_switch == 0 || $term_end_point ==1)--}}
                <button type="submit" id="entry" name="entry" class="btn-blue text-center font-o-sm btn-shadow mx-2" disabled>{{  __('　登録　')  }}</button>
              {{--@else
                <button type="submit" id="entry" name="entry" class="btn-blue text-center font-o-sm btn-shadow mx-2">{{  __('　登録　')  }}</button>
              @endif--}}
              <div id="output"></div>
            </div>
          </div>
        </form>
   
      </div>
    </div>
  </div>
@endsection

@section('js')
<script>
  jQuery(function($){
    $('#set').click(function(){
        $('#omote').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
        $('#ura').css({'z-index':'1', 'transform':'rotateY(0deg)'});
    });
  });
</script>
@endsection
 