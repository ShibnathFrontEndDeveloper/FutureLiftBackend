@extends('admin.Dashboard.sidebar')
@section('title') Subscription Package Section @endsection
@section('content')
@if(request()->route('show') == 'list')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Subscription Package</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Subscription Package</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('/admin/subscription-package/add')}}" class="btn btn-primary float-right mb-3 btn-lg">Add Subscription Package</a>
            </div>
            <div class="col-md-12">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Plan Name</th>
                            <th>Plan Price</th>
                            <th>Session Count</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($package as $packageKey => $packageValue)
                            <tr>
                                <td>{{$packageKey + 1}}</td>
                                <td>{{$packageValue->plan_name}}</td>
                                <td>{{$packageValue->plan_price}}</td>
                                <td>{{$packageValue->session_count}}</td>
                                <td>
                                    <a href="{{url('admin/subscription-package/edit/'.$packageValue->id)}}"><i style="font-size:30px;" class="mdi mdi-pencil-box-outline"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl No</th>
                            <th>Plan Name</th>
                            <th>Plan Price</th>
                            <th>Session Count</th>
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
            <h3 class="page-title"> Subscription Package</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Subscription Package Add</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/subscriptionPackageAdd')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Plan Name</label>
                            <input type="text" name="plan_name" id="" required class="form-control" value="{{old('plan_name')}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Session Price</label>
                            <input type="number" name="plan_price" id="" min="0" required class="form-control" value="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Session Count</label>
                            <input type="number" name="session_count" id="" min="0" max="6" required class="form-control" value="0">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>

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
            <h3 class="page-title"> Subscription Package</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Subscription Package Edit</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/subscriptionPackageEdit')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="editId" value="{{$package->id}}">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Plan Name</label>
                            <input type="text" name="plan_name" id="" required class="form-control" value="{{$package->plan_name}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Session Price</label>
                            <input type="number" name="plan_price" id="" min="0" required class="form-control" value="{{$package->plan_price}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Session Count</label>
                            <input type="number" name="session_count" id="" min="0" max="6" required class="form-control" value="{{$package->session_count}}">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" required class="form-control">{{$package->description}}</textarea>

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
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    new DataTable('#example');
    function deleteConfirm(id){
        if(confirm('Do you want to delete?')){
            window.location.href="{{url('/admin/testimonialDelete')}}/"+id;
        }
    }

    tinymce.init({
        selector: 'textarea#description',
        height: 500,
        valid_elements : '*[*]',
        init_instance_callback : function(editor) {
            var freeTiny = document.querySelector('.tox .tox-notification--in');
            freeTiny.style.display = 'none';
        },
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | blocks | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });
</script>
@endsection
