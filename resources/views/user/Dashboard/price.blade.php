@extends('user.Dashboard.sidebar')
@section('title') Price @endsection
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Price</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/user-dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Price</li>
                </ol>
              </nav>
            </div>
            @php
                $currenSession = App\Helpers::getCurrentPackage();
            @endphp
            <div class="row">
              <div class="col-md-12 mx-0 upgrt_price_box">
                <div class="card">
                  <div class="card-body price_body">
                    <div class="row">
                    @foreach ($allPrice as $key => $value)
                        <div class="col-lg-4 col-md-6 price_box mb-5">
                            <div class="cord_pice">
                                <div class="card-body">
                                    <h1 class="price_heading">{{$value->plan_name}}</h1>
                                    <div class="rate_box">
                                    <h3><i class="bi bi-currency-rupee"></i>{{number_format($value->plan_price)}}</h3>
                                    </div>
                                    {!! $value->description !!}
                                    <div class=" pirce_btn_box text-center mt-4">
                                    <button class="btn" onclick="subscription_purchase('{{$value->id}}')"><?=($currenSession !='')?($value->plan_name == $currenSession)?'Purchased <i class="mdi mdi-checkbox-marked-circle text-success"></i>':'Buy Now':'Buy Now'?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                  </div>
                </div>
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
