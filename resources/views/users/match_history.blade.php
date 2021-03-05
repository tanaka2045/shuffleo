@extends('layouts.template')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col font-o-lg txt-shadow text-center my-3">{{ __('対戦履歴') }}
      
        @foreach ($target_match_results as $target_match_result)
          <div class="font-o-sm">
            {{ $target_match_result->matched_at->format('m/d') }}
            {{ $target_match_result->offence_nickname }}
            {{ __('-') }}
            {{ $target_match_result->diffence_nickname }}
          </div>
        @endforeach
      </div>
    </div>
  </div>
    
                
@endsection
 