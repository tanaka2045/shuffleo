@extends('layouts.template')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="font-o-lg txt-shadow mt-3 mb-3">対戦組合せ</div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-8 offset-lg-2 mt-2 px-4">
        <div class="p-2 bg-green btn-shadow" style="border:1px solid #FFFFFF; border-radius:0.2rem; ">
          <div class="font-o-elg txt-shadow text-left pl-2" style="color: #C9D3F6;">守備で対戦</div>
          <div class="text-right">
            <a href="{{ action('Users\MatchController@matchDiffenceAccess') }}" role="button" tabindex="0" class="btn btn-diffence btn-shadow font-o-esm">新規対戦ルーム登録</a>
          </div>          
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-8 offset-lg-2 my-5 px-4">
         <div class="p-2 bg-green btn-shadow" style="border:1px solid #FFFFFF; border-radius:0.2rem; ">
          <div class="font-o-elg txt-shadow text-left pl-2" style="color:#FFCADC;">攻撃で対戦</div>
          
          <table class="table table-sm mt-3 mb-2">
            <thead>
              <tr>
                <th class="text-left align-middle font-o-md pl-3" style="border: none;">ユーザー名</th>
                <th class="align-middle font-o-esm" style="border: none;">入出中<br>ユーザー</th>
                <th style="border: none;"></th>
              </tr>
            </thead>             
            <tbody>
              <tr>
                <th scope="row" class="font-o-md text-left align-middle pl-3">user0017</th>
                <td class="font-o-md align-middle">2</td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="{{ action('Users\MatchController@matchOffenceAccess') }}" role="button" tabindex="0" class="btn btn-offence btn-shadow font-o-esm mx-0 my-1 px-1">対戦ルームへ</a>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row" class="font-o-md text-left align-middle pl-3">あいうえおかきくけこ</th>
                <td class="font-o-md align-middle">2</td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="{{ action('Users\MatchController@matchOffenceAccess') }}" role="button" tabindex="0" class="btn btn-offence btn-shadow font-o-esm mx-0 mt-1 px-1">対戦ルームへ</a>
                    <button type="button" class="btn btn-cancel-red btn-shadow font-o-esm mx-0 my-1 px-1" style="color:#A3002F;">キャンセル</button>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row" class="font-o-md text-left align-middle pl-3">user0213</th>
                <td class="font-o-md align-middle">10</td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="{{ action('Users\MatchController@matchOffenceAccess') }}" role="button" tabindex="0" class="btn btn-offence btn-shadow font-o-esm mx-0 my-1 px-1">対戦ルームへ</a>
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
 