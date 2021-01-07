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

    <nav class="navbar navbar-dark justify-content-center" style="background-color:#0E1D55">
      <form class="form-inline">
        <div class="text-center">
          <button type="button" class="btn btn-header font-weight-bold">　　ホーム　　</button>
          <button type="button" class="btn btn-header font-weight-bold">ユーザーホーム</button>
          <button type="button" class="btn btn-header font-weight-bold">　対戦組合せ　</button>
        </div>
        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="">遊び方</a></li>
            <li><a href="">問い合わせ</a></li>
            <li><a href="">利用規約</a></li>
          </ul>
        </div>
      </form>
    </nav>
  </head>
  
  <body>
    <div class= "bg-base">
    <div class="container-fluid">
      <div class="row">
        {{-- /<div class="col-sm-3 bg-base">col-sm-3</div> --}}
        <div class="col-sm-6 offset-sm-3 bg-main">col-sm-6</div>
        {{-- <div class="col-sm-3 bg-base">col-sm-3</div>--}}
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
  
  <footer class="footer text-center">2021</footer>
    
</html>  