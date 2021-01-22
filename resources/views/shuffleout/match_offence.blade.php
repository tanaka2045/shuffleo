@extends('layouts.template')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center px-0">
        <div class="font-o-lg txt-shadow my-2">対戦ルーム</div>
        <div class="row">
          
          {{-- 攻撃側のレイアウト開始 --}}
          <div class="col-6 px-0">
            <div class="row mr-0">
              <div class="col mb-3">
                <a class="font-o-sm txt-shadow">あいう
                </a>
              </div>
            </div>
            {{--攻1--}}
            <div class="row">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <form action="">
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
            <div class="row">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <form action="">
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
            <div class="row">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <form action="">
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
            <div class="row">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <form action="">
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
            <div class="row">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <form action="">
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
 
              <div class="d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <img src="../images/back_blue.png" style="max-width: 30%; height:auto;">
              </div>
   
            {{--守2--}}            
            <div class="row ml-0">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <img src="../images/back_blue.png" style="max-width: 30%; height:auto;">
              </div>
            </div>
            {{--守3--}}
            <div class="row ml-0">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <img src="../images/back_blue.png" style="max-width: 30%; height:auto;">
              </div>
            </div> 
            {{--守4--}}            
            <div class="row ml-0">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <img src="../images/40_blue.png" style="max-width: 30%; height:auto;">
              </div>
            </div>
            {{--守5--}}
            <div class="row ml-0">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">
                <img src="../images/back_blue.png" style="max-width: 30%; height:auto;">
              </div>
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
 