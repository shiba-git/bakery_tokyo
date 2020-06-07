@extends('layout.template')
@section('title', 'TOP')
@section('description', 'BakeryTokyoとは、都内であなた好みのパンを探すサイトです。')
@section('keywords', 'パン,ベーカリー,東京,東京グルメ,おススメのパン屋,近くのパン屋,グルメ,Instagram,インスタグラム')
@section('contents')
      <div id="top-bg" class="valign-wrapper">
        <div class="container row" id="top">
              <div class="col s12">
                <div class="top-site-field">
                  <p class="top-site-about">BakeryTokyoとは、都内であなた好みのパン<br class="visible-sp">を探すサイトです。</p>
                </div>
              </div>
                <div class="col s12">
                  <form action="{{ url('/search/word/?page=1') }}" method="GET">
                    <div class="input-field"><!-- icon position -->
                      <input type="hidden" name="page" value="1">
                      <input id="search" name="freeword" type="text" placeholder="店名や場所で検索" autocomplete="off" value="" required>
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
                <!-- id="locationBtn" -->
                <div class="col s4 m4 l4"> 
                  <a href="/purchase/" class="waves-effect waves-light btn-large btn-field-position">
                    <i class="material-icons location-icon">star</i>画像を<br class="visible-sp">売る
                  </a>
                </div>
          </div>
      </div>
      <div class="main-wrap">
        <div class="container">
        	 <div class="tags">
              <h2><i class="material-icons">notifications_active</i>開催中のキャンペーン</h2>
                <div class="row bannerWrap" style="margin-bottom: 15px">
                    <div class="col s12 l6">
                      <div class="banner">
                        <a href="/purchase/">
                      		<img src="{{ asset('images/banner.jpg') }}" alt="" width="100%">
                        </a>
                      </div>
                    </div>
                </div>
              </div>
              <div class="tags" style="margin-top: 0px;">
              <h2><i class="material-icons">chat</i>おしらせ</h2>
                <div class="row bannerWrap">
                    <div class="col s12 l6">
                      <div class="banner">
                        <a href="/new/">
                          <img src="{{ asset('images/banner2.jpg') }}" alt="" width="100%">
                        </a>
                      </div>
                    </div>
                </div>
              </div>
        	<!--<div class="recommend row" id="tokyopan">
            	<h2><i class="material-icons">local_dining</i>特集</h2>
            	<ul id="slider">
            		<li class="border">
            			<div class="sliderWrap">
	            			<img src="{{ asset('images/slider/slider01.jpg') }}" alt="東京">
	            			<h3 class="sliderTitle">
	            				BakeryTokyo 渋谷店 30日から期間限定で新商品を出します。
	            			</h3>
	            			<p class="sliderDescription">
	            				ここに訴求したい文言を記述します。ここに訴求したい文言を記述します。ここに訴求したい文言を記述します。ここに訴求したい文言を記述します。
	            			</p>
	            		</div>
            		</li>
            	</ul>
        	</div>  -->

 	      <!-- <div class="recommend row" id="tokyopan">
            <h2><i class="material-icons">local_dining</i>目的地 ✖ 好きなパンを探す</h2>
            <div class="cover">
              <div class="col s12 l5">
                <select class="tokyo-v" disabled>
                  <option value="1">目的地を選択してください。</option>
                </select>
              </div>
              <div class="col s12 l5">
                <select class="pan-v" disabled>
                  <option value="1">食べたいパンを選択してください。</option>
                </select>
              </div>
              <div class="col s12 l2">
                <div class="store-btn">
                  <a class="btn-large">
                    <i class="material-icons search-icon">search</i>
                  </a>
                </div>
              </div>
            </div>
            <div class="key-description">
              <p class="cover-img">「目的地 ✖ 好きなパンを探す」をご利用出来るまで。<br class="visible-pc">ご協力お願い致します。</p>
            </div>
            <div class="key-btn">
	            <div class="store-btn">
	              <a href="{{ url('key') }}"class="waves-effect waves-light btn-large key">
	                <i class="key-icon"></i>
	                  詳しくはこちら
	              </a>
	            </div>
          	</div>
          </div>  -->
          <div class="recommend row" id="recommend">
            <h2><i class="material-icons">local_dining</i>おススメのパン</h2>
            <p class="description"><a href="https://www.instagram.com/bakery_tokyo/" target="_blank">BakeryTokyoのインスタグラム</a>で評価、いいね！が良かったパンを掲載しています。</p>
            <div class="col s12 m12 l4">
              <section class="recommend-item">
                <figure class="valign-wrapper">
                  <img src="{{ asset('images/recommend1.jpg') }}" alt="パンオクレーム">
                </figure>
                <h2>パンオクレーム</h2>
                <p class="position"><i class="material-icons location-icon-3mozi">location_on</i>最寄駅 渋谷駅</p>
                <p class="position"><i class="icon-maney"></i>値段 260円</p>
                <div class="store-btn">
                  <a href="https://r.gnavi.co.jp/ph46gwb10000/" target="_blank" class="waves-effect waves-light btn-large">
                      <i class="material-icons store-icon">store</i>お店の詳細へ
                  </a>
                </div>
              </section>
            </div> <!-- col -->
            <div class="col s12 m12 l4">
              <section class="recommend-item">
                <figure>
                  <img src="{{ asset('images/recommend2.jpg') }}" alt="ブリオッシュ">
                </figure>
                <h2>ブリオッシュ</h2>
                <p class="position"><i class="material-icons location-icon-4mozi">location_on</i>最寄駅 六本木駅</p>
                <p class="position"><i class="icon-maney"></i>値段 400円</p>
                <div class="store-btn">
                  <a href="https://r.gnavi.co.jp/a1hkdnf50000/" target="_blank" class="waves-effect waves-light btn-large">
                      <i class="material-icons store-icon">store</i>お店の詳細へ
                  </a>
                </div>
              </section>
            </div> <!-- col -->
            <div class="col s12 m12 l4">
              <section class="recommend-item">
                <figure>
                  <img src="{{ asset('images/recommend3.jpg') }}" alt="渋谷あんぱん">
                </figure>
                <h2>渋谷あんぱん</h2>
                <p class="position"><i class="material-icons location-icon-4mozi">location_on</i>最寄駅 渋谷駅</p>
                <p class="position"><i class="icon-maney"></i>値段 300円</p>
                <div class="store-btn">
                  <a href="https://tabelog.com/tokyo/A1303/A130301/13240814/" target="_blank" class="waves-effect waves-light btn-large">
                      <i class="material-icons store-icon">store</i>お店の詳細へ
                  </a>
                </div>
              </section>
            </div> <!-- col -->
          </div>
          <div class="choosePanFromImage row" id="choosePanFromImage">
            <h2><i class="material-icons">image</i>画像からパンを選ぶ</h2>
            <p class="description"><a href="{{ url('pan/create/') }}">提供されたパン画像</a> や <a href="https://www.instagram.com/bakery_tokyo/" target="_blank">BakeryTokyoのインスタグラム</a>をランダムで掲載してます。
            @foreach ($pans as $pan)
              <div class="col s12 m6 l4">
                <section class="choosePanFromImage-item">
                  <figure class="valign-wrapper">
                    <img src="https://bakery-tokyo.s3-ap-northeast-1.amazonaws.com/storage/{{ $pan->image }}" alt="{!! nl2br(e($pan->panname)) !!}">
                  </figure>
                  <h2>{!! nl2br(e($pan->panname)) !!}</h2>
                  <p class="position"><i class="material-icons location-icon-3mozi">location_on</i>最寄駅 {!! nl2br(e($pan->closeststation)) !!}</p>
                  <p class="position"><i class="material-icons location-icon-3mozi">bookmark</i><a href="/genre/{!! nl2br(e($pan->genre->genreName)) !!}">{!! nl2br(e($pan->genre->genreName)) !!}</a></p>
                  <p class="position"><i class="fab fa-instagram i-insta fa-lg"></i><a href="https://www.instagram.com/{!! nl2br(e($pan->instagramid)) !!}" target="_blank">{!! nl2br(e($pan->instagramid)) !!}</a></p>
                  <div class="store-btn">
                    <a href="{!! nl2br(e($pan->storepath)) !!}" target="_blank" class="waves-effect waves-light btn-large">
                        <i class="material-icons store-icon">store</i>お店の詳細へ
                    </a>
                  </div>
                </section>
              </div> <!-- col -->
            @endforeach
          </div>
          <div class="links row" id="links">
            <div class="col s12 m6 l6">
                <a id="locationInformation" class="waves-effect waves-light" href="{{ url('pan/type/') }}">
                  パン画像を投稿 ( 提供 ) する<i class="material-icons chevron_right-icon">chevron_right</i>
                </a>
            </div>
            <div class="col s12 m6 l6">
              <a id="locationInformation"class="waves-effect waves-light" href="{{ url('pan/') }}">
                パン画像一覧を見る<i class="material-icons chevron_right-icon">chevron_right</i>
              </a>
            </div>
          </div>
          @yield('links')
          <div class="tags">
            <h2><p class="position pos-m"><i class="fas fa-bread-slice i-tag-genre fa-lg"></i>パンのジャンルから探す</p></h2>
            <ul>
              @foreach ($genres as $genre)
              <li><a class="i-genre"href="/genre/{!! nl2br(e($genre->genreName)) !!}"><i class="fas fa-bread-slice fa-lg genre-item"></i>{!! nl2br(e($genre->genreName)) !!}</a></li>
              @endforeach
            </ul>
          <div class="tags">
            <h2><i class="material-icons">store</i>店名から探す</h2>
            <ul>
              @foreach ($stores as $store)
              <li><a href="/store/{!! nl2br(e(strtolower($store->storeName))) !!}"><i class="material-icons store-icon">store</i>{!! nl2br(e($store->storeName)) !!}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="tags">
            <h2><i class="material-icons">bookmark</i>タグから探す</h2>
            <ul>
              @foreach ($tags as $tag)
              <li>
                <a href="/tag/{!! nl2br(e(strtolower($tag->tagName))) !!}">
                  <i class="material-icons store-icon">bookmark</i>{!! nl2br(e($tag->tagName)) !!}
                </a>
              </li>
              @endforeach
            </ul>
          </div>
          <div class="tags">
            <h2><p class="position pos-m"><i class="fas fa-comment i-tag-genre fa-lg"></i>繋がる</p></h2>
            <div class="row">
              <div class="col s12 m6 l6 top-sns">
                <a href="https://www.instagram.com/bakery_tokyo/" target="_blank" class="btn2">
                  <i class="fab fa-instagram"></i><span>bakery_tokyo</span>
                </a>
              </div>
              <div class="col s12 m6 l6 top-sns">
                <a href="https://twitter.com/bakery_tokyo" target="_blank" class="btn2 twi_btn2">
                  <i class="fab fa-twitter"></i><span>bakery_tokyo</span>
                </a>
              </div>
          </div>
          <div class="tags">
            <h2><p class="position pos-m"><i class="fas fa-comment i-tag-genre fa-lg"></i>活用機能（ぐるなび）</p></h2>
            <div class="row">
              <div class="col s12 top-sns">
                <a href="https://api.gnavi.co.jp/api/scope/" target="_blank">
                  <img src="https://api.gnavi.co.jp/api/img/credit/api_265_65.gif" width="265" height="65" border="0" alt="グルメ情報検索サイト　ぐるなび">
                  </a>
              </div>
          </div>
@endsection
