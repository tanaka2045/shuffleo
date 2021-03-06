@extends('layouts.template')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center px-0">
        <div class="font-o-lg txt-shadow my-2">新規対戦ルーム登録</div>

        <div class="row mx-0">
          {{-- 守備側のレイアウト開始 --}}
          <div class="col-8 offset-2 px-0">
            <div class="row mx-0 ">
              <div class="col">
                <a class="font-o-sm txt-shadow">あいう
                </a>
              </div>
            </div>
            {{--守1--}}
            <div class="row mx-0">
              <div class="col d-flex align-items-center justify-content-center pt-1 px-0 mx-0">

                <div class="row">
                  <div class="col">
                    <button id="rotate-btn" class="btn-green text-center font-o-sm btn-shadow mx-2" name="set">{{  __('クルクル')  }}</button>
                    <button id="dummy-btn" class="btn-green text-center font-o-sm btn-shadow mx-2" name="dummy">{{  __('ダミー')  }}</button>
                  </div>
                </div>
              </div>
            </div>
                
            <div class="row">
              <div class="col">
                <div id="rotate-area">
                  <div class="rotate-target omote" id="omote">
                    <img src="https://www.kansuke-prg.com/wp/wp-content/uploads/2019/07/child_theme.jpg">
                  </div>
                  <div class="rotate-target ura" id="ura">
                    <img src="https://www.kansuke-prg.com/wp/wp-content/uploads/2019/06/42f0f3947d7ca2b1a713bfa40e4f558e_s.jpg">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection

@section('js')
<script>
 const btn = document.getElementById(`rotate-btn`);
  jQuery(function($){
    $('#rotate-btn').click(function(){
        $('#omote').css({'z-index':'0', 'transform':'rotateY(-180deg)'});
        $('#ura').css({'z-index':'1', 'transform':'rotateY(0deg)'});
    });
  });
</script>
@endsection
 