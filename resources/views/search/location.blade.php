@extends('layout.template')
@section('title', 'search')
@section('contents')
      <div class="main-wrap">
        <div class="container">
          {{ Breadcrumbs::render('location') }}
          <div class="searchStoreBox row" id="searchStoreBox">
            <h2><i class="material-icons">location_on</i>近くのパン屋 ( 東京のみ ) </h2>
            @foreach ($posts[0] as $shop)
                <div class="col s12 m6 l4">
                    <section class="searchStoreBox-item">
                      <div class="searchStoreBox-itemWrap">
                        <h2>{{ $shop['name'] }}</h2>
                        <p class="position searchStoreBox-text"><i class="material-icons">location_on</i>{{ $shop['address'] }}</p>
                        @if ($shop['access']['walk'] == '')
                        @else
                          <p class="position searchStoreBox-text"><i class="material-icons">location_on</i>{{ $shop['access']['line'] }} {{ $shop['access']['station'] }} {{ $shop['access']['walk'] }}分</p>
                        @endif
                        <p class="position searchStoreBox-text"><i class="material-icons">access_time</i>{{ $shop['opentime'] }}</p>
                        <p class="position searchStoreBox-text"><i class="material-icons">phone_in_talk</i><a href="tel:{{ $shop['tel'] }}">{{ $shop['tel'] }}</a></p>
                        <p>{{ $shop['pr']['pr_long'] }}</p>
                      </div>
                      <div class="store-btn">
                        <a class="waves-effect waves-light btn-large" href="{{ $shop['url'] }}" target="_blank">
                            <i class="material-icons store-icon">store</i>お店の詳細へ
                        </a>
                      </div>
                    </section>
                </div> <!-- col -->
            @endforeach
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
          <div class="searchStoreBox row" id="searchStoreBox">
          @if(!empty($posts[1]))
            @foreach ($posts[1] as $shop)
                <div class="col s12 m6 l4">
                    <section class="searchStoreBox-item">
                      <div class="searchStoreBox-itemWrap">
                        <h2>{{ $shop['name'] }}</h2>
                        <p class="position searchStoreBox-text"><i class="material-icons">location_on</i>{{ $shop['address'] }}</p>
                        @if ($shop['access']['walk'] == '')
                        @else
                          <p class="position searchStoreBox-text"><i class="material-icons">location_on</i>{{ $shop['access']['line'] }} {{ $shop['access']['station'] }} {{ $shop['access']['walk'] }}分</p>
                        @endif
                        <p class="position searchStoreBox-text"><i class="material-icons">access_time</i>{{ $shop['opentime'] }}</p>
                        <p class="position searchStoreBox-text"><i class="material-icons">phone_in_talk</i><a href="tel:{{ $shop['tel'] }}">{{ $shop['tel'] }}</a></p>
                        <p>{{ $shop['pr']['pr_long'] }}</p>
                      </div>
                      <div class="store-btn">
                        <a class="waves-effect waves-light btn-large" href="{{ $shop['url'] }}" target="_blank">
                            <i class="material-icons store-icon">store</i>お店の詳細へ
                        </a>
                      </div>
                    </section>
                </div> <!-- col -->
            @endforeach
          @endif
          </div>
          <div class="paginationWrap">
            <ul class="pagination" id="pagination">
              @if ($page == '1')
                <li class="disabled"><a href=""><i class="material-icons">chevron_left</i></a></li>
              @else
                <li class="waves-effect"><a href="/search/location/?page={{ $page - 1 }}&lat={{ $lat }}&lng={{ $lng }}"><i class="material-icons">chevron_left</i></a></li>
              @endif
              @for($i = 1; $i <= $pagenationSize; $i++)
                @if($i == $page)
                  <li class="active"><a href="">{{ $i }}</a></li>
                @else
                  <li class="waves-effect"><a href="/search/location/?page={{ $i }}&lat={{ $lat }}&lng={{ $lng }}">{{ $i }}</a></li>
                @endif
              @endfor
              @if ($page == $pagenationSize)
                <li class="disabled"><a href=""><i class="material-icons">chevron_right</i></a></li>
              @else
                <li class="waves-effect"><a href="/search/location/?page={{ $page + 1 }}&lat={{ $lat }}&lng={{ $lng }}"><i class="material-icons">chevron_right</i></a></li>
              @endif
            </ul>
          </div>
        </div>
      </div>
@endsection