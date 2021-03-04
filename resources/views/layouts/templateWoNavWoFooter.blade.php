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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    
    <!-- fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
    <!-- Styles -->
    {{-- Laravel標準で用意されているCSSを読み込みます --}}
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    {{-- オリジナルで作成したCSSを読み込みます --}}
    <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
    @yield('js')
  </head>
  
  <body>
    <div id="app">
      <div class="container-fluid">
        <div class="row">
          <div class= "col bg-base px-0">
            {{-- footerの高さを調整した場合、min-heightの数字を調整する --}}
            <div class="col-lg-6 offset-lg-3 bg-main text-white" style="min-height: 100vh;">
              <div style="text-align: center;">
                @yield('titleImage')
                @yield('content')
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  
</html>  