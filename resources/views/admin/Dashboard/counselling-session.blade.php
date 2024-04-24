@extends('admin.Dashboard.sidebar')
@section('title') Counselling Session Section @endsection
@section('content')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
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
                            <th>Sl No</th>
                            <th>Schedule Date & Time</th>
                            <th>User Name</th>
                            @if(App\Helpers::userIdWiseRoleName(Auth::guard('admin')->user()->id) != 'Counselor')
                            <th>User Contacts</th>
                            @endif
                            <th>Session Type</th>
                            <th>Language</th>
                            @if(App\Helpers::userIdWiseRoleName(Auth::guard('admin')->user()->id) != 'Counselor')
                            <th>Assign Counselor</th>
                            @endif
                            <th>Short Ans</th>
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
                                <td>{{$key + 1}}</td>
                                <td>{{($value->session_date_time)?date('l jS F Y h:i A',strtotime($value->session_date_time)):'N/A'}}</td>
                                @if(App\Helpers::userIdWiseRoleName(Auth::guard('admin')->user()->id) != 'Counselor')
                                <td class="txt-hef"><a href="{{url('admin/user-details/details/'.$value->userId)}}" target="_blank">{{$getUser->name}}</a></td>
                                @else
                                <td>{{$getUser->name}}</td>
                                @endif
                                @if(App\Helpers::userIdWiseRoleName(Auth::guard('admin')->user()->id) != 'Counselor')
                                <td>
                                    Email : {{$getUser->email}}
                                    Phone : {{$getUser->phone}}
                                </td>
                                @endif
                                <td>
                                    <p>{{$getSession->plan_name}}</p>
                                </td>
                                <td>
                                    <p>{{App\Helpers::getIdByLanguageName($value->session_language)}}</p>
                                </td>
                                @if(App\Helpers::userIdWiseRoleName(Auth::guard('admin')->user()->id) != 'Counselor')
                                <td>{{($getCounUser)?$getCounUser->name:'N/A'}}
                                    <span class="d-none">{{($getCounUser)?$getCounUser->email:'N/A'}}</span>
                                </td>
                                @endif
                                <td>
                                    @if ($value->short_question !='')
                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#viewShortQModal{{$key}}">View</button>
                                    @endif
                                </td>
                                <td>{{date('l jS F Y h:i A',strtotime($value->created_at))}}</td>
                                <td>{{$value->status}}</td>
                                <td style="width:5%;">
                                    @if ($value->status == 'Processing')
                                        @if ($value->assign_user == '')
                                        <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#assignCounselorModal{{$key}}">Assign Counselor</button>
                                        @endif
                                        @if ($value->counselor_query != '')
                                            @if ($value->counselor_query == 'Accept')
                                                <a href="{{url('admin/user-details/details/'.$value->userId)}}" class="btn btn-light mt-2" target="_blank"><i class="mdi mdi-eye"></i> View Details</a>
                                                @if (date('Y-m-d H:i:s') > $value->session_date_time)
                                                    <!-- <button class="btn btn-sm btn-primary" onclick="markDone('{{$value->id}}','{{$value->userId}}','{{$value->package_id}}')">Mark Done</button> -->
                                                    <button class="btn btn-sm btn-primary mt-2" data-toggle="modal" data-target="#markdoneModal{{$key}}">Mark Done</button>
                                                @endif
                                            @else
                                                <h3 class="text-danger"><b>Rejected</b></h3>
                                            @endif
                                        @else
                                            <button class="btn btn-lg btn-success" onclick="counselorQuery('Accept','{{$value->id}}')">Accept</button>
                                            <button class="btn btn-lg btn-danger mt-2" onclick="counselorQuery('Reject','{{$value->id}}')">Reject</button>
                                        @endif
                                    @elseif ($value->status == 'Completed')
                                        <!-- <p class="text-success"><b>Session Completed</b></p> -->
                                        <img src="{{asset('assets/images/done.png')}}" style="width:60%;">
                                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#viewReportModal{{$key}}">View Report</button>
                                        <a href="{{url('admin/user-details/details/'.$value->userId)}}" class="btn btn-light mt-2" target="_blank"><i class="mdi mdi-eye"></i> View Details</a>
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
                                            <form action="{{url('admin/mark-done')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$value->id}}">
                                                <input type="hidden" name="userId" value="{{$value->userId}}">
                                                <input type="hidden" name="package_id" value="{{$value->package_id}}">
                                                <div class="row">
                                                    <div class="col-md-12 form-group">
                                                        <textarea name="counselling_report" id="counselling_report{{$key}}" cols="30" rows="10"></textarea>
                                                        <script>
                                                            CKEDITOR.replace( 'counselling_report{{$key}}');
                                                        </script>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <label for="">Upload Supporting Document <small class="text-danger">(Upload only pdf file)</small></label>
                                                        <input type="file" onchange="validateFileUpload(this)" class="form-control" name="supporting_document" id="supporting_document">
                                                        <small class="text-danger">(file size should be less than 2mb)</small>
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
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                {!!$value->counselling_report!!}
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    @if ($value->counselling_report_document)
                                                        <embed src="{{asset('/assets/support_documents/'.$value->counselling_report_document)}}" width="100%" height="400" alt="pdf" id="marksheetEm">
                                                    @endif
                                                </div>
                                            </div>

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
                                                                <option value="{{$counselorListValue->id}}" {{(App\Helpers::getCounselorHolidayHas($counselorListValue->id,$value->session_date_time))?'disabled':''}}>{{$counselorListValue->name}}</option>
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



                            <div class="modal" id="viewShortQModal{{$key}}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="background-color:#ffffff;">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                {{$value->short_question}}
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl No</th>
                            <th>Schedule Date & Time</th>
                            <th>User Name</th>
                            @if(App\Helpers::userIdWiseRoleName(Auth::guard('admin')->user()->id) != 'Counselor')
                            <th>User Contacts</th>
                            @endif
                            <th>Session Type</th>
                            <th>Language</th>
                            @if(App\Helpers::userIdWiseRoleName(Auth::guard('admin')->user()->id) != 'Counselor')
                            <th>Assign Counselor</th>
                            @endif
                            <th>Short Ans</th>
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
<script src="{{asset('js/educationform.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
            // new DataTable('#example',{
            //     order: [[0, 'asc']],
            //     responsive: true,
            //     // search: {
            //     //     "search": "parbirdas@yopmail.com"
            //     // }
            // });
        // CKEDITOR.replace( 'counselling_report');

    });
</script>
@if (request()->get('email') && request()->get('email') !='')
    <script>
        new DataTable('#example',{
                order: [[0, 'asc']],
                responsive: true,
                search: {
                    "search": "<?=request()->get('email')?>"
                }
            });
    </script>
@else
    <script>
        new DataTable('#example',{
                order: [[0, 'asc']],
                responsive: true,
            });
    </script>
@endif

<script>


    function markDone(id,userId,package_id){
        if(confirm("Do you want to mark done this session?")){
            window.location.href = "{{url('admin/mark-done/')}}/"+id+"/"+userId+"/"+package_id;
        }
    }

    function counselorQuery(type,id){
        const url = "<?=url('admin/counselor-session-accept')?>?type="+type+"&id="+id;
        swal({
            title: 'Are you sure?',
            text: type+' this session?',
            icon: 'warning',
            buttons: ["Cancel", type],
            }).then(function(value) {
            if (value) {
            window.location.href = url;
            }
        });
    }

</script>
@endsection
