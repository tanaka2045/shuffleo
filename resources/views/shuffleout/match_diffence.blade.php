@extends('layouts.template')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center">
        <div class="font-o-lg txt-shadow my-2">対戦結果</div>
        <div class="row">
          
          {{-- 説明開始 --}}
          <div class="col-6">
            <div class="text-left font-o-esm mt-2" style="background-color: transparent; border:1px solid #FFFFFF;">
               設定方法<br>
               1.プルダウンメニューから全てのカードについて重複がないようカードポイントを選択<br>
               2.オープンカードを1枚選択（デフォルトは最上段のカード）<br>
               3.セットボタンでカード配置<br>
               4.確定ボタンで守備登録完了<br>
            </div>
          </div>
        {{-- 説明終了 --}}
        
        {{-- 守備側のレイアウト開始 --}}
          <div class="col-4">
            <a class="border-bottom font-o-sm txt-shadow" href="#!">ユーザー0017
            </a>
            <div class="mt-2"><img src="../images/back_blue.png" style="max-width: 50%; height:auto;"></div>
            <div><img src="../images/back_blue.png" style="max-width: 50%; height:auto;">
              <form action="">
                <div class="form-group" >
                  <label for="diffencePoint" style="padding-right: 40px;">カード選択</label>
                  <select type="text" style="margin: 0px 0px 10px 10px;" name="diffencePoint" id="diffencePoint">
                    <option value="DNo1">10</option>
                    <option value="DNo2">20</option>
                    <option value="DNo3">30</option>
                    <option value="DNo4">40</option>
                    <option value="DNo5">50</option>
                  </select>
                </div>
                @csrf
              </form>
            </div>
            <div><img src="../images/back_blue.png" style="max-width: 50%; height:auto;"></div>
            <div><img src="../images/back_blue.png" style="max-width: 50%; height:auto;"></div>
            <div><img src="../images/back_blue.png" style="max-width: 50%; height:auto;"></div>
          </div>
        {{-- 守備側のレイアウト終了 --}}
        
        </div>

      </div>
    </div>
  </div>    
  
@endsection
 