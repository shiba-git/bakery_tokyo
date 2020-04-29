<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel=”icon” href="{{ asset('images/favicon.ico') }}">
    <link rel="profile"href="">
    <link rel="pingback" href="">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title') | BarkeyTokyo</title>
  </head>
  <body>
    <header class="navbar-fixed">
        <nav>
          <div class="nav-wrapper">
            <a href="/" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
            <div class="container">
              <h1>
                <a href="/" class="brand-logo">
                  <img src="{{ asset('images/logo.png') }}" width="100px" height="auto">
                </a>
              <h1>
              <ul class="right hide-on-med-and-down">
                <li><a href="{{ url('key') }}">キャンペーン</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
          <li><a href="{{ url('key') }}">キャンペーン</a></li>
        </ul>
    </header>
    <main>
      @yield('contents')
    </main>
    <footer>
      <div class="footer-inner">
        <p class="copyright"><small>@Copyright2020 BakeryTokyo.All Rights Reserved.</small></p>
      </div>
    </footer>
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('js/default.js') }}"></script>
    <script> 
    $(function(){
      $('a[href="#recommend"], a[href="#choosePanFromImage"]').click(function(){
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
      });
      $('#recommend > .col > .recommend-item > figure, #choosePanFromImage > .col > .choosePanFromImage-item > figure').matchHeight();
    });
    </script>
  </body>
</html>