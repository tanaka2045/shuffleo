@extends('layouts.templateWoNavWoFooter')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>インフォメーション新規作成</h2>
        <form action="{{ action('AnnounceAdminController@announceCreate') }}" method="post" enctype="multipart/form-data"> //もともと画像ファイルがあったのでこのエンコード形式
          @csrf
          @if (count($errors) > 0)
            <ul>
              @foreach($errors->all() as $e)
               <li>{{ $e }}</li>
              @endforeach
            </ul>
          @endif
          <div class="form-group row">
           <label class="col-md-2">タイトル</label>
             <div class="col-md-10">
              <input type="text" class="form-control" name="title" value="{{ old('title') }}">
             </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2">本文</label>
            <div class="col-md-10">
              <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
            </div>
          </div>
          <input type="submit" class="btn btn-primary" value="更新">
        </form>
      </div>
    </div>
  </div>
@endsection
