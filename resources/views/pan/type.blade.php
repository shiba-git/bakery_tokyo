@extends('layout.template')
@section('title', '投稿タイプ')
@section('description', '投稿タイプを選択してください。')
@section('keywords', 'パン,ベーカリー,東京,新規投稿,東京グルメ,おススメのパン屋,近くのパン屋,グルメ,Instagram,インスタグラム')
@section('contents')
    <main>
      <div class="main-wrap">
        <div class="container">
          {{ Breadcrumbs::render('type') }}
          <div id="type">
            <div class="row">
              <div class="col s12 type">
                <a href="#" id="toggle-line">
                  <p>公式LINEで画像提供する</p>
                </a>
              </div>
              <div class="col s12" id="type-line" style="display:none;">
                <p>公式LINEを以下のリンクから友達追加してください。
                自動メッセージに従って投稿宜しくお願い致します</p>
                <a target="_blank" href="https://lin.ee/3XxqUAmYf"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" height="36" border="0"></a>
              </div>
              <div class="col s12 type">
                <a href="#" id="toggle-insta">
                  <p>InstagramのDMで画像提供する</p>
                </a>
              </div>
              <div class="col s12" id="type-insta" style="display:none;">
                <p>以下のリンクから、Instagramに移動してください。ダイレクトメッセージに「画像を提供したいです。」と一言宜しくお願い致します。</p>
                <a href="https://www.instagram.com/bakery_tokyo/" target="_blank" class="btn2 type-btn2">
                  <i class="fab fa-instagram"></i><span>bakery_tokyo</span>
                </a>
              </div>
              <div class="col s12 type">
                <a href="/pan/create">
                  <p>bakerytokyo.comで画像提供する</p>
                </a>
              </div>
            </div>
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
                    <div class="col s12 l6">
                      <div class="banner">
                      	<img src="{{ asset('images/banner_no.jpg') }}" alt="" width="100%">
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
          </div>
      </div>
    </main>
@endsection