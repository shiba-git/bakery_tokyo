@extends('layout.template')
@section('title', '')
@section('contents')
      <div id="top-bg" class="valign-wrapper">
        <div class="container row" id="top">
              <div class="col s12">
                <div class="top-site-field">
                  <p class="top-site-about">BarkeyTokyoとは、都内であなた好みのパン<br class="visible-sp">を探すサイトです。</p>
                </div>
              </div>
                <div class="col s12">
                  <form>
                    <div class="input-field"><!-- icon position -->
                      <input id="search" type="text" placeholder="店名や場所で検索" autocomplete="off">
                      <label class="right label-icon" for="search">
                        <i class="material-icons search-icon">search</i>
                      </label>
                    </div>
                  </form>
                </div>
                <div class="col s4 m4 l4">
                  <a href="#recommend" class="waves-effect waves-light btn-large">
                      <i class="material-icons local_dining-icon">local_dining</i>おススメ<br class="visible-sp">のパン
                  </a>
                </div>
                <div class="col s4 m4 l4">
                  <a href="#choosePanFromImage" class="waves-effect waves-light btn-large">
                      <i class="material-icons image-icon">image</i>画像<br class="visible-sp">からパン屋
                  </a>
                </div>
                <div class="col s4 m4 l4">
                  <a id="locationInformation"class="waves-effect waves-light btn-large btn-field-position">
                    <i class="material-icons location-icon">location_on</i>近く<br class="visible-sp">のパン屋
                  </a>
                </div>
          </div>
      </div>
      <div class="main-wrap">
        <div class="container">
          <div class="recommend row" id="recommend">
            <h2><i class="material-icons">local_dining</i>おススメのパン</h2>
            <p class="description"><a href="https://www.instagram.com/bakery_tokyo/" target="_blank">BarkeyTokyoのインスタグラム</a>で評価、いいね！が良かったパンを掲載しています。</p>
            <div class="col s12 m12 l4">
              <section class="recommend-item">
                <figure class="valign-wrapper">
                  <img src="{{ asset('images/recommend1.png') }}" alt="パンオクレーム">
                </figure>
                <h2>パンオクレーム</h2>
                <p class="position"><i class="material-icons location-icon-3mozi">location_on</i>最寄駅 渋谷駅</p>
                <p class="position"><i class="icon-maney"></i>値段 260円</p>
                <div class="store-btn">
                  <a class="waves-effect waves-light btn-large">
                      <i class="material-icons store-icon">store</i>お店の詳細へ
                  </a>
                </div>
              </section>
            </div> <!-- col -->
            <div class="col s12 m12 l4">
              <section class="recommend-item">
                <figure>
                  <img src="{{ asset('images/recommend2.png') }}" alt="ブリオッシュ">
                </figure>
                <h2>ブリオッシュ</h2>
                <p class="position"><i class="material-icons location-icon-4mozi">location_on</i>最寄駅 六本木駅</p>
                <p class="position"><i class="icon-maney"></i>値段 400円</p>
                <div class="store-btn">
                  <a class="waves-effect waves-light btn-large">
                      <i class="material-icons store-icon">store</i>お店の詳細へ
                  </a>
                </div>
              </section>
            </div> <!-- col -->
            <div class="col s12 m12 l4">
              <section class="recommend-item">
                <figure>
                  <img src="{{ asset('images/recommend3.png') }}" alt="渋谷あんぱん">
                </figure>
                <h2>渋谷あんぱん</h2>
                <p class="position"><i class="material-icons location-icon-4mozi">location_on</i>最寄駅 渋谷駅</p>
                <p class="position"><i class="icon-maney"></i>値段 300円</p>
                <div class="store-btn">
                  <a class="waves-effect waves-light btn-large">
                      <i class="material-icons store-icon">store</i>お店の詳細へ
                  </a>
                </div>
              </section>
            </div> <!-- col -->
          </div>
          <div class="choosePanFromImage row" id="choosePanFromImage">
            <h2><i class="material-icons">image</i>画像からパンを選ぶ</h2>
            <p class="description"><a href="">提供されたパン画像</a> や <a href="https://www.instagram.com/bakery_tokyo/" target="_blank">BarkeyTokyoのインスタグラム</a>をランダムで掲載してます。
            <div class="col s12 m6 l4">
              <section class="choosePanFromImage-item">
                <figure class="valign-wrapper">
                  <img src="./images/choosePanFromImage1.png" alt="愛国あんぱん">
                </figure>
                <h2>愛国あんぱん</h2>
                <p class="position"><i class="material-icons location-icon-3mozi">location_on</i>最寄駅 蒲田駅</p>
                <p class="position"><i class="material-icons location-icon-3mozi">bookmark</i><a href="">あんぱん</a></p>
                <p class="position"><i class="fab fa-instagram i-insta fa-lg"></i><a href="#">@Barkey_Tokyo</a></p>
                <div class="store-btn">
                  <a class="waves-effect waves-light btn-large">
                      <i class="material-icons store-icon">store</i>お店の詳細へ
                  </a>
                </div>
              </section>
            </div> <!-- col -->
            <div class="col s12 m6 l4">
              <section class="choosePanFromImage-item">
                <figure>
                  <img src="./images/recommend3.png" alt="渋谷あんぱん">
                </figure>
                <h2>渋谷あんぱん</h2>
                <p class="position"><i class="material-icons location-icon-3mozi">location_on</i>最寄駅 渋谷駅</p>
                <p class="position"><i class="material-icons location-icon-3mozi">bookmark</i><a href="">あんぱん</a></p>
                <p class="position"><i class="fab fa-instagram i-insta fa-lg"></i><a href="#">@Barkey_Tokyo</a></p>
                <div class="store-btn">
                  <a class="waves-effect waves-light btn-large">
                      <i class="material-icons store-icon">store</i>お店の詳細へ
                  </a>
                </div>
              </section>
            </div> <!-- col -->
            <div class="col s12 m6 l4">
              <section class="choosePanFromImage-item">
                <figure>
                  <img src="./images/recommend2.png" alt="ブリオッシュ">
                </figure>
                <h2>ブリオッシュ</h2>
                <p class="position"><i class="material-icons location-icon-4mozi">location_on</i>最寄駅 六本木駅</p>
                <p class="position"><i class="material-icons location-icon-4mozi">bookmark</i><a href="">ブリオッシュ</a></p>
                <p class="position"><i class="fab fa-instagram i-insta fa-lg"></i><a href="#">@Barkey_Tokyo</a></p>
                <div class="store-btn">
                  <a class="waves-effect waves-light btn-large">
                      <i class="material-icons store-icon">store</i>お店の詳細へ
                  </a>
                </div>
              </section>
            </div> <!-- col -->
            <div class="col s12 m6 l4">
              <section class="choosePanFromImage-item">
                <figure class="valign-wrapper">
                  <img src="./images/choosePanFromImage1.png" alt="愛国あんぱん">
                </figure>
                <h2>愛国あんぱん</h2>
                <p class="position"><i class="material-icons location-icon-3mozi">location_on</i>最寄駅 蒲田駅</p>
                <p class="position"><i class="material-icons location-icon-3mozi">bookmark</i><a href="">あんぱん</a></p>
                <p class="position"><i class="fab fa-instagram i-insta fa-lg"></i><a href="#">@Barkey_Tokyo</a></p>
                <div class="store-btn">
                  <a class="waves-effect waves-light btn-large">
                      <i class="material-icons store-icon">store</i>お店の詳細へ
                  </a>
                </div>
              </section>
            </div> <!-- col -->
            <div class="col s12 m6 l4">
              <section class="choosePanFromImage-item">
                <figure>
                  <img src="./images/recommend3.png" alt="渋谷あんぱん">
                </figure>
                <h2>渋谷あんぱん</h2>
                <p class="position"><i class="material-icons location-icon-3mozi">location_on</i>最寄駅 渋谷駅</p>
                <p class="position"><i class="material-icons location-icon-3mozi">bookmark</i><a href="">あんぱん</a></p>
                <p class="position"><i class="fab fa-instagram i-insta fa-lg"></i><a href="#">@Barkey_Tokyo</a></p>
                <div class="store-btn">
                  <a class="waves-effect waves-light btn-large">
                      <i class="material-icons store-icon">store</i>お店の詳細へ
                  </a>
                </div>
              </section>
            </div> <!-- col -->
            <div class="col s12 m6 l4">
              <section class="choosePanFromImage-item">
                <figure>
                  <img src="./images/recommend2.png" alt="ブリオッシュ">
                </figure>
                <h2>ブリオッシュ</h2>
                <p class="position"><i class="material-icons location-icon-4mozi">location_on</i>最寄駅 六本木駅</p>
                <p class="position"><i class="material-icons location-icon-4mozi">bookmark</i><a href="">ブリオッシュ</a></p>
                <p class="position"><i class="fab fa-instagram i-insta fa-lg"></i><a href="#">@Barkey_Tokyo</a></p>
                <div class="store-btn">
                  <a class="waves-effect waves-light btn-large">
                      <i class="material-icons store-icon">store</i>お店の詳細へ
                  </a>
                </div>
              </section>
            </div> <!-- col -->
          </div>
          <div class="links row" id="links">
            <div class="col s12 m6 l6">
                <a id="locationInformation" class="waves-effect waves-light" href="{{ url('pan/create/') }}">
                  パン画像を投稿 ( 提供 ) する<i class="material-icons chevron_right-icon">chevron_right</i>
                </a>
            </div>
            <div class="col s12 m6 l6">
              <a id="locationInformation"class="waves-effect waves-light" href="{{ url('pan/') }}">
                パン画像一覧を見る<i class="material-icons chevron_right-icon">chevron_right</i>
              </a>
            </div>
          </div>
          <div class="tags" id="tags">
            <h2><i class="material-icons">bookmark</i>店名</h2>
            <ul>
              <li><a href="#">Andersen</a></li>
              <li><a href="#">PAUL</a></li>
              <li><a href="#">Rod</a></li>
              <li><a href="#">HEART BREAD ANTIQUE</a></li>
              <li><a href="#">VIRON</a></li>
              <li><a href="#">ビゴの店</a></li>
              <li><a href="#">キムラミルク</a></li>
              <li><a href="#">メゾンカイザー</a></li>
              <li><a href="#">デリフランス</a></li>
              <li><a href="#">ジャンフランソワ</a></li>
              <li><a href="#">ポンパドウル</a></li>
              <li><a href="#">ラトリエデュパン</a></li>
              <li><a href="#">PAUL</a></li>
              <li><a href="#">Rod</a></li>
              <li><a href="#">HEART BREAD ANTIQUE</a></li>
              <li><a href="#">キムラミルク</a></li>
              <li><a href="#">メゾンカイザー</a></li>
              <li><a href="#">デリフランス</a></li>
              <li><a href="#">ジャンフランソワ</a></li>
              <li><a href="#">ポンパドウル</a></li>
              <li><a href="#">ラトリエデュパン</a></li>
              <li><a href="#">PAUL</a></li>
              <li><a href="#">Rod</a></li>
              <li><a href="#">HEART BREAD ANTIQUE</a></li>
              <li><a href="#">VIRON</a></li>
              <li><a href="#">ビゴの店</a></li>
              <li><a href="#">メゾンカイザー</a></li>
              <li><a href="#">デリフランス</a></li>
              <li><a href="#">ジャンフランソワ</a></li>
              <li><a href="#">ポンパドウル</a></li>
              <li><a href="#">ラトリエデュパン</a></li>
              <li><a href="#">PAUL</a></li>
              <li><a href="#">Rod</a></li>
              <li><a href="#">HEART BREAD ANTIQUE</a></li>
              <li><a href="#">VIRON</a></li>
              <li><a href="#">ビゴの店</a></li>
              <li><a href="#">メゾンカイザー</a></li>
              <li><a href="#">デリフランス</a></li>
              <li><a href="#">ジャンフランソワ</a></li>
              <li><a href="#">ポンパドウル</a></li>
              <li><a href="#">ラトリエデュパン</a></li>
              <li><a href="#">HEART BREAD ANTIQUE</a></li>
              <li><a href="#">VIRON</a></li>
              <li><a href="#">Rod</a></li>
              <li><a href="#">VIRON</a></li>
              <li><a href="#">ビゴの店</a></li>
              <li><a href="#">メゾンカイザー</a></li>
              <li><a href="#">デリフランス</a></li>
              <li><a href="#">ジャンフランソワ</a></li>
            </ul>
          </div>
@endsection
