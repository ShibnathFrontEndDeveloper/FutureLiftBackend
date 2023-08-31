@extends('admin.Dashboard.sidebar')
@section('title') Testimonial Section @endsection
@section('content')
@if(request()->route('show') == 'list')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Testimonial</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('/admin/testimonial/add')}}" class="btn btn-primary float-right mb-3 btn-lg">Add Testimonial</a>
            </div>
            <div class="col-md-12">
                <table id="example" class="display table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Type</th>
                            <th>Category</th>
                            <th>Person Name</th>
                            <th>Person Image</th>
                            <th>Content</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonial as $key => $value)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{ucfirst($value->type)}}</td>
                                <td>
                                    @if ($value->category == 'home')
                                        Home
                                    @elseif ($value->category == 'eight_ten')
                                        8-10th class
                                    @elseif ($value->category == 'eleven_twelve')
                                        11-12th class
                                    @elseif ($value->category == 'graduation')
                                        Graduation
                                    @endif
                                </td>
                                <td>{{$value->name}}</td>
                                <td><img src="{{asset('assets/testimonial_images/'.$value->image)}}" style="width:80px;" alt=""></td>
                                <td>{{$value->content}}</td>
                                <td>
                                    @for ($rating = 0; $rating < $value->rating; $rating++)
                                        <i class="bi bi-star-fill" style="color:#ffeb00;"></i>
                                    @endfor
                                </td>
                                <td>

                                    <a href="{{url('admin/testimonial/edit/'.$value->id)}}"><i style="font-size:30px;" class="mdi mdi-pencil-box-outline"></i></a>
                                    <a href="javascript:void(0)" onclick="deleteConfirm('{{$value->id}}')"><i style="font-size:30px;" class="mdi mdi-delete-circle"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl No</th>
                            <th>Type</th>
                            <th>Category</th>
                            <th>Person Name</th>
                            <th>Person Image</th>
                            <th>Content</th>
                            <th>Rating</th>
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
            <h3 class="page-title"> Testimonial</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Testimonial Add</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/testimonialAdd')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Type</label>
                            <select name="type" id="" required class="form-control">
                                <option value="student">Student</option>
                                <option value="parent">Parent</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Category</label>
                            <select name="category" id="" required class="form-control">
                                <option value="home">Home</option>
                                <option value="eight_ten">8-10th class</option>
                                <option value="eleven_twelve">11-12th class</option>
                                <option value="graduation">Graduation</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Person Name</label>
                            <input type="text" name="name" id="" required class="form-control" value="{{old('name')}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Person Image</label>
                            <input type="file" name="image" id="" required class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Rating</label>
                            <select name="rating" id="" required class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Content</label>
                            <textarea name="content" id="" cols="30" rows="10" required class="form-control">{{old('content')}}</textarea>
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
            <h3 class="page-title"> Testimonial</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Testimonial Edit</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/testimonialEdit')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="editId" value="{{$testimonial->id}}">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Type</label>
                            <select name="type" id="" required class="form-control">
                                <option value="student" {{($testimonial->type == 'student')?'selected':''}}>Student</option>
                                <option value="parent" {{($testimonial->type == 'parent')?'selected':''}}>Parent</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Category</label>
                            <select name="category" id="" required class="form-control">
                                <option value="home" {{($testimonial->category == 'home')?'selected':''}}>Home</option>
                                <option value="eight_ten" {{($testimonial->category == 'eight_ten')?'selected':''}}>8-10th class</option>
                                <option value="eleven_twelve" {{($testimonial->category == 'eleven_twelve')?'selected':''}}>11-12th class</option>
                                <option value="graduation" {{($testimonial->category == 'graduation')?'selected':''}}>Graduation</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Person Name</label>
                            <input type="text" name="name" id="" required class="form-control" value="{{$testimonial->name}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Person Image</label>
                            <input type="file" name="image" id="" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Rating</label>
                            <select name="rating" id="" required class="form-control">
                                <option value="1" {{($testimonial->rating == '1')?'selected':''}}>1</option>
                                <option value="2" {{($testimonial->rating == '2')?'selected':''}}>2</option>
                                <option value="3" {{($testimonial->rating == '3')?'selected':''}}>3</option>
                                <option value="4" {{($testimonial->rating == '4')?'selected':''}}>4</option>
                                <option value="5" {{($testimonial->rating == '5')?'selected':''}}>5</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Content</label>
                            <textarea name="content" id="" cols="30" rows="10" required class="form-control">{{$testimonial->content}}</textarea>
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
<script>
    new DataTable('#example',{
        responsive: true
    });
    function deleteConfirm(id){
        if(confirm('Do you want to delete?')){
            window.location.href="{{url('/admin/testimonialDelete')}}/"+id;
        }
    }
</script>
@endsection
