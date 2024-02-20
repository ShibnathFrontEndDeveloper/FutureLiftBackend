@extends('admin.Dashboard.sidebar')
@section('title') My Holiday @endsection
@section('content')
@if(request()->route('show') == 'list')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> My Holiday</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Holiday</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('/admin/my-holiday/add')}}" class="btn btn-primary float-right mb-3 btn-lg">Add My Holiday</a>
            </div>
            <div class="col-md-12">
                <table id="example" class="display table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $key => $value)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{date('d-m-Y',strtotime($value->start_date))}}</td>
                                <td>{{date('d-m-Y',strtotime($value->end_date))}}</td>
                                <td>{{$value->description}}</td>
                                <td>
                                    <a href="{{url('admin/my-holiday/edit/'.$value->id)}}"><i style="font-size:30px;" class="mdi mdi-pencil-box-outline"></i></a>
                                    <a href="javascript:void(0)" onclick="deleteConfirm('{{$value->id}}')"><i style="font-size:30px;" class="mdi mdi-delete-circle"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl No</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endif
@if(request()->route('show') == 'add')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> My Holiday</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Holiday Add</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/couselorHolidayAdd')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Start Date</label>
                            <input name="start_date" type="text" id="picker" class="form-control" required value="{{old('start_date')}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">End Date</label>
                            <input name="end_date" type="text" id="picker1" class="form-control" required value="{{old('end_date')}}">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="" class="form-control" cols="30" rows="10">{{old('description')}}</textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
@if(request()->route('show') == 'edit')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> My Holiday</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Holiday Edit</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/couselorHolidayEdit')}}" method="post">
                    @csrf
                    <input type="hidden" name="editId" value="{{$data->id}}">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Start Date</label>
                            <input name="start_date" type="text" id="picker" class="form-control" required value="{{date('d-m-Y',strtotime($data->start_date))}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">End Date</label>
                            <input name="end_date" type="text" id="picker1" class="form-control" required value="{{date('d-m-Y',strtotime($data->end_date))}}">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="" class="form-control" cols="30" rows="10">{{$data->description}}</textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
@endsection
@section('scripts')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    new DataTable('#example',{
        responsive: true
    });
    function deleteConfirm(id){
        if(confirm('Do you want to delete?')){
            window.location.href="{{url('/admin/myHolidayDelete')}}/"+id;
        }
    }
    CKEDITOR.replace( 'answer');
    $('#picker').datepicker({
        minDate: 0,
        dateFormat: 'dd-mm-yy'
    });
    $('#picker1').datepicker({
        minDate: 0,
        dateFormat: 'dd-mm-yy'
    });
</script>
@endsection
