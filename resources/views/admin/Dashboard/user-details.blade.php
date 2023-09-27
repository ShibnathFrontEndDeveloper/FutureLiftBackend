@extends('admin.Dashboard.sidebar')
@section('title') User Details Section @endsection
@section('content')
@if(request()->route('show') == 'details')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> User Details</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Details</li>
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
            <div class="col-md-6 form-group">
                @if ($userSubscriptionCount > 0)
                    @php
                        $getSession = App\Helpers::getCounsellingData($userSubscriptionData->package_id);
                    @endphp
                    <h4>Current Package Subscribe : <b>{{$getSession->plan_name}}</b></h4>
                    <small>Subscribed at : {{date('l jS F Y h:i A',strtotime($userSubscriptionData->created_at))}}</small>
                @endif

            </div>
            @php
                $recent_subject = [];
                $recent_score = [];
                $previous_subject = [];
                $previous_score = [];
                if($userInfo->recent_subject){
                    $recent_subject = json_decode($userInfo->recent_subject,true);
                }
                if($userInfo->recent_score){
                    $recent_score = json_decode($userInfo->recent_score,true);
                }
                if($userInfo->previous_subject){
                    $previous_subject = json_decode($userInfo->previous_subject,true);
                }
                if($userInfo->previous_score){
                    $previous_score = json_decode($userInfo->previous_score,true);
                }

            @endphp
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
                        <p>Additional Email : <b>{{$userInfo->additional_email}}</b></p>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>Phone : <b>+91 {{$user->phone}}</b></p>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>State : <b>{{$user->state}}</b></p>
                    </div>
                    <!-- <div class="col-md-3 form-group">
                        <p>Father Name : <b>{{$userInfo->father_name}}</b></p>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>Mother Name : <b>{{$userInfo->mother_name}}</b></p>
                    </div> -->
                    <div class="col-md-3 form-group">
                        <p>Date Of Birth : <b>{{$userInfo->dob}}</b></p>
                    </div>
                    <!-- <div class="col-md-3 form-group">
                        <p>City : <b>{{$userInfo->city}}</b></p>
                    </div> -->
                    <div class="col-md-3 form-group">
                        <p>Gender : <b>{{$userInfo->gender}}</b></p>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>Joined : <b>{{date('l jS F Y h:i A',strtotime($user->created_at))}}</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <div class="row">
                    <div class="col-md-12 form-group bg-secondary">
                        <h3>Education Details</h3>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>School : <b>{{$userInfo->college}}</b></p>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>Current Class : <b>{{$userInfo->university}}</b></p>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>Board : <b>{{$userInfo->course}}</b></p>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>Year of Passing Current Class : <b>{{$userInfo->year_of_passing}}</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <div class="row">
                    <div class="col-md-12 form-group bg-secondary">
                        <h3>Family Details</h3>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>Father's (or Guardian's) Name : <b>{{$userInfo->father_guardian_name}}</b></p>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>Mother's (or Guardian's) Name : <b>{{$userInfo->mother_guardian_name}}</b></p>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>Father's (or Guardian's) Profession : <b>{{$userInfo->father_profession}}</b></p>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>Mother's (or Guardian's) Profession : <b>{{$userInfo->mother_profession}}</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <div class="row">
                    <div class="col-md-12 form-group bg-secondary">
                        <h3>Most Recent Academic Scores</h3>
                    </div>

                    <div class="col-md-12 form-group">
                        <table class="table table-design-responsive">
                            <thead>
                                <th>Subject</th>
                                <th>CGPA / %age</th>
                            </thead>
                            <tbody>
                                @if (count($recent_subject) > 0)
                                    @foreach ($recent_subject as $rSubjectKey => $rSubjectValue)
                                    <tr>
                                        <td>{{$rSubjectValue}}</td>
                                        <td>{{(isset($recent_score[$rSubjectKey]))?$recent_score[$rSubjectKey]:''}}</td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    @if ($userInfo->recent_marksheet)
                    <div class="col-md-12 form-group">
                        <h4>Recent Academic Marksheet</h4>
                        <embed src="{{asset('/assets/marksheets/'.$userInfo->recent_marksheet)}}" width="100%" height="400" alt="pdf" id="marksheetEm">
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-12 form-group">
                <div class="row">
                    <div class="col-md-12 form-group bg-secondary">
                        <h3>Previous Year Academic Scores</h3>
                    </div>

                    <div class="col-md-12 form-group">
                        <table class="table table-design-responsive">
                            <thead>
                                <th>Subject</th>
                                <th>CGPA / %age</th>
                            </thead>
                            <tbody>
                                @if (count($previous_subject) > 0)
                                    @foreach ($previous_subject as $pSubjectKey => $pSubjectValue)
                                    <tr>
                                        <td>{{$pSubjectValue}}</td>
                                        <td>{{(isset($previous_score[$pSubjectKey]))?$previous_score[$pSubjectKey]:''}}</td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    @if ($userInfo->previous_marksheet)
                    <div class="col-md-12 form-group">
                        <h4>Previous Academic Marksheet</h4>
                        <embed src="{{asset('/assets/marksheets/'.$userInfo->previous_marksheet)}}" width="100%" height="400" alt="pdf" id="marksheetEm">
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-12 form-group">
                <div class="row">
                    <div class="col-md-12 form-group bg-secondary">
                        <h3>Current Session History</h3>
                    </div>

                    <div class="col-md-12 form-group">
                        <table class="table table-design-responsive">
                            <thead>
                                <th>Session Name</th>
                                <th>Session Date</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                @if ($userSessionHistoryCount > 0)
                                    @foreach ($userSessionHistoryData as $userSessionHistoryDataKey => $userSessionHistoryDataValue)
                                    @if ($userSessionHistoryDataValue->status == 'Completed')
                                        <tr class="table-success">
                                    @elseif ($userSessionHistoryDataValue->status == 'Processing')
                                        <tr class="table-warning">
                                    @else
                                        <tr>
                                    @endif
                                        <td>Session {{$userSessionHistoryDataKey + 1}}</td>
                                        <td>{{($userSessionHistoryDataValue->session_date_time)?date('l jS F Y h:i A',strtotime($userSessionHistoryDataValue->session_date_time)):'N/A'}}</td>
                                        <td>{{$userSessionHistoryDataValue->status}}</td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
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
</script>
@endsection
