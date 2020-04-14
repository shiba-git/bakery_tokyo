@extends('layout.template')
@section('title', 'パン一覧 |')
@section('contents')
      <div class="main-wrap">
        <div class="container">
          <nav id="breadcrumb">
            <div class="nav-wrapper">
              <div class="col s12">
                <a href="#!" class="breadcrumb">Top</a>
                <a href="#!" class="breadcrumb">Pans</a>
              </div>
            </div>
          </nav>
          <div class="choosePanFromImage row" id="choosePanFromImageUpside">
          	@if(!empty($pans[0]))
	            @foreach ($pans[0] as $pan)
	              <div class="col s12 m6 l4">
	                <section class="choosePanFromImage-item">
	                  <figure class="valign-wrapper">
	                    <img src="/storage/{{ $pan->image }}" alt="{!! nl2br(e($pan->panname)) !!}">
	                  </figure>
	                  <h2>{!! nl2br(e($pan->panname)) !!}</h2>
	                  <p class="position"><i class="material-icons location-icon-3mozi">location_on</i>最寄駅 {!! nl2br(e($pan->closeststation)) !!}</p>
	                  <p class="position"><i class="material-icons location-icon-3mozi">bookmark</i><a href="">あんぱん</a></p>
                    <p class="position"><i class="fab fa-instagram i-insta fa-lg"></i><a href="https://www.instagram.com/{!! nl2br(e($pan->instagramid)) !!}">{!! nl2br(e($pan->instagramid)) !!}</a></p>
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
            <div class="col s12 m12 l12">
                <a id="postPans"class="waves-effect waves-light" href="{{ url('pan/create/') }}">
                  パン画像を投稿 ( 提供 ) する<i class="material-icons chevron_right-icon">chevron_right</i>
                </a>
            </div>
          </div>
          <div class="choosePanFromImage row" id="choosePanFromImageBottom">
            @if(!empty($pans[1]))
              @foreach ($pans[1] as $pan)
                <div class="col s12 m6 l4">
                  <section class="choosePanFromImage-item">
                    <figure class="valign-wrapper">
                      <img src="/storage/{{ $pan->image }}" alt="{!! nl2br(e($pan->panname)) !!}">
                    </figure>
                    <h2>{!! nl2br(e($pan->panname)) !!}</h2>
                    <p class="position"><i class="material-icons location-icon-3mozi">location_on</i>最寄駅 {!! nl2br(e($pan->closeStaion)) !!}</p>
                    <p class="position"><i class="material-icons location-icon-3mozi">bookmark</i><a href="">あんぱん</a></p>
                    <p class="position"><i class="fab fa-instagram i-insta fa-lg"></i><a href="https://www.instagram.com/{!! nl2br(e($pan->instagramid)) !!}">{!! nl2br(e($pan->instagramid)) !!}</a></p>

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
            {{ $panspage->links() }}
            <!-- <ul class="pagination" id="pagination">
              <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
              <li class="active"><a href="#!">1</a></li>
              <li class="waves-effect"><a href="#!">2</a></li>
              <li class="waves-effect"><a href="#!">3</a></li>
              <li class="waves-effect"><a href="#!">4</a></li>
              <li class="waves-effect"><a href="#!">5</a></li>
              <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul> -->

        </div>
      </div>
@endsection