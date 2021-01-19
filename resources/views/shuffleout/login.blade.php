@extends('layouts.templateWoNav')

@include('layouts.titleImage')

@section('content')
    
  <div class="container">
    {{--<div class="row">
      <div class="col text-center pt-5">
        <div class="font-o-lg txt-shadow mb-5">ログイン</div>
      </div>
    </div>--}}
  
    <div class="row">
      <div class="col-xs-12 col-lg-6 offset-lg-3 font-weight-bold pt-5" style="text-align: left;">
        
        <form action="" >
          <div class="form-group">
            <label for="loginID">【ログインID】</label>
            <input type="text" class="form-control" maxlength="20" style="height: 1.5em">
          </div>
          @csrf
        </form>
        
        <form action="" >
          <div class="form-group">
            <label for="password">【パスワード】</label>
            <input type="text" class="form-control" maxlength="20" style="height: 1.5em">
          </div>
          @csrf
        </form>
        
      </div>
    </div>
    
    <div class="row mt-5 mb-2">
      <div class="col text-center">
        <button type="button" class="btn btn-blue text-center btn-shadow">ログイン</button>
      </div>
    </div>
  </div>
  
@endsection
 