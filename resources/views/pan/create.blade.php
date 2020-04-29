@extends('layout.template')
@section('title', '新規投稿')
@section('contents')
      <div class="main-wrap">
        <div class="container">
                {{ Breadcrumbs::render('create') }}
          <div class="row pansCreate">
            <form id="pansCreate" action="{{ url('pan/complete') }}" method="POST" enctype="multipart/form-data">
              @csrf
              
              @if ($errors->any())
              <ul class="col errors" id="errors">
                  @foreach($errors->all() as $error)
                  <li class="error-item"><i class="material-icons">error</i>{{ $error }}</li>
                  @endforeach
              </ul>
              @endif
              <div class="col s12">
                <p class="label">パン画像を選択してください
                	<span style="color:red"> (必須)</span></p>
                <div class="input-file-gr">
                  <div class="input-file">
                    <label for="pansCreateImage" id="pansCreateImageLabel">
                      パン画像を選択する<input type="file" name="image" id="pansCreateImage" value="{{old('image')}}">
                    </lebel>
                  </div>
                  <div class="filename">選択されていません</div>
                </div>
              </div>
              <div class="col s12 m6 l6">
                <label for="panname">
                  パンの名前を入力してください<span style="color:red"> (必須)</span><input type="text" name="panname" placeholder="パンの名前"
                  value="{{old('panname')}}">
                </label>
              </div>
              <div class="col s12 m6 l6">
                <label for="storename">
                  パン屋の店名を入力してください<span style="color:red"> (必須)</span><input type="text" name="storename" placeholder="店名" value="{{ old('storename')}}">
                </label>
              </div>
              <div class="col s12 m6 l6">
                <label for="sns">
                  InstagramのIDを入力してください<span style="color:red"></span><input type="text" name="instagramid" placeholder="例） Barkey_Tokyo" value="{{old('instagramid')}}">
                </label>
              </div>
              <div class="col s12 m6 l6">
                  <label for="tag">
                    パンにもっとも近いタグを選択してください<span style="color:red"> (必須)</span>
                  </label>
                  <div class="create-label-set">
                    @foreach ($tags as $tag)
                      <input type="checkbox" name="tag[]" value="{!! nl2br(e($tag->id)) !!}" 
                      id="tag-{!! nl2br(e($tag->id)) !!}" {{ is_array(old("tag")) && in_array("$tag->id", old("tag"), true)? 'checked="checked"' : '' }}>
                      <label for="tag-{!! nl2br(e($tag->id)) !!}" class="label create-label">{!! nl2br(e($tag->tagName)) !!}</label>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="col">
                <p>以下をご確認の上、投稿をお願いいたします。</p>
                <p>1, 投稿が反映されるまで、1～2日ほどかかります。<br>反映後、インスタグラムにご連絡致します。</p>
                <p>2, パン画像は、切り取りや ( 綺麗に見せるために ) 加工することを予めご了承ください。</p>
                <p>3, タグは、管理側で修正する場合がございます。</p>
                <p>4, 画像、パンの名前、店名は必須項目になります。Instagramは必須ではありません。しかし、宣伝が出来ません。</p>
              </div>
            
              <div class="col s12">
                <input type="submit" value="投稿する" class="createSubmit"/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
@endsection
