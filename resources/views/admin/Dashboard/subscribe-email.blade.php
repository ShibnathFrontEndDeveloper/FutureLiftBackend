@extends('admin.Dashboard.sidebar')
@section('title') Subscribers Email Section @endsection
@section('content')
@if(request()->route('show') == 'list')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Subscribers Email</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Subscribers Email</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$value->email}}</td>
                                <td>
                                    <a href="javascript:void(0)" onclick="deleteConfirm('{{$value->id}}')"><i style="font-size:30px;" class="mdi mdi-delete-circle"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl No</th>
                            <th>Email</th>
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
    function deleteConfirm(id){
        if(confirm('Do you want to delete?')){
            window.location.href="{{url('/admin/subscribeEmailDelete')}}/"+id;
        }
    }
</script>
@endsection
