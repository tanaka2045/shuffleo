@extends('layouts.template')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="font-o-lg txt-shadow mt-3 mb-3">対戦組合せ</div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-8 offset-lg-2 mt-2">
        <div class="p-2 btn-shadow" style="border:3px solid #FFFFFF";>
          <div class="font-o-elg text-left">守備</div>
          <div class="text-right">
            <button type="button" class="btn btn-diffence btn-shadow font-o-esm">新規対戦ルーム作成</button>
          </div>          
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-8 offset-lg-2 mt-3">
        <div class="p-2 btn-shadow" style="border:3px solid #FFFFFF";>
          <div class="font-o-elg text-left">攻撃</div>
          
          <table class="table table-sm font-o-esm mt-3 mb-2">
            <thead style="background-color: #0E1D55;">
              <tr>
                <th class="align-middle" style="border: none;">ユーザー名</th>
                <th class="align-middle" style="border: none;">入出中<br>ユーザー</th>
                <th style="border: none;"></th>
              </tr>
            </thead>             
            <tbody>
              <tr>
                <th scope="row" class="font-o-esm align-middle">user0017</th>
                <td class="font-o-md align-middle">2</td>
                <td>
                  <div class="btn-group-vertical">
                    <button type="button" class="btn btn-offence btn-shadow font-o-esm mx-0 my-1 px-1">対戦ルームへ</button>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row" class="font-o-esm align-middle">あいうえおかきくけこ</th>
                <td class="font-o-md align-middle">2</td>
                <td>
                  <div class="btn-group-vertical">
                   <button type="button" class="btn btn-offence btn-shadow font-o-esm mx-0 my-1 px-1">対戦ルームへ</button>
                    <button type="button" class="btn btn-green btn-shadow font-o-esm mx-0 mb-1 px-1">キャンセル</button>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row" class="font-o-esm align-middle">user0213</th>
                <td class="font-o-md align-middle">10</td>
                <td>
                  <div class="btn-group-vertical">
                    <button type="button" class="btn btn-offence btn-shadow font-o-esm mx-0 my-1 px-1">対戦ルームへ</button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>        
         
         
         
        </div>
      </div>
    </div>
    
  </div>
@endsection
 