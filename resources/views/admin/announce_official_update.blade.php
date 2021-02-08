@extends('layouts.templateWoNavWoFooter')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col font-o-lg txt-shadow text-center my-3">{{ __('オフィシャルアップデート完了') }}</div>
    </div>
 
    
    <div class="row">
      <div class="col text-center my-3">
      <a href="{{ action('Admin\AnnounceAdminController@announceIndex') }}" role="button" class="btn btn-primary">{{ __('Indexへ') }}</a>
      </div> 
    </div>

  </div>
@endsection