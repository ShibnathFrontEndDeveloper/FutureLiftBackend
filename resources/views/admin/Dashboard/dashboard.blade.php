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
    @if (Auth::guard('admin')->user()->name == 'Super Admin' || App\Helpers::userIdWiseRoleName(Auth::guard('admin')->user()->id) == 'Admin')

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
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" id="picker_start_session" class="form-control picker_input" value="" placeholder="Start Date ({{\Carbon\Carbon::now()->format('01-m-Y')}})" name="session_date_start"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" id="picker_end_session" class="form-control picker_input" placeholder="End Date ({{\Carbon\Carbon::now()->format('t-m-Y')}})" name="session_date_end"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="button" class="btn btn-dark" value="Search" onclick="sessionDateChange();"/>
                        </div>
                    </div>
                </div>
                <div id="piechart_3d" style="width: 100%; height: 300px;"></div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" id="picker_start_subscription" class="form-control picker_input" value="" placeholder="Start Date ({{\Carbon\Carbon::now()->format('01-m-Y')}})" name="subscription_date_start"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" id="picker_end_subscription" class="form-control picker_input" placeholder="End Date ({{\Carbon\Carbon::now()->format('t-m-Y')}})" name="subscription_date_end"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="button" class="btn btn-dark" value="Search" onclick="subscriptionDateChange();"/>
                        </div>
                    </div>
                </div>
                <div id="piechart_3d_subs" style="width: 100%; height: 300px;"></div>
            </div>
            <div class="col-md-12">
                <div id="columnchart_values" style="width: 100%; height: 300px;"></div>
            </div>
        </div>


    </div>
    @else
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Dashboard</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-6">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
				<lottie-player src="https://assets-v2.lottiefiles.com/a/8b2e9442-116e-11ee-ba60-ef900d50f442/2isEFteXKx.json"  background="transparent"  speed="1"   loop  autoplay></lottie-player>
            </div>
            <div class="col-md-6 mt-5">
                <blockquote>
                Welcome to the FutureLift Company Dashboard, where access is tailored to your specific role for a seamless and efficient experience. Our commitment to enhancing productivity and facilitating collaboration begins with personalized access that ensures you have the right tools at your fingertips. Whether you're an executive, manager, or team member, this dashboard is designed to empower you with the information and functionalities you need to excel in your role. From tracking key performance indicators to facilitating cross-functional communication, FutureLift's role-wise access ensures that you have the resources to drive success. Explore your dedicated space and unlock the potential of a unified, role-centric approach to managing our future together.
                </blockquote>
            </div>
        </div>


    </div>
    @endif
@endsection
@section('scripts')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    var currentMonthTotal249SessionBook = <?=(int)$currentMonthTotal249SessionBook?>;
    var currentMonthTotal499SessionBook = <?=(int)$currentMonthTotal499SessionBook?>;
    var currentMonthTotalFreeSessionBook = <?=(int)$currentMonthTotalFreeSessionBook?>;
    var currentMonthTotal13449Subscription = <?=(int)$currentMonthTotal13449Subscription?>;
    var currentMonthTotal6449Subscription = <?=(int)$currentMonthTotal6449Subscription?>;
    var currentMonthTotal449Subscription = <?=(int)$currentMonthTotal449Subscription?>;

      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Monthly Calculate'],
          ['249 Total InstantAdvice',     currentMonthTotal249SessionBook],
          ['499 Total InstantAdvice',      currentMonthTotal499SessionBook],
          ['Free Total InstantAdvice',      currentMonthTotalFreeSessionBook]
        ]);

        var options = {
          title: 'Month Wise Total InstantAdvice Stats',
         is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }

      google.charts.setOnLoadCallback(drawChart_subs);
      function drawChart_subs() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Monthly Calculate'],
          ['Total Future Lift Advance',     currentMonthTotal13449Subscription],
          ['Total Future Lift Pro',      currentMonthTotal6449Subscription],
          ['Total Future Lift Career Test',      currentMonthTotal449Subscription]
        ]);

        var options = {
          title: 'Month Wise Total Subscription Stats',
         is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d_subs'));
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


        function sessionDateChange(){
            var start = $("#picker_start_session").val();
            var end = $("#picker_end_session").val();
            if(start !='' && end !=''){
                $("#ftco-loader").show();
                $.ajax({
                    type : 'GET',
                    url: "<?=url('/admin/admin-dashboard?section=session&startDate=')?>"+start+"&endDate="+end,
                    success : function(data){
                        currentMonthTotal249SessionBook = data.currentMonthTotal249SessionBook;
                        currentMonthTotal499SessionBook = data.currentMonthTotal499SessionBook;
                        currentMonthTotalFreeSessionBook = data.currentMonthTotalFreeSessionBook;
                        google.charts.setOnLoadCallback(drawChart);
                        $("#ftco-loader").hide();
                    },error: function(data){
                        $("#ftco-loader").hide();
                    },
                })
            }else{
                alert('Start date and End date required!');
            }
        }

        function subscriptionDateChange(){
            var start = $("#picker_start_subscription").val();
            var end = $("#picker_end_subscription").val();
            if(start !='' && end !=''){
                $("#ftco-loader").show();
                $.ajax({
                    type : 'GET',
                    url: "<?=url('/admin/admin-dashboard?section=subscription&startDate=')?>"+start+"&endDate="+end,
                    success : function(data){
                        currentMonthTotal13449Subscription = data.currentMonthTotal13449Subscription;
                        currentMonthTotal6449Subscription = data.currentMonthTotal6449Subscription;
                        currentMonthTotal449Subscription = data.currentMonthTotal449Subscription;
                        google.charts.setOnLoadCallback(drawChart_subs);
                        $("#ftco-loader").hide();
                    },error: function(data){
                        $("#ftco-loader").hide();
                    },
                })
            }else{
                alert('Start date and End date required!');
            }
        }


    </script>
@endsection
