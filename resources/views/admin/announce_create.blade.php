@extends('layouts.templateWoNavWoFooter')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto mt-5">
        <h3 class="mb-3">管理者用インフォメーション新規作成</h3>
        <form action="{{ action('Admin\AnnounceAdminController@announceCreate') }}" method="post" enctype="multipart/form-data"> {{-- もともと画像ファイルがあったのでこのエンコード形式 --}}
          @csrf
          @if (count($errors) > 0)
            <ul>
              @foreach($errors->all() as $e)
               <li>{{ $e }}</li>
              @endforeach
            </ul>
          @endif
          <div class="form-group row">
           <label class="col-md-3">タイトル</label>
             <div class="col-md-9">
              <input type="text" class="form-control" name="title" value="{{ old('title') }}">
             </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3">本文</label>
            <div class="col-md-9">
              <textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
            </div>
          </div>
          <input type="submit" class="btn btn-primary mb-5" value="更新">
        </form>
      </div>
    </div>
  </div>
@endsection
