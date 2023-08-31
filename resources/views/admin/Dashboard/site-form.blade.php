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
                <table id="example" class="display table-striped" style="width:100%">
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
                                @if (strlen($queryValue->message) > 20)
                                <td>{!! html_entity_decode(App\Helpers::readMoreHelper($queryValue->message,100,'readmoreModal'.$queryKey))!!}</td>
                                @else
                                <td>{{$queryValue->message}}</td>
                                <td>
                                    <a href="javascript:void(0)" onclick="deleteConfirmQuery('{{$queryValue->id}}')"><i style="font-size:30px;" class="mdi mdi-delete-circle"></i></a>
                                </td>
                                @endif
                            </tr>

                            <div class="modal popup_box" id="readmoreModal{{$queryKey}}" tabindex="-1" aria-labelledby="readmoreModal{{$queryKey}}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content ref_mdal_box">
                                        <div class="modal-header">
                                            <h1 class="modal-title season_header">
                                                Comment
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{$queryValue->message}}
                                        </div>
                                    </div>
                                </div>
                            </div>


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
                <table id="example" class="display table-striped" style="width:100%">
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
                                @if (strlen($helpValue->comment) > 20)
                                <td>{!! html_entity_decode(App\Helpers::readMoreHelper($helpValue->comment,100,'readmoreModal'.$helpKey))!!}
                                </td>
                                @else
                                <td>{{$helpValue->comment}}</td>
                                @endif
                                <td>
                                    <a href="javascript:void(0)" onclick="deleteConfirmHelp('{{$helpValue->id}}')"><i style="font-size:30px;" class="mdi mdi-delete-circle"></i></a>
                                </td>
                            </tr>


                            <div class="modal popup_box" id="readmoreModal{{$helpKey}}" tabindex="-1" aria-labelledby="readmoreModal{{$helpKey}}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content ref_mdal_box">
                                        <div class="modal-header">
                                            <h1 class="modal-title season_header">
                                                Comment
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{$helpValue->comment}}
                                        </div>
                                    </div>
                                </div>
                            </div>

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
    new DataTable('#example',{
        responsive: true
    });
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
