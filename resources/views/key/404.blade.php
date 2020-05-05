@extends('layout.template')
@section('title', 'search')
@section('contents')
      <div class="main-wrap">
      	<div class="container">
          <figure style="margin: 0px; width: 100%">
            <p style="text-align: center; color: red; margin: 10px 0;">ごめんなさい。入力されたキーワードに該当する店舗がありません。</p>
            <img src="{{ asset('/images/404.png') }}" alt="見つかりません。" width="100%"style="text-align: center">
          </figure>
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
        </div>
      </div>
@endsection