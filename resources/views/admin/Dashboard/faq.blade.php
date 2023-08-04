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
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faq as $key => $value)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$value->question}}</td>
                                <td>{{$value->answer}}</td>
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
                            <th>Answer</th>
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
                            <select name="type" id="" class="form-control">
                                <option value="home">Home</option>
                                <option value="help">Help</option>
                                <option value="personality">Personality</option>
                                <option value="iq">IQ</option>
                                <option value="aptitude">Aptitude</option>
                                <option value="interest">Interest</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Question</label>
                            <textarea name="question" class="form-control" required id="" cols="30" rows="3">{{old('question')}}</textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Answer</label>
                            <textarea name="answer" required class="form-control" id="" cols="30" rows="10">{{old('answer')}}</textarea>
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
                            <select name="type" id="" class="form-control">
                                <option value="home" {{($faq->type == 'home')?'selected':''}}>Home</option>
                                <option value="help" {{($faq->type == 'help')?'selected':''}}>Help</option>
                                <option value="personality" {{($faq->type == 'personality')?'selected':''}}>Personality</option>
                                <option value="iq" {{($faq->type == 'iq')?'selected':''}}>IQ</option>
                                <option value="aptitude" {{($faq->type == 'aptitude')?'selected':''}}>Aptitude</option>
                                <option value="interest" {{($faq->type == 'interest')?'selected':''}}>Interest</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Question</label>
                            <textarea name="question" class="form-control" required id="" cols="30" rows="3">{{$faq->question}}</textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Answer</label>
                            <textarea name="answer" required class="form-control" id="" cols="30" rows="10">{{$faq->answer}}</textarea>
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
    new DataTable('#example');
    function deleteConfirm(id){
        if(confirm('Do you want to delete?')){
            window.location.href="{{url('/admin/faqDelete')}}/"+id;
        }
    }
</script>
@endsection
