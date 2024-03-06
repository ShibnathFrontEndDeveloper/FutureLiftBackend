@extends('admin.Dashboard.sidebar')
@section('title') Career Library  Section @endsection
@section('content')
@if(request()->route('show') == 'list')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Career Library </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Career Library </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('/admin/career-library/add')}}" class="btn btn-primary float-right mb-3 btn-lg">Add Career Library </a>
            </div>
            <div class="col-md-12">
                <table id="example" class="display table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Title</th>
                            <th>Total Like</th>
                            <th>Total Dislike</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $key => $value)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$value->title}}</td>
                                <td>{{App\Helpers::getCareerLibraryLikeVoteCount($value->id)}}</td>
                                <td>
                                    {{App\Helpers::getCareerLibraryDisLikeVoteCount($value->id)}}
                                    @if (App\Helpers::getCareerLibraryDisLikeVoteCount($value->id) > 0)
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#readmoreModal{{$key}}">View Comments</button>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{url('admin/career-library/edit/'.$value->id)}}"><i style="font-size:30px;" class="mdi mdi-pencil-box-outline"></i></a>
                                    <a href="javascript:void(0)" onclick="deleteConfirm('{{$value->id}}')"><i style="font-size:30px;" class="mdi mdi-delete-circle"></i></a>
                                </td>
                            </tr>

                            <div class="modal " id="readmoreModal{{$key}}" tabindex="-1" aria-labelledby="readmoreModal{{$key}}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content ref_mdal_box">
                                        <div class="modal-header">
                                            <h1 class="modal-title season_header">
                                                Comments
                                            </h1>
                                            <button type="button" onclick="popupModalClose();" class="btn-close" id="close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @php
                                                $getComments = App\Helpers::getCareerLibraryDisLikeComments($value->id);
                                            @endphp
                                            @foreach ($getComments as $getCommentsKey => $getCommentsValue)
                                            <div class="row">
                                                <div class="col-md-12 border-top">
                                                    <div class="form-group">
                                                        <h5>Comment no {{$getCommentsKey + 1}}</h5>
                                                    </div>
                                                    <div class="form-group">
                                                        <p>{{$getCommentsValue->comment}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>


                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl No</th>
                            <th>Title</th>
                            <th>Total Like</th>
                            <th>Total Dislike</th>
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
            <h3 class="page-title"> Career Library</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Career Library Add</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/CareerLibraryAdd')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Category</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="">Select Category</option>
                                @foreach ($allCategory as $allCategorykey => $allCategoryvalue)
                                <option value="{{$allCategoryvalue->id}}">{{$allCategoryvalue->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Thumbnail</label>
                            <input type="file" class="form-control" name="thumbnail" id="thumbnail" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{old('summery_content')}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Summery</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Summery Content</label>
                                    <textarea name="summery_content" required class="form-control" id="content" cols="30" rows="10">{{old('summery_content')}}</textarea>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Summery Image</label>
                                    <input type="file" class="form-control" name="summery_image" id="summery_image" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Career Opportunities</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <table id="careerOpTable" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Content</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" name="career_op_title[]" class="form-control" /></td>
                                                <td><input type="text" name="career_op_content[]" class="form-control" /></td>
                                                <td><button type="button" class="removeRow btn btn-danger">X</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-dark mt-2" id="addRow_career_op">Add More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Career in Artificial Intelligence</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <table id="careerArtiTable" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Stream</th>
                                                <th>Graduation</th>
                                                <th>After Graduation</th>
                                                <th>After Post Graduation</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><textarea name="career_stream[]" class="form-control" id="" cols="30" rows="10"></textarea></td>
                                                <td><textarea name="career_graduation[]" class="form-control" id="" cols="30" rows="10"></textarea></td>
                                                <td><textarea name="career_after_graduation[]" class="form-control" id="" cols="30" rows="10"></textarea></td>
                                                <td><textarea name="career_post_graduation[]" class="form-control" id="" cols="30" rows="10"></textarea></td>
                                                <td><button type="button" class="removeRow btn btn-danger">X</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-dark mt-2" id="addRow_career_Arti">Add More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Skills and Qualities</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Skill Content</label>
                                    <textarea name="skill_content" required class="form-control" id="content1" cols="30" rows="10">{{old('skill_content')}}</textarea>
                                </div>
                                <div class="col-md-6 form-group d-none">
                                    <label for="">Skill Image</label>
                                    <input type="file" class="form-control" name="skill_image" id="skill_image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Occupational Profile</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Occupational Content</label>
                                    <textarea name="occupational_content" required class="form-control" id="content2" cols="30" rows="10">{{old('occupational_content')}}</textarea>
                                </div>
                                <div class="col-md-6 form-group d-none">
                                    <label for="">Occupational Image</label>
                                    <input type="file" class="form-control" name="occupational_image" id="occupational_image" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Landing Indtitute</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <table id="landing_indtituteTable" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>University</th>
                                                <th>Location</th>
                                                <th>Website</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><textarea name="landing_indtitute_university[]" class="form-control" id="" cols="30" rows="10"></textarea></td>
                                                <td><textarea name="landing_indtitute_location[]" class="form-control" id="" cols="30" rows="10"></textarea></td>
                                                <td><textarea name="landing_indtitute_website[]" class="form-control" id="" cols="30" rows="10"></textarea></td>
                                                <td><button type="button" class="removeRow btn btn-danger">X</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-dark mt-2" id="addRow_anding_indtitute">Add More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Abroad Indtitute</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <table id="abroad_indtituteTable" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>College</th>
                                                <th>Location</th>
                                                <th>Website</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><textarea name="abroad_indtitute_college[]" class="form-control" id="" cols="30" rows="10"></textarea></td>
                                                <td><textarea name="abroad_indtitute_location[]" class="form-control" id="" cols="30" rows="10"></textarea></td>
                                                <td><textarea name="abroad_indtitute_website[]" class="form-control" id="" cols="30" rows="10"></textarea></td>
                                                <td><button type="button" class="removeRow btn btn-danger">X</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-dark mt-2" id="addRow_abroad_indtitute">Add More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Entrance Exam</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <!-- <div class="col-md-6 form-group">
                                    <label for="">Entrance Exam Content</label>
                                    <textarea name="entrance_exam_content" required class="form-control" id="content3" cols="30" rows="10">{{old('entrance_exam_content')}}</textarea>
                                </div> -->
                                <div class="col-md-12 form-group lib-admin-design">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <table id="entrance_indtituteTable" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>College</th>
                                                        <th>Tentative Date</th>
                                                        <th>Important Elements</th>
                                                        <th>Website</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><textarea name="entrance_college[]" class="form-control" id="" cols="30" rows="10"></textarea></td>
                                                        <td><textarea name="entrance_tentative_date[]" class="form-control" id="" cols="30" rows="10"></textarea></td>
                                                        <td><textarea name="entrance_important_elements[]" class="form-control" id="" cols="30" rows="10"></textarea></td>
                                                        <td><textarea name="entrance_website[]" class="form-control" id="" cols="30" rows="10"></textarea></td>
                                                        <td><button type="button" class="removeRow btn btn-danger">X</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-dark mt-2" id="addRow_entrance_indtitute">Add More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group d-none">
                                    <label for="">Entrance Exam Image</label>
                                    <input type="file" class="form-control" name="entrance_exam_image" id="entrance_exam_image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Industry Trends</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Industry Trends Content</label>
                                    <textarea name="industry_trends_content" required class="form-control" id="content4" cols="30" rows="10">{{old('industry_trends_content')}}</textarea>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Industry Trends PDF</label>
                                    <input type="file" class="form-control" name="industry_trends_image" id="industry_trends_image" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Work Description</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="">Work Description Content</label>
                                    <textarea name="work_description_content" class="form-control" id="content5" cols="30" rows="10">{{old('work_description_content')}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Pros & Cons of a Career</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="">Pros & Cons Content</label>
                                    <textarea name="pros_and_cons_content" required class="form-control" id="content6" cols="30" rows="10">{{old('pros_and_cons_content')}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
            <h3 class="page-title"> Career Library</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Career Library Edit</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/CareerLibraryEdit')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="editId" value="{{$data->id}}">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Category</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="">Select Category</option>
                                @foreach ($allCategory as $allCategorykey => $allCategoryvalue)
                                <option value="{{$allCategoryvalue->id}}" {{($allCategoryvalue->id == $data->category)?'selected':''}}>{{$allCategoryvalue->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Thumbnail</label>
                            <input type="file" class="form-control" name="thumbnail" id="thumbnail">
                            <img src="{{asset('assets/career_library/'.$data->thumbnail)}}" alt="" class="mt-2" width="200">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{$data->title}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Summery</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Summery Content</label>
                                    <textarea name="summery_content" required class="form-control" id="content" cols="30" rows="10">{{$data->summery_content}}</textarea>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Summery Image</label>
                                    <input type="file" class="form-control" name="summery_image" id="summery_image">
                                    <img src="{{asset('assets/career_library/'.$data->summery_image)}}" alt="" class="mt-2" width="200">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Career Opportunities</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <table id="careerOpTable" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Content</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (json_decode($data->career_opportunities,true) as $career_opportunitiesKey => $career_opportunitiesValue)
                                                <tr>
                                                    <td><input type="text" name="career_op_title[]" value="{{$career_opportunitiesValue['career_op_title']}}" class="form-control" /></td>
                                                    <td><input type="text" name="career_op_content[]" value="{{$career_opportunitiesValue['career_op_content']}}" class="form-control" /></td>
                                                    <td><button type="button" class="removeRow btn btn-danger">X</button></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-dark mt-2" id="addRow_career_op">Add More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Career in Artificial Intelligence</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <table id="careerArtiTable" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Stream</th>
                                                <th>Graduation</th>
                                                <th>After Graduation</th>
                                                <th>After Post Graduation</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (json_decode($data->career_artificial,true) as $career_artificialKey => $career_artificialValue)
                                                <tr>
                                                    <td><textarea name="career_stream[]" class="form-control" id="" cols="30" rows="10">{{$career_artificialValue['career_stream']}}</textarea></td>
                                                    <td><textarea name="career_graduation[]" class="form-control" id="" cols="30" rows="10">{{$career_artificialValue['career_graduation']}}</textarea></td>
                                                    <td><textarea name="career_after_graduation[]" class="form-control" id="" cols="30" rows="10">{{$career_artificialValue['career_after_graduation']}}</textarea></td>
                                                    <td><textarea name="career_post_graduation[]" class="form-control" id="" cols="30" rows="10">{{$career_artificialValue['career_post_graduation']}}</textarea></td>
                                                    <td><button type="button" class="removeRow btn btn-danger">X</button></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-dark mt-2" id="addRow_career_Arti">Add More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Skills and Qualities</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Skill Content</label>
                                    <textarea name="skill_content" required class="form-control" id="content1" cols="30" rows="10">{{$data->skill_content}}</textarea>
                                </div>
                                <div class="col-md-6 form-group d-none">
                                    <label for="">Skill Image</label>
                                    <input type="file" class="form-control" name="skill_image" id="skill_image">
                                    <img src="{{asset('assets/career_library/'.$data->skill_image)}}" alt="" class="mt-2" width="200">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Occupational Profile</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Occupational Content</label>
                                    <textarea name="occupational_content" required class="form-control" id="content2" cols="30" rows="10">{{$data->occupational_content}}</textarea>
                                </div>
                                <div class="col-md-6 form-group d-none">
                                    <label for="">Occupational Image</label>
                                    <input type="file" class="form-control" name="occupational_image" id="occupational_image">
                                    <img src="{{asset('assets/career_library/'.$data->occupational_image)}}" alt="" class="mt-2" width="200">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Landing Indtitute</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <table id="landing_indtituteTable" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>University</th>
                                                <th>Location</th>
                                                <th>Website</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (json_decode($data->landing_indtitute,true) as $landing_indtituteKey => $landing_indtituteValue)
                                                <tr>
                                                    <td><textarea name="landing_indtitute_university[]" class="form-control" id="" cols="30" rows="10">{{$landing_indtituteValue['landing_indtitute_university']}}</textarea></td>
                                                    <td><textarea name="landing_indtitute_location[]" class="form-control" id="" cols="30" rows="10">{{$landing_indtituteValue['landing_indtitute_location']}}</textarea></td>
                                                    <td><textarea name="landing_indtitute_website[]" class="form-control" id="" cols="30" rows="10">{{$landing_indtituteValue['landing_indtitute_website']}}</textarea></td>
                                                    <td><button type="button" class="removeRow btn btn-danger">X</button></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-dark mt-2" id="addRow_anding_indtitute">Add More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Abroad Indtitute</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <table id="abroad_indtituteTable" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>College</th>
                                                <th>Location</th>
                                                <th>Website</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (json_decode($data->abroad_indtitute,true) as $abroad_indtituteKey => $abroad_indtituteValue)
                                                <tr>
                                                    <td><textarea name="abroad_indtitute_college[]" class="form-control" id="" cols="30" rows="10">{{$abroad_indtituteValue['abroad_indtitute_college']}}</textarea></td>
                                                    <td><textarea name="abroad_indtitute_location[]" class="form-control" id="" cols="30" rows="10">{{$abroad_indtituteValue['abroad_indtitute_location']}}</textarea></td>
                                                    <td><textarea name="abroad_indtitute_website[]" class="form-control" id="" cols="30" rows="10">{{$abroad_indtituteValue['abroad_indtitute_website']}}</textarea></td>
                                                    <td><button type="button" class="removeRow btn btn-danger">X</button></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-dark mt-2" id="addRow_abroad_indtitute">Add More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Entrance Exam</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <!-- <div class="col-md-6 form-group">
                                    <label for="">Entrance Exam Content</label>
                                    <textarea name="entrance_exam_content" required class="form-control" id="content3" cols="30" rows="10">{{$data->entrance_exam_content}}</textarea>
                                </div> -->
                                <div class="col-md-12 form-group lib-admin-design">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <table id="entrance_indtituteTable" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>College</th>
                                                        <th>Tentative Date</th>
                                                        <th>Important Elements</th>
                                                        <th>Website</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach (json_decode($data->entrance_exam_content,true) as $entrance_exam_contentKey => $entrance_exam_contentValue)
                                                    <tr>
                                                        <td><textarea name="entrance_college[]" class="form-control" id="" cols="30" rows="10">{{$entrance_exam_contentValue['entrance_college']}}</textarea></td>
                                                        <td><textarea name="entrance_tentative_date[]" class="form-control" id="" cols="30" rows="10">{{$entrance_exam_contentValue['entrance_tentative_date']}}</textarea></td>
                                                        <td><textarea name="entrance_important_elements[]" class="form-control" id="" cols="30" rows="10">{{$entrance_exam_contentValue['entrance_important_elements']}}</textarea></td>
                                                        <td><textarea name="entrance_website[]" class="form-control" id="" cols="30" rows="10">{{$entrance_exam_contentValue['entrance_website']}}</textarea></td>
                                                        <td><button type="button" class="removeRow btn btn-danger">X</button></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-dark mt-2" id="addRow_entrance_indtitute">Add More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group d-none">
                                    <label for="">Entrance Exam Image</label>
                                    <input type="file" class="form-control" name="entrance_exam_image" id="entrance_exam_image">
                                    <img src="{{asset('assets/career_library/'.$data->entrance_exam_image)}}" alt="" class="mt-2" width="200">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Industry Trends</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Industry Trends Content</label>
                                    <textarea name="industry_trends_content" required class="form-control" id="content4" cols="30" rows="10">{{$data->industry_trends_content}}</textarea>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Industry Trends PDF</label>
                                    <input type="file" class="form-control" name="industry_trends_image" id="industry_trends_image">
                                    <!-- <img src="{{asset('assets/career_library/'.$data->industry_trends_image)}}" alt="" class="mt-2" width="200"> -->
                                    <embed src="{{asset('assets/career_library/'.$data->industry_trends_image)}}" width="100%" height="400" alt="pdf" id="marksheetEm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Work Description</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="">Work Description Content</label>
                                    <textarea name="work_description_content"  class="form-control" id="content5" cols="30" rows="10">{{$data->work_description_content}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <h3>Pros & Cons of a Career</h3>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="">Pros & Cons Content</label>
                                    <textarea name="pros_and_cons_content" required class="form-control" id="content6" cols="30" rows="10">{{$data->pros_and_cons_content}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
            window.location.href="{{url('/admin/CareerLibraryDelete')}}/"+id;
        }
    }
    CKEDITOR.replace( 'content');
    CKEDITOR.replace( 'content1');
    CKEDITOR.replace( 'content2');
    CKEDITOR.replace( 'content3');
    CKEDITOR.replace( 'content4');
    CKEDITOR.replace( 'content5');
    CKEDITOR.replace( 'content6');

    $("#addRow_career_op").on("click", function() {
        var newRow = $("<tr>");
        var columns = ["career_op_title", "career_op_content"];
        for (var i = 0; i < columns.length; i++) {
            var inputName = columns[i] + "[]";
            var newCell = $("<td>").append(`<input type="text" name="${inputName}" class="form-control" />`);
            newRow.append(newCell);
        }

        var removeButtonCell = $("<td>").append('<button type="button" class="removeRow btn btn-danger">X</button>');
        newRow.append(removeButtonCell);

        $("#careerOpTable tbody").append(newRow);
    });

    $("#addRow_career_Arti").on("click", function() {
        var newRow = $("<tr>");
        var columns = ["career_stream", "career_graduation","career_after_graduation","career_post_graduation"];
        for (var i = 0; i < columns.length; i++) {
            var inputName = columns[i] + "[]";
            var newCell = $("<td>").append(`<textarea name="${inputName}" class="form-control" id="" cols="30" rows="10"></textarea>`);
            newRow.append(newCell);
        }

        var removeButtonCell = $("<td>").append('<button type="button" class="removeRow btn btn-danger">X</button>');
        newRow.append(removeButtonCell);

        $("#careerArtiTable tbody").append(newRow);
    });

    $("#addRow_anding_indtitute").on("click", function() {
        var newRow = $("<tr>");
        var columns = ["landing_indtitute_university", "landing_indtitute_location","landing_indtitute_website"];
        for (var i = 0; i < columns.length; i++) {
            var inputName = columns[i] + "[]";
            var newCell = $("<td>").append(`<textarea name="${inputName}" class="form-control" id="" cols="30" rows="10"></textarea>`);
            newRow.append(newCell);
        }

        var removeButtonCell = $("<td>").append('<button type="button" class="removeRow btn btn-danger">X</button>');
        newRow.append(removeButtonCell);

        $("#landing_indtituteTable tbody").append(newRow);
    });

    $("#addRow_abroad_indtitute").on("click", function() {
        var newRow = $("<tr>");
        var columns = ["abroad_indtitute_college", "abroad_indtitute_location","abroad_indtitute_website"];
        for (var i = 0; i < columns.length; i++) {
            var inputName = columns[i] + "[]";
            var newCell = $("<td>").append(`<textarea name="${inputName}" class="form-control" id="" cols="30" rows="10"></textarea>`);
            newRow.append(newCell);
        }

        var removeButtonCell = $("<td>").append('<button type="button" class="removeRow btn btn-danger">X</button>');
        newRow.append(removeButtonCell);

        $("#abroad_indtituteTable tbody").append(newRow);
    });

    $("#addRow_entrance_indtitute").on("click", function() {
        var newRow = $("<tr>");
        var columns = ["entrance_college", "entrance_tentative_date","entrance_important_elements","entrance_website"];
        for (var i = 0; i < columns.length; i++) {
            var inputName = columns[i] + "[]";
            var newCell = $("<td>").append(`<textarea name="${inputName}" class="form-control" id="" cols="30" rows="10"></textarea>`);
            newRow.append(newCell);
        }

        var removeButtonCell = $("<td>").append('<button type="button" class="removeRow btn btn-danger">X</button>');
        newRow.append(removeButtonCell);

        $("#entrance_indtituteTable tbody").append(newRow);
    });

    // Remove Row
    $("#careerOpTable").on("click", ".removeRow", function() {
        $(this).closest("tr").remove();
    });

    $("#careerArtiTable").on("click", ".removeRow", function() {
        $(this).closest("tr").remove();
    });

    $("#landing_indtituteTable").on("click", ".removeRow", function() {
        $(this).closest("tr").remove();
    });

    $("#abroad_indtituteTable").on("click", ".removeRow", function() {
        $(this).closest("tr").remove();
    });

    $("#entrance_indtituteTable").on("click", ".removeRow", function() {
        $(this).closest("tr").remove();
    });

    function popupModalClose(){
        $(".modal").modal().hide();
        $(".modal").removeClass('show');
        $(".modal-backdrop").removeClass('modal-backdrop show');
        // setTimeout(() => {
        //     $(".modal-backdrop").removeClass('d-none');
        // }, 1000);

    }
</script>
@endsection
