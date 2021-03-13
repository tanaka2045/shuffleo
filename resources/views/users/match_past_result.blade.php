@extends('layouts.template')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center">
        <div class="font-o-lg txt-shadow my-2">対戦結果</div>
        <div class="row">
        {{-- 攻撃側のレイアウト開始 --}}
          <div class="col-6 text-center">
            <a class="border-bottom font-o-esm" href="{{ action('Users\OtherUserController@otherUserAccess', $match_result->offence_user_id) }}">
              {{ $match_result->offence_nickname }}</a>
            {{-- 攻撃1 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-1">
              <div id="rotate-area" class="col-5 mt-2 px-0">
                <div class="rotate-target omote" id="omote_1">
                  <img class="logo" src="{{ asset('images/back_red.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                  {{--<img src="../images/back_red.png" style="max-width: 100%; height:auto;">--}}
                </div>
                <div class="rotate-target ura" id="ura_1">
                  <img class="logo" src="{{ asset('../images/ONo'.$match_result->offence_layout_1.'.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                </div>
                @if ($match_result->offence_layout_1_pt > $match_result->diffence_layout_1_pt)
                  <div class="rotate-target ura win" id="win_o_1">
                    <img class="logo" src="{{ asset('../images/win.png') }}" alt="logo" style="max-width: 80%; height:auto;">
                  </div>
                @endif
              </div>
            </div>
            {{-- 攻撃2 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-1">
              <div id="rotate-area" class="col-5 px-0">
                <div class="rotate-target omote" id="omote_2">
                  <img class="logo" src="{{ asset('images/back_red.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                </div>
                <div class="rotate-target ura" id="ura_2">
                  <img class="logo" src="{{ asset('../images/ONo'.$match_result->offence_layout_2.'.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                </div>
                @if ($match_result->offence_layout_2_pt > $match_result->diffence_layout_2_pt)
                  <div class="rotate-target ura win" id="win_o_2">
                    <img class="logo" src="{{ asset('../images/win.png') }}" alt="logo" style="max-width: 80%; height:auto;">
                  </div>
                @endif
              </div>
            </div>
            {{-- 攻撃3 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-1">
              <div id="rotate-area" class="col-5 px-0">
                <div class="rotate-target omote" id="omote_3">
                  <img class="logo" src="{{ asset('images/back_red.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                </div>
                <div class="rotate-target ura" id="ura_3">
                  <img class="logo" src="{{ asset('../images/ONo'.$match_result->offence_layout_3.'.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                </div>
                @if ($match_result->offence_layout_3_pt > $match_result->diffence_layout_3_pt)
                  <div class="rotate-target ura win" id="win_o_3">
                    <img class="logo" src="{{ asset('../images/win.png') }}" alt="logo" style="max-width: 80%; height:auto;">
                  </div>
                @endif
              </div>
            </div>
            {{-- 攻撃4 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-1">
              <div id="rotate-area" class="col-5 px-0">
                <div class="rotate-target omote" id="omote_4">
                  <img class="logo" src="{{ asset('images/back_red.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                </div>
                <div class="rotate-target ura" id="ura_4">
                  <img class="logo" src="{{ asset('../images/ONo'.$match_result->offence_layout_4.'.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                </div>
                @if ($match_result->offence_layout_4_pt > $match_result->diffence_layout_4_pt)
                  <div class="rotate-target ura win" id="win_o_4">
                    <img class="logo" src="{{ asset('../images/win.png') }}" alt="logo" style="max-width: 80%; height:auto;">
                  </div>
                @endif
              </div>
            </div>
            {{-- 攻撃5 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-3">
              <div id="rotate-area" class="col-5 px-0">
                <div class="rotate-target omote" id="omote_5">
                  <img class="logo" src="{{ asset('images/back_red.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                </div>
                <div class="rotate-target ura" id="ura_5">
                  <img class="logo" src="{{ asset('../images/ONo'.$match_result->offence_layout_5.'.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                </div>
                  @if ($match_result->offence_layout_5_pt > $match_result->diffence_layout_5_pt)
                    <div class="rotate-target ura win" id="win_o_5">
                      <img class="logo" src="{{ asset('../images/win.png') }}" alt="logo" style="max-width: 80%; height:auto;">
                    </div>
                  @endif
              </div>
            </div>
          </div>
        {{-- 攻撃側のレイアウト終了 --}}
        
        {{-- 守備側のレイアウト開始 --}}
          <div class="col-6 text-center">
            <a class="border-bottom font-o-esm mb-2" href="{{ action('Users\OtherUserController@otherUserAccess', $match_result->user_id) }}">
              {{ $match_result->diffence_nickname }}</a>
            {{-- 守備 1 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-1">
              @if ($match_result->open_card == 1)
                <div id="rotate-area" class="col-5 mt-2 px-0">
                  <div class="rotate-target">
                    <img class="logo" src="{{ asset('../images/DNo'.$match_result->diffence_layout_1.'.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                  </div>
                </div>
              @else
                <div id="rotate-area" class="col-5 mt-2 px-0">
                  <div class="rotate-target omote" id="omote_d_1">
                    <img class="logo" src="{{ asset("../images/back_blue.png") }}" alt="logo" style="max-width: 100%; height:auto;">
                  </div>
                  <div class="rotate-target ura" id="ura_d_1">
                    <img class="logo" src="{{ asset('../images/DNo'.$match_result->diffence_layout_1.'.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                  </div>
                  @if ($match_result->offence_layout_1_pt < $match_result->diffence_layout_1_pt)
                    <div class="rotate-target ura win" id="win_d_1">
                      <img class="logo" src="{{ asset('../images/win.png') }}" alt="logo" style="max-width: 80%; height:auto;">
                    </div>
                  @endif
                </div>
              @endif
            </div>
            {{-- 守備 2 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-1">
              @if ($match_result->open_card == 2)
                <div id="rotate-area" class="col-5 px-0">
                  <div class="rotate-target">
                    <img class="logo" src="{{ asset('../images/DNo'.$match_result->diffence_layout_2.'.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                  </div>
                </div>
              @else
                <div id="rotate-area" class="col-5 px-0">
                  <div class="rotate-target omote" id="omote_d_2">
                    <img class="logo" src="{{ asset("../images/back_blue.png") }}" alt="logo" style="max-width: 100%; height:auto;">
                  </div>
                  <div class="rotate-target ura" id="ura_d_2">
                    <img class="logo" src="{{ asset('../images/DNo'.$match_result->diffence_layout_2.'.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                  </div>
                  @if ($match_result->offence_layout_2_pt < $match_result->diffence_layout_2_pt)
                    <div class="rotate-target ura win" id="win_d_2">
                      <img class="logo" src="{{ asset('../images/win.png') }}" alt="logo" style="max-width: 80%; height:auto;">
                    </div>
                  @endif
                </div>
              @endif
            </div>
            {{-- 守備 3 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-1">
              @if ($match_result->open_card == 3)
                <div id="rotate-area" class="col-5 px-0">
                  <div class="rotate-target">
                    <img class="logo" src="{{ asset('../images/DNo'.$match_result->diffence_layout_3.'.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                  </div>
                </div>
              @else
                <div id="rotate-area" class="col-5 px-0">
                  <div class="rotate-target omote" id="omote_d_3">
                    <img class="logo" src="{{ asset("../images/back_blue.png") }}" alt="logo" style="max-width: 100%; height:auto;">
                  </div>
                  <div class="rotate-target ura" id="ura_d_3">
                    <img class="logo" src="{{ asset('../images/DNo'.$match_result->diffence_layout_3.'.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                  </div>
                  @if ($match_result->offence_layout_3_pt < $match_result->diffence_layout_3_pt)
                    <div class="rotate-target ura win" id="win_d_3">
                      <img class="logo" src="{{ asset('../images/win.png') }}" alt="logo" style="max-width: 80%; height:auto;">
                    </div>
                  @endif
                </div>
              @endif
            </div>
            {{-- 守備 4 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-1">
              @if ($match_result->open_card == 4)
                <div id="rotate-area" class="col-5 px-0">
                  <div class="rotate-target">
                    <img class="logo" src="{{ asset('../images/DNo'.$match_result->diffence_layout_4.'.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                  </div>
                </div>
              @else
                <div id="rotate-area" class="col-5 px-0">
                  <div class="rotate-target omote" id="omote_d_4">
                    <img class="logo" src="{{ asset("../images/back_blue.png") }}" alt="logo" style="max-width: 100%; height:auto;">
                  </div>
                  <div class="rotate-target ura" id="ura_d_4">
                    <img class="logo" src="{{ asset('../images/DNo'.$match_result->diffence_layout_4.'.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                  </div>
                  @if ($match_result->offence_layout_4_pt < $match_result->diffence_layout_4_pt)
                    <div class="rotate-target ura win" id="win_d_4">
                      <img class="logo" src="{{ asset('../images/win.png') }}" alt="logo" style="max-width: 80%; height:auto;">
                    </div>
                  @endif
                </div>
              @endif
            </div>
            {{-- 守備 5 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-3">
              @if ($match_result->open_card == 5)
                <div id="rotate-area" class="col-5 px-0">
                  <div class="rotate-target">
                    <img class="logo" src="{{ asset('../images/DNo'.$match_result->diffence_layout_5.'.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                  </div>
                </div>
              @else
                <div id="rotate-area" class="col-5 px-0">
                  <div class="rotate-target omote" id="omote_d_5">
                    <img class="logo" src="{{ asset("../images/back_blue.png") }}" alt="logo" style="max-width: 100%; height:auto;">
                  </div>
                  <div class="rotate-target ura" id="ura_d_5">
                    <img class="logo" src="{{ asset('../images/DNo'.$match_result->diffence_layout_5.'.png') }}" alt="logo" style="max-width: 100%; height:auto;">
                  </div>
                   @if ($match_result->offence_layout_5_pt < $match_result->diffence_layout_5_pt)
                    <div class="rotate-target ura win" id="win_d_5">
                      <img class="logo" src="{{ asset('../images/win.png') }}" alt="logo" style="max-width: 80%; height:auto;">
                    </div>
                  @endif
                </div>
              @endif
            </div>
          </div>
        {{-- 守備側のレイアウト終了 --}}
        </div>
        @if ($match_result->win_card_count_offence > $match_result->win_card_count_diffence)
          <span id="winner" class="font-o-elg-norm fluorescence-red my-4" style="display:none; color: #DEEBF7;">
            {{  $match_result->win_card_count_offence."-".$match_result->win_card_count_diffence."で".$win_user."さんの勝ち" }}
          </span>
        @else
          <span id="winner" class="font-o-elg-norm fluorescence-blue" style="display:none; color: #DEEBF7;">
            {{  $match_result->win_card_count_offence."-".$match_result->win_card_count_diffence."で".$win_user."さんの勝ち" }}
          </span>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col my-3">
        <a href="{{ action('Users\MatchController@matchHistoryAccess') }}" role="button" id="set" name="set" class="btn-green text-center font-o-sm btn-shadow mx-2">{{  __('対戦履歴へ')  }}</a>
      </div>
    </div>
  </div>
@endsection

@section('js')
  @if ($errors->any() == false)
  <script>
    jQuery(function($){
      window.onload=(function(){
        setTimeout(function(){
          $('#omote_1').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_1').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#win_o_1').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#omote_d_1').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_d_1').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#win_d_1').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          },0);
        setTimeout(function(){
          $('#omote_2').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_2').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#win_o_2').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#omote_d_2').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_d_2').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#win_d_2').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          },1000);
        setTimeout(function(){
          $('#omote_3').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_3').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#win_o_3').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#omote_d_3').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_d_3').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#win_d_3').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          },2000);
        setTimeout(function(){
          $('#omote_4').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_4').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#win_o_4').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#omote_d_4').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_d_4').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#win_d_4').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          },3000);
        setTimeout(function(){
          $('#omote_5').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_5').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#win_o_5').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#omote_d_5').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_d_5').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#win_d_5').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          },4000);
        setTimeout(function(){
          $('#winner').fadeIn(300);
          },4500);  
      });
    });
  </script>
  @endif
@endsection
