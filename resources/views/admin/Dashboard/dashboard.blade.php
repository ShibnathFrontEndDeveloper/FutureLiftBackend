@extends('admin.Dashboard.sidebar')
@section('title') Dashboard @endsection
@section('csss')
<style>
    .card .card-title{
        color:#000000 !important;
    }
</style>
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Dashboard</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col" style="cursor:pointer;" onclick="window.location.href=`{{url('/admin/user/list')}}`">
                <div class="card">
                    <img src="{{asset('assets/images/Interesttest.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title text-center ">Total Users : {{$totalUser}}</h3>
                    </div>
                </div>
            </div>
            <div class="col" style="cursor:pointer;" onclick="window.location.href=`{{url('/admin/book-session/list')}}`">
                <div class="card">
                    <img src="{{asset('assets/images/personality-02.png')}}" class="card-img-top" alt="..." style="max-height:250px;">
                    <div class="card-body">
                        <h3 class="card-title text-center ">Total Session Book : {{$totalSessionBook}}</h3>
                    </div>
                </div>
            </div>
            <div class="col" style="cursor:pointer;" onclick="window.location.href=`{{url('/admin/counselling-session/list')}}`">
                <div class="card">
                    <img src="{{asset('assets/images/career Councelling.png')}}" class="card-img-top" alt="..." style="max-height:250px;">
                    <div class="card-body">
                        <h3 class="card-title text-center ">Counselling Pending : {{$totalPendingSession}}</h3>
                    </div>
                </div>
            </div>
            <div class="col" style="cursor:pointer;" onclick="window.location.href=`{{url('/admin/counselling-session/list')}}`">
                <div class="card">
                    <img src="{{asset('assets/images/examate-02.png')}}" class="card-img-top" alt="..." style="max-height:250px;">
                    <div class="card-body">
                        <h3 class="card-title text-center ">Counselling Complete : {{$totalCompleteSession}}</h3>
                    </div>
                </div>
            </div>
            <div class="col" style="cursor:pointer;" onclick="window.location.href=`{{url('/admin/counselling-session/list')}}`">
                <div class="card">
                    <img src="{{asset('assets/images/refer 2.png')}}" class="card-img-top" alt="..." style="max-height:250px;">
                    <div class="card-body">
                        <h3 class="card-title text-center ">Counselling Processing : {{$totalProcessingSession}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div id="piechart_3d" style="width: 100%; height: 300px;"></div>
            </div>
            <div class="col-md-12">
                <div id="columnchart_values" style="width: 100%; height: 300px;"></div>
            </div>
        </div>


    </div>
@endsection
@section('scripts')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Monthly Calculate'],
          ['Total Book Session',     <?=(int)$currentMonthTotalSessionBook?>],
          ['Total Subscription',      <?=(int)$currentMonthTotalSubscription?>]
        ]);

        var options = {
          title: 'Current Month (<?=date('M')?>) Stats',
         is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }

      var arrayData = <?=json_encode($monthlyData)?>;
      console.log(arrayData);

      console.log(json2array(arrayData));

      google.charts.setOnLoadCallback(drawChart1);
      function drawChart1() {
        var allData=[];
        var Header= ['Month', 'Total Users', { role: 'style' }];
        allData.push(Header);
        var convertData = json2array(arrayData);
        for (var i = 0; i < convertData.length; i++) {
            var temp=[];
            temp.push(convertData[i].month);
            temp.push(convertData[i].count);
            temp.push(convertData[i].color);
            allData.push(temp);
        }
        console.log(allData);

        var data = google.visualization.arrayToDataTable(allData);

    //     var data = google.visualization.arrayToDataTable([
    //      ['Element', 'Density', { role: 'style' }],
    //      ['Copper', 8.94, '#b87333'],
    //      ['Silver', 10.49, 'silver'],
    //      ['Gold', 19.30, 'gold'],
    //      ['Copper', 8.94, '#b87333'],
    //      ['Silver', 10.49, 'silver'],
    //      ['Gold', 19.30, 'gold'],
    //      ['Copper', 8.94, '#b87333'],
    //      ['Silver', 10.49, 'silver'],
    //      ['Gold', 19.30, 'gold'],
    //      ['Copper', 8.94, '#b87333'],
    //      ['Silver', 10.49, 'silver'],
    //      ['Gold', 19.30, 'gold'],
    //      ['Copper', 8.94, '#b87333'],
    //      ['Silver', 10.49, 'silver'],
    //      ['Gold', 19.30, 'gold'],

    //    ['Platinum', 21.45, 'color: #e5e4e2' ], // CSS-style declaration
    //   ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

        var options = {
            title: "Current Year (<?=date('Y')?>) Monthly Total Users of Count",
            // width: 600,
            // height: 400,
            bar: {groupWidth: "95%"},
            legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
      }

      function json2array(json){
            var result = [];
            var keys = Object.keys(json);
            keys.forEach(function(key){
                result.push(json[key]);
            });
            return result;
        }


    </script>
@endsection
