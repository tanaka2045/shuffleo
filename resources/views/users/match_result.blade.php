@extends('layouts.template')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center">
        <div class="font-o-lg txt-shadow my-2">対戦結果</div>
        <div class="row">
        {{-- 攻撃側のレイアウト開始 --}}
          <div class="col-6 text-center">
            <a class="border-bottom font-o-esm" href="{{ action('Users\OtherUserController@otherUserAccess', $request->offence_user_id) }}">
              {{ $request->offence_nickname }}</a>
            {{-- 攻撃1 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-1">
              <div id="rotate-area" class="col-5 mt-2 px-0">
                <div class="rotate-target omote" id="omote_1">
                  <img src="../images/back_red.png" style="max-width: 100%; height:auto;">
                </div>
                <div class="rotate-target ura" id="ura_1">
                  <img src="{{ '../images/ONo'.$request->offence_layout_1.'.png' }}" style="max-width: 100%; height:auto;">
                </div>
              </div>
            </div>
            {{-- 攻撃2 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-1">
              <div id="rotate-area" class="col-5 px-0">
                <div class="rotate-target omote" id="omote_2">
                  <img src="../images/back_red.png" style="max-width: 100%; height:auto;">
                </div>
                <div class="rotate-target ura" id="ura_2">
                  <img src="{{ '../images/ONo'.$request->offence_layout_2.'.png' }}" style="max-width: 100%; height:auto;">
                </div>
              </div>
            </div>
            {{-- 攻撃3 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-1">
              <div id="rotate-area" class="col-5 px-0">
                <div class="rotate-target omote" id="omote_3">
                  <img src="../images/back_red.png" style="max-width: 100%; height:auto;">
                </div>
                <div class="rotate-target ura" id="ura_3">
                  <img src="{{ '../images/ONo'.$request->offence_layout_3.'.png' }}" style="max-width: 100%; height:auto;">
                </div>
              </div>
            </div>
            {{-- 攻撃4 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-1">
              <div id="rotate-area" class="col-5 px-0">
                <div class="rotate-target omote" id="omote_4">
                  <img src="../images/back_red.png" style="max-width: 100%; height:auto;">
                </div>
                <div class="rotate-target ura" id="ura_4">
                  <img src="{{ '../images/ONo'.$request->offence_layout_4.'.png' }}" style="max-width: 100%; height:auto;">
                </div>
              </div>
            </div>
            {{-- 攻撃5 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-3">
              <div id="rotate-area" class="col-5 px-0">
                <div class="rotate-target omote" id="omote_5">
                  <img src="../images/back_red.png" style="max-width: 100%; height:auto;">
                </div>
                <div class="rotate-target ura" id="ura_5">
                  <img src="{{ '../images/ONo'.$request->offence_layout_5.'.png' }}" style="max-width: 100%; height:auto;">
                </div>
              </div>
            </div>
          </div>
        {{-- 攻撃側のレイアウト終了 --}}
        
        {{-- 守備側のレイアウト開始 --}}
          <div class="col-6 text-center">
            <a class="border-bottom font-o-esm mb-2" href="{{ action('Users\OtherUserController@otherUserAccess', $request->diffence_user_id) }}">
              {{ $request->diffence_nickname }}</a>
            {{-- 守備 1 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-1">
              <div id="rotate-area-d" class="col-5 mt-2 px-0">
                <div class="rotate-target-d omote_d" id="omote_d_1">
                  <img src="../images/back_blue.png" style="max-width: 100%; height:auto;">
                </div>
                <div class="rotate-target-d ura_d" id="ura_d_1">
                  <img src="{{ '../images/DNo'.$request->diffence_layout_1.'.png' }}" style="max-width: 100%; height:auto;">
                </div>
              </div>
            </div>
            {{-- 守備 2 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-1">
              <div id="rotate-area-d" class="col-5 px-0">
                <div class="rotate-target-d omote_d" id="omote_d_2">
                  <img src="../images/back_blue.png" style="max-width: 100%; height:auto;">
                </div>
                <div class="rotate-target-d ura_d" id="ura_d_2">
                  <img src="{{ '../images/DNo'.$request->diffence_layout_2.'.png' }}" style="max-width: 100%; height:auto;">
                </div>
              </div>
            </div>
            {{-- 守備 3 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-1">
              <div id="rotate-area-d" class="col-5 px-0">
                <div class="rotate-target-d omote_d" id="omote_d_3">
                  <img src="../images/back_blue.png" style="max-width: 100%; height:auto;">
                </div>
                <div class="rotate-target-d ura_d" id="ura_d_3">
                  <img src="{{ '../images/DNo'.$request->diffence_layout_3.'.png' }}" style="max-width: 100%; height:auto;">
                </div>
              </div>
            </div>
            {{-- 守備 4 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-1">
              <div id="rotate-area-d" class="col-5 px-0">
                <div class="rotate-target-d omote_d" id="omote_d_4">
                  <img src="../images/back_blue.png" style="max-width: 100%; height:auto;">
                </div>
                <div class="rotate-target-d ura_d" id="ura_d_4">
                  <img src="{{ '../images/DNo'.$request->diffence_layout_4.'.png' }}" style="max-width: 100%; height:auto;">
                </div>
              </div>
            </div>
            {{-- 守備 5 --}}
            <div class="row align-items-center justify-content-center mx-0 mb-3">
              <div id="rotate-area-d" class="col-5 px-0">
                <div class="rotate-target-d omote_d" id="omote_d_5">
                  <img src="../images/back_blue.png" style="max-width: 100%; height:auto;">
                </div>
                <div class="rotate-target-d ura_d" id="ura_d_5">
                  <img src="{{ '../images/DNo'.$request->diffence_layout_5.'.png' }}" style="max-width: 100%; height:auto;">
                </div>
              </div>
            </div>
          </div>
        {{-- 守備側のレイアウト終了 --}}
        </div>
        @if ($request->win_card_count_offence > $request->win_card_count_diffence)
          <span id="winner" class="font-o-elg-norm fluorescence-red my-4" style="display:none; color: #DEEBF7;">
            {{  $request->win_card_count_offence."-".$request->win_card_count_diffence."で".$request->win_user."さんの勝ち" }}
          </span>
        @else
          <span id="winner" class="font-o-elg-norm fluorescence-blue my-4" style="display:none; color: #DEEBF7;">
            {{  $request->win_card_count_offence."-".$request->win_card_count_diffence."で".$request->win_user."さんの勝ち" }}
          </span>
        @endif
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
          $('#omote_d_1').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_d_1').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          },0);
        setTimeout(function(){
          $('#omote_2').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_2').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#omote_d_2').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_d_2').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          },1000);
        setTimeout(function(){
          $('#omote_3').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_3').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#omote_d_3').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_d_3').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          },2000);
        setTimeout(function(){
          $('#omote_4').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_4').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#omote_d_4').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_d_4').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          },3000);
        setTimeout(function(){
          $('#omote_5').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_5').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          $('#omote_d_5').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
          $('#ura_d_5').css({'z-index':'1', 'transform':'rotateY(0deg)'});
          },4000);
        setTimeout(function(){
          $('#winner').fadeIn(100);
          },5000);  
      });
    });
  </script>
  @endif
@endsection
 
 