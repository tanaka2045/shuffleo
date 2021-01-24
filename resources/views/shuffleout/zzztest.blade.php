@extends('layouts.template')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center px-0">
                <div class="font-o-lg txt-shadow my-2">新規対戦ルーム登録</div>
          {{-- プルダウン説明 --}}
          <p>
            <a data-toggle="collapse" class="border-bottom font-o-sm" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              設定方法
            </a>
          </p>
          <div class="collapse" id="collapseExample">
            <div class="text-left" style=" font-size:11px; color: #FFFFFF;">
              <ul class="pl-3">
                <li>プルダウンメニューから全てのカードについて重複がないようカードポイントを選択</li>
                <li>オープンカードを1枚選択（デフォルトは最上段のカード）</li>
                <li>セットボタンでカード配置</li>
                <li>確定ボタンで登録完了</li>
              </ul>
            </div>
          </div>

          
        <div class="row mx-0">
          {{-- 守備側のレイアウト開始 --}}
          <div class="col-8 offset-2 px-0">
                  <form action="">
                    <div class="form-group pr-1 mb-0">
            
            <div class="row mx-0 ">
              <div class="col">
                <a class="font-o-sm txt-shadow">あいう
                </a>
              </div>
            </div>
              {{--守1--}}
              <div class="row mx-0">
                <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                                  <img src="../images/back_blue.png" style="max-width: 30%; height:auto;">
                                    <form action="">
                    <div class="form-group pr-1 mb-0">
                      <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="offencePoint" id="offencePoint1">
                        <option value="ONo1" selected>守1 10</option>
                        <option value="ONo2">守2 20</option>
                        <option value="ONo3">守3 30</option>
                        <option value="ONo4">守4 40</option>
                        <option value="ONo5">守5 50</option>
                      </select>
                    </div>
                    </form>
                </div>
              </div>

                    </div>
                  </form>
          </div>
         {{-- 守備側のレイアウト終了 --}}
        </div>
      </div>
    </div>
  </div>
  
@endsection
 