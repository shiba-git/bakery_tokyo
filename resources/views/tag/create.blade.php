@extends('layout.template')
@section('title', 'タグ生成 |')
@section('contents')
      <div class="main-wrap">
        <div class="container">
          <nav id="breadcrumb">
            <div class="nav-wrapper">
              <div class="col s12">
                <a href="#!" class="breadcrumb">Top</a>
                <a href="#!" class="breadcrumb">Tag</a>
                <a href="#!" class="breadcrumb">Create</a>
              </div>
            </div>
          </nav>
          <div class="row pansCreate">
            <form id="pansCreate" action="{{ url('manager/tag/complete') }}" method="POST" enctype="multipart/form-data">
              @csrf
              
              @if ($errors->any())
              <ul class="col errors" id="errors">
                  @foreach($errors->all() as $error)
                  <li class="error-item"><i class="material-icons">error</i>{{ $error }}</li>
                  @endforeach
              </ul>
              @endif
              <div class="col s12 m6 l6">
                <label for="tagname">
                  タグ名<span style="color:red">※</span><input type="text" name="tagName" placeholder="タグ名"value="">
                </label>
              </div>
              <div class="col s12 l12">
                <div class="col s6">
                  <a href="{{ url('manager') }}" value="投稿する" class="createSubmit" style="padding: 11px 0; display: block;">戻る</a>
                </div>
                <div class="col s6">
                  <input type="submit" value="投稿する" class="createSubmit"/>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
@endsection
