{{-- 4-3 会員一覧TOP画面--}}
@extends('app')

@section('title', '会員一覧TOP画面')

@include('nav')

@section('content')

{{-- 画面遷移リンク --}}
<a href="{{ route('create') }}">新規登録</a>
<a href="{{ route('record') }}">体重</a>
<a href="{{ route('edit') }}">編集</a>
{{-- <a href="{{ route('graph') }}">グラフ</a>
 --}}<a href="{{ route('confirm') }}">削除</a>



{{-- シンプル体重 --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">一覧画面</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                    <a class="btn btn-primary original" href="{{ route('create')}}">新規登録</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">氏名</th>
                                <th scope="col">性別</th>
                                <th scope="col">生年月日</th>
                                <th scope="col">体重記録</th>
                                <th scope="col">グラフをみる</th>
                                <th scope="col">編集</th>
                                <th scope="col">削除</th>
                            </tr>
                    </thead>



                        <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{$customers->name}}</td>
                                    <td>@if($customers>gender == 0) 男性
                                        @elseif($customers->gender == 1) 女性
                                        @endif
                                    </td>
                                    <td>{{$customers->birthdate}}</td>
                                    <td><a href="{{route('Weigh.graph', ['id' => $customers->id])}}">詳細</a></td>
                                    <td><a href="{{route('Weight.show', ['id' => $customers->id])}}">詳細</a></td>
                                    <td><a href="{{route('WeightRegistrations.WeightCreate', ['id' => $customers->id])}}">登録</a></td>




                                        <td><form method="POST" action="{{route('WeightRegistrations.destroy', ['id' => $customers->id])}}" id="delete_{{$customers->id}}">
                                        @csrf
                                        <a href="#" style="color: red;" data-id="{{$customers->id}}" onclick="deletePost(this);">削除する</a>
                                    </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- javascriptのタグ　ダイアログ　confirm関数 --}}
<script>
    function deletePost(e){
        'use strict';
        if(confirm('本当に削除してよろしいですか??')){
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
</script>


@endsection
