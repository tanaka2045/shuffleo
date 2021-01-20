@extends('layouts.template')

@section('content')
    
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="font-o-lg txt-shadow mt-3 mb-3">ユーザーホーム</div>
      </div>
    </div>
    
    <div class="row">
      <div class="col  pl-0 mb-3">
        <div class="font-o-md txt-shadow">カードステータス</div>
        <div class="row">
          {{-- 攻撃カードのレイアウト開始--}}
          <div class="col-4 offset-2 px-0">
            <div class="font-o-sm txt-shadow mt-2 mb-1" style="color: #FFCADC;">攻撃カード
             </div>
            <div class="row mx-0">
              <div class="col-9 px-0">
                <div class="font-o-sm">攻No1</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/10_red.png" style="max-width: 80%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>
            
            <div class="row mx-0">
              <div class="col-9 px-0">
                <div class="font-o-sm">攻No2</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/20_red.png" style="max-width: 80%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>            
 
             <div class="row mx-0">
              <div class="col-9 px-0">
                <div class="font-o-sm">攻No3</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/30_red.png" style="max-width: 80%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>                   
 
             <div class="row mx-0">
              <div class="col-9 px-0">
                <div class="font-o-sm">攻No4</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/40_red.png" style="max-width: 80%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>               
                
             <div class="row mx-0">
              <div class="col-9 px-0">
                <div class="font-o-sm">攻No5</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/50_red.png" style="max-width: 80%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>
            
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <div class="font-o-sm txt-shadow" style="color:#FFCADC;">計 150pt
                </div>
              </div>
            </div>
          </div>
          {{-- 攻撃カードのレイアウト終了--}}
          
          {{-- 守備カードのレイアウト開始--}}
          <div class="col-4 px-0">
            <div  style="color: C9D3F6;" class="font-o-sm txt-shadow mt-2 mb-1">守備カード
            </div>
            <div class="row mx-0">
              <div class="col-9 px-0">
                <div class="font-o-sm">守No1</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/10_blue.png" style="max-width: 80%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>
            
            <div class="row mx-0">
              <div class="col-9 px-0">
                <div class="font-o-sm">守No2</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/20_blue.png" style="max-width: 80%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>            
 
             <div class="row mx-0">
              <div class="col-9 px-0">
                <div class="font-o-sm">守No3</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/30_blue.png" style="max-width: 80%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>                   
 
             <div class="row mx-0">
              <div class="col-9 px-0">
                <div class="font-o-sm">守No4</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/40_blue.png" style="max-width: 80%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                </div>
            </div>               
                
             <div class="row mx-0">
              <div class="col-9 px-0">
                <div class="font-o-sm">守No5</div>
              </div>
            </div>
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <img src="../images/60_blue.png" style="max-width: 80%; height:auto;">
              </div>
                <div class="col-2 px-0 pt-2">
                  <div class="d-flex flex-column">
                    <img src="../images/arrow_up.png" style="max-width: 50%; height:auto;">
                    <br>
                    <img src="../images/arrow_down.png" style="max-width: 50%; height:auto;">
                  </div>
                  
                </div>
            </div>
            
            <div class="row mx-0">
              <div class="col-9 offset-1 px-0">
                <div class="font-o-sm txt-shadow"  style="color: #C9D3F6;">計 160pt
                </div>
              </div>
            </div>
           {{-- 守備カードのレイアウト終了--}}           
          </div>
        </div>
      </div>
  　</div>
  </div>
@endsection
 