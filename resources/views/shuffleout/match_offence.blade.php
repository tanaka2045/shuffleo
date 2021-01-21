@extends('layouts.template')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center px-0">
        <div class="font-o-lg txt-shadow my-2">対戦ルーム</div>
        <div class="row">
          {{-- 攻撃側のレイアウト開始 --}}
          <div class="col-6 px-0">
            <div class="row">
              <div class="col-8 offset-4 px-0 mb-2">
                <a class="border-bottom font-o-esm txt-shadow" href="#!">あいう
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-4 d-flex align-items-center justify-content-end pt-3 pt-3 px-0 mx-0">
                <form action="">
                <div class="form-group">
                <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="diffencePoint" id="diffencePoint1">
                  <option value="DNo1" selected>10</option>
                  <option value="DNo2">20</option>
                  <option value="DNo3">30</option>
                  <option value="DNo4">40</option>
                  <option value="DNo5">50</option>
                </select>
                </div>
                </form>
              </div>
              <div class="col-8 px-0">
                <img src="../images/back_red.png" style="max-width: 45%; height:auto;">
              </div>
            </div>
          </div>
          
          {{--<div class="col-4 px-0">
            <div class="text-center">
            </a>
              <div><img src="../images/back_red.png" style="max-width: 45%; height:auto;"></div>
              <div><img src="../images/back_red.png" style="max-width: 45%; height:auto;"></div>
              <div><img src="../images/back_red.png" style="max-width: 45%; height:auto;"></div>
              <div><img src="../images/back_red.png" style="max-width: 45%; height:auto;"></div>
            </div>--}}
        {{-- 攻撃側のレイアウト終了 --}}
        
        {{-- 守備側のレイアウト開始 --}}
          <div class="col-6 px-0">
            <div class="text-center">
            <a class="border-bottom font-o-esm txt-shadow mb-2" href="#!">ユーザ
            </a>
              <div class="mt-2"><img src="../images/back_blue.png" style="max-width: 45%; height:auto;"></div>
              <div><img src="../images/back_blue.png" style="max-width: 45%; height:auto;"></div>
              <div><img src="../images/back_blue.png" style="max-width: 45%; height:auto;"></div>
              <div><img src="../images/20_blue.png" style="max-width: 45%; height:auto;"></div>
              <div><img src="../images/back_blue.png" style="max-width: 45%; height:auto;"></div>
            </div>
          </div>
        {{-- 守備側のレイアウト終了 --}}
        
        </div>
        
        <div class="font-o-elg my-4" style="background-color: #004C00;">
         
        </div>
      </div>
    </div>
  </div>
  
@endsection
 