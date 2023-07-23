@extends('admin.Dashboard.sidebar')
@section('title') Dashboard @endsection
@section('csss')
<style>
    .card .card-title{
        color:#000000 !important;
    }
</style>
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Dashboard</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col" style="cursor:pointer;" onclick="window.location.href=`{{url('/admin/user/list')}}`">
                <div class="card">
                    <img src="{{asset('assets/images/Interesttest.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title text-center ">Total Users : {{$totalUser}}</h3>
                    </div>
                </div>
            </div>
            <div class="col" style="cursor:pointer;" onclick="window.location.href=`{{url('/admin/book-session/list')}}`">
                <div class="card">
                    <img src="{{asset('assets/images/personality-02.png')}}" class="card-img-top" alt="..." style="max-height:250px;">
                    <div class="card-body">
                        <h3 class="card-title text-center ">Total Session Book : {{$totalSessionBook}}</h3>
                    </div>
                </div>
            </div>
            <div class="col" style="cursor:pointer;" onclick="window.location.href=`{{url('/admin/counselling-session/list')}}`">
                <div class="card">
                    <img src="{{asset('assets/images/career Councelling.png')}}" class="card-img-top" alt="..." style="max-height:250px;">
                    <div class="card-body">
                        <h3 class="card-title text-center ">Counselling Pending : {{$totalPendingSession}}</h3>
                    </div>
                </div>
            </div>
            <div class="col" style="cursor:pointer;" onclick="window.location.href=`{{url('/admin/counselling-session/list')}}`">
                <div class="card">
                    <img src="{{asset('assets/images/examate-02.png')}}" class="card-img-top" alt="..." style="max-height:250px;">
                    <div class="card-body">
                        <h3 class="card-title text-center ">Counselling Complete : {{$totalCompleteSession}}</h3>
                    </div>
                </div>
            </div>
            <div class="col" style="cursor:pointer;" onclick="window.location.href=`{{url('/admin/counselling-session/list')}}`">
                <div class="card">
                    <img src="{{asset('assets/images/refer 2.png')}}" class="card-img-top" alt="..." style="max-height:250px;">
                    <div class="card-body">
                        <h3 class="card-title text-center ">Counselling Processing : {{$totalProcessingSession}}</h3>
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection
