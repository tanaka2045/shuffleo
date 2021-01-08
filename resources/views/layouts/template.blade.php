<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token()}}">
    
    {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
    <title>@yield('title')</title>
    
    <!-- Script -->
    {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    
    <!-- fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
    <!-- Styles -->
    {{-- Laravel標準で用意されているCSSを読み込みます --}}
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    {{-- オリジナルで作成したCSSを読み込みます --}}
    <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
    
    <div class= "bg-primary">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 text-white">
            <nav class="navbar navbar-dark2 justify-content-center" style="background-color:#0E1D55">
              <form class="form-inline">
                <div class="text-center">
                  <button type="button" class="btn btn-header font-weight-bold">　ホーム　</button>
                  <button type="button" class="btn btn-header font-weight-bold">ユーザーホーム</button>
                  <button type="button" class="btn btn-header font-weight-bold">対戦組合せ</button>
                </div>
              </form>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </head>
  
  <body>
    <div class= "bg-base">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 bg-main text-white">comment</div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
        </div>
      </div>
    </div>
  </body>
  
  <footer class="footer text-center">遊び方　利用規約　問い合わせ</footer>
    
</html>  