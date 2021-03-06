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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
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
      <nav class="navbar fixed-top navbar-dark justify-content-center">
          <div>
            <a href="{{ action('Users\HomeController@homeAccess') }}" role="button" tabindex="0" class="btn btn-header">ホーム</a>
            <a href="{{ action('Users\HomeController@userHomeAccess') }}" role="button" tabindex="0" class="btn btn-header">ユーザーホーム</a>
            <a href="{{ action('Users\MatchController@matchMakeAccess') }}" role="button" tabindex="0" class="btn btn-header">対戦組合せ</a>
          </div>
      </nav>
      <div class="container-fluid" style="padding-top:50px;">
        <div class="row">
          <div class= "col bg-base px-0">
            {{-- footerの高さを調整した場合、min-heightの数字を調整する --}}
            <div class="col-lg-6 offset-lg-3 bg-main text-white" style="min-height: 87vh;">
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
                <li style="display:inline; padding: 0px 10px; text-decoration: underline"><a href="{{ action('Users\HelpMessageController@tutorialAccess') }}"><font color="#FFFFFF">遊び方</font></a></li>
                <li style="display:inline; padding: 0px 10px; text-decoration: underline"><a href="{{ action('Users\HelpMessageController@policyAccess') }}"><font color="#FFFFFF">利用規約</font></a></li>
                <li style="display:inline; padding: 0px 10px; text-decoration: underline"><a href="{{ action('Users\InquiryController@inquiryAccess') }}"><font color="#FFFFFF">問い合わせ</font></a></li>
              </ul>
            </footer>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>  