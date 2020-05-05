@extends('layout.template')
@section('title', '')
@section('contents')
      <div class="main-wrap">
        <div class="container">
          <div class="manager row" id="manager">
            <div class="btn2-style">
              <div class="col s6">
                  <a class="" href="{{ url( 'manager/tag/create' ) }}">
                    タグ生成
                  </a>
              </div>
              <div class="col s6">
                <a class="" href="{{ url( 'manager/store/create' ) }}">
                  ストア生成
                </a>
              </div>
            </div>
            <div class="btn2-style">
              <div class="col s6">
                  <a class="" href="{{ url( 'manager/genre/create' ) }}">
                    ジャンル生成
                  </a>
              </div>
              <div class="col s6">
                <a class="" href="{{ url( 'manager/list/' ) }}">
                  リスト
                </a>
              </div>
            </div>
            @foreach ($pans as $pan)
            <div class="col s12 m6 l4">
                <div class="card">
                  <div class="card-image">
                    <img src="https://bakery-tokyo.s3-ap-northeast-1.amazonaws.com/storage/{{ $pan->image }}" alt="{!! nl2br(e($pan->panname)) !!}">
                  </div>
                  <div class="card-content">
                    <p>{!! nl2br(e($pan->panname)) !!}</p>
                    <p>{!! nl2br(e($pan->storename)) !!}</p>
                    <p>{!! nl2br(e($pan->sns)) !!}</p>
                    <p>{!! nl2br(e($pan->created_at)) !!}</p>
                  </div>
                  <div class="card-action flex">
                    <a href="{{ url('manager/edit', ['id' => $pan->id]) }}">更新</a>
                    <form class="deletebtn" action="{{ url('manager/delete', ['id' => $pan->id]) }}" method='post'>
                        @method('DELETE')
                        @csrf
                        <input type='submit' value='削除'>
                    </form>
                  </div>
                </div>
            </div> <!-- col -->
            @endforeach
          </div>
           {{ $pans->links() }}
      </div>
@endsection