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
              <li>カードポイントをカード横のプルダウンメニューで重複がないよう選択</li>
              <li>オープンカードを選択（デフォルトは最上段のカード）</li>
              <li>セットボタンでカード配置</li>
              <li>確定ボタンで登録完了</li>
            </ul>
          </div>
        </div>

        <div class="row mx-0">
          {{-- 守備側のレイアウト開始 --}}
          <div class="col-9 offset-2 px-0">
            <form action="">
              @csrf
              <div class="form-group pr-1 mb-0">
                      
              <div class="row mx-0">
                <div class="col-4 offset-8 font-o-esm text-left pl-3 pr-0">オープン<br>カード
                </div>
              </div>
                {{--守1--}}
                <div class="row mx-0">
                  <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                    <img src="../images/back_blue.png" style="max-width: 20%; height:auto;">
                    <form action="">
                      @csrf
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
                    <div class="form-check">
                      <input class="form-check-input position-static" type="radio" name="openCard" id="openCard1" value="openCard1" checked>
                    </div>
                  </div>
                </div>
                {{--守2--}}
                <div class="row mx-0">
                  <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                      <img src="../images/back_blue.png" style="max-width: 20%; height:auto;">
                    <form action="">
                      @csrf
                      <div class="form-group pr-1 mb-0">
                        <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="offencePoint" id="offencePoint2">
                          <option value="ONo1">守1 10</option>
                          <option value="ONo2" selected>守2 20</option>
                          <option value="ONo3">守3 30</option>
                          <option value="ONo4">守4 40</option>
                          <option value="ONo5">守5 50</option>
                        </select>
                      </div>
                    </form>
                    <div class="form-check">
                      <input class="form-check-input position-static" type="radio" name="openCard" id="openCard2" value="openCard2">
                    </div>
                  </div>
                </div>
                {{--守3--}}
                <div class="row mx-0">
                  <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                    <img src="../images/back_blue.png" style="max-width: 20%; height:auto;">
                    <form action="">
                      @csrf
                      <div class="form-group pr-1 mb-0">
                        <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="offencePoint" id="offencePoint3">
                          <option value="ONo1">守1 10</option>
                          <option value="ONo2">守2 20</option>
                          <option value="ONo3" selected>守3 30</option>
                          <option value="ONo4">守4 40</option>
                          <option value="ONo5">守5 50</option>
                        </select>
                      </div>
                    </form>
                    <div class="form-check">
                      <input class="form-check-input position-static" type="radio" name="openCard" id="openCard3" value="openCard3">
                    </div>
                  </div>
                </div>
                {{--守4--}}
                <div class="row mx-0">
                  <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                    <img src="../images/back_blue.png" style="max-width: 20%; height:auto;">
                    <form action="">
                      @csrf
                      <div class="form-group pr-1 mb-0">
                        <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="offencePoint" id="offencePoint4">
                          <option value="ONo1">守1 10</option>
                          <option value="ONo2">守2 20</option>
                          <option value="ONo3">守3 30</option>
                          <option value="ONo4" selected>守4 40</option>
                          <option value="ONo5">守5 50</option>
                        </select>
                      </div>
                    </form>
                    <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="openCard" id="4openCard4" value="openCard4">
                    </div>
                  </div>
                </div>
                {{--守5--}}
                <div class="row mx-0">
                  <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                    <img src="../images/back_blue.png" style="max-width: 20%; height:auto;">
                    <form action="">
                      @csrf
                      <div class="form-group pr-1 mb-0">
                        <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="offencePoint" id="offencePoint5">
                          <option value="ONo1">守1 10</option>
                          <option value="ONo2">守2 20</option>
                          <option value="ONo3">守3 30</option>
                          <option value="ONo4">守4 40</option>
                          <option value="ONo5"selected>守5 50</option>
                        </select>
                      </div>
                    </form>
                    <div class="form-check">
                      <input class="form-check-input position-static" type="radio" name="openCard" id="openCard5" value="openCard5">
                    </div>
                  </div>
                </div>
             </div>
            </form>
          </div>
         {{-- 守備側のレイアウト終了 --}}
        </div>
        
        {{-- ボタン設定 --}}
        <div class="row mx-0">
          <div class="col text-center my-4 px-0">
            <button type="button" class="btn btn-green text-center btn-shadow mx-2">リセット</button>
            <button type="button" class="btn btn-green text-center btn-shadow mx-2">セット</button>
            <button type="button" class="btn btn-blue text-center btn-shadow mx-2">登録</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
@endsection
 