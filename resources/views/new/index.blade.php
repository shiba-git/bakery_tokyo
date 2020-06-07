<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PT5P4SF');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0"/>
    <meta name="description" content="新しい商品などを訴求したい企業様はBakeryTokyoがお手伝いします。">
    <meta name="keywords" content="パン,ベーカリー,東京,東京グルメ,画像,Instagram,インスタグラム,企業,パン屋">
    <meta property="og:title" content="パン屋さんへ" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://bakery-tokyo.com/purchase/" />
    <meta property="og:image" content="https://bakery-tokyo.com/images/banner.jpg" />
    <meta property="og:site_name" content="bakerytokyo" />
    <meta property="og:description" content="新しい商品などを訴求したい企業様はBakeryTokyoがお手伝いします。" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="profile"href="">
    <link rel="pingback" href="">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/purchase/sp.css') }}" media="screen and (max-width:600px)">
    <link rel="stylesheet" href="{{ asset('css/purchase/pc.css') }}" media="screen and (min-width:600px)">
    <title>パン屋さんへ | BarkeyTokyo</title>
    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-TG9L93Z"></script>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PT5P4SF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
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
          <li><a class="sidenav-close" href="#close">閉じる</a></li>
        </ul>
    </header>
    <main id="new">
        <div class="mainImg">
          <img src="{{ asset('images/new_sp.jpg') }}" alt="パン画像一枚につき100円で買い取ります" width="100%" height="auto">
        </div>
        <div class="mainText">
          <p>新型コロナウイルスの影響により、飲食業界は大きな打撃を受けている。</p>
          <p>営業再開後、新しい商品などを訴求したい企業様はBakeryTokyoがお手伝いします。</p>
        </div>
        <div class="mainText">
          <p>訴求したい商品(パンなど)をbakerytokyo.comに掲載いたします。</p>
        </div>
        <div class="imagesNew">
          <img src="{{ asset('images/new_desc.jpg') }}" alt="" width="100%" height="auto">
        </div>
        <div class="mainText">
          <p>トップページの上部に掲載します。<br>素材は、以下の3点のご用意をよろしくお願いいたします。</p>
        </div>
        <div class="imagesText">
          <h2>準備して頂く素材</h2>
          <ul>
            <li>商品画像</li>
            <li>訴求したい文言
            </li>
            <li>遷移させたいリンク</li>
          </ul>
        </div>
        <div class="imagesText">
          <h2>特集の詳細</h2>
          <ul>
            <li>値段は無料です。</li>
            <li>期間は未定です。突然、予告なしに終了する場合があります。</li>
            <li>企業様ご本人で申し込みお願いいたします。</li>
            <li>(内容によって)掲載をお断りする場合があります。</li>
          </ul>
        </div>
        <div class="mainText">
          <p>以下のボタンから、申し込みお願いいたします。</p>
        </div>
        <div class="new">
          <div class="cvWrap">
            <p class="cvText">お問い合わせ</p>
            <p class="cvSmall">※「特集掲載希望」と一言宜しくお願い致します。</p>
            <a href="mailto:shiba.webbusiness@gmail.com?subject=%E7%89%B9%E9%9B%86%E6%8E%B2%E8%BC%89%E5%B8%8C%E6%9C%9B" target="_blank">
              <button class="cvBtn">メールへ移動</button>
            </a>
          </div>
        </div>

    </main>
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('js/default.js') }}"></script>
    <script type="text/javascript">
      $(function() {
          var $elem = $('#new > .mainImg > img');
          var sp = '_sp.';
          var pc = '_pc.';
          var replaceWidth = 600;

          function imageSwitch() {
            var windowWidth = parseInt(window.innerWidth);
            $elem.each(function() {
              var $this = $(this);
              if(windowWidth >= replaceWidth) {
                $this.attr('src', $this.attr('src').replace(sp, pc));
              } else {
                $this.attr('src', $this.attr('src').replace(pc, sp));
              }
            });
          }
          imageSwitch();
          var resizeTimer;
          $(window).on('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
              imageSwitch();
            }, 200);
          });
        });
    </script>
  </body>
</html>
