@extends('layouts.templateWoImage')

@section('content')
    
  <div class="container-fluid">
    
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="card bg-nav-base card-shadow font-o-lg mt-4 ml-1 pl-2" style="border-radius: 0.25rem; border-color:#FFFFFF">
          <p>ユーザー名：あいうえおかきくけこ</p>
          <p style="margin-top:0px;">性別　　　：男性</p>
          <p>年齢　　　：30歳</p>
          <p>誕生月　　：1月</p>
          <p>レート　　　　　：1500</p>
          <p>トータル対戦数　：140</p>
          <p>トータル勝率　　：42.9%</p>
          <p>現ターム対戦数　：80</p>
          <p>現ターム勝率　　：57.1%</p>
          <p>現ターム残対戦数：20</p>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12">
      {{--カード--}} 
        <div class="card mt-3" style="border-radius: 0.25rem;">
          ここはカードステータスです
        </div>
      </div>
    </div>
    
    <div class="row">
      {{-- テーブル --}}
    </div>
    
  </div>
    
    
                
@endsection
 