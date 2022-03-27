@extends('layouts.main')


@section('content')
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                          <canvas id="pie-chart"></canvas>  
                       
                    </div>
                </div>
            </div>
        </div>
@endsection


<script>

       window.onload=function(){/*  ww  w  .j a va2s . com*/
 var data = [{
   data: [50, 55, 60, 33],
   labels: ["India", "China", "US", "Canada"],
   backgroundColor: [
     "#4b77a9",
     "#5f255f",
     "#d21243",
     "#B27200"
   ],
   borderColor: "#fff"
 }];
 var options = {
   tooltips: {
     enabled: false
   },
   plugins: {
     datalabels: {
       formatter: (value, ctx) => {
         let datasets = ctx.chart.data.datasets;
         if (datasets.indexOf(ctx.dataset) === datasets.length - 1) {
           let sum = datasets[0].data.reduce((a, b) => a + b, 0);
           let percentage = Math.round((value / sum) * 100) + '%';
           return percentage;
         } else {
           return percentage;
         }
       },
       color: '#fff',
     }
   }
 };
 var ctx = document.getElementById("pie-chart").getContext('2d');
 var myChart = new Chart(ctx, {
   type: 'doughnut',
   data: {
     datasets: data
   },
   options: options
 });
    }
</script>

