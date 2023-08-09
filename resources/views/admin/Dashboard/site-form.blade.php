@extends('admin.Dashboard.sidebar')
@section('title') Form Section @endsection
@section('content')
@if(request()->route('show') == 'queryForm')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Query Form</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Query Form</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($query as $queryKey => $queryValue)
                            <tr>
                                <td>{{$queryKey + 1}}</td>
                                <td>{{$queryValue->name}}</td>
                                <td>{{$queryValue->email}}</td>
                                <td>{{$queryValue->message}}</td>
                                <td>
                                    <a href="javascript:void(0)" onclick="deleteConfirmQuery('{{$queryValue->id}}')"><i style="font-size:30px;" class="mdi mdi-delete-circle"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endif
@if(request()->route('show') == 'helpForm')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Help Form</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Help Form</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Course</th>
                            <th>Comment</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($help as $helpKey => $helpValue)
                            <tr>
                                <td>{{$helpKey + 1}}</td>
                                <td>{{$helpValue->name}}</td>
                                <td>{{$helpValue->email}}</td>
                                <td>{{$helpValue->phone_number}}</td>
                                <td>{{$helpValue->course_type}}</td>
                                <td>{{$helpValue->comment}}</td>
                                <td>
                                    <a href="javascript:void(0)" onclick="deleteConfirmHelp('{{$helpValue->id}}')"><i style="font-size:30px;" class="mdi mdi-delete-circle"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Course</th>
                            <th>Comment</th>
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
    function deleteConfirmQuery(id){
        if(confirm('Do you want to delete?')){
            window.location.href="{{url('/admin/deleteQueryForm')}}/"+id;
        }
    }
    function deleteConfirmHelp(id){
        if(confirm('Do you want to delete?')){
            window.location.href="{{url('/admin/deleteHelpForm')}}/"+id;
        }
    }
</script>
@endsection
