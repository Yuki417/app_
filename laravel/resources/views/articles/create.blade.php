{{-- 4-3 --}}
@extends('app')

@section('title', '会員一覧TOP画面')

@include('nav')

@section('content')

{{-- 画面遷移リンク --}}
<a href="{{ route('registration') }}">新規登録</a>
<a href="{{ route('record') }}">体重</a>
<a href="{{ route('show') }}">編集</a>
<a href="{{ route('weight') }}">グラフ</a>
<a href="{{ route('confirm') }}">削除</a>



  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            @include('error_card_list')
            <div class="card-text">
              <form method="POST" action="{{ route('articles.store') }}">
                @include('articles.form')
                <button type="submit" class="btn blue-gradient btn-block">あ</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
