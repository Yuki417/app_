{{-- 4-3 会員一覧TOP画面--}}
@extends('app')

@section('title', '会員一覧TOP画面')

@include('nav')

@section('content')

{{-- 画面遷移リンク --}}
<a href="{{ route('registration') }}">新規登録</a>
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
                    <a class="btn btn-primary original" href="{{ route('registration')}}">新規登録</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">氏名</th>
                                <th scope="col">最終更新日</th>
                                <th scope="col">性別</th>
                                <th scope="col">記録</th>
                                <th scope="col">グラフをみる</th>
                                <th scope="col">編集</th>
                                <th scope="col">削除</th>
{{--                             </tr>

                        </thead>
                        <tbody>
                            @foreach($personal_infos as $personal_info)
                                <tr>
                                    <td>{{$personal_info->clint_name}}</td>
                                    <td>@if($personal_info->sex == 0) 男性
                                        @elseif($personal_info->sex == 1) 女性
                                        @endif
                                    </td>
                                    <td>{{$personal_info->birth_date}}</td>
                                    <td><a href="{{route('Weigh.graph', ['id' => $personal_info->id])}}">詳細</a></td>
                                    <td><a href="{{route('Weight.show', ['id' => $personal_info->id])}}">詳細</a></td>
                                    <td><a href="{{route('WeightRegistrations.WeightCreate', ['id' => $personal_info->id])}}">登録</a></td>
                                    <td><form method="POST" action="{{route('WeightRegistrations.destroy', ['id' => $personal_info->id])}}" id="delete_{{$personal_info->id}}">
                                            @csrf
                                            <a href="#" style="color: red;" data-id="{{$personal_info->id}}" onclick="deletePost(this);">削除する</a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- $personal_infos->links -->
 --}}
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function deletePost(e){
        'use strict';
        if(confirm('本当に削除してよろしいですか??')){
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
</script>

@endsection




{{--　投稿フォーム
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
 --}}


















{{--
https://note.com/laravelstudy/n/ne41d086745bc
# ChartJSの組み込み　参照
 --}}

{{--
 <!DOCTYPE html>
 <html lang="ja">
 <head>
  <meta charset="utf-8">
  <title>グラフ</title>
 </head>
  <body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">グラフ</div>
						<div class="card-body">
 							<button class="btn btn-warning" onclick="history./back()">戻る</button>

							<canvas id="myChart"></canvas>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

         <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>



     <!-- グラフを描画 -->
    <script>
     //ラベル
     var labels = [
         "2022年1月",
         "2022年2月",
         "2022年3月",
         "2022年4月",
         "2022年5月",
         "2022年6月",
     ];
     //平均体重ログ
     var average_weight_log = [
         50.0,	//1月のデータ
         51.0,	//2月のデータ
         52.0,	//3月のデータ
         53.0,	//4月のデータ
         54.0,	//5月のデータ
         49.0	//6月のデータ
     ];

 //グラフを描画
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
         type: 'line',
         data : {
             labels: labels,
             datasets: [
                 {
                     label: '体重',
                     data: average_weight_log,
                     borderColor: "rgba(0,0,255,1)",
                      backgroundColor: "rgba(0,0,0,0)"
                 },


               ]
         },
         options: {
             title: {
                 display: true,
                 text: '体重ログ'
             }
         }
    });
    </script>
    <!-- グラフを描画ここまで -->


  </body>
 </html>
 --}}
