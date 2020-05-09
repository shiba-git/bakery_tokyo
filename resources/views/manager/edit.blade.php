@extends('layout.template')
@section('title', '更新 |')
@section('contents')
      <div class="main-wrap">
        <div class="container">
          <div class="row pansCreate">
            <form id="pansCreate" action="{{ url('manager/upload', ['id' => $pan->id]) }}" method="POST" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              
                  <div class="col s12">
                    <img src="https://bakery-tokyo.s3-ap-northeast-1.amazonaws.com/storage/{{$pan->image}}" alt="" width="100%" style="margin: 10px auto; max-width: 300px;">
                  </div>
                  <div class="col s12">
                    <p class="label">パン画像<span style="color:red">※</span></p>
                    <div class="input-file-gr edit-upload">
                      <div class="input-file">
                        <label for="pansCreateImage" id="pansCreateImageLabel">
                          アップロード<input type="file" name="image" id="pansCreateImage" value="">
                        </lebel>
                      </div>
                      <div class="filename">
                      選択されていません
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="permit">
                      許可
                    </label>
                    <select id="permit" name="permit" value="{!! nl2br(e($pan->permit)) !!}">
                      <option value="0">許可しない。</option>
                      <option value="1">許可する</option>
                    </select>
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="storename">
                      パン屋の店名<span style="color:red">※</span><input type="text" name="storename" placeholder="店名" autocomplete="off" value="{!! nl2br(e($pan->storename)) !!}">
                    </label>
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="pansname">
                      パンの名前<span style="color:red">※</span><input type="text" name="panname" placeholder="パンの名前" autocomplete="off" value="{!! nl2br(e($pan->panname)) !!}">
                    </label>
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="closeststation">
                      最寄り駅<span style="color:red">※</span><input type="text" name="closeststation" placeholder="東京駅" autocomplete="off" value="{!! nl2br(e($pan->closeststation)) !!}">
                    </label>
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="storepath">
                      お店のパス(ぐるなび)<span style="color:red">※</span><input type="text" name="storepath" placeholder="https://" autocomplete="off" value="{!! nl2br(e($pan->storepath)) !!}">
                    </label>
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="sns">
                      Instagram<span style="color:red"></span><input type="text" name="instagramid" placeholder="例） @Barkey_Tokyo" autocomplete="off" value="{!! nl2br(e($pan->instagramid)) !!}">
                    </label>
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="tag">
                    タグ
                    </label>
                    <div class="create-label-set">
                      @foreach ($tags as $tag)
                        <input type="checkbox" name="tag[]" value="{!! nl2br(e($tag->id)) !!}" 
                        id="tag-{!! nl2br(e($tag->id)) !!}" {{ is_array($pan->tags->all()) && in_array($tag->id, $pan->tags->pluck('id')->all(), true)? 'checked="checked"' : '' }}>
                        <label for="tag-{!! nl2br(e($tag->id)) !!}" class="label create-label">{!! nl2br(e($tag->tagName)) !!}</label>
                      @endforeach
                    </div>
                  </div>
                  <div class="col s6">
                    <label for="store">
                      ストアID
                    </label>
                    <select id="storeid" name="store_id">
                      @if ($pan->store_id == null)
                        <option value="" selected>NULL</option>
                        @foreach ($stores as $store)
                          <option value="{!! nl2br(e($store->id)) !!}">{!! nl2br(e($store->storeName)) !!}</option>
                        @endforeach 
                      @else
                        @foreach ($stores as $store)
                          <option value="{!! nl2br(e($store->id)) !!}" {{ $store->id == $pan->store_id ? 'selected' : '' }}>{!! nl2br(e($store->storeName)) !!}</option>
                        @endforeach
                      @endif
                    </select>
                  </div>
                  <div class="col s6">
                    <label for="genre">
                      ジャンルID
                    </label>
                    <select id="genreid" name="genre_id">
                      @if ($pan->genre_id == null)
                        <option value="" selected>NULL</option>
                        @foreach ($genres as $genre)
                          <option value="{!! nl2br(e($genre->id)) !!}">{!! nl2br(e($genre->genreName)) !!}</option>
                        @endforeach 
                      @else
                        @foreach ($genres as $genre)
                          <option value="{!! nl2br(e($genre->id)) !!}" {{ $genre->id == $pan->genre_id ? 'selected' : '' }}>{!! nl2br(e($genre->genreName)) !!}</option>
                        @endforeach
                      @endif
                    </select>
                  </div>
              <div class="col s6">
                <a href="{{ url('manager') }}" value="投稿する" class="createSubmit" style="padding: 11px 0; display: block;">戻る</a>
              </div>
              <div class="col s6">
                <input type="submit" value="更新する" class="createSubmit"/>
              </div>
            </form>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        var v = parseInt("{{$pan->permit}}");
        document.getElementById('permit').options[v].selected = true;
        var v = parseInt("{{$pan->store_id}}") - 1;
        document.getElementById('storeid').options[v].selected = true;
      </script>
@endsection

