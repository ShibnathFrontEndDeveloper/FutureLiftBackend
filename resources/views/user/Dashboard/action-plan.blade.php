@extends('user.Dashboard.sidebar')
@section('title') Action Plan @endsection
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Action Plan</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/user-dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Action Plan</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12">
                    <form action="{{url('/user/updatePassword')}}" method="post">
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
@endsection
@section('scripts')
<script>
    function subscription_purchase(id){
        window.location.href="{{url('/user/subscription-submit')}}/"+id;
    }
</script>
@endsection
