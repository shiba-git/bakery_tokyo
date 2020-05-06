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
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="インスタグラム画像提供よろしくお願いいたします。">
    <meta name="keywords" content="パン,ベーカリー,東京,東京グルメ,画像,Instagram,インスタグラム">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="profile"href="">
    <link rel="pingback" href="">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/key.css') }}">
    <title>キャンペーン | BarkeyTokyo</title>
  </head>
  <body id="key">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PT5P4SF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <h2><img src="{{ asset('images/key-logo.png') }}" alt="BarkeyTokyo"></h2>
    <p class="key-main-text">画像提供よろしくお願いいたします。</p>
    <div class="key-wrap row">
      <div class="col s12 m12 l5">
        <p class="goal-text">目標枚数100枚を目指す :<p>
      </div>
      <div class="col s12 m12 l7">
        <div class="skillbar clearfix " data-percent="{{ $count }}%">
          <div class="skillbar-bar" style="background:  rgb(231, 135, 40);"></div>
          <div id="skillBarPercent" class="skill-bar-percent">{{ $count }}枚</div>
        </div>
      </div>
    </div>
    <div class="key-select row">
      <div class="wow fadeInLeft col s12 m12 l6" data-wow-duration="2s" data-wow-delay="0s"  data-wow-offset="0" >
        <p class="key-select-text">Concept<p>
        <div class="key-select-description">
          <p>「都内であなた好みのパンを探す」というコンセプトで立ち上げたBakeryTokyo。綺麗で見やすいパン画像からユーザーをマッチングさせることが目的です。
          </p>
          <p>BakeryTokyoの「近くパン屋」「フリーワード検索」では、ぐるなびの情報使用しています。</p>
          <p>「好きな場所 ✖ 好きなパンを探す」では、BakeryTokyoの独自の検索結果を表示します。
            検索結果では、きれいな画像で素早くマッチングするよう工夫致します。画像の提供をよろしくお願い致します。</p>
        </div>
      </div>
      <div class="wow fadeInRight col s12 m12 l6" data-wow-duration="2s" data-wow-delay="0s"  data-wow-offset="0" >
        <div class="cover">
          <img src="{{ asset('images/key-select.jpg') }}" width="100%">
        </div>
      </div>
    </div>
    <div class="key-select row">
      <div class="wow fadeInLeft col s12 m12 l6" data-wow-duration="2s" data-wow-delay="0s"  data-wow-offset="0" >
        <p class="key-select-text">Image<p>
        <div class="key-select-description">
          <p>画像は、以下の条件を満たしているものをお願いします。</p>
          <ul>
            <li>・人物が写っていない画像</li>
            <li>・パンが（なるべく単体で）大きく写っている画像大きく</li>
          </ul>
          <p>明るさや、表面・断面を問いません。</p>
        </div>
      </div>
      <div class="wow fadeInRight col s12 m12 l6" data-wow-duration="2s" data-wow-delay="0s"  data-wow-offset="0" >
          <img src="{{ asset('images/key-image.png') }}" width="100%">
      </div>
    </div>
    <div class="key-btn">
      <a href="{{ url('pan/create') }}"class="waves-effect waves-light btn-large key">
        <i class="key-icon"></i>
          画像の提供はこちら
      </a>
    </div>
    <div class="key-select row">
      <div class="wow fadeInLeft col s12 m12 l6" data-wow-duration="2s" data-wow-delay="0s"  data-wow-offset="0" >
        <p class="key-select-text">Merit<p>
        <div class="key-select-description">
          <p>画像を提供してくれたユーザーにはInstagramのIDを掲載致します。</p>
          <p>InstagramIDは、必須ではありません。Instagramを使用していないユーザーでも提供可能です。</p>
        </div>
      </div>
      <div class="wow fadeInRight col s12 m12 l6" data-wow-duration="2s" data-wow-delay="0s"  data-wow-offset="0" style="margin-top: 10px">
          <img src="{{ asset('images/key-insta.jpg') }}" width="100%">
      </div>
    </div>
    <div class="key-btn">
      <a href="{{ url('pan/create') }}" class="waves-effect waves-light btn-large key">
        <i class="key-icon"></i>
          画像の提供はこちら
      </a>
    </div>
    <div class="key-btn" style="margin-top: 10px">
      <a href="{{ url('/') }}" class="waves-effect waves-light btn-large key">
          TOPへ戻る
      </a>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/default.js') }}"></script>
    <script>
      new WOW().init();
      $('.skillbar').each(function(){
        $(this).find('.skillbar-bar').animate({
          width: $(this).attr('data-percent')
        },2000);
      });
    </script>
  </body>
</html>
