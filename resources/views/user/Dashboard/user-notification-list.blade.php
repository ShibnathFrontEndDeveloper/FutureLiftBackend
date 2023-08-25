@extends('user.Dashboard.sidebar')
@section('title') User Notification @endsection
@section('csss')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<style>
    .dataTables_wrapper{
        color: #000000;
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
                    <table id="example" class="display" style="width:100%">
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
<script>
    new DataTable('#example');
</script>
@endsection

