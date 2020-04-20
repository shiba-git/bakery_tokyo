@extends('layout.template')
@section('title','')
@section('contents')   
      <div class="container">       
          <div class="tags">
            <h2><p class="position pos-m"><i class="fas fa-bread-slice i-tag-genre fa-lg"></i>パンのジャンルから探す</p></h2>
            <ul>
              @foreach ($genres as $genre)
                <form class="deletebtn" action="{{ url('manager/genre/delete', ['id' => $genre->id]) }}" method='post'>
                    @method('DELETE')
                    @csrf
                    <li class="fas-list">
                      <i class="fas fa-bread-slice fa-lg genre-item"></i>{!! nl2br(e($genre->genreName)) !!}
                      <label class="deleteLabel"name="genre-{!! nl2br(e($genre->id)) !!}">
                        <input type='submit' value='削除' id="genre-{!! nl2br(e($genre->id)) !!}">
                      </label>
                    </li>
                </form>
              @endforeach
            </ul>
          <div class="tags">
            <h2><i class="material-icons">store</i>店名から探す</h2>
            <ul>
              @foreach ($stores as $store)
              <form class="deletebtn" action="{{ url('manager/store/delete', ['id' => $store->id]) }}" method='post'>
                    @method('DELETE')
                    @csrf
                    <li class="list">
                      <p><i class="material-icons store-icon">store</i>{!! nl2br(e($store->storeName)) !!}</p>
                      <label class="deleteLabel"name="store-{!! nl2br(e($store->id)) !!}">
                        <input type='submit' value='削除' id="store-{!! nl2br(e($store->id)) !!}">
                      </label>
                    </li>
                </form>
              @endforeach
            </ul>
          </div>
          <div class="tags">
            <h2><i class="material-icons">bookmark</i>タグから探す</h2>
            <ul>
              @foreach ($tags as $tag)
              <form class="deletebtn" action="{{ url('manager/tag/delete', ['id' => $tag->id]) }}" method='post'>
                    @method('DELETE')
                    @csrf
                    <li class="list">
                      <p><i class="material-icons store-icon">bookmark</i>{!! nl2br(e($tag->tagName)) !!}</p>
                      <label class="deleteLabel"name="tag-{!! nl2br(e($tag->id)) !!}">
                        <input type='submit' value='削除' id="tag-{!! nl2br(e($tag->id)) !!}">
                      </label>
                    </li>
                </form>
              @endforeach
            </ul>
          </div>
          <div class="col s12">
                <a href="{{ url('manager') }}" value="投稿する" class="createSubmit" style="padding: 11px 0; display: block;">戻る</a>
              </div>
    </div>
@endsection