@extends('layouts.template')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center">
        <div class="font-o-lg txt-shadow my-2">対戦結果</div>
        <button type="button" class="btn btn-gray-blue btn-shadow text-center font-o-esm mb-2">結果確認</button>
        <div class="row">
          {{-- 攻撃側のレイアウト開始 --}}
          <div class="col-5 offset-1 px-0">
            <div class="text-center">
            <a class="border-bottom font-o-esm" href="{{ action('Users\OtherUserController@otherUserAccess', $request->offence_user_id) }}">
              {{ $request->offence_nickname }}
            </a>
              <div class="mt-2"><img src="../images/back_red.png" style="max-width: 45%; height:auto;"></div>
              <div class="pt-1"><img src="../images/back_red.png" style="max-width: 45%; height:auto;"></div>
              <div class="pt-1"><img src="../images/back_red.png" style="max-width: 45%; height:auto;"></div>
              <div class="pt-1"><img src="../images/back_red.png" style="max-width: 45%; height:auto;"></div>
              <div class="pt-1"><img src="../images/back_red.png" style="max-width: 45%; height:auto;"></div>
            </div>
          </div>
        {{-- 攻撃側のレイアウト終了 --}}
        
        {{-- 守備側のレイアウト開始 --}}
          <div class="col-5 px-0">
            <div class="text-center">
            <a class="border-bottom font-o-esm mb-2" href="{{ action('Users\OtherUserController@otherUserAccess', $request->diffence_user_id) }}">
              {{ $request->diffence_nickname }}
            </a>
              <div class="mt-2"><img src="../images/back_blue.png" style="max-width: 45%; height:auto;"></div>
              <div class="pt-1"><img src="../images/back_blue.png" style="max-width: 45%; height:auto;"></div>
              <div class="pt-1"><img src="../images/back_blue.png" style="max-width: 45%; height:auto;"></div>
              <div class="pt-1"><img src="../images/20_blue.png" style="max-width: 45%; height:auto;"></div>
              <div class="pt-1"><img src="../images/back_blue.png" style="max-width: 45%; height:auto;"></div>
            </div>
          </div>
        {{-- 守備側のレイアウト終了 --}}
        
        </div>
        
        <div class="font-o-elg my-4" style="background-color: #004C00;">
          {{  $request->win_card_count_offence."-".$request->win_card_count_diffence."で".$request->win_user."の勝ち" }}
        </div>
      </div>
    </div>
  </div>
  
@endsection
 