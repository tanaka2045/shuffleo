@extends('layouts.templateWoNav')

@include('layouts.titleImage')

@section('content')
    
  <div class="container">
    <div class="row">
      <div class="col text-center pt-5">
        <div class="font-o-lg txt-shadow mb-3">ユーザー登録（ 2/2 ）</div>
      </div>
    </div>
  
    <div class="row">
      <div class="col-xs-12 col-lg-6 offset-lg-3 font-weight-bold" style="text-align: left;">
        
        <form action="" >
          @csrf
          <div class="form-group">
            <label for="loginID">【ログインID】</label>
            <input type="text" class="form-control" maxlength="20" placeholder="半角英数字8~20文字" style="height: 1.5em">
          </div>
        </form>
        
        <form action="" >
          @csrf
          <div class="form-group">
            <label for="password">【パスワード】</label>
            <input type="text" class="form-control" maxlength="20" placeholder="半角英数字8~20文字" style="height: 1.5em">
          </div>
        </form>
        
        <form action="" >
          @csrf
          <div class="form-group">
            <label for="password">【パスワード（確認用）】</label>
            <input type="text" class="form-control" maxlength="20" placeholder="半角英数字8~20文字" style="height: 1.5em">
          </div>
        </form>
        
        <form action="" >
          @csrf
          <div class="form-group">
            <label for="email">【メールアドレス】</label>
            <input type="text" class="form-control" maxlength="20" placeholder="メールアドレス" style="height: 1.5em">
          </div>
        </form>
       
      </div>
    </div>
    
    <div class="row mt-3 mb-2">
      <div class="col text-center">
        <button type="button" class="btn btn-blue text-center btn-shadow">登録</button>
      </div>
    </div>
    
    <div class="row mt-3 mb-2">
      <div class="col text-center">
        <button type="button" class="btn btn-green text-center btn-shadow">戻る</button>
      </div>
    </div>
  </div>
  
@endsection
 