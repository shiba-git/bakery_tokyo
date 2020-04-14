@extends('layout.template')
@section('title', 'ストア生成 |')
@section('contents')
      <div class="main-wrap">
        <div class="container">
          <nav id="breadcrumb">
            <div class="nav-wrapper">
              <div class="col s12">
                <a href="#!" class="breadcrumb">Top</a>
                <a href="#!" class="breadcrumb">Store</a>
                <a href="#!" class="breadcrumb">Create</a>
              </div>
            </div>
          </nav>
          <div class="row pansCreate">
            <form id="pansCreate" action="{{ url('manager/store/complete') }}" method="POST" enctype="multipart/form-data">
              @csrf
              
              @if ($errors->any())
              <ul class="col errors" id="errors">
                  @foreach($errors->all() as $error)
                  <li class="error-item"><i class="material-icons">error</i>{{ $error }}</li>
                  @endforeach
              </ul>
              @endif
              <div class="col s12 m6 l6">
                <label for="storename">
                  店名<span style="color:red">※</span><input type="text" name="storeName" placeholder="店名"value="">
                </label>
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
