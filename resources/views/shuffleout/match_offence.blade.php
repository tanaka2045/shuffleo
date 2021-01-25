@extends('layouts.templateWoNavWoFooter')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center px-0">
        <div class="font-o-lg txt-shadow my-2">対戦ルーム</div>
          <p>
            <a data-toggle="collapse" class="border-bottom font-o-sm" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              設定方法
            </a>
          </p>
          <div class="collapse" id="collapseExample">
            <div class="text-left" style=" font-size:11px; color: #FFFFFF;">
              <ul class="pl-3">
                <li>ドロップダウンメニューから５枚のカードが重複しないよう攻撃カードを選択（メニューは攻No+カードポイントで表示）</li>
                <li>セットボタンで実際のカードレイアウト（表面）を表示</li>
                <li>必要に応じてリセットボタンで初期状態に戻すこともできます</li>
                <li>対戦ボタンで対戦画面へ（対戦ボタンを押すまではカード選択は変更可能）</li>
              </ul>
            </div>
          </div>
          
        <div class="row mx-0">
          
          {{-- 攻撃側のレイアウト開始 --}}
          <div class="col-6 px-0">
            <div class="row mx-0">
              <div class="col mb-3">
                <a class="font-o-sm txt-shadow">あいう
                </a>
              </div>
            </div>
            {{--攻1--}}
            <div class="row mx-0">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <form action="">
                  @csrf
                  <div class="form-group pr-1">
                    <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="offencePoint" id="offencePoint1">
                      <option value="ONo1" selected>攻1 10</option>
                      <option value="ONo2">攻2 20</option>
                      <option value="ONo3">攻3 30</option>
                      <option value="ONo4">攻4 40</option>
                      <option value="ONo5">攻5 50</option>
                    </select>
                  </div>
                </form>
                  <img src="../images/back_red.png" style="max-width: 30%; height:auto;">
              </div>
            </div>
            {{--攻2--}}            
            <div class="row mx-0">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <form action="">
                  @csrf
                  <div class="form-group pr-1">
                    <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="offencePoint" id="offencePoint2">
                      <option value="ONo1">攻1 10</option>
                      <option value="ONo2" selected>攻2 20</option>
                      <option value="ONo3">攻3 30</option>
                      <option value="ONo4">攻4 40</option>
                      <option value="ONo5">攻5 50</option>
                    </select>
                  </div>
                </form>
                  <img src="../images/back_red.png" style="max-width: 30%; height:auto;">
              </div>
            </div>
            {{--攻3--}}
            <div class="row mx-0">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <form action="">
                  @csrf
                  <div class="form-group pr-1">
                    <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="offencePoint" id="offencePoint3">
                      <option value="ONo1">攻1 10</option>
                      <option value="ONo2">攻2 20</option>
                      <option value="ONo3" selected>攻3 30</option>
                      <option value="ONo4">攻4 40</option>
                      <option value="ONo5">攻5 50</option>
                    </select>
                  </div>
                </form>
                  <img src="../images/back_red.png" style="max-width: 30%; height:auto;">
              </div>
            </div> 
            {{--攻4--}}            
            <div class="row mx-0">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <form action="">
                  @csrf
                  <div class="form-group pr-1">
                    <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="offencePoint" id="offencePoint4">
                      <option value="ONo1">攻1 10</option>
                      <option value="ONo2">攻2 20</option>
                      <option value="ONo3">攻3 30</option>
                      <option value="ONo4" selected>攻4 40</option>
                      <option value="ONo5">攻5 50</option>
                    </select>
                  </div>
                </form>
                  <img src="../images/back_red.png" style="max-width: 30%; height:auto;">
              </div>
            </div>
            {{--攻5--}}
            <div class="row mx-0">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <form action="">
                  @csrf
                  <div class="form-group pr-1">
                    <select type="text" style="font-size: 11px; margin: 0px 0px 10px 10px;" name="offencePoint" id="offencePoint5">
                      <option value="ONo1">攻1 10</option>
                      <option value="ONo2">攻2 20</option>
                      <option value="ONo3">攻3 30</option>
                      <option value="ONo4">攻4 40</option>
                      <option value="ONo5" selected>攻5 50</option>
                    </select>
                  </div>
                </form>
                  <img src="../images/back_red.png" style="max-width: 30%; height:auto;">
              </div>
            </div>
          </div>
         {{-- 攻撃側のレイアウト終了 --}}
        
         {{-- 守備側のレイアウト開始 --}}
          <div class="col-6 px-0">
            <div class="row mx-0">
              <div class="col mb-3">
                <a class="font-o-sm txt-shadow">ユーザ
                </a>
              </div>
            </div>
            {{--守1--}}
            <div class="row mx-0">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <img src="../images/back_blue.png" style="max-width: 30%; height:auto;">  
              </div>
            </div>
            {{--守2--}}            
            <div class="row mx-0">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <img src="../images/back_blue.png" style="max-width: 30%; height:auto;">
              </div>
            </div>
            {{--守3--}}
            <div class="row mx-0">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <img src="../images/back_blue.png" style="max-width: 30%; height:auto;">
              </div>
            </div> 
            {{--守4--}}            
            <div class="row mx-0">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <img src="../images/20_blue.png" style="max-width: 30%; height:auto;">
              </div>
            </div>
            {{--守5--}}
            <div class="row mx-0">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <img src="../images/back_blue.png" style="max-width: 30%; height:auto;">
              </div>
            </div>
          </div>
        {{-- 守備側のレイアウト終了 --}}
        </div>
        
        {{-- ボタン設定 --}}
        <div class="row mx-0">
          <div class="col text-center mt-4 px-0">
            <button type="button" class="btn btn-green text-center btn-shadow mx-2">リセット</button>
            <button type="button" class="btn btn-green text-center btn-shadow mx-2">セット</button>
            <a href="{{ action('MatchController@matchResultAccess') }}" type="button" class="btn btn-blue text-center btn-shadow mx-2">対戦</a>
          </div>
        </div>
        
        <div class="row px-3 mx-0">
          <div class="col text-left text-warning mt-5" style="font-size:11px;"><ブラウザバック注意>
            <span clas="justyfy-content-left text-warning mt-4" style="color:#FFFFFF">本画面からのブラウザバックは,
            対戦が無効になったうえで攻撃ユーザーの負け数が+1されます
            </span>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
@endsection
 