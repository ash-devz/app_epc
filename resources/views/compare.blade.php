@extends('layout')
@section('page-title') Comparison - EPC Application @stop
@section('page-content')
<section class="bg-half page-next-level " style="background: url('/assets/images/bg-home.jpg') center center;">
  <div class="bg-overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="text-center text-white">
          <h1 class="heading font-weight-bold mb-4">EPC Comparison</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-7">
        <div class="row" id="r_changes">
          <div class="col-lg-12">
            <div class="job-detail border rounded mt-2 p-4">
              <div class="job-detail-content" >
                <div class="job-detail-com-desc overflow-hidden d-block">
                  <h4 class="mb-2 text-dark">Comparison w.r.t Energy Efficiencies</h4>
                </div>
              </div>
              <div class="job-detail-desc mt-4">
                <p class=" mb-3 text-justify">The Comparison has been done by taking Average of Current Energy Efficiency of 10 neighbouring properites.</p>
                <br/>
                <canvas id="chart_current_efficiency"></canvas>
                <br/>
                <p class=" mb-3 text-justify">The neighbouring properties used for the analysis are as follows : </p>
                <ul>
                  @foreach($addresses['rows'] as $address)
                  <li><a href="/view/{{$address['lmk-key']}}">{{$address['address']}} {{$address['postcode']}}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
@section('custom-scripts')
<script type="text/javascript">
  (function ($) {
    var data = {
    labels: ["A Rated", "Your Energy Efficiency", "Average Energy Efficiency "],
    datasets: [{
    label: "CURRENT ENERGY EFFICIENCY COMPARISON",
    backgroundColor: "rgba(29,112,184,0.2)",
    borderColor: "rgba(29,112,184,1)",
    borderWidth: 3,
    hoverBackgroundColor: "rgba(29,112,184,0.4)",
    hoverBorderColor: "rgba(29,112,184,1)",
    data: ["100",localStorage.getItem("current-efficiency"),"{{ $av_energy }}"],
    },
    ]
    };
    
    var option = {
    "hover": {
      "animationDuration": 0
    },
    "animation": {
      "duration": 1,
      "onComplete": function() {
        var chartInstance = this.chart,
          ctx = chartInstance.ctx;
    
        ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
        ctx.textAlign = 'center';
        ctx.textBaseline = 'bottom';
    
        this.data.datasets.forEach(function(dataset, i) {
          var meta = chartInstance.controller.getDatasetMeta(i);
          meta.data.forEach(function(bar, index) {
            var data = dataset.data[index];
            ctx.fillText(data, bar._model.x, bar._model.y - 5);
          });
        });
      }
    },
    legend: {
      "display": false
    },
    tooltips: {
      "enabled": false
    },
    scales: {
      yAxes: [{
        display: true,
        gridLines: {
          display: true
        },
        ticks: {
          max: Math.max(...data.datasets[0].data) + 10,
          display: false,
          beginAtZero: true
        }
      }],
      xAxes: [{
        gridLines: {
          display: false
        },
        ticks: {
          beginAtZero: true
        }
      }]
    }
    };
    Chart.Bar('chart_current_efficiency', {
    options: option,
    data: data
    });
  })(jQuery)
</script>
@stop