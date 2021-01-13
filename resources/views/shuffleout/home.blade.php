@extends('layouts.template')

@section('content')
    
  <div class="card text-black border-0 mt-5" style="background-color: transparent;">
    <h2 class="font-weight-bold txt-shadow" style="text-align: center; margin-bottom: 50px;">ゲーム概要紹介を１～２行で記載する</h2>
  </div>
  
  <div class="container">
    <div class="row">
      <div class="col-6 offset-3 font-weight-bold" style="text-align: left; padding: 50px 0px 0px 0px;">
        <h3 class="font-weight-bold txt-shadow" style="text-align: center; margin-bottom: 20px;">お知らせ</h3>
        <div class="cardtext-black border-0" style="background-color: transparent;">
          <h5 class="font-weight-bold" style="text-align: center;">21/1/13　　作成中　まだ遊べません</h5>
          <h5 class="font-weight-bold" style="text-align: center;">21/1/12　　コメントサンプルYYY</h5>
           {{--@foreach($posts as $news)
            <tr>
              <th>{{ $news->id }}</th>
              <td>{{ \Str::limit($news->title, 100) }}</td>
              <td>{{ \Str::limit($news->body, 250) }}</td>
            </tr>
          @endforeach--}}
        </div>
      </div>
    </div>
    <button type="button" class="btn-shadow btn btn-blue font-weight-bold" style="text-align: center; margin-top: 50px;">ランキング</button>
  </div>
    
                
@endsection
 