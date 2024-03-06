@extends('admin.Dashboard.sidebar')
@section('title') Help FAQ Category Section @endsection
@section('content')
@if(request()->route('show') == 'list')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Help FAQ Category</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Help FAQ Category</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('/admin/help-faq-category/add')}}" class="btn btn-primary float-right mb-3 btn-lg">Add Help FAQ Category</a>
            </div>
            <div class="col-md-12">
                <table id="example" class="display table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $key => $value)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$value->name}}</td>
                                <td>
                                    <a href="{{url('admin/help-faq-category/edit/'.$value->id)}}"><i style="font-size:30px;" class="mdi mdi-pencil-box-outline"></i></a>
                                    <a href="javascript:void(0)" onclick="deleteConfirm('{{$value->id}}')"><i style="font-size:30px;" class="mdi mdi-delete-circle"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
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
            <h3 class="page-title"> Help FAQ Category</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Help FAQ Category Add</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/helpFaqCategoryAdd')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Section</label>
                            <select name="section" id="section" class="form-control" required>
                                <option value="user">User Section</option>
                                <option value="admin">Admin Section</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Category Name</label>
                            <input name="name" type="text" class="form-control" required value="{{old('name')}}">
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
            <h3 class="page-title"> Help FAQ Category</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Help FAQ Category Edit</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/helpFaqCategoryEdit')}}" method="post">
                    @csrf
                    <input type="hidden" name="editId" value="{{$data->id}}">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Section</label>
                            <select name="section" id="section" class="form-control" required>
                                <option value="user" {{($data->section == 'user')?'selected':''}}>User Section</option>
                                <option value="admin" {{($data->section == 'admin')?'selected':''}}>Admin Section</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Category Name</label>
                            <input name="name" type="text" class="form-control" required value="{{$data->name}}">
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
            window.location.href="{{url('/admin/helpFaqCategoryDelete')}}/"+id;
        }
    }
    CKEDITOR.replace( 'answer');
</script>
@endsection
