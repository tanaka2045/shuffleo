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
        <div class="p-2 bg-match-make btn-shadow" style="border:3px solid #484B52; border-radius:0.2rem; ">
          <div class="font-o-md text-center mb-2 fluorescence-blue" style="width:25%; color: #C9D3F6;">守備で対戦</div>
          <div class="text-right">
            @if ($term_end_point == 0 && $day_match_count <10000)
              <a href="{{ action('Users\MatchController@matchDiffenceAccess') }}" role="button" class="btn btn-diffence btn-shadow font-o-esm">新規 ルーム登録</a>            
            @else
              <button class="btn btn-diffence btn-shadow font-o-esm" disabled>新規対戦ルーム登録</button>
            @endif
          </div>          
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-8 offset-lg-2 mt-2 mb-5 px-4">
         <div class="p-2 bg-match-make btn-shadow" style="border:3px solid #484B52; border-radius:0.2rem; ">
          <div class="font-o-md text-center mb-2 fluorescence-red" style="width:25%; color:#FFCADC;">攻撃で対戦</div>
          <table class="table table-sm mb-2">
            <thead>
              <tr>
                <th class="text-left align-middle font-o-md-norm pl-3" style="border: none;">ユーザー名</th>
                <th class="align-middle font-o-esm-norm" style="border: none;">入出中<br>ユーザー</th>
                <th style="border: none;"></th>
              </tr>
            </thead>             
            <tbody>
               {{-- $diffence_users　→　対戦エントリーフラグが１（＝守備登録のみ）のMatchResults --}}
              @if (isset($diffence_users))
               @foreach($diffence_users as $diffence_user)
                <tr>
                  <th scope="row" class="font-o-md-norm text-left align-middle pl-3">
                    <a href="{{ action('Users\OtherUserController@otherUserAccess', $diffence_user->user_id) }}" style="text-decoration:underline; color:#FFFFFF;" > 
                    {{ $diffence_user->diffence_nickname }}</a></th>
                  <td class="font-o-md-norm align-middle">0</td>
                  <td>
                    <div class="btn-group-vertical">
                      @if ($diffence_user->user_id == $user_id)
                        <a href="{{ action('Users\MatchController@matchMakeDelete', ['id' => $diffence_user->id] ) }}" role="button" class="btn btn-cancel-red btn-shadow font-o-esm mx-0 px-2" style="color:#A3002F;">キャンセル</a>
                      @else
                        @if ($term_end_point == 0 && $day_match_count <10000)
                          <a href="{{ action('Users\MatchController@matchOffenceAccess', ['id' => $diffence_user->id] )}}" role="button" class="btn btn-offence btn-shadow font-o-esm mx-0 my-1 px-1">対戦ルームへ</a>
                        @else
                          <button class="btn btn-offence btn-shadow font-o-esm mx-0 my-1 px-1" disabled>対戦ルームへ</button>
                        @endif
                      @endif
                    </div>
                  </td>
                </tr>
                @endforeach
              @endif
            </tbody>
          </table>
         
        </div>
      </div>
    </div>
    
  </div>
@endsection
 