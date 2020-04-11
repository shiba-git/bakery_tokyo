@extends('layout.template')
@section('title', '新規投稿 |')
@section('contents')
      <div class="main-wrap">
        <div class="container">
          <nav id="breadcrumb">
            <div class="nav-wrapper">
              <div class="col s12">
                <a href="#!" class="breadcrumb">Top</a>
                <a href="#!" class="breadcrumb">Pans</a>
                <a href="#!" class="breadcrumb">Create</a>
              </div>
            </div>
          </nav>
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
                <p class="label">パン画像<span style="color:red">※</span></p>
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
                <label for="storename">
                  パン屋の店名<span style="color:red">※</span><input type="text" name="storename" placeholder="店名"value="{{ old('storename')}}">
                </label>
              </div>
              <div class="col s12 m6 l6">
                <label for="panname">
                  パンの名前<span style="color:red">※</span><input type="text" name="panname" placeholder="パンの名前"
                  value="{{old('panname')}}">
                </label>
              </div>
              <div class="col s12 m6 l6">
                <label for="sns">
                  Instagram<span style="color:red"></span><input type="text" name="instagramid" placeholder="例） @Barkey_Tokyo">
                </label>
              </div>
              <div class="col">
                <p>以下をご確認の上、投稿をお願いいたします。</p>
                <p>1, 投稿が反映されるまで、1～2日ほどかかります。<br>反映後、インスタグラムにご連絡致します。</p>
                <p>2, パン画像は、切り取りや ( 綺麗に見せるために ) 加工することを予めご了承ください。</p>
                <p>3, 画像、パンの名前、店名は必須項目になります。Instagramは必須ではありません。しかし、宣伝が出来ません。</p>
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
