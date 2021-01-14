@extends('layouts.template')

@section('content')

 <div class="container">
  <div class="col-6 offset-3 font-weight-bold" style="padding: 50px 0px 0px 0px;">
    <div class="card text-black border-0" style="background-color: transparent;">
      <h3 class="font-weight-bold txt-shadow" style="text-align: center; margin-bottom: 50px;">ユーザー情報編集</h3>
    </div>
  </div>
  
  <div class="col-xs-12 col-lg-9 offset-lg-3 font-weight-bold" style="text-align: left; padding-left: 20px; padding-right: 5px;">
    <div class="card text-black border-0" style="background-color: transparent;">    
      <form action="">
        <div class="form-group">
          <label for="name">【ユーザー名】</label>
          <span style="margin-left: 10px;">あいうえおかきくけこ</span>
        </div>
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
      </form>
    </div>
  </div>
  <button type="button" class="btn-shadow btn btn-blue font-weight-bold" style="text-align: center; margin-top: 30px; margin-bottom: 20px;">更新</button>
 </div>
    
                
@endsection
 