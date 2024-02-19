@extends('admin.Dashboard.sidebar')
@section('title') My Profile @endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> My Profile</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/adminUpdateProfile')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Profile Image</label>
                            <input type="file" name="profile_image" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{$user->email}}" disabled class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Phone Number</label>
                            <input type="number" name="phone" value="{{$user->phone}}" class="form-control" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Brief Professional Biography</label>
                            <textarea name="bio" class="form-control" id="" cols="30" rows="10">{{(isset($details->bio))?$details->bio:''}}</textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <h3>Quailification</h3>
                                </div>
                                <div class="col-md-12 form-group lib-admin-design">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <table id="careerOpTable" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Quailification Type</th>
                                                        <th>Passed Year</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @if ($details->qualification)
                                                    @foreach (json_decode($details->qualification,true) as $qualificationKey => $qualificationValue)
                                                        <tr>
                                                            <td><input type="text" name="qualification_type[]" value="{{$qualificationValue['qualification_type']}}" class="form-control" /></td>
                                                            <td><input type="text" name="passed_year[]" value="{{$qualificationValue['passed_year']}}" class="form-control" /></td>
                                                            <td><button type="button" class="removeRow btn btn-danger" {{($qualificationKey == 0)?'disabled':''}}>X</button></td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td><input type="text" name="qualification_type[]" class="form-control" /></td>
                                                        <td><input type="text" name="passed_year[]" class="form-control" /></td>
                                                        <td><button type="button" class="removeRow btn btn-danger" disabled>X</button></td>
                                                    </tr>
                                                @endif
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-dark mt-2" id="addRow_career_op">Add More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Certifications</label>
                            <textarea name="certificate" class="form-control" id="" cols="30" rows="10">{{(isset($details->certificate))?$details->certificate:''}}</textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Areas of Expertise or Specialization</label>
                            <textarea name="specialization" class="form-control" id="" cols="30" rows="10">{{(isset($details->specialization))?$details->specialization:''}}</textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="submit" id="" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    new DataTable('#example');

    $("#addRow_career_op").on("click", function() {
        var newRow = $("<tr>");
        var columns = ["qualification_type", "passed_year"];
        for (var i = 0; i < columns.length; i++) {
            var inputName = columns[i] + "[]";
            var newCell = $("<td>").append(`<input type="text" name="${inputName}" class="form-control" />`);
            newRow.append(newCell);
        }

        var removeButtonCell = $("<td>").append('<button type="button" class="removeRow btn btn-danger">X</button>');
        newRow.append(removeButtonCell);

        $("#careerOpTable tbody").append(newRow);
    });

    $("#careerOpTable").on("click", ".removeRow", function() {
        $(this).closest("tr").remove();
    });


</script>
@endsection
