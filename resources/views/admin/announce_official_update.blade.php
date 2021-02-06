@extends('layouts.template')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col font-o-lg txt-shadow text-center my-3">{{ __('インフォメーション') }}</div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3 px-0">
        <table class="table table-sm btn-shadow"  align="center" style="font-size: 0.9em; margin-x: 0px;">
          <tbody>
            @foreach($extract as $announce)
              <tr class="table-transparent">
                {{-- <th scope="row" class="txt-shadow">ユーザー名</th>
                <td class="bg-status">あいうえおかきくけこ</td>--}}
                <th>{{ $announce->id }}</th>
                <td>{{ \Str::limit($announce->title, 100) }}</td>
                <td>{{ \Str::limit($announce->body, 250) }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection