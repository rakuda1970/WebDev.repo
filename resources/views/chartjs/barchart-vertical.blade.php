@extends('layout.app')
@section('content-title') Chart.js: Bar Chart Vertical @endsection
@section('content')
<h1>Chart.js: Bar Chart Vertical</h1>
<div class="col-lg-8 px-0">
    <p class="fs-5">Let's take a second to explore some examples of things we can do using Chart.js. Here is a vertical bar chart displaying a table of the top 10 fruits and vegetables.</p>
<hr />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
 
 <h2>Top 10 Produce In Fruit Category</h2>
 <hr />

 <canvas id="bar-chart" style="width:100%;max-width:1200px"></canvas>

 <script>

   new Chart(document.getElementById("bar-chart"), {
     type: 'bar',
     
     data: {
       labels: [{!! $fruitNames !!}],
       datasets: [
         {
           axis: 'y',
           label: "Popularity",
           backgroundColor: [{!! $hexString !!}],
           data: [{{ $fruitPop }}]
         }
       ]
     },
     options: {
       legend: { display: true },
       title: {
         display: true,
         text: 'Top 10 Produce In Fruit Category'
       }
     }
 });
 </script>

    <hr class="col-1 my-4">

    <a href="https://www.chartjs.org/docs/latest/" class="btn btn-primary">Read the Chart.js docs</a>
</div>
@endsection