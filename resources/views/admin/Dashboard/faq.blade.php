@extends('admin.Dashboard.sidebar')
@section('title') Faq Section @endsection
@section('content')
@if(request()->route('show') == 'list')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Faq</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Faq</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('/admin/faq/add')}}" class="btn btn-primary float-right mb-3 btn-lg">Add Faq</a>
            </div>
            <div class="col-md-12">
                <table id="example" class="display table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Question</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faq as $key => $value)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$value->question}}</td>
                                <td>{{($value->type)?ucfirst($value->type):'Basic'}}</td>
                                <td>
                                    <a href="{{url('admin/faq/edit/'.$value->id)}}"><i style="font-size:30px;" class="mdi mdi-pencil-box-outline"></i></a>
                                    <a href="javascript:void(0)" onclick="deleteConfirm('{{$value->id}}')"><i style="font-size:30px;" class="mdi mdi-delete-circle"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl No</th>
                            <th>Question</th>
                            <th>Type</th>
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
            <h3 class="page-title"> Faq</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Faq Add</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/faqAdd')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="">Type</label>
                            <select name="type" id="" class="form-control" onchange="typeChange(this.value);">
                                <option value="home">Home</option>
                                <option value="help">Help</option>
                                <option value="personality">Personality</option>
                                <option value="iq">IQ</option>
                                <option value="aptitude">Aptitude</option>
                                <option value="interest">Interest</option>
                                <option value="eight_ten">8-10th class</option>
                                <option value="eleven_twelve">11-12th class</option>
                                <option value="graduation">Graduation</option>
                                <option value="instant_advice">Instant Advice</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group d-none" id="sectionDiv">
                            <label for="">Select Section</label>
                            <select name="help_section" id="help_section" class="form-control" onchange="sectionChange(this.value);">
                                <option value="user">User Section</option>
                                <option value="admin">Admin Section</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group d-none" id="categoryDiv">

                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Question</label>
                            <textarea name="question" class="form-control" required id="" cols="30" rows="3">{{old('question')}}</textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Answer</label>
                            <textarea name="answer" required class="form-control" id="answer" cols="30" rows="10">{{old('answer')}}</textarea>
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
            <h3 class="page-title"> Faq</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Faq Edit</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/faqEdit')}}" method="post">
                    @csrf
                    <input type="hidden" name="editId" value="{{$faq->id}}">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="">Type</label>
                            <select name="type" id="" class="form-control" onchange="typeChange(this.value);">
                                <option value="home" {{($faq->type == 'home')?'selected':''}}>Home</option>
                                <option value="help" {{($faq->type == 'help')?'selected':''}}>Help</option>
                                <option value="personality" {{($faq->type == 'personality')?'selected':''}}>Personality</option>
                                <option value="iq" {{($faq->type == 'iq')?'selected':''}}>IQ</option>
                                <option value="aptitude" {{($faq->type == 'aptitude')?'selected':''}}>Aptitude</option>
                                <option value="interest" {{($faq->type == 'interest')?'selected':''}}>Interest</option>
                                <option value="eight_ten" {{($faq->type == 'eight_ten')?'selected':''}}>8-10th class</option>
                                <option value="eleven_twelve" {{($faq->type == 'eleven_twelve')?'selected':''}}>11-12th class</option>
                                <option value="graduation" {{($faq->type == 'graduation')?'selected':''}}>Graduation</option>
                                <option value="instant_advice" {{($faq->type == 'instant_advice')?'selected':''}}>Instant Advice</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group {{($faq->type == 'help')?'':'d-none'}}" id="sectionDiv">
                            <label for="">Select Section</label>
                            <select name="help_section" id="help_section" class="form-control" onchange="sectionChange(this.value);">
                                <option value="user" {{($faq->help_section == 'user')?'selected':''}}>User Section</option>
                                <option value="admin" {{($faq->help_section == 'admin')?'selected':''}}>Admin Section</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group {{($faq->type == 'help')?'':'d-none'}}" id="categoryDiv">
                            <label for="">Select Category</label>
                            <select name="category" id="category" {{($faq->type == 'help')?'required':''}} class="form-control">
                                <option value="">Select</option>
                                @foreach ($category as $key => $value)
                                    <option value="{{$value->id}}" {{($faq->help_faq_categoryId == $value->id)?'selected':''}}>{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Question</label>
                            <textarea name="question" class="form-control" required id="" cols="30" rows="3">{{$faq->question}}</textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Answer</label>
                            <textarea name="answer" required class="form-control" id="answer" cols="30" rows="10">{{$faq->answer}}</textarea>
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
    let sectionData = "<?=isset($faq->help_section)?$faq->help_section:'user'?>";
    new DataTable('#example',{
        responsive: true
    });
    function deleteConfirm(id){
        if(confirm('Do you want to delete?')){
            window.location.href="{{url('/admin/faqDelete')}}/"+id;
        }
    }
    CKEDITOR.replace( 'answer');
    function typeChange(value){
        if(value == 'help'){
            $("#sectionDiv").removeClass('d-none');
            $("#help_section").attr('required',true);
            sectionChange(sectionData);
        }else{
            $("#sectionDiv").addClass('d-none');
            $("#help_section").attr('required',false);
            $("#help_section").val('user');
            $("#categoryDiv").addClass('d-none');
            $("#category").attr('required',false);
        }
    }
    function sectionChange(value){

        $("#ftco-loader").show();
            $.ajax({
                type : 'GET',
                url: "<?=url('/admin/get-help-category-section-data')?>/"+value,
                success : function(data){
                    console.log(data);

                    $("#ftco-loader").hide();
                    $("#categoryDiv").removeClass('d-none');
                    $("#categoryDiv").html(data);
                    $("#category").attr('required',true);
                },error: function(data){
                    console.log(data);
                    $("#ftco-loader").hide();
                },
            })


        // if(value == 'help'){
        //     $("#categoryDiv").removeClass('d-none');
        //     $("#category").attr('required',true);

        // }else{
        //     $("#categoryDiv").addClass('d-none');
        //     $("#category").attr('required',false);
        // }
    }
</script>
@endsection
