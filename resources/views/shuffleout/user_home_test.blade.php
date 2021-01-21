@extends('layouts.template')

@section('content')
    
  <div class="container-fluid">
    <div class="row">
      <div class="col-4 offset-2 d-flex align-items-center justify-content-end pt-3">
        <form action="">
        <div class="form-group "> 
        <div>
          <select type="text" name="diffencePoint" id="diffencePoint1">
            <option value="DNo1" selected>10</option>
            <option value="DNo2">20</option>
            <option value="DNo3">30</option>
            <option value="DNo4">40</option>
            <option value="DNo5">50</option>
          </select>
          </div>
        </div>
        </form>
      </div>
      <div class="col-6 text-left pt-3">
        <img src="../images/back_red.png" style="max-width: 45%; height:auto;">
      </div>
    </div>
  </div>
@endsection
 