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
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Schedule Date & Time</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Phone</th>
                            <th>Session Type</th>
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
                                <td>{{date('l jS F Y h:i A',strtotime($value->created_at))}}</td>
                                <td>{{$value->status}}</td>
                                <td style="width:5%;">
                                    @if ($value->status == 'Processing')
                                        @if (date('Y-m-d H:i:s') > $value->session_date_time)
                                            <button class="btn btn-sm btn-primary" onclick="markDone('{{$value->id}}','{{$value->userId}}','{{$value->package_id}}')">Mark Done</button>
                                        @endif
                                    @elseif ($value->status == 'Completed')
                                        <!-- <p class="text-success"><b>Session Completed</b></p> -->
                                        <img src="{{asset('assets/images/done.png')}}" style="width:100%;">
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Schedule Date & Time</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Phone</th>
                            <th>Session Type</th>
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
<script>
    new DataTable('#example');
    function markDone(id,userId,package_id){
        if(confirm("Do you want to mark done this session?")){
            window.location.href = "{{url('admin/mark-done/')}}/"+id+"/"+userId+"/"+package_id;
        }
    }
</script>
@endsection
