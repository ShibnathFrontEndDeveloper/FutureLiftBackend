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
                <table id="example" class="display table-striped" style="width:100%">
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
                            <label for="">Discount Percentage (%)</label>
                            <input type="number" name="discount_percentage" id="" min="0" required class="form-control" value="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Before Discount Session Price</label>
                            <input type="number" name="before_discount_amount" id="" min="0" required class="form-control" value="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">After Discount Session Price</label>
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
                            <div class="row">
                                <div class="col-md-3 form-group mt-3">
                                    <h3>Career Library Content</h3>

                                </div>
                                <div class="col-md-3 form-group">
                                    <div class="form-check form-switch ">
                                        <input class="form-check-input " type="checkbox" name="career_library_details_lock" role="switch" id="career_library_details_lock">
                                        <label class="form-check-label" for="career_library_details_lock"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <table id="facilityTable" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Content</th>
                                                <th>Lock</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" name="career_library_details_content[]" class="form-control" /></td>
                                                <td>
                                                    <select class="form-control" name="career_library_details_content_lock[]">
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </td>
                                                <td><button type="button" class="removeRow btn btn-danger">X</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-dark mt-2" id="addRow">Add More</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="row">
                                <div class="col-md-3 form-group mt-3">
                                    <h3>Face-to-Face Sessions</h3>

                                </div>
                                <div class="col-md-3 form-group">
                                    <div class="form-check form-switch ">
                                        <input class="form-check-input " type="checkbox" name="face_to_face_details_lock" role="switch" id="face_to_face_details_lock">
                                        <label class="form-check-label" for="face_to_face_details_lock"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <table id="face_to_face_detailsTable" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Content</th>
                                                <th>Lock</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" name="face_to_face_details_content[]" class="form-control" /></td>
                                                <td>
                                                    <select class="form-control" name="face_to_face_details_content_lock[]">
                                                        <option value="yes" >Yes</option>
                                                        <option value="no" >No</option>
                                                    </select>
                                                </td>
                                                <td><button type="button" class="removeRow btn btn-danger">X</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-dark mt-2" id="addRowface_to_face_details">Add More</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="row">
                                <div class="col-md-3 form-group mt-3">
                                    <h3>30 Pages Report card</h3>

                                </div>
                                <div class="col-md-3 form-group">
                                    <div class="form-check form-switch ">
                                        <input class="form-check-input " type="checkbox" name="page_report_details_lock" role="switch" id="page_report_details_lock">
                                        <label class="form-check-label" for="page_report_details_lock"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <table id="page_report_detailsTable" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Content</th>
                                                <th>Lock</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" name="page_report_details_content[]" class="form-control" /></td>
                                                <td>
                                                    <select class="form-control" name="page_report_details_content_lock[]">
                                                        <option value="yes" >Yes</option>
                                                        <option value="no" >No</option>
                                                    </select>
                                                </td>
                                                <td><button type="button" class="removeRow btn btn-danger">X</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-dark mt-2" id="addRowpage_report_details">Add More</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">OutComes</label>
                            <textarea name="outcome" id="outcome" cols="30" rows="10" class="form-control">{{old('outcome')}}</textarea>

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
                            <label for="">Discount Percentage (%)</label>
                            <input type="number" name="discount_percentage" id="" min="0" required class="form-control" value="{{$package->discount_percentage}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Before Discount Session Price</label>
                            <input type="number" name="before_discount_amount" id="" min="0" required class="form-control" value="{{$package->before_discount_amount}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">After Discount Session Price</label>
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
                            <div class="row">
                                <div class="col-md-3 form-group mt-3">
                                    <h3>Career Library Content</h3>

                                </div>
                                <div class="col-md-3 form-group">
                                    <div class="form-check form-switch ">
                                        <input class="form-check-input " type="checkbox" {{($package->career_library_details_lock == 'no')?'checked':''}} name="career_library_details_lock" role="switch" id="career_library_details_lock">
                                        <label class="form-check-label" for="career_library_details_lock"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <table id="facilityTable" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Content</th>
                                                <th>Lock</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (json_decode($package->career_library_details,true) as $career_library_detailsKey => $career_library_detailsValue)
                                            <tr>
                                                <td><input type="text" name="career_library_details_content[]" value="{{$career_library_detailsValue['career_library_details_content']}}" class="form-control" /></td>
                                                <td>
                                                    <select class="form-control" name="career_library_details_content_lock[]">
                                                        <option value="yes" {{($career_library_detailsValue['career_library_details_content_lock'] == 'yes')?'selected':''}}>Yes</option>
                                                        <option value="no" {{($career_library_detailsValue['career_library_details_content_lock'] == 'no')?'selected':''}}>No</option>
                                                    </select>

                                                </td>
                                                <td><button type="button" class="removeRow btn btn-danger">X</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-dark mt-2" id="addRow">Add More</button>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 form-group">
                            <div class="row">
                                <div class="col-md-3 form-group mt-3">
                                    <h3>Face-to-Face Sessions</h3>

                                </div>
                                <div class="col-md-3 form-group">
                                    <div class="form-check form-switch ">
                                        <input class="form-check-input " {{($package->face_to_face_details_lock == 'no')?'checked':''}} type="checkbox" name="face_to_face_details_lock" role="switch" id="face_to_face_details_lock">
                                        <label class="form-check-label" for="face_to_face_details_lock"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <table id="face_to_face_detailsTable" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Content</th>
                                                <th>Lock</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (json_decode($package->face_to_face_details,true) as $face_to_face_detailsKey => $face_to_face_detailsValue)
                                            <tr>
                                                <td><input type="text" name="face_to_face_details_content[]" value="{{$face_to_face_detailsValue['face_to_face_details_content']}}" class="form-control" /></td>
                                                <td>
                                                    <select class="form-control" name="face_to_face_details_content_lock[]">
                                                        <option value="yes" {{($face_to_face_detailsValue['face_to_face_details_content_lock'] == 'yes')?'selected':''}}>Yes</option>
                                                        <option value="no" {{($face_to_face_detailsValue['face_to_face_details_content_lock'] == 'no')?'selected':''}}>No</option>
                                                    </select>


                                                </td>
                                                <td><button type="button" class="removeRow btn btn-danger">X</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-dark mt-2" id="addRowface_to_face_details">Add More</button>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 form-group">
                            <div class="row">
                                <div class="col-md-3 form-group mt-3">
                                    <h3>30 Pages Report card</h3>

                                </div>
                                <div class="col-md-3 form-group">
                                    <div class="form-check form-switch ">
                                        <input class="form-check-input " {{($package->page_report_details_lock == 'no')?'checked':''}} type="checkbox" name="page_report_details_lock" role="switch" id="page_report_details_lock">
                                        <label class="form-check-label" for="page_report_details_lock"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group lib-admin-design">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <table id="page_report_detailsTable" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Content</th>
                                                <th>Lock</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (json_decode($package->page_report_details,true) as $page_report_detailsKey => $page_report_detailsValue)
                                            <tr>
                                                <td><input type="text" name="page_report_details_content[]" class="form-control" value="{{$page_report_detailsValue['page_report_details_content']}}" /></td>
                                                <td>
                                                    <select class="form-control" name="page_report_details_content_lock[]">
                                                        <option value="yes" {{($page_report_detailsValue['page_report_details_content_lock'] == 'yes')?'selected':''}}>Yes</option>
                                                        <option value="no" {{($page_report_detailsValue['page_report_details_content_lock'] == 'no')?'selected':''}}>No</option>
                                                    </select>

                                                </td>
                                                <td><button type="button" class="removeRow btn btn-danger">X</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-dark mt-2" id="addRowpage_report_details">Add More</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="">OutComes</label>
                            <textarea name="outcome" id="outcome" cols="30" rows="10" class="form-control">{{$package->outcome}}</textarea>

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
            window.location.href="{{url('/admin/testimonialDelete')}}/"+id;
        }
    }
    CKEDITOR.replace( 'outcome');


    $("#addRow").on("click", function() {
        var newRow = $("<tr>");
        var columns = ["career_library_details_content","career_library_details_content_lock"];
        for (var i = 0; i < columns.length; i++) {
            var inputName = columns[i] + "[]";
            console.log(columns[i]);



            var newCell = (columns[i] == 'career_library_details_content_lock')?$("<td>").append(`<select class="form-control" name="${inputName}"><option value="yes">Yes</option><option value="no">No</option></select>`):$("<td>").append(`<input type="text" name="${inputName}" class="form-control" />`);
            newRow.append(newCell);
        }

        var removeButtonCell = $("<td>").append('<button type="button" class="removeRow btn btn-danger">X</button>');
        newRow.append(removeButtonCell);

        $("#facilityTable tbody").append(newRow);
    });

    $("#facilityTable").on("click", ".removeRow", function() {
        $(this).closest("tr").remove();
    });


    $("#addRowface_to_face_details").on("click", function() {
        var newRow = $("<tr>");
        var columns = ["face_to_face_details_content","face_to_face_details_content_lock"];
        for (var i = 0; i < columns.length; i++) {
            var inputName = columns[i] + "[]";
            console.log(columns[i]);

            var newCell = (columns[i] == 'face_to_face_details_content_lock')?$("<td>").append(`<select class="form-control" name="${inputName}"><option value="yes">Yes</option><option value="no">No</option></select>`):$("<td>").append(`<input type="text" name="${inputName}" class="form-control" />`);





            newRow.append(newCell);
        }

        var removeButtonCell = $("<td>").append('<button type="button" class="removeRow btn btn-danger">X</button>');
        newRow.append(removeButtonCell);

        $("#face_to_face_detailsTable tbody").append(newRow);
    });

    $("#face_to_face_detailsTable").on("click", ".removeRow", function() {
        $(this).closest("tr").remove();
    });


    $("#addRowpage_report_details").on("click", function() {
        var newRow = $("<tr>");
        var columns = ["page_report_details_content","page_report_details_content_lock"];
        for (var i = 0; i < columns.length; i++) {
            var inputName = columns[i] + "[]";
            console.log(columns[i]);

            var newCell = (columns[i] == 'page_report_details_content_lock')?$("<td>").append(`<select class="form-control" name="${inputName}"><option value="yes">Yes</option><option value="no">No</option></select>`):$("<td>").append(`<input type="text" name="${inputName}" class="form-control" />`);




            newRow.append(newCell);
        }

        var removeButtonCell = $("<td>").append('<button type="button" class="removeRow btn btn-danger">X</button>');
        newRow.append(removeButtonCell);

        $("#page_report_detailsTable tbody").append(newRow);
    });

    $("#page_report_detailsTable").on("click", ".removeRow", function() {
        $(this).closest("tr").remove();
    });
</script>
@endsection
