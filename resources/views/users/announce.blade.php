@extends('layouts.template')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col font-o-lg txt-shadow text-center my-3">インフォメーション</div>
    </div>
    
    <div class="row">
      <div class="col-md-6 offset-md-3 px-0">
        @foreach($extract as $announce)
          <table class="table table-sm btn-shadow"  align="center">
            <tbody>
              <tr class="table-transparent font-o-sm-norm" style="background-color: #484B52;">
                <td>{{ $announce->date }}　{{ $announce->title }}</td>
              </tr>
              <tr class="tabale-transparent font-o-sm-norm" style="background-color: #8C8F96;">
                <td>{{ $announce->body }}</td>
              </tr>
            </tbody>
          </table>
        @endforeach
      </div>
    </div>

  </div>
                
@endsection
 