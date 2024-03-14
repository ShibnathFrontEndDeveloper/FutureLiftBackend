@extends('admin.Dashboard.sidebar')
@section('title') My Earning History Section @endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> My Earning History</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Earning History</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="display table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Amount</th>
                            <th>Session Scheduled Date</th>
                            <th>User Name</th>
                            <!-- <th>User Email</th> -->
                            <th>Session Completed Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $key => $value)
                            @php
                                $getUser = App\Helpers::getUserDetails($value->userId);
                            @endphp
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$value->amount}}/-</td>
                                <td>{{date('d/m/Y',strtotime($value->session_date_time))}}</td>
                                <td>{{$getUser->name}}</td>
                                <!-- <td>{{$getUser->email}}</td> -->
                                <td>{{date('d/m/Y',strtotime($value->session_completed_date))}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl No</th>
                            <th>Amount</th>
                            <th>Session Scheduled Date</th>
                            <th>User Name</th>
                            <!-- <th>User Email</th> -->
                            <th>Session Completed Date</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    new DataTable('#example',{
        responsive: true
    });
    function deleteConfirm(id){
        if(confirm('Do you want to delete?')){
            window.location.href="{{url('/admin/helpFaqCategoryDelete')}}/"+id;
        }
    }
    CKEDITOR.replace( 'answer');
</script>
@endsection
