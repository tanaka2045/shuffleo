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
  </head>
  
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class= "col bg-base px-0">
          {{-- footerの高さを調整した場合、min-heightの数字を調整する --}}
          <div class="col-md-6 offset-md-3 bg-main text-white" style="min-height: 94vh;">
            <div style="text-align: center;">
              @yield('titleImage')
              @yield('content')
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col px-0">
          <footer class="footer text-center text-white" style="background-color:#0E1D55; padding:10px 0px 1px 0px">
            <ul style="list-style:none; padding-left: 0;">
              <li style="display:inline; padding: 0px 10px; text-decoration: underline"><a href="#"><font color="#FFFFFF">遊び方</font></a></li>
              <li style="display:inline; padding: 0px 10px; text-decoration: underline"><a href="#"><font color="#FFFFFF">利用規約</font></a></li>
              <li style="display:inline; padding: 0px 10px; text-decoration: underline"><a href="#"><font color="#FFFFFF">問い合わせ</font></a></li>
            </ul>
          </footer>
        </div>
      </div>
    </div>
  </body>
  
</html>  