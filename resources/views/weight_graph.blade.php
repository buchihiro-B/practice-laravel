<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <title>グラフ</title> 
</head>
 <body>
		<h1>グラフ</h1>
   	<canvas id="myChart"></canvas>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	<!-- グラフを描画 -->
   <script>
	//ラベル
	var labels = @json($label);

	//平均体重ログ
	var average_weight_log = @json($avg_weight_log);

	//最大体重ログ
	var max_weight_log = @json($max_weight_log);

	//最小体重ログ
	var min_weight_log = @json($min_weight_log);

	//グラフを描画
   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
		type: 'line',
		data : {
			labels: labels,
			datasets: [
				{
					label: '平均体重',
					data: average_weight_log,
					borderColor: "rgba(0,0,255,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				},
				{
					label: '最大',
					data: max_weight_log,
					borderColor: "rgba(0,255,0,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				},
				{
					label: '最小',
					data: min_weight_log,
					borderColor: "rgba(255,0,0,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				}
			]
		},
		options: {
			title: {
				display: true,
				text: '体重ログ（６ヶ月平均）'
			}
		}
   });
   </script>
   <!-- グラフを描画ここまで -->
 </body>
</html>