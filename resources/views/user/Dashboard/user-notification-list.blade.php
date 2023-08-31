@extends('user.Dashboard.sidebar')
@section('title') User Notification @endsection
@section('csss')
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css"> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
<style>
    .dataTables_wrapper{
        color: #000000;
    }
.pagination li {
        padding: 7px;
    }
    li.paginate_button.page-item .page-link {
        background-color: #ffffff;
        color: #000000;
    }
    li.paginate_button.page-item.active .page-link {
        background-color: #000000;
        color: #ffffff;
        border-color: #000000;
    }
    li.paginate_button.page-item .page-link:hover {
        z-index: 2;
        color: #0a58ca;
        background-color: #e9ecef;
        border-color: #dee2e6;
    }
    .dataTables_wrapper select.form-select.form-select-sm {
        background-color: transparent;
    }
    table.dataTable td {
        padding: 10px;
        border-bottom: 1px solid #b9b9b9;
    }
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: inherit;
    }
</style>
@endsection
@section('content')

    <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Notification</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/user-dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Notification</li>
                </ol>
              </nav>
            </div>
            @php
                $query = "";
                if(request()->has('highlight')){
                    $query = request()->query('highlight');
                }
            @endphp
            <div class="row">
                <div class="col-md-12">
                    <table id="example" class="display table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Created Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notification as $key => $value)
                                <tr class="{{($query != '')?($query == $value->id)?'notification-zoom-in':'':''}}">
                                    <td>{{$key + 1}}</td>
                                    <td>{{$value->title}}</td>
                                    <td>{{$value->content}}</td>
                                    <td>{{date('l jS F Y h:i A',strtotime($value->created_at))}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sl No</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Created Date</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
@endsection
@section('scripts')
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script>
    new DataTable('#example',{
        responsive: true
    });
</script>
@endsection

