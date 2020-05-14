@extends('base')

@section('content')
<div class="container">
<h1>Infected persons</h1>
</div>
<div class="container">
<canvas id="myBarChart"></canvas>

</div>


@endsection

@section('javascript')
//棒グラフ
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  //グラフの種類
  type: 'bar',
  //データの設定
  data: {
      //データ項目のラベル
      labels: ["埼玉県","千葉県","東京都","神奈川県","大阪府","兵庫県","福岡県","北海道","茨城県","石川県","岐阜県","愛知県","京都府","青森県","岩手県","宮城県","秋田県","山形県","福島県","栃木県","群馬県","新潟県","富山県","福井県","山梨県","長野県","静岡県","三重県","滋賀県","奈良県","和歌山県","鳥取県","島根県","岡山県","広島県","山口県","徳島県","香川県","愛媛県","高知県","佐賀県","長崎県","熊本県","大分県","宮崎県","鹿児島県","沖縄県"],
      //データセット
      datasets: [{
          //凡例
          label: "PCR陽性者数の累積",
          //背景色
          backgroundColor: "rgba(75,192,192,0.4)",
          //枠線の色
          borderColor: "rgba(75,192,192,1)",
          //グラフのデータ
          data: [894,834,4669,1111,1682,667,649,879,167,267,150,495,334,26,0,88,16,69,78,54,146,77,212,122,56,72,73,45,98,87,62,3,24,23,162,36,5,28,48,74,45,17,47,60,17,10,142]
      }]
  },
  //オプションの設定
  options: {
      //軸の設定
      scales: {
          //縦軸の設定
          yAxes: [{
　　　　　　　　　//目盛りの設定
              ticks: {
                  //開始値を0にする
                  beginAtZero:true,
              }
          }]
      }
  }
});
@endsection
