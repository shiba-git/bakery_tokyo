@extends('layout.template')
@section('title', $genreName )
@section('description', $genreName . 'のページです')
@section('keywords', 'パン,ベーカリー,東京,新規投稿,東京グルメ,グルメ,Instagram,インスタグラム,ジャンル,' . $genreName)
@section('contents')
      <div class="main-wrap">
        <div class="container">
          {{ Breadcrumbs::render('tag', $genreName) }}
          <div class="choosePanFromImage row" id="choosePanFromImageUpside">
            <h2><i class="material-icons">store</i>{!! nl2br(e($genreName)) !!}</h2>
            <!-- <div class="store-btn">
              <a class="waves-effect waves-light btn-large">
                <i class="material-icons store-icon">store</i>お店の詳細へ
              </a>
            </div> -->
            @if(!empty($pans[0]))
              @foreach ($pans[0] as $pan)
                <div class="col s12 m6 l4">
                  <section class="choosePanFromImage-item">
                    <figure class="valign-wrapper">
                      <img src="/storage/{!! nl2br(e($pan->image)) !!}" alt="{!! nl2br(e($pan->name)) !!}">
                    </figure>
                    <h2>{!! nl2br(e($pan->panname)) !!}</h2>
                    <p class="position"><i class="material-icons location-icon-3mozi">location_on</i>最寄駅 {!! nl2br(e($pan->closeststation)) !!}</p>
                    <p class="position"><i class="fab fa-instagram i-insta fa-lg"></i><a href="https://www.instagram.com/{!! nl2br(e($pan->instagramid)) !!}" target="_blank">{!! nl2br(e($pan->instagramid)) !!}</a></p>
                    <div class="store-btn">
                      <a class="waves-effect waves-light btn-large">
                          <i class="material-icons store-icon">store</i>お店の詳細へ
                      </a>
                    </div>
                  </section>
                </div> <!-- col -->
              @endforeach
            @endif
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
          <div class="choosePanFromImage row" id="choosePanFromImageBottom">
            @if(!empty($pans[1]))
              @foreach ($pans[1] as $pan)
                <div class="col s12 m6 l4">
                  <section class="choosePanFromImage-item">
                    <figure class="valign-wrapper">
                      <img src="/storage/{!! nl2br(e($pan->image)) !!}" alt="{!! nl2br(e($pan->name)) !!}">
                    </figure>
                    <h2>{!! nl2br(e($pan->panname)) !!}</h2>
                    
                  </section>
                </div> <!-- col -->
              @endforeach
            @endif
          </div>
          {{ $panspage->links() }}
        </div>
      </div>
@endsection
