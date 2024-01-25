@extends('admin.Dashboard.sidebar')
@section('title') Coupon Section @endsection
@section('content')
@if(request()->route('show') == 'list')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Coupon</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Coupon</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('/admin/coupon/add')}}" class="btn btn-primary float-right mb-3 btn-lg">Add Coupon</a>
            </div>
            <div class="col-md-12">
                <table id="example" class="display table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Title</th>
                            <th>Coupon Code</th>
                            <th>Coupon Amount</th>
                            <th>Coupon Type</th>
                            <th>Start Date</th>
                            <th>Expiry Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $key => $value)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$value->title}}</td>
                                <td>{{$value->coupon_code}}</td>
                                <td>{{$value->coupon_amount}}</td>
                                <td>{{($value->type == 'percentage')?'Percentage (%)':'Flat'}}</td>
                                <td>{{date('d-m-Y',strtotime($value->from_date))}}</td>
                                <td>{{date('d-m-Y',strtotime($value->to_date))}}</td>
                                <td>
                                    <a href="{{url('admin/coupon/edit/'.$value->id)}}"><i style="font-size:30px;" class="mdi mdi-pencil-box-outline"></i></a>
                                    <a href="javascript:void(0)" onclick="deleteConfirm('{{$value->id}}')"><i style="font-size:30px;" class="mdi mdi-delete-circle"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl No</th>
                            <th>Title</th>
                            <th>Coupon Code</th>
                            <th>Coupon Amount</th>
                            <th>Coupon Type</th>
                            <th>Start Date</th>
                            <th>Expiry Date</th>
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
            <h3 class="page-title"> Coupon</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Coupon Add</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/couponAdd')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Coupon Title</label>
                            <input name="title" type="text" class="form-control" required value="{{old('title')}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Coupon Code</label>
                            <input name="coupon_code" type="text" class="form-control" required value="{{old('coupon_code')}}">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Coupon Description</label>
                            <textarea name="description"  class="form-control" required id="" cols="30" rows="10">{{old('description')}}</textarea>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Total No of Users</label>
                            <input name="total_no_of_user" type="number" min="1" class="form-control" required value="1">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Coupon Discount Type</label>
                            <select name="type" id="type" class="form-control" required>
                                <option value="percentage">Percentage (%)</option>
                                <option value="flat">Flat</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Coupon Amount</label>
                            <input name="coupon_amount" type="number" min="1" class="form-control" required value="1">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Coupon Start Date</label>
                            <input name="from_date" type="text" id="from_date" class="form-control" value="{{old('from_date')}}" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Coupon Expiry Date</label>
                            <input name="to_date" type="text" id="to_date" class="form-control" value="{{old('to_date')}}" required>
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
            <h3 class="page-title"> Coupon</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Coupon Edit</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/couponEdit')}}" method="post">
                    @csrf
                    <input type="hidden" name="editId" value="{{$data->id}}">
                    <div class="row">
                    <div class="col-md-6 form-group">
                            <label for="">Coupon Title</label>
                            <input name="title" type="text" class="form-control" required value="{{$data->title}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Coupon Code</label>
                            <input name="coupon_code" type="text" class="form-control" required value="{{$data->coupon_code}}">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Coupon Description</label>
                            <textarea name="description"  class="form-control" required id="" cols="30" rows="10">{{$data->description}}</textarea>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Total No of Users</label>
                            <input name="total_no_of_user" type="number" min="1" class="form-control" required value="{{$data->total_no_of_user}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Coupon Discount Type</label>
                            <select name="type" id="type" class="form-control" required>
                                <option value="percentage" {{($data->type == 'percentage')?'selected':''}}>Percentage (%)</option>
                                <option value="flat" {{($data->type == 'flat')?'selected':''}}>Flat</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Coupon Amount</label>
                            <input name="coupon_amount" type="number" min="1" class="form-control" required value="{{$data->coupon_amount}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Coupon Start Date</label>
                            <input name="from_date" type="text" id="from_date" class="form-control" value="{{date('Y/m/d',strtotime($data->from_date))}}" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Coupon Expiry Date</label>
                            <input name="to_date" type="text" id="to_date" class="form-control" value="{{date('Y/m/d',strtotime($data->to_date))}}" required>
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
            window.location.href="{{url('/admin/couponDelete')}}/"+id;
        }
    }
    CKEDITOR.replace( 'answer');
    $('#from_date').datepicker({
            minDate: 0,
            dateFormat: 'yy/mm/dd'
        });
        $('#to_date').datepicker({
            minDate: 1,
            dateFormat: 'yy/mm/dd'
        });
</script>
@endsection
