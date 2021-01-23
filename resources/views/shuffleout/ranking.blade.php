@extends('layouts.template')

@section('content')
    
  <div class="container">
    <div class="row">
      <div class="col font-o-lg txt-shadow text-center my-3">ランキング</div>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2 font-o-md px-0">
        <div class="d-flex justify-content-start">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#!">トータル勝率</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!">ターム勝率</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!">レート</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2 px-0">
        <table class="table btn-shadow"  align="center" style="font-size: 0.9em; margin-x: 0px;">
          <thead class="thead-dark text-center">
            <tr>
              <th scope="col" class="align-middle">順位</th>
              <th scope="col" class="align-middle">ユーザー名</th>
              <th scope="col" class="align-middle">トータル<br>勝率</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-green">
              <th scope="row" class="color-gold txt-shadow" style="border: none;">１</th>
              <td style="border: none;">あいうえおかきくけこ</td>
              <td style="border: none;">54.5%</td>
            </tr>
           <tr class="table-green">
              <th scope="row" class="color-silver txt-shadow" style="border: none;">２</th>
              <td>Jacob</td>
              <td>54.2%</td>
            </tr>
           <tr class="table-green">
              <th scope="row" class="color-blonze txt-shadow" style="border: none;">３</th>
              <td>Larry</td>
              <td>53.8%</td>
            </tr>
            <tr class="table-green">
              <th scope="row">４</th>
              <td>Mark</td>
              <td>54.5%</td>
            </tr>
           <tr class="table-green">
              <th scope="row">５</th>
              <td>Jacob</td>
              <td>54.2%</td>
            </tr>
           <tr class="table-green">
              <th scope="row">６</th>
              <td>Larry</td>
              <td>53.8%</td>
            </tr>
            <tr class="table-green">
              <th scope="row">７</th>
              <td>Mark</td>
              <td>54.5%</td>
            </tr>
           <tr class="table-green">
              <th scope="row">８</th>
              <td>Jacob</td>
              <td>54.2%</td>
            </tr>
           <tr class="table-green">
              <th scope="row">９</th>
              <td>Larry</td>
              <td>53.8%</td>
            </tr>
            <tr class="table-green">
              <th scope="row">１０</th>
              <td>Larry</td>
              <td>53.8%</td>
            </tr>
            <tr class="table-green">
              <th scope="row">１１</th>
              <td>Mark</td>
              <td>54.5%</td>
            </tr>
           <tr class="table-green">
              <th scope="row">１２</th>
              <td>Jacob</td>
              <td>54.2%</td>
            </tr>
           <tr class="table-green">
              <th scope="row">１３</th>
              <td>Larry</td>
              <td>53.8%</td>
            </tr>
            <tr class="table-green">
              <th scope="row">１４</th>
              <td>Mark</td>
              <td>54.5%</td>
            </tr>
           <tr class="table-green">
              <th scope="row">１５</th>
              <td>Jacob</td>
              <td>54.2%</td>
            </tr>
           <tr class="table-green">
              <th scope="row">１６</th>
              <td>Larry</td>
              <td>53.8%</td>
            </tr>
            <tr class="table-green">
              <th scope="row">１７</th>
              <td>Mark</td>
              <td>54.5%</td>
            </tr>
           <tr class="table-green">
              <th scope="row">１８</th>
              <td>Jacob</td>
              <td>54.2%</td>
            </tr>
           <tr class="table-green">
              <th scope="row">１９</th>
              <td>Larry</td>
              <td>53.8%</td>
            </tr>
            <tr class="table-green">
              <th scope="row">２０</th>
              <td>Larry</td>
              <td>53.8%</td>
            </tr>
          </tbody>
        </table>
      </div> 
    </div>
  </div>
    
    
                
@endsection
 