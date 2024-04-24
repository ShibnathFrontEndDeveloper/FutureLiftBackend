@extends('admin.Dashboard.sidebar')
@section('title') User Details of {{$user->name}} @endsection
@section('content')
@if(request()->route('show') == 'details')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> User Details of {{$user->name}}</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Details of {{$user->name}}</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                @if ($user->profile_image)
                    <img src="{{asset('assets/user_images/'.$user->profile_image)}}" style="width:120px;">
                @else
                    <img src="{{asset('/assets/images/no-user.png')}}" style="width:120px;">
                @endif
            </div>
            <div class="col-md-12 form-group">
                <div class="row">
                    <div class="col-md-12 form-group bg-secondary">
                        <h3>Personal Information</h3>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>Name : <b>{{$user->name}}</b></p>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>Email : <b>{{$user->email}}</b></p>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>Phone : <b>+91 {{$user->phone}}</b></p>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>Joined : <b>{{date('l jS F Y h:i A',strtotime($user->created_at))}}</b></p>
                    </div>
                    <div class="col-md-12 form-group">
                        <p>Brief Professional Biography : <b>{{$userInfo->bio}}</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <div class="row">
                    <div class="col-md-12 form-group bg-secondary">
                        <h3>Education Details</h3>
                    </div>
                    <div class="col-md-12 form-group">
                        <div class="row">
                            <div class="col-md-12 form-group lib-admin-design">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <table id="careerOpTable" class="display table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Quailification Type</th>
                                                    <th>Institute</th>
                                                    <th>Passed Year</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if (isset($userInfo->qualification))
                                                @foreach (json_decode($userInfo->qualification,true) as $qualificationKey => $qualificationValue)
                                                    <tr>
                                                        <td>{{$qualificationValue['qualification_type']}}</td>
                                                        <td>{{$qualificationValue['institute']}}</td>
                                                        <td>{{$qualificationValue['passed_year']}}</td>

                                                    </tr>
                                                @endforeach
                                            @else

                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <div class="row">
                    <div class="col-md-12 form-group bg-secondary">
                        <h3>Certifications Details</h3>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>{{(isset($userInfo->certificate))?$userInfo->certificate:'N/A'}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <div class="row">
                    <div class="col-md-12 form-group bg-secondary">
                        <h3>Areas of Expertise or Specialization Details</h3>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>{{(isset($userInfo->specialization))?$userInfo->specialization:'N/A'}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <div class="row">
                    <div class="col-md-12 form-group bg-secondary">
                        <h3>Holiday List</h3>
                    </div>

                    <div class="col-md-12 form-group">
                        <table id="holiday_talbe" class="display table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($holiday as $holidaykey => $holidayvalue)
                                    <tr>
                                        <td>{{$holidaykey + 1}}</td>
                                        <td>{{date('d-m-Y',strtotime($holidayvalue->start_date))}}</td>
                                        <td>{{date('d-m-Y',strtotime($holidayvalue->end_date))}}</td>
                                        <td>{{$holidayvalue->description}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Description</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <div class="row">
                    <div class="col-md-12 form-group bg-secondary">
                        <h3>Earning History</h3>
                    </div>

                    <div class="col-md-12 form-group">
                        <table id="earning_history" class="display table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Amount</th>
                                    <th>Session Scheduled Date</th>
                                    <th>User Name</th>
                                    <th>Session Completed Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($earning as $earningkey => $earningvalue)
                                    @php
                                        $getUser = App\Helpers::getUserDetails($earningvalue->userId);
                                    @endphp
                                    <tr>
                                        <td>{{$earningkey + 1}}</td>
                                        <td>{{$earningvalue->amount}}/-</td>
                                        <td>{{date('d/m/Y',strtotime($earningvalue->session_date_time))}}</td>
                                        <td>{{$getUser->name}}</td>
                                        <td>{{date('d/m/Y',strtotime($earningvalue->session_completed_date))}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Amount</th>
                                    <th>Session Scheduled Date</th>
                                    <th>User Name</th>
                                    <th>Session Completed Date</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <div class="row">
                    <div class="col-md-12 form-group bg-secondary">
                        <h3>All Session History</h3>
                    </div>

                    <div class="col-md-12 form-group">
                        <a href="{{url('/admin/counselling-session/list?email='.$user->email)}}" target="_blank" class="btn btn-primary">View Session History</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection
@section('scripts')
<script>
    new DataTable('#example');
    new DataTable('#holiday_talbe',{
        responsive: true,
        searching: false,
        paging: true,
        info: false
    });
    new DataTable('#earning_history',{
        responsive: true,
        searching: false,
        paging: true,
        info: false
    });
    new DataTable('#careerOpTable',{
        responsive: true,
        searching: false,
        paging: true,
        info: false
    });
</script>
@endsection
