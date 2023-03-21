@extends('layouts.dashboard')
@section('title', 'Realtime')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-4" id="containera"></div>
                <div class="sijine" style="margin-bottom: 100px;">
                  <h6 class="text-center">Ijlal Windhi Saputra</h6>
                  <h6 class="text-center">OSIS : {{ $os1 }}</h6>
                  <h6 class="text-center">Guru : {{ $guru1 }}</h6>
                  <h6 class="text-center">Organ & Sub Organ : {{ $so1 }}</h6>
                  <h6 class="text-center">Siswa : {{ $siswa1 }}</h6>
                  <br>
                  <hr>
                </div>
                <div class="mb-4" id="container"></div>
                <div class="sijine" style="margin-bottom: 100px;">
                  <h6 class="text-center">Muhammad Daiva Arga Azura</h6>
                  <h6 class="text-center">OSIS : {{ $os5 }}</h6>
                  <h6 class="text-center">Guru : {{ $guru5 }}</h6>
                  <h6 class="text-center">Organ & Sub Organ : {{ $so5 }}</h6>
                  <h6 class="text-center">Siswa : {{ $siswa2 }}</h6>
                  <br>
                  <hr>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        var users =  <?php echo json_encode([$o5]) ?>;
   
   Highcharts.chart('containera', {
       title: {
           text: 'Persentase'
       },
       subtitle: {
           text: 'Berikut Laporan Voting Masing-Masing Kandidat'
       },
        xAxis: {
           categories: ['Guru', 'OSIS', 'Organ & Sub Organ', 'Siswa']
       },
       yAxis: {
           title: {
               text: 'Angka Tersebut Dalam Bentuk Persen'
           }
       },
       legend: {
           layout: 'vertical',
           align: 'right',
           verticalAlign: 'middle'
       },
       plotOptions: {
           series: {
               allowPointSelect: true
           }
       },
       series: [{
           type: 'bar',
           name: 'Persentase',
           data: [<?= $g1 ?>, <?= $o1 ?>,<?= $s1 ?>, <?= $ss1 ?> ],
           color: 'cyan'
       }],
       responsive: {
           rules: [{
               condition: {
                   maxWidth: 500
               },
               chartOptions: {
                   legend: {
                       layout: 'horizontal',
                       align: 'center',
                       verticalAlign: 'bottom'
                   }
               }
           }]
       }
});
    </script>
    <!-- <script>
        var users =  <?php echo json_encode([$kandidat]) ?>;
   
    var myChart = Highcharts.chart('container', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Muhammad Daiva Arga Azura'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
//   accessibility: {
//     point: {
//       valueSuffix: 
//     }
//   },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Brands',
    colorByPoint: true,
    data: [{
      name: 'Guru',
      y: <?= $g5 ?>,
      selected: true
    }, {
      name: 'Osis',
      y: <?= $o5 ?>
    }, {
      name: 'Organ Dan Sub Organ',
      y: <?= $s5 ?>
    }]
  }]
});
    </script> -->

    <script>
        var users =  <?php echo json_encode([$o5]) ?>;
   
   Highcharts.chart('container', {
       title: {
           text: 'Persentase'
       },
       subtitle: {
           text: 'Berikut Laporan Voting Masing-Masing Kandidat'
       },
        xAxis: {
           categories: ['Guru', 'OSIS', 'Organ & Sub Organ', 'Siswa']
       },
       yAxis: {
           title: {
               text: 'Angka Tersebut Dalam Bentuk Persen'
           }
       },
       legend: {
           layout: 'vertical',
           align: 'right',
           verticalAlign: 'middle'
       },
       plotOptions: {
           series: {
               allowPointSelect: true
           }
       },
       series: [{
           type: 'bar',
           name: 'Persentase',
           data: [<?= $g5 ?>, <?= $o5 ?>,<?= $s5 ?>, <?= $ss2 ?> ],
           color: 'tomato'
       }],
       responsive: {
           rules: [{
               condition: {
                   maxWidth: 500
               },
               chartOptions: {
                   legend: {
                       layout: 'horizontal',
                       align: 'center',
                       verticalAlign: 'bottom'
                   }
               }
           }]
       }
});
    </script>
@endsection