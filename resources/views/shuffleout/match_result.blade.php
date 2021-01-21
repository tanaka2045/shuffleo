@extends('layouts.template')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center">
        <div class="font-o-lg txt-shadow my-2">対戦結果</div>
        <div class="row">
          
          {{-- 攻撃側のレイアウト開始 --}}
          <div class="col-6">
           <a class="border-bottom font-o-sm txt-shadow" href="#!">ユーザー0103
           </a>
           <div class="mt-2"><img src="../images/back_red.png" style="max-width: 100%; height:auto;"></div>
           <div class="mt-2"><img src="../images/10_red.png" style="max-width: 100%; height:auto;"></div>
           <div><img src="../images/back_red.png" style="max-width: 50%; height:auto;"></div>
           <div><img src="../images/back_red.png" style="max-width: 50%; height:auto;"></div>
           <div><img src="../images/back_red.png" style="max-width: 50%; height:auto;"></div>
           <div><img src="../images/back_red.png" style="max-width: 50%; height:auto;"></div>
          </div>
        {{-- 攻撃側のレイアウト終了 --}}
        
        {{-- 守備側のレイアウト開始 --}}
          <div class="col-6">
            <a class="border-bottom font-o-sm txt-shadow" href="#!">ユーザー0017
            </a>
            <div class="mt-2"><img src="../images/back_blue.png" style="max-width: 50%; height:auto;"></div>
            <div><img src="../images/back_blue.png" style="max-width: 50%; height:auto;"></div>
            <div><img src="../images/back_blue.png" style="max-width: 50%; height:auto;"></div>
            <div><img src="../images/back_blue.png" style="max-width: 50%; height:auto;"></div>
            <div><img src="../images/back_blue.png" style="max-width: 50%; height:auto;"></div>
          </div>
        {{-- 守備側のレイアウト終了 --}}
        
        </div>
        
        <div class="font-o-elg my-4" style="background-color: #004C00;">
          3-2 でユーザー0017の勝ち
        </div>
      </div>
    </div>
  </div>
  
@endsection
 