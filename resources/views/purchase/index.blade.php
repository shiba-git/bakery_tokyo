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
    <link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
    <title>キャンペーン | BarkeyTokyo</title>
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
    <main id="purchase">
        <div class="mainImg">
          <img src="{{ asset('images/purchase_sp.jpg') }}" alt="" width="100%" height="auto">
        </div>
        <div class="mainText">
          <p>新型コロナウイルスの影響により、飲食業界は大きな打撃を受けている。</p>
          <p>BakeryTokyoから、営業再開後勢いを取り返すための特別なキャンペーンをご用意いたしました。</p>
        </div>
        <div class="cv">
          <div class="cvWrap">
            <p class="cvText">スマホに眠っているパン画像を買い取ります。</p>
            <p class="cvSmall">※一部条件があります。以下のステップをご確認下さい。</p>
            <a href="/pan/type/">
              <button class="cvBtn">投稿フォームへ移動</button>
            </a>
          </div>
        </div>
        <div class="row step">
          <div class="titlewrap"><h2>各ステップに従い、応募をよろしくお願いします。</h2></div>
          <div class="col s6 l3">
            <div class="stepWrap step01">
              <div class="stepicon">
                <img src="{{ asset('images/image.png') }}" alt="" width="30%" height="auto">
              </div>
              <h3>画像を用意</h3>
              <p>「パン画像」「パンの名前」「パン屋の名前」を用意してください。</p>
            </div>
          </div>
          <div class="col s6 l3">
            <div class="stepWrap step02">
              <div class="stepicon">
                <img src="{{ asset('images/site.png') }}" alt="" width="30%" height="auto">
              </div>
              <h3>投稿タイプを選択</h3>
              <p><a href="/pan/type/" target="_blank">投稿フォーム</a>へ移動する。「公式ライン」「インスタグラム」「当サイト」から投稿可能です。</p>
            </div>
          </div>
          <div class="col s6 l3">
            <div class="stepWrap step03">
              <div class="stepicon">
                <img src="{{ asset('images/sumaho.png') }}" alt="" width="30%" height="auto">
              </div>
              <h3>情報を入力する</h3>
              <p>Step2で選択したメディアに従って情報を入力してください。</p>
            </div>
          </div>
          <div class="col s6 l3">
            <div class="stepWrap step04">
              <div class="stepicon">
                <img src="{{ asset('images/maney.png') }}" alt="" width="30%" height="auto">
              </div>
              <h3>報酬(PayPal)</h3>
              <p>BakeryTokyoからPayPalでお支払い致します。※お支払い方法は、今後増やしていく予定です。</p>
            </div>
          </div>
        </div>
        <!-- <div class="cv">
          <div class="cvWrap">
            <p class="cvText">スマホに眠っているパン画像を買い取ります。</p>
            <p class="cvSmall">※一部条件があります。以下のステップをご確認下さい。</p>
            <a href="/pan/type/">
              <button class="cvBtn">投稿フォームへ移動</button>
            </a>
          </div>
        </div> -->
        <div class="termsOfUse">
          <p> [ 利用規約 ] </p>
          <ol>
            <li>キャンペーン期間: 2020年6月30日まで。</li>
            <li>キャンペーンは、予告なく変更または終了になる場合があります。</li>
            <li>画像提供は、本人のみでお願いします。</li>
            <li>ユーザーは、投稿情報(画像を含む)について、無償で利用（複製、複写、改変）する権利を許諾するものとします。この利用の許諾は永続的かつ取消不能のものとします。</li>
            <li>投稿後変更または削除を行いたい場合は、BakeryTokyoのソーシャルメディアに直接お問い合わせください。</li>
            <li>bakerytokyo.comは最終的に全ての解釈権を有します。</li>
          </ol>
        </div>
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
    <script type="text/javascript">
      $(function() {
          var $elem = $('#purchase > .mainImg > img');
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
