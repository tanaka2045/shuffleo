@extends('layouts.template')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="font-o-lg txt-shadow text-center my-3">他ユーザー情報</div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6 offset-md-3 px-0">  
        <div class="bg-black-gradient btn-shadow font-o-sm-norm p-2" style="border-radius: 0.25rem;">
          <table class="table table-bordered table-sm mt-3 mb-2">
            <tbody>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;">ユーザー名</th>
                <td class="bg-status">{{ $user->nickname }}</td>
              </tr>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;">性別</th>
                <td class="bg-status">{{ $user->gender }}</td>
              </tr>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;">年齢</th>
                <td class="bg-status">{{ $user->age }}</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered table-sm">
            <tbody>            
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;">レート</th>
                <td class="bg-status">{{ str_replace(',', '', number_format($user->elorate,0)) }}</td>
              </tr>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;">トータル対戦数</th>
                <td class="bg-status">{{ $total_count }}</td>
              </tr>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;">トータル勝率</th>
                <td class="bg-status">{{ number_format($total_win_rate,1)."%" }}</td>
              </tr>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;">現ターム対戦数</th>
                <td class="bg-status">{{ $current_count }}</td>
              </tr>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;">現ターム勝率</th>
                <td class="bg-status">{{ number_format($current_win_rate,1)."%" }}</td>
              </tr>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;">現ターム残対戦数</th>
                <td class="bg-status">{{ $residual_count }}</td>
              </tr>
              <tr class="table-transparent-ui">
                <th scope="row" style="font-weight: normal;">過去最高ターム勝率</th>
                <td class="bg-status">
                  @if ($current_term_count == 1)
                    {{ __('データ無し') }}
                  @else
                    {{ number_format($user->best_term_win_rate,1)."%" }}</td>
                  @endif
              </tr>   
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
                
@endsection
 