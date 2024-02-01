@extends('user.Dashboard.sidebar')
@section('title') Price @endsection
@section('csss')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css" rel="stylesheet"/>
@endsection
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
          @include('user.Dashboard.update-pro')
            <div class="page-header">
              <h3 class="page-title"> My Sessions</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/user-dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">My Sessions</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                @php
                    $percentageData = App\Helpers::profileCompletePercentage();
                    $percentage = $percentageData['percentage'];
                    $today = date('Y-m-d H:i:s');
                @endphp
            @if ($sessionHas > 0 && $percentage == 100)
                @foreach ($allData as $key => $value)
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card dash_card">
                            <div class="card-header text-center pt-4 session_card_header">
                                <h4 class="card-title">Session <span>{{$key + 1}}</span></h4>
                            </div>

                            <div class="card-body text-center das_card_body">
                                @if ($value->status == 'Active')
                                <button type="button" class="btn border scdle_btn" data-bs-toggle="modal" data-bs-target="#sessionBookPopup{{$key}}">Schedule</button>
                                @elseif ($value->status == 'Pending')
                                <button type="button" class="btn border scdle_btn disabled">Schedule</button>
                                @elseif ($value->status == 'Processing')
                                <button type="button" class="btn border scdle_btn disabled btn-warning">Session Processing</button>
                                @if (App\Helpers::twoDateTimeHoursCalculate($value->session_date_time,$today) > 24)
                                    <button type="button" class="btn border scdle_btn btn-dark" data-bs-toggle="modal" data-bs-target="#sessionReBookPopup{{$key}}">Re-Schedule</button>
                                @endif
                                @elseif ($value->status == 'Completed')
                                <button type="button" class="btn border scdle_btn disabled btn-success">Session Completed</button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewReportModal{{$key}}">Session Report</button>
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="modal" id="viewReportModal{{$key}}">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" style="background-color:#ffffff;color: #000000;">
                                <div class="modal-header">
                                    <h4 class="modal-title">Counselling Session Report</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                {!!$value->counselling_report!!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal popup_box" id="sessionBookPopup{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$key}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content ref_mdal_box">
                                <div class="modal-header">
                                    <h1 class="modal-title season_header" id="exampleModalLabel{{$key}}">
                                        Book Your Personalized Career Session No : {{$key + 1}}
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
                                </div>
                                <form action="{{url('/user/bookCareerSession')}}" class="callUsForm" method="post">
                                    @csrf
                                    <input type="hidden" name="sessionId" value="{{$value->id}}">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group modal-Input">
                                                    <i class="fa-regular fa-calendar-days"></i>
                                                    <input
                                                        type="text"
                                                        id="picker{{$key}}"
                                                        class="form-control picker"
                                                        placeholder="Schedule Session Date"
                                                        required
                                                        autocomplete="off"
                                                        name="schedule_date"
                                                        />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group modal-Input">
                                                    <i class="fa-regular fa-calendar-days"></i>
                                                    <input
                                                        type="text"
                                                        id="timepicker{{$key}}"
                                                        class="form-control timepicker"
                                                        placeholder="Session Time"
                                                        required
                                                        autocomplete="off"
                                                        name="schedule_time"
                                                        />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary upgrade_btn">Book Session</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                    <div class="modal popup_box" id="sessionReBookPopup{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$key}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content ref_mdal_box">
                                <div class="modal-header">
                                    <h1 class="modal-title season_header" id="exampleModalLabel{{$key}}">
                                        Reschedule Career Session No : {{$key + 1}}
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
                                </div>
                                <form action="{{url('/user/updatebookCareerSession')}}" class="callUsForm" method="post">
                                    @csrf
                                    <input type="hidden" name="sessionId" value="{{$value->id}}">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group modal-Input">
                                                    <i class="fa-regular fa-calendar-days"></i>
                                                    <input
                                                        type="text"
                                                        id="picker{{$key}}{{$value->id}}"
                                                        class="form-control picker"
                                                        placeholder="Schedule Session Date"
                                                        required
                                                        autocomplete="off"
                                                        name="schedule_date"
                                                        />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group modal-Input">
                                                    <i class="fa-regular fa-calendar-days"></i>
                                                    <input
                                                        type="text"
                                                        id="timepicker{{$key}}{{$value->id}}"
                                                        class="form-control timepicker"
                                                        placeholder="Session Time"
                                                        required
                                                        autocomplete="off"
                                                        name="schedule_time"
                                                        />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary upgrade_btn">Update Book Session</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                @endforeach
            @else
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card dash_card">
                    <div class="card-header text-center pt-4 session_card_header">
                        <h4 class="card-title">Session 1</span></h4>
                    </div>
                    <div class="card-body text-center das_card_body">
                        <button type="button" class="btn border scdle_btn disabled">Schedule</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card dash_card">
                    <div class="card-header text-center pt-4 session_card_header">
                        <h4 class="card-title">Session 2</span></h4>
                    </div>
                    <div class="card-body text-center das_card_body">
                        <button type="button" class="btn border scdle_btn disabled">Schedule</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card dash_card">
                    <div class="card-header text-center pt-4 session_card_header">
                        <h4 class="card-title">Session 3</span></h4>
                    </div>
                    <div class="card-body text-center das_card_body">
                        <button type="button" class="btn border scdle_btn disabled">Schedule</button>
                    </div>
                </div>
            </div>
            @endif
            </div>
          </div>




        <div class="modal popup_box" id="sesionPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content ref_mdal_box">
      <div class="modal-header">
        <h1 class="modal-title season_header" id="exampleModalLabel">Upgrade to the world's most advanced career guidance platform.
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close" onclick="popupModalClose();"></button>
      </div>
      <div class="modal-body">
        <div class="row g-5">
          <div class="col-lg-9">
            <div class="swiper upgrade_swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img class="img-fluid" src="../../../assets/images/dash_1.png" alt="">
                </div>
                <div class="swiper-slide">
                  <img class="img-fluid" src="../../../assets/images/dash_2.png" alt="">
                </div>
                <div class="swiper-slide">
                  <img class="img-fluid" src="../../../assets/images/dash_3.png" alt="">
                </div>
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
          <div class="col-lg-3 d-none d-sm-block">
            <ul class="upgrade_list">
              <li>Orientation Style</li>
              <li>Interest</li>
              <li>Personality</li>
              <li>Aptitude</li>
              <li>Emotional Quotient</li>
              <li>Career Matches & Discovery Report</li>
              <li>Interactive Activities</li>
              <li>1-on-1 Counselling</li>
              <li>Action Plan</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary upgrade_btn"><a href="{{url('/price')}}" class="upgrade_btn">Upgrade Now</a></button>
      </div>
    </div>
  </div>
</div>

        @endsection
        @section('scripts')
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js" integrity="sha512-42PE0rd+wZ2hNXftlM78BSehIGzezNeQuzihiBCvUEB3CVxHvsShF86wBWwQORNxNINlBPuq7rG4WWhNiTVHFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
<script>
      const swiper = new Swiper('.upgrade_swiper', {
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      });




    //   $(document).ready(function () {
    //     $('.picker').datepicker({
    //         minDate: 1,
    //         dateFormat: 'dd-mm-yy'
    //     });

    //     $('.timepicker').timepicker({
    //     minTime: '10:00am',
    //     maxTime: '06:00pm',
    //     step: 15, // 15 minutes
    //     disableTimeRanges: [
    //         ['12:00am', '09:15am'],
    //         ['06:15pm', '11:45pm']
    //     ],
    //     // showDuration: true
    //     });
    // });
</script>
@if ($sessionHas > 0)
@foreach ($allData as $key => $value)
<script>
              $(document).ready(function () {
        $('#picker<?=$key?>').datepicker({
            minDate: 1,
            dateFormat: 'dd-mm-yy'
        });

        $('#timepicker<?=$key?>').timepicker({
        minTime: '10:00am',
        maxTime: '06:00pm',
        step: 15, // 15 minutes
        disableTimeRanges: [
            ['12:00am', '09:15am'],
            ['06:15pm', '11:45pm']
        ],
        // showDuration: true
        });

        $('#picker<?=$key?><?=$value->id?>').datepicker({
            minDate: 1,
            dateFormat: 'dd-mm-yy'
        });

        $('#timepicker<?=$key?><?=$value->id?>').timepicker({
        minTime: '10:00am',
        maxTime: '06:00pm',
        step: 15, // 15 minutes
        disableTimeRanges: [
            ['12:00am', '09:15am'],
            ['06:15pm', '11:45pm']
        ],
        // showDuration: true
        });
    });
</script>

@endforeach
@endif

@if ($sessionHas == 0)
    <script>
        $("#sesionPopUp").modal('show');
    </script>
@endif

@if ($sessionHas > 0 && $percentage != 100)
    <script>
        swal({
                title: 'Profile Completion Alert!',
                text: 'Your profile is almost complete! To get the most out of your experience on FutureLift, we recommend finishing your profile. Completing your profile helps you connect better with others and discover relevant opportunities.',
                icon: 'warning',
                buttons: ["Cancel", "Go To Profile"],
                }).then(function(value) {
                if (value) {
                window.location.href = "<?=url('/user-profile')?>";
                }
            });
    </script>
@endif


<script>
    function popupModalClose(){
        $("#sesionPopUp").modal().hide();
        $(".modal-backdrop").addClass('d-none');
    }
</script>
@endsection
