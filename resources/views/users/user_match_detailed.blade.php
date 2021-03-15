@extends('layouts.template')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="font-o-lg txt-shadow mt-3 mb-3">対戦成績詳細</div>
      </div>
    </div>
    
  　{{-- 戦績テーブル --}}
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="font-o-md mb-2" style="color:#BFCBD7;">トータル戦績 詳細</div>
          <table class="table table-o-bordered table-sm btn-shadow font-o-sm-norm">
            <thead class="bg-status-tr font-o-sm-norm" style="color:#DEEBF7;">
              <tr>
                <th></th>
                <th class="font-o-sm-norm" style="color:#DEEBF7;">攻撃時</th>
                <th class="font-o-sm-norm" style="color:#DEEBF7;">守備時</th>
                <th class="font-o-sm-norm" style="color:#DEEBF7;">計</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="bg-status-tr font-o-sm-norm" style="color:#DEEBF7;">勝ち数</th>
                <td class="bg-status">{{  $total_win_count_offence  }}</td>
                <td class="bg-status">{{  $total_win_count_diffence  }}</td>
                <td class="bg-status" style="border-right-color: #dee2e6;">{{  $total_win_count  }}</td>
              </tr>
              <tr>
                <th scope="row" class="bg-status-tr font-o-sm-norm" style="color:#DEEBF7;">負け数</th>
                <td class="bg-status">{{  $total_lose_count_offence  }}</td>
                <td class="bg-status">{{  $total_lose_count_diffence  }}</td>
                <td class="bg-status" style="border-right-color: #dee2e6;">{{  $total_lose_count  }}</td>
              </tr>
              <tr>
                <th scope="row" class="bg-status-tr font-o-sm-norm" style="color:#DEEBF7;">計</th>
                <td class="bg-status">{{  $total_count_offence  }}</td>
                <td class="bg-status">{{  $total_count_diffence  }}</td>
                <td class="bg-status" style="border-right-color: #dee2e6;">{{  $total_count  }}</td>
              </tr>
              <tr>
                <th scope="row" class="bg-status-tr font-o-sm-norm" style="color:#DEEBF7;">勝率</th>
                <td class="bg-status" style="border-bottom-color: #dee2e6;">{{  number_format($total_win_rate_offence,1)."%"  }}</td>
                <td class="bg-status" style="border-bottom-color: #dee2e6;">{{  number_format($total_win_rate_diffence,1)."%"  }}</td>
                <td class="bg-status" style="border-right-color: #dee2e6; border-bottom-color: #dee2e6;">{{  number_format($total_win_rate,1)."%"  }}</td>
              </tr>            
            </tbody>
          </table>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6 offset-md-3 my-3">
        <div class="font-o-md mb-2" style="color:#BFCBD7;">現ターム戦績 詳細</div>
        <table class="table table-o-bordered table-sm btn-shadow font-o-sm-norm">
            <thead class="bg-status-tr font-o-sm-norm" style="color:#DEEBF7;">
              <tr>
                <th></th>
                <th class="font-o-sm-norm" style="color:#DEEBF7;">攻撃時</th>
                <th class="font-o-sm-norm" style="color:#DEEBF7;">守備時</th>
                <th class="font-o-sm-norm" style="color:#DEEBF7;">計</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="bg-status-tr font-o-sm-norm" style="color:#DEEBF7;">勝ち数</th>
                <td class="bg-status">{{  $current_win_count_offence  }}</td>
                <td class="bg-status">{{  $current_win_count_diffence  }}</td>
                <td class="bg-status" style="border-right-color: #dee2e6;">{{  $current_win_count  }}</td>
              </tr>
              <tr>
                <th scope="row" class="bg-status-tr font-o-sm-norm" style="color:#DEEBF7;">負け数</th>
                <td class="bg-status">{{  $current_lose_count_offence  }}</td>
                <td class="bg-status">{{  $current_lose_count_diffence  }}</td>
                <td class="bg-status" style="border-right-color: #dee2e6;">{{  $current_lose_count  }}</td>
              </tr>
              <tr>
                <th scope="row" class="bg-status-tr font-o-sm-norm" style="color:#DEEBF7;">計</th>
                <td class="bg-status">{{  $current_count_offence  }}</td>
                <td class="bg-status">{{  $current_count_diffence  }}</td>
                <td class="bg-status" style="border-right-color: #dee2e6;">{{  $current_count  }}</td>
              </tr>
              <tr>
                <th scope="row" class="bg-status-tr font-o-sm-norm" style="color:#DEEBF7;">勝率</th>
                <td class="bg-status" style="border-bottom-color: #dee2e6;">{{  number_format($current_win_rate_offence,1)."%"  }}</td>
                <td class="bg-status" style="border-bottom-color: #dee2e6;">{{  number_format($current_win_rate_diffence,1)."%"  }}</td>
                <td class="bg-status" style="border-right-color: #dee2e6; border-bottom-color: #dee2e6;">{{  number_format($current_win_rate,1)."%"  }}</td>
              </tr>            
            </tbody>
          </table>
      </div>
    </div>
    
  　{{-- ユーザーホームへの遷移ボタン --}}
    <div class="row">
      <div class="col text-center">
        <div class="btn-group-vertical mb-4" >
          <a href="{{ action('Users\HomeController@userHomeAccess') }}" role="button" tabindex="0" class="btn btn-blue text-center btn-shadow font-o-esm">戻る</a>
        </div>
      </div>
    </div>
  </div>

  
@endsection
 