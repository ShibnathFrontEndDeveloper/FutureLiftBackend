@extends('admin.Dashboard.sidebar')
@section('title') User Section @endsection
@section('content')
@if(request()->route('show') == 'list')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> User</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('/admin/user/add')}}" class="btn btn-primary float-right mb-3 btn-lg">Add User</a>
            </div>
            <div class="col-md-12">
                <table id="example" class="display table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Created Date</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userList as $key => $value)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->phone}}</td>
                                <td>{{date('l jS F Y h:i A',strtotime($value->created_at))}}</td>
                                <td>{{(App\Helpers::userIdWiseRoleName($value->id) == '')?'User':App\Helpers::userIdWiseRoleName($value->id)}}</td>
                                <td>
                                    @if ($value->role == 'admin')
                                        @if (App\Helpers::userIdWiseRoleName($value->id) != 'Super Admin')
                                            <a href="{{url('admin/user/edit/'.$value->id)}}"><i style="font-size:30px;" class="mdi mdi-pencil-box-outline"></i></a>
                                        @endif
                                    @else
                                        <a href="{{url('admin/user-details/details/'.$value->id)}}" class="btn btn-sm btn-primary" >View Details</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Created Date</th>
                            <th>Role</th>
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
            <h3 class="page-title"> User</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Add</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/userAdd')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" id="" required class="form-control" value="{{old('name')}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" id="" required class="form-control" value="{{old('email')}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone" id="" required class="form-control" value="{{old('phone')}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Role</label>
                            <select name="role" id="" class="form-control" required>
                                <option value="">Select Role</option>
                                @foreach ($role as $roleKey => $roleValue )
                                    <option value="{{$roleValue->id}}">{{$roleValue->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="" required class="form-control">
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
            <h3 class="page-title"> User</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Edit</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/userEdit')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="editId" value="{{$user->id}}">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" id="" required class="form-control" value="{{$user->name}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Email</label>
                            <input type="text" disabled name="email" id="" required class="form-control" value="{{$user->email}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone" id="" required class="form-control" value="{{$user->phone}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Role</label>
                            <select name="role" id="" class="form-control" required>
                                <option value="">Select Role</option>
                                @foreach ($role as $roleKey => $roleValue )
                                    <option value="{{$roleValue->id}}" <?=($currentRole->roleId == $roleValue->id)?'selected':''?>>{{$roleValue->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-control" required>
                                <option value="active" {{($user->status == 'active')?'selected':''}}>Active</option>
                                <option value="inactive" {{($user->status == 'inactive')?'selected':''}}>Inactive</option>
                            </select>
                        </div>
                        <!-- <div class="col-md-6 form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="" required class="form-control">
                        </div> -->
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
        order: [[0, 'asc']],
        responsive: true
    });
</script>
@endsection
