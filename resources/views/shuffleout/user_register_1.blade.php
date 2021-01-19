@extends('layouts.templateWoNav')

@include('layouts.titleImage')

@section('content')
    
  <div class="container">
   <div class="row">
    <div class="col text-center pt-5">
        <div class="font-o-lg txt-shadow mb-5">ユーザー登録（ 1/2 ）</div>
    </div>
   </div>
  
  <div class="row">
    <div class="col-xs-12 col-lg-9 offset-lg-3 font-weight-bold" style="text-align: left; padding-right: 5px;">
      
        <form action="" >
          <div class="form-group row mx-0">
            <label for="name">【ユーザー名】</label>
            <input type="text" class="form-control" maxlength="10" placeholder="10文字以内で入力" style="margin-left: 10px; width: auto; height: 1.5em">
          </div>
          @csrf
        </form>
        
        <form action="">
          <div class="form-group">
            <label class="radio-inline" style="padding-right: 50px;">【性別】</label>
            {{-- 男性がchecked　→　これまで選択していた性別をcheckedにする --}}
            <span class="form-check" style="display: inline-flex; padding-right: 20px;">
              <input class="form-check-input" type="radio" name="gender" id="male" checked>
              <label class="form check-label" for="male">男性</label>
            </span>
            <span class="form-check" style="display: inline-flex;">
              <input class="form-check-input" type="radio" name="gender" id="female">
              <label class="form check-label" for="female">女性</label>
            </span>
          </div>
          @csrf
        </form>
        
        <form action="">
          <div class="form-group" >
            <label for="age" style="padding-right: 40px;">【年齢】</label>
            <select type="text" style="margin: 0px 0px 10px 10px;" name="age" id="age">
              <option value="">選択してください</option>
              <option value="20歳未満">20歳未満</option>
              <option value="20代">20代</option>
              <option value="30代">30代</option>
              <option value="40代">40代</option>
              <option value="50代">50代</option>
              <option value="60代">60代</option>
              <option value="70代">70代</option>
              <option value="80歳以上">80歳以上</option>
            </select>
          </div>
          @csrf
        </form>
        
        <form action="">
          <div class="form-group" >
            <label for="age" style="padding-right: 25px;">【誕生月】</label>
            <select type="text" style="margin: 0px 0px 10px 10px;" name="age" id="age">
              <option value="">選択してください</option>
              <option value="1月">1月</option>
              <option value="2月">2月</option>
              <option value="3月">3月</option>
              <option value="4月">4月</option>
              <option value="5月">5月</option>
              <option value="6月">6月</option>
              <option value="7月">7月</option>
              <option value="8月">8月</option>
              <option value="9月">9月</option>
              <option value="10月">10月</option>
              <option value="11月">11月</option>
              <option value="12月">12月</option>
            </select>
          </div>
          @csrf
        </form>
      </div>
  </div>
  
  <div class="row mt-3 mb-2">
    <div class="col text-center">
      <button type="button" class="btn btn-blue text-center btn-shadow">次へ</button>
    </div>
  </div> 
 </div>
    
@endsection
 