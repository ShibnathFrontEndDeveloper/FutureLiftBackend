@extends('admin.Dashboard.sidebar')
@section('title') Blog Section @endsection
@section('csss')
    <link rel="stylesheet" href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
@endsection
@section('content')
@if(request()->route('show') == 'list')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Blog</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('/admin/blog-section/add')}}" class="btn btn-primary float-right mb-3 btn-lg">Add Blog</a>
            </div>
            <div class="col-md-12">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blog as $key => $value)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td><a href="{{url('/blog-details/'.$value->slug)}}" target="_blank">{{$value->title}}</a></td>
                                <td>{{App\Helpers::getBlogCategoryIdByName($value->categoryId)}}</td>
                                <td><img src="{{asset('assets/blog_images/'.$value->image)}}" style="width:80px;" alt=""></td>
                                <td>
                                    <a href="{{url('admin/blog-section/edit/'.$value->id)}}"><i style="font-size:30px;" class="mdi mdi-pencil-box-outline"></i></a>
                                    <a href="javascript:void(0)" onclick="deleteConfirm('{{$value->id}}')"><i style="font-size:30px;" class="mdi mdi-delete-circle"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl No</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Image</th>
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
            <h3 class="page-title"> Blog</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Add</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/blogAdd')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="">Category</label>
                            <select name="category" id="" required class="form-control">
                                <option value="">--Select Category--</option>
                                @foreach ($blogCategory as $blogCategoryKey => $blogCategoryValue)
                                    <option value="{{$blogCategoryValue->id}}">{{$blogCategoryValue->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Blog Title</label>
                            <input type="text" name="title" id="" required class="form-control" value="{{old('title')}}">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Blog Image</label>
                            <input type="file" name="image" id="" required class="form-control">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Blog Tags</label>
                            <select class="form-control js-example-tags" name="tag[]" id="tag" required multiple="multiple">
                                @foreach ($tag as $tagKey => $tagValue)
                                    <option value="{{$tagValue->tag}}">{{$tagValue->tag}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Blog Content</label>
                            <textarea name="content" id="description" cols="30" rows="10" class="form-control">{{old('content')}}</textarea>
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
            <h3 class="page-title"> Blog</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Edit </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/blogEdit')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="editId" value="{{$blog->id}}">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="">Category</label>
                            <select name="category" id="" required class="form-control">
                                <option value="">--Select Category--</option>
                                @foreach ($blogCategory as $blogCategoryKey => $blogCategoryValue)
                                    <option value="{{$blogCategoryValue->id}}" {{($blogCategoryValue->id == $blog->categoryId)?'selected':''}}>{{$blogCategoryValue->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Blog Title</label>
                            <input type="text" name="title" id="" required class="form-control" value="{{$blog->title}}">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Blog Image</label>
                            <input type="file" name="image" id="" class="form-control">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Blog Tags</label>
                            <select class="form-control js-example-tags" name="tag[]" id="tag" required multiple="multiple">
                                @foreach ($tag as $tagKey => $tagValue)
                                    <option value="{{$tagValue->tag}}" {{(in_array($tagValue->tag,$blogTag))?'selected':''}}>{{$tagValue->tag}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Blog Content</label>
                            <textarea name="content" id="description" cols="30" rows="10" class="form-control">{{$blog->content}}</textarea>
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
            window.location.href="{{url('/admin/blogDelete')}}/"+id;
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

    $(".js-example-tags").select2({
            tags: true
        });
</script>
@endsection
