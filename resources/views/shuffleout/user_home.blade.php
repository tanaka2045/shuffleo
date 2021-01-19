@extends('layouts.template')

@section('content')
    
  <div class="container-fluid">
    
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="font-o-lg txt-shadow mt-3 mb-2">ユーザーステータス</div>
        <div class="bg-nav-base btn-shadow font-o-md ml-1" style="border-radius: 0.25rem; border:1px solid #F2F2F2">
          <table class="table table-bordered table-sm mt-3 mb-2">
            <tbody>
              <tr class="table-transparent">
                <th scope="row" class="txt-shadow">ユーザー名</th>
                <td class="bg-status">あいうえおかきくけこ</td>
              </tr>
              <tr class="table-transparent">
                <th scope="row" class="txt-shadow">性別</th>
                <td class="bg-status">男性</td>
              </tr>
                <tr class="table-transparent">
                <th scope="row" class="txt-shadow">年齢</th>
                <td class="bg-status">30代</td>
              </tr>
               <tr class="table-transparent">
                <th scope="row" class="txt-shadow">誕生月</th>
                <td class="bg-status">1月</td>
            </tbody>
          </table>
          <table class="table table-bordered table-sm">
            <tbody>            
              </tr>
                <tr class="table-transparent">
                <th scope="row" class="txt-shadow">レート</th>
                <td class="bg-status">1500</td>
              </tr>
                <tr class="table-transparent">
                <th scope="row" class="txt-shadow">トータル対戦数</th>
                <td class="bg-status">140</td>
              </tr>
                <tr class="table-transparent">
                <th scope="row" class="txt-shadow">トータル勝率</th>
                <td class="bg-status">42.9%</td>
              </tr>
                <tr class="table-transparent">
                <th scope="row" class="txt-shadow">現ターム対戦数</th>
                <td class="bg-status">80</td>
              </tr>
                <tr class="table-transparent">
                <th scope="row" class="txt-shadow">現ターム勝率</th>
                <td class="bg-status">57.1%</td>
              </tr>
              </tr>
                <tr class="table-transparent">
                <th scope="row" class="txt-shadow">現ターム残対戦数</th>
                <td class="bg-status">20</td>
              </tr>                           
            </tbody>
          </table>
          <div class="text-right">
            <button type="button" class="btn btn-gray-blue btn-shadow font-o-esm mb-3" style="text-align: center; width: 90%;">次タームへ</button>
          </div>
          <div class="mb-3">
           <a class="border-bottom font-o-esm txt-shadow" href="#!">閲覧していない対戦結果
           </a>
          </div>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="font-o-lg txt-shadow mt-3">カードステータス</div>
        <div class="row">
          <div class="col-6">
            <div class="font-o-md txt-shadow mt-2 mb-1">攻撃カード</div>
            <div class="row">
              <div class="col-9 offset-2 px-0">
                <div class="font-o-sm card-">攻No1</div>
                <img src="../images/10_red.png" style="max-width: 60%; height:auto;">
                </a>
                <div class="font-o-sm">攻No2</div>
                <img src="../images/20_red.png" style="max-width: 60%; height:auto;">
                </a>
                <div class="font-o-sm">攻No3</div>
                <img src="../images/30_red.png" style="max-width: 60%; height:auto;">
                </a>
                <div class="font-o-sm">攻No4</div>
                <img src="../images/40_red.png" style="max-width: 60%; height:auto;">
                </a> 
                <div class="font-o-sm">攻No5</div>
                <img src="../images/50_red.png" style="max-width: 60%; height:auto;">
                </a> 
              </div>
              <div>
                  <i class="fas fa-arrow-up"></i>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="font-o-md txt-shadow mt-2 mb-1">守備カード</div>
            <div class="row">
              <div class="col-9 offset-2 px-0">
                <div class="font-o-sm">守No1</div>
                <img src="../images/10_blue.png" style="max-width: 60%; height:auto;">
                </a>
                <div class="font-o-sm">守No2</div>
                <img src="../images/20_blue.png" style="max-width: 60%; height:auto;">
                </a>
                <div class="font-o-sm">守No3</div>
                <img src="../images/30_blue.png" style="max-width: 60%; height:auto;">
                </a>
                <div class="font-o-sm">守No4</div>
                <img src="../images/40_blue.png" style="max-width: 60%; height:auto;">
                </a> 
                <div class="font-o-sm">守No5</div>
                <img src="../images/60_blue.png" style="max-width: 60%; height:auto;">
                </a>
              </div>
              <div class="col-1 px-0">
                t
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
 
    
    
    <div class="row">
      {{-- テーブル --}}
    </div>
    
  </div>
    
    
                
@endsection
 