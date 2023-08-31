@extends('admin.Dashboard.sidebar')
@section('title') Book Session Section @endsection
@section('content')
@if(request()->route('show') == 'list')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Book Session</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Book Session</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="display table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Schedule Date & Time</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Type</th>
                            <th>Payment Status</th>
                            <th>Remarks</th>
                            <th>Created Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sessionList as $key => $value)
                            @php
                                $getSession = App\Helpers::getSessionData($value->options);
                            @endphp
                            <tr class="{{($value->status == 'Complete')?'table-success':''}}">
                                <td>{{date('l jS F Y h:i A',strtotime($value->schedule_date_time))}}</td>
                                <td>{{$value->candidate_name}}</td>
                                <td>{{$value->candidate_email}}</td>
                                <td>{{$value->candidate_phone}}</td>
                                <td>{{$value->candidate_city}}</td>
                                <td>
                                    <p>{{$getSession->content}}</p>
                                    <small>Price : {{$getSession->price}}</small>
                                </td>
                                <td>{{$value->payment_status}}</td>
                                <td>{{($value->remarks)?$value->remarks:'N/A'}}</td>
                                <td>{{date('l jS F Y h:i A',strtotime($value->created_at))}}</td>
                                <td>{{$value->status}}</td>
                                <td style="width:5%;">
                                    @if ($value->status == 'Complete')
                                        <img src="{{asset('assets/images/done.png')}}" style="width:100%;">
                                    @else
                                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#doneModal{{$key}}">Mark Done</button>
                                    @endif
                                </td>
                            </tr>


                            <div class="modal popup_box" id="doneModal{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content ref_mdal_box">
                                        <div class="modal-header">
                                            <h1 class="modal-title season_header" id="exampleModalLabel">Session Update</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{url('/admin/session-complete')}}">
                                                @csrf
                                                <input type="hidden" value="{{$value->id}}" name="id" class="btn btn-primary">
                                                <div class="row">
                                                    <div class="col-md-12 form-group">
                                                        <lable>Status</lable>
                                                        <select class="form-control" disabled>
                                                            <option value="Complete" selected>Complete</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <lable>Remarks</lable>
                                                        <textarea name="remarks" required class="form-control" id="" cols="30" rows="10"></textarea>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <input type="submit" value="Submit" class="btn btn-primary">
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Type</th>
                            <th>Payment Status</th>
                            <th>Remarks</th>
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
    new DataTable('#example',{
        order: [[9, 'desc']],
        responsive: true
    });
    function markDone(id){
        if(confirm("Do you want to mark done this session?")){
            window.location.href = "{{url('admin/session-complete/')}}/"+id;
        }
    }
</script>
@endsection
