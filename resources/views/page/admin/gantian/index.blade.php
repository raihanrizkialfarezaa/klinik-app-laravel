@extends('layouts.dashboard')
@section('title', 'Chart')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-4" id="container"></div>
                <div class="mb-4" id="containeri"></div>
                <div class="mb-4" id="containero"></div>
                <div class="mb-4" id="containera"></div>
                <div class="mb-4" id="containerr"></div>
                <div class="mb-5">
                    <h6 class="text-center">11 Persen sisanya merupakan pemilih yang golput</h6>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        var users =  <?php echo json_encode([$o1]) ?>;
   
   Highcharts.chart('container', {
       title: {
           text: 'Laporan'
       },
       subtitle: {
           text: 'Berikut Laporan Voting Data Pemilih OSIS'
       },
        xAxis: {
           categories: ['Ijlal Windhi Saputra', 'Muhammad Daiva Arga Azura']
       },
       yAxis: {
           title: {
               text: 'Semua data diatas dalam bentuk persen'
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
           name: 'Sudah Voting',
           data: [<?= $o1 ?>, <?= $o5 ?>]
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
    <script>
        var users =  <?php echo json_encode([$o1]) ?>;
   
   Highcharts.chart('containeri', {
       title: {
           text: 'Laporan'
       },
       subtitle: {
           text: 'Berikut Laporan Voting Data Pemilih Organ & Sub Organ'
       },
        xAxis: {
           categories: ['Ijlal Windhi Saputra', 'Muhammad Daiva Arga Azura']
       },
       yAxis: {
           title: {
               text: 'Semua data diatas dalam bentuk persen'
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
           name: 'Sudah Voting',
           data: [<?= $s1 ?>, <?= $s5 ?>]
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
    <script>
        var users =  <?php echo json_encode([$o1]) ?>;
   
   Highcharts.chart('containera', {
       title: {
           text: 'Laporan'
       },
       subtitle: {
           text: 'Berikut Laporan Voting Data Pemilih Guru'
       },
        xAxis: {
           categories: ['Ijlal Windhi Saputra', 'Muhammad Daiva Arga Azura']
       },
       yAxis: {
           title: {
               text: 'Semua data diatas dalam bentuk persen'
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
           name: 'Sudah Voting',
           data: [<?= $g1 ?>, <?= $g5 ?>]
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
    <script>
        var users =  <?php echo json_encode([$o1]) ?>;
   
   Highcharts.chart('containero', {
       title: {
           text: 'Laporan'
       },
       subtitle: {
           text: 'Berikut Laporan Voting Data Pemilih Siswa'
       },
        xAxis: {
           categories: ['Ijlal Windhi Saputra', 'Muhammad Daiva Arga Azura']
       },
       yAxis: {
           title: {
               text: 'Semua data diatas dalam bentuk persen'
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
           name: 'Sudah Voting',
           data: [<?= $ss1 ?>, <?= $ss2 ?>]
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
    <script>
        var users =  <?php echo json_encode([$o1]) ?>;
   
   Highcharts.chart('containerr', {
       title: {
           text: 'Rekapitulasi Final'
       },
       subtitle: {
           text: 'Berikut Diagram Gabungan Masing Masing Kandidat'
       },
        xAxis: {
           categories: ['Ijlal Windhi Saputra', 'Muhammad Daiva Arga Azura']
       },
       yAxis: {
           title: {
               text: 'Semua data diatas dalam bentuk persen'
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
           name: '% Rata Rata',
           data: [<?= $kk1 ?>, <?= $kk5 ?>]
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