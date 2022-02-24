{{--
https://note.com/laravelstudy/n/ne41d086745bc
# ChartJSの組み込み　参照
 --}}


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
{{-- 							<button class="btn btn-warning" onclick="history./back()">戻る</button>
 --}}
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
