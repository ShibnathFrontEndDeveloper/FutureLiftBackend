@extends('admin.Dashboard.sidebar')
@section('title') Change Password Section @endsection
@section('content')
@if(request()->route('show') == 'add')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Change Password</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/adminChangePassword')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="password" name="old_password" id="" placeholder="Enter Old Password" class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="password" name="password" id="" placeholder="Enter New Password" class="form-control" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="submit" id="" class="btn btn-primary" value="Submit">
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
</script>
@endsection
