@extends('base')

@section('content')
<form method="POST">
  @csrf
  <input type="text" name="test1">
<button type="submit">sbmit</button>
</form>
{{$user->email}}
@foreach ($user->viri() as $virus)
  <li>{{$virus->name}}
@endforeach

<div class="container">

<h1>Month Infected Graph</h1>
</div>
<div class="container">
<canvas id="myChart"></canvas>
</div>
@endsection

@section('javascript')
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1月', '2月', '3月', '4月', '5月'],
        datasets: [{
            label: 'Japan',
            data: [120, 1000, 12000, 3000, 1000, 100],
            borderColor: [
                '#669bcd',

            ],
            borderWidth: 5
        },{
            label: 'America',
            data: [12000, 1000, 12000, 3000, 1000, 100],
            borderColor: [
                '#e33932',
            ],
            borderWidth: 5
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
@endsection
