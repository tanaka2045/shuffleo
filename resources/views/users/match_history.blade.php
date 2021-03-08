@extends('layouts.template')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col font-o-lg txt-shadow text-center my-3">{{ __('対戦履歴') }}</div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3 font-o-sm px-0" align="center">
        <table class="table table-sm text-center" style="color:#CFCFCF;">
          <tbody>
            @foreach ($target_match_results as $target_match_result)
              {{-- 対戦履歴の中で、未閲覧試合をチェックし、未閲覧の場合は$keyがtrue --}}
              @php
                $id = $target_match_result->id;
                $key = in_array($id, $not_accessed_result_id);
              @endphp
              {{-- 未閲覧試合だった場合、スコアを？にする表示 --}}
              @if ($key)
              <tr>
                <th class="px-0 font-o-sm-norm" style="color:#CFCFCF; border-top:1px dotted #72706E; border-bottom:1px dotted #72706E;"> 
                  {{ $target_match_result->matched_at->format('m/d') }}</th>
                <td class="px-0" style="border-top:1px dotted #72706E; border-bottom:1px dotted #72706E;">
                  <a href="{{ action('Users\MatchController@matchPastResultAccess', $target_match_result->id) }}" style="color:#CFCFCF"> 
                    {{ $target_match_result->offence_nickname }}{{ __(' ') }}
                    <span style="color:#FFCCA1"> {{ __('?') }}{{ __(' ') }}
                      {{ __('-') }}{{ __(' ') }}
                      {{ __('?') }}{{ __(' ') }}
                    </span>
                    {{ $target_match_result->diffence_nickname }}
                  </a>
                </td>
              </tr>
              {{-- 閲覧済試合だった場合、スコアを表示する --}}
              @else
              <tr>
                <th class="px-0 font-o-sm-norm" style="color:#CFCFCF; border-top:1px dotted #72706E; border-bottom:1px dotted #72706E;"> 
                  {{ $target_match_result->matched_at->format('m/d') }}</th>
                <td class="px-0" style="border-top:1px dotted #72706E; border-bottom:1px dotted #72706E;">
                  <a href="{{ action('Users\MatchController@matchPastResultAccess', $target_match_result->id) }}" style="color:#CFCFCF"> 
                    {{ $target_match_result->offence_nickname }}{{ __(' ') }}
                    <span style="color:#a1ecff">{{ $target_match_result->win_card_count_offence }}{{ __(' ') }}
                      {{ __('-') }}{{ __(' ') }}
                      {{ $target_match_result->win_card_count_diffence }}{{ __(' ') }}
                    </span>
                    {{ $target_match_result->diffence_nickname }}
                  </a>
                </td>
              </tr>
              @endif
            @endforeach
          </tbody>
        </table>
      </div>  
    </div>
  </div>
                
@endsection
 