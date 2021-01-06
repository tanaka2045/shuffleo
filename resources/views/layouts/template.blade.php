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
  </head>
  
  <body>  
    <style>
      body{
        background: linear-gradient(to right, #0E1D55, #0000CC 20%, #3333CC 35%, #0000CC 80%, #0E1D55);
      }
    </style>

    <nav class="navbar navbar-dark justify-content-center" style="background-color:#0E1D55">
      <form class="form-inline">
        <div class="text-center">
          <button type="button" class="btn btn-dark font-weight-bold">　　ホーム　　</button>
          <button type="button" class="btn btn-dark font-weight-bold">ユーザーホーム</button>
          <button type="button" class="btn btn-dark font-weight-bold">　対戦組合せ　</button>
        </div>
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#gnavi">
        <span class="sr-only">メニュー</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        
        <div id="gnavi" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="">Link1</a></li>
            <li><a href="">Link2</a></li>
            <li><a href="">Link3</a></li>
          </ul>
        </div>
      </form>
    </nav>
  </body>
    
</html>  