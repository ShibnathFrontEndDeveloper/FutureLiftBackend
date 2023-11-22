@extends('admin.Dashboard.sidebar')
@section('title') Counselling Session Section @endsection
@section('content')
@if(request()->route('show') == 'list')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Counselling Session</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Counselling Session</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="display table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Schedule Date & Time</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Phone</th>
                            <th>Session Type</th>
                            <th>Assign Counselor</th>
                            <th>Created Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sessionList as $key => $value)
                            @php
                                $getSession = App\Helpers::getCounsellingData($value->package_id);
                                $getUser = App\Helpers::getUserDetails($value->userId);
                                $getCounUser = App\Helpers::getUserDetails($value->assign_user);
                            @endphp
                            @if ($value->status == 'Completed')
                                <tr class="table-success">
                            @elseif ($value->status == 'Processing')
                                <tr class="table-warning">
                            @else
                                <tr>
                            @endif
                                <td>{{($value->session_date_time)?date('l jS F Y h:i A',strtotime($value->session_date_time)):'N/A'}}</td>
                                <td class="txt-hef"><a href="{{url('admin/user-details/details/'.$value->userId)}}" target="_blank">{{$getUser->name}}</a></td>
                                <td>{{$getUser->email}}</td>
                                <td>{{$getUser->phone}}</td>
                                <td>
                                    <p>{{$getSession->plan_name}}</p>
                                </td>
                                <td>{{($getCounUser)?$getCounUser->name:'N/A'}}</td>
                                <td>{{date('l jS F Y h:i A',strtotime($value->created_at))}}</td>
                                <td>{{$value->status}}</td>
                                <td style="width:5%;">
                                    @if ($value->status == 'Processing')
                                        @if ($value->assign_user == '')
                                        <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#assignCounselorModal{{$key}}">Assign Counselor</button>
                                        @endif
                                        @if (date('Y-m-d H:i:s') > $value->session_date_time)
                                            <!-- <button class="btn btn-sm btn-primary" onclick="markDone('{{$value->id}}','{{$value->userId}}','{{$value->package_id}}')">Mark Done</button> -->
                                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#markdoneModal{{$key}}">Mark Done</button>
                                            @endif
                                    @elseif ($value->status == 'Completed')
                                        <!-- <p class="text-success"><b>Session Completed</b></p> -->
                                        <img src="{{asset('assets/images/done.png')}}" style="width:100%;">
                                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#viewReportModal{{$key}}">View Report</button>
                                    @endif

                                </td>
                            </tr>


                            <div class="modal" id="markdoneModal{{$key}}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="background-color:#ffffff;">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Counselling Session Status Change</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{url('admin/mark-done')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$value->id}}">
                                                <input type="hidden" name="userId" value="{{$value->userId}}">
                                                <input type="hidden" name="package_id" value="{{$value->package_id}}">
                                                <div class="row">
                                                    <div class="col-md-12 form-group">
                                                        <textarea name="counselling_report" id="counselling_report" cols="30" rows="10"></textarea>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <button class="btn btn-primary float-right" type="submit">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal" id="viewReportModal{{$key}}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="background-color:#ffffff;">
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

                            <div class="modal" id="assignCounselorModal{{$key}}">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="background-color:#ffffff;">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Assign Counselor</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{url('admin/assign-counselor-session')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$value->id}}">
                                                <input type="hidden" name="userId" value="{{$value->userId}}">
                                                <input type="hidden" name="package_id" value="{{$value->package_id}}">
                                                <div class="row">
                                                    <div class="col-md-12 form-group">
                                                        <select name="assign_user" id="assign_user" class="form-control js-example-basic-single">
                                                            <option value="">Select Counselor</option>
                                                            @foreach ($counselorList as $counselorListKey => $counselorListValue)
                                                                <option value="{{$counselorListValue->id}}">{{$counselorListValue->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <button class="btn btn-primary float-right" type="submit">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Schedule Date & Time</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Phone</th>
                            <th>Session Type</th>
                            <th>Assign Counselor</th>
                            <th>Created Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endif
@endsection
@section('scripts')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
            new DataTable('#example',{
                order: [[7, 'desc']],
                responsive: true
            });
        CKEDITOR.replace( 'counselling_report');

    });

    function markDone(id,userId,package_id){
        if(confirm("Do you want to mark done this session?")){
            window.location.href = "{{url('admin/mark-done/')}}/"+id+"/"+userId+"/"+package_id;
        }
    }

</script>
@endsection
