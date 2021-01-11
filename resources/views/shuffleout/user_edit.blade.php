@extends('layouts.template')

@section('content')

 <div class="container">
  <div class="col-lg-6 offset-lg-3 font-weight-bold" style="text-align: left; padding: 50px 0px 0px 0px;">
    <div class="card text-black border-0" style="background-color: transparent;">
      <h3 style="text-align: center; margin-bottom: 50px;">ユーザー情報</h3>
      <form action="">
        <div class="form-group">
          <label for="age">年齢</label>
          <input type="text" style="margin: 0px 0px 10px 10px;" name="age" id="age">
        </div>
      </form>
       <form action="">
        <div class="form-group">
          <label for="gendar">性別</label>
          <input type="text" style="margin: 0px 0px 10px 10px;name="gender" id="gender">
        </div>
      </form>
      
    </div>
  </div>
 </div>
    

           
                
@endsection
 