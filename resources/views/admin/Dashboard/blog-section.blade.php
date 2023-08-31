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
                <table id="example" class="display table-striped" style="width:100%">
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
                            <label for="">Blog Image <small class="text-danger">(image maximum resolution 570 x 300 and minimum resolution 370 x 260)</small></label>
                            <input type="file" name="image" id="" onchange="checkImageResolution(this);" required class="form-control">
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
                            <label for="">Blog Image <small class="text-danger">(image maximum resolution 570 x 300 and minimum resolution 370 x 260)</small></label>
                            <input type="file" name="image" id="" accept="image/*" onchange="checkImageResolution(this)" class="form-control">
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
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script> -->
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
    new DataTable('#example',{
        responsive: true
    });
    function deleteConfirm(id){
        if(confirm('Do you want to delete?')){
            window.location.href="{{url('/admin/blogDelete')}}/"+id;
        }
    }
    // tinymce.init({
    //     selector: 'textarea#description',
    //     height: 500,
    //     valid_elements : '*[*]',
    //     init_instance_callback : function(editor) {
    //         var freeTiny = document.querySelector('.tox .tox-notification--in');
    //         freeTiny.style.display = 'none';
    //     },
    //     plugins: [
    //         'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
    //         'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
    //         'insertdatetime', 'media', 'table', 'help', 'wordcount'
    //     ],
    //     toolbar: 'undo redo | blocks | ' +
    //     'bold italic backcolor | alignleft aligncenter ' +
    //     'alignright alignjustify | bullist numlist outdent indent | ' +
    //     'removeformat | help',
    //     content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    // });

    // ClassicEditor
    //     .create( document.querySelector( '#description' ),{
    //         ckfinder: {
    //             uploadUrl: '{{route('ckeditor.upload').'?_token='.csrf_token()}}',
    //         }

    //     })
    //     .catch( error => {

    //     } );

    CKEDITOR.replace( 'description', {
        filebrowserUploadUrl: '{{route('ckeditor.upload').'?_token='.csrf_token()}}'
    });





    $(".js-example-tags").select2({
            tags: true
        });
        var img = new Image();

        function checkImageResolution(input) {
            var file = input.files[0];
            console.log(file);
            img.src = URL.createObjectURL(file);

            img.onload = function() {
                var maxWidth = 570; // Define your maximum width here
                var maxHeight = 300; // Define your maximum height here
                const minWidth = 370; // Minimum allowed width
                const minHeight = 260; // Minimum allowed height
                console.log(img.width);
                if (img.width > maxWidth || img.height > maxHeight) {
                    alert("Image resolution is too high. Maximum resolution allowed is " + maxWidth + "x" + maxHeight);
                    input.value = ''; // Clear the file input
                }else if (img.width < minWidth || img.height < minHeight) {
                    alert(`Image resolution must be at least ${minWidth}x${minHeight} pixels`);
                    input.value = ''; // Clear the file input
                }
            };
        }
</script>
@endsection
