@extends('layouts.template')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col text-center">
      <div class="font-o-lg txt-shadow my-2">対戦ルーム作成</div>
      <div class="row">
        {{-- 説明開始 --}}
        <div class="col-6 ">
          <div class="text-left font-o-esm mt-2 p-3" style="background-color: transparent; border:1px solid #FFFFFF;">
             設定方法<br>
             1.プルダウンメニューから全てのカードについて重複がないようカードポイントを選択<br>
             2.オープンカードを1枚選択（デフォルトは最上段のカード）<br>
             3.セットボタンでカード配置<br>
             4.確定ボタンで守備登録完了<br>
          </div>
        </div>
        {{-- 説明終了 --}}
        
        {{-- 守備側のレイアウト開始 --}}
        <div class="col-6">
          <a class="border-bottom font-o-sm txt-shadow" href="#!">ユーザー0017
          </a>
            
          <form action="">
            <div class="form-group">
              {{-- Card1 layout 開始--}}   
              <div class="row">
                <div class="col-5 mt-2 pr-0 text-right">
                  <img src="../images/back_blue.png" style="max-width: 80%; height:auto;">
                </div>
                <div class="col-3 mt-2 px-0">
                  <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="diffencePoint" id="diffencePoint1">
                    <option value="DNo1" selected>10</option>
                    <option value="DNo2">20</option>
                    <option value="DNo3">30</option>
                    <option value="DNo4">40</option>
                    <option value="DNo5">50</option>
                  </select>
                </div> 
                <div class="col-2 mt-2 px-0 text-center">
                    <div class="form-check">
                      <input class="form-check-input position-static" type="radio" name="openCard" id="eopenCard1" value="openCard1" checked>
                    </div>
                </div>
             </div>
            {{-- Card1 layout 終了--}}   
            
            {{-- Card2 layout 開始--}}   
              <div class="row">
                <div class="col-5 mt-2 pr-0 text-right">
                  <img src="../images/back_blue.png" style="max-width: 80%; height:auto;">
                </div>
                <div class="col-3 mt-2 px-0">
                  <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="diffencePoint" id="diffencePoint2">
                    <option value="DNo1">10</option>
                    <option value="DNo2" selecterd>20</option>
                    <option value="DNo3">30</option>
                    <option value="DNo4">40</option>
                    <option value="DNo5">50</option>
                  </select>
                </div> 
                <div class="col-2 mt-2 px-0 text-center">
                    <div class="form-check">
                      <input class="form-check-input position-static" type="radio" name="openCard" id="eopenCard2" value="openCard2">
                    </div>
                </div>
             </div>
            {{-- Card2 layout 終了--}}   
          </div>
          </form>




          </div>
        {{-- 守備側のレイアウト終了 --}}
        
        </div>

      </div>
    </div>
    @csrf {{-- CSRFの位置確認--}}
  </div>    
  
@endsection
 