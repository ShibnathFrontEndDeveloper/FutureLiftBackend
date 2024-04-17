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
        $currenSessionPrice = App\Helpers::getCurrentPackagePrice();
    @endphp
    <div class="row">
      <div class="col-md-12 mx-0 upgrt_price_box">
        <div class="card">
          <div class="card-body price_body">
            <div class="row">
              <h3 class="text-dark text-center mb-5">Pick your perfect plan</h3>
              <!-- @foreach ($allPrice as $key => $value)
                  <div class="col-lg-4 col-md-6 price_box mb-5">
                      <div class="cord_pice">
                          <div class="card-body">
                              <h1 class="price_heading">{{$value->plan_name}}</h1>
                              <div class="rate_box">
                              <h3><i class="bi bi-currency-rupee"></i>{{number_format($value->plan_price)}}</h3>
                              </div>
                              {!! $value->description !!}
                              <div class=" pirce_btn_box text-center mt-4">
                              <button class="btn" onclick="subscription_purchase('{{$value->id}}','{{$value->plan_price}}','{{$currenSessionPrice}}','<?=App\Helpers::base64url_encode($value->id)?>')"><?=($currenSession !='')?($value->plan_name == $currenSession)?'Buy Now <i class="mdi mdi-checkbox-marked-circle text-success"></i>':'Buy Now':'Buy Now'?></button>
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach -->

              <!-- First box -->
                @foreach ($allPrice as $key => $value)
                    <div class="col-lg-4 col-md-6 price_box mb-5">
                        <div class="cord_pice">
                            <div class="card-body">
                                <h1 class="price_heading">{{$value->plan_name}}</h1>
                                <p class="text-dark text-center">{{$value->description}}</p>
                                <div class="price_save_box">
                                    <div class="offer_tag">
                                        <span>₹{{$value->before_discount_amount}}</span>
                                        <h5>Save {{$value->discount_percentage}}%</h5>
                                    </div>
                                    <h1 class="text-dark text-center">{{number_format($value->plan_price)}}</h1>
                                </div>
                                <div class="rate_box">
                                    <p class="mb-0"></p>
                              <button class="btn" <?=($currenSession !='')?($value->plan_name == $currenSession)?'disabled':'':''?> onclick="subscription_purchase('{{$value->id}}','{{$value->plan_price}}','{{$currenSessionPrice}}','<?=App\Helpers::base64url_encode($value->id)?>')"><?=($currenSession !='')?($value->plan_name == $currenSession)?'Active <i class="mdi mdi-checkbox-marked-circle text-success"></i>':'Buy Now':'Buy Now'?></button>

                                </div>
                                <div class="feature_dtls_box mb-3 {{($value->career_library_details_lock == 'yes')?'disabled':''}}">
                                    <h4 class="text-dark">Career Library <span class="{{($value->career_library_details_lock == 'yes')?'mdi mdi-lock':''}}"></span></h4>
                                    @foreach (json_decode($value->career_library_details,true) as $career_library_detailsKey => $career_library_detailsValue)
                                    <div class=" d-flex align-items-center">
                                        <span class="mdi {{($career_library_detailsValue['career_library_details_content_lock'] == 'yes')?'mdi-close':'mdi-check'}}"></span>
                                        <h3>{{$career_library_detailsValue['career_library_details_content']}} </h3>
                                    </div>
                                    @endforeach

                              </div>
                              <!-- 2nd item -->
                              <div class="feature_dtls_box mb-3 {{($value->face_to_face_details_lock == 'yes')?'disabled':''}}">
                                <h4 class="text-dark">Face-to-Face Sessions <span class="{{($value->face_to_face_details_lock == 'yes')?'mdi mdi-lock':''}}"></span></h4>
                                @foreach (json_decode($value->face_to_face_details,true) as $face_to_face_detailsKey => $face_to_face_detailsValue)
                                <div class=" d-flex align-items-center">
                                    <span class="mdi {{($face_to_face_detailsValue['face_to_face_details_content_lock'] == 'yes')?'mdi-close':'mdi-check'}}"></span>
                                    <h3>{{$face_to_face_detailsValue['face_to_face_details_content']}} </h3>
                                </div>
                                @endforeach
                              </div>
                              <!-- 3rd item -->
                              <div class="feature_dtls_box mb-3 {{($value->page_report_details_lock == 'yes')?'disabled':''}}">
                                <h4 class="text-dark">30 Pages Report card <span class="{{($value->page_report_details_lock == 'yes')?'mdi mdi-lock':''}}"></span></h4>
                                @foreach (json_decode($value->page_report_details,true) as $page_report_detailsKey => $page_report_detailsValue)
                                <div class=" d-flex align-items-center">
                                    <span class="mdi {{($page_report_detailsValue['page_report_details_content_lock'] == 'yes')?'mdi-close':'mdi-check'}}"></span>
                                    <h3>{{$page_report_detailsValue['page_report_details_content']}} </h3>
                                </div>
                                @endforeach
                              </div>
                          </div>
                          <div class="foutcoems">
                          <h3 class="text-dark text-center outcomeText d-lg-none d-sm-block">Outcomes <span class="mdi mdi-checkbox-marked-circle-outline"></span></h3>
                            <div class="outComes_box">
                              <div class="card">
                                <div class="outcomes_parabox">
                                  <div class="outcomes_para text-dark">
                                    <p class="text-dark">{!! $value->outcome !!}</p>
                                  </div>
                                </div>
                              </div>
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

  <!-- <div class="row">
    <h3 class="text-dark text-center outcomeText">Outcomes <span class="mdi mdi-checkbox-marked-circle-outline"></span></h3>
    <div class="col-md-12 mx-0">
      <div class="row">
        <div class="col-md-4 ">
          <div class="outComes_box">
            <div class="card">
              <div class="card-body price_body">
                <div class="outcomes_para">
                  <p class="text-dark">Easy to use, intuitive and fluid interface, support always willing to assist in problems that may appear.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="outComes_box">
            <div class="card">
              <div class="card-body">
                <div class="outcomes_para border-bottom">
                  <p class="text-dark">Easy to use, intuitive and fluid interface, support always willing to assist in problems that may appear.</p>
                </div>
                <div class="outcomes_para">
                  <p class="text-dark">Easy to use, intuitive and fluid interface, support always willing to assist in problems that may appear.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="outComes_box">
            <div class="card">
              <div class="card-body">
                <div class="outcomes_para border-bottom">
                  <p class="text-dark">Easy to use, intuitive and fluid interface, support always willing to assist in problems that may appear.</p>
                </div>
                <div class="outcomes_para border-bottom">
                  <p class="text-dark">Easy to use, intuitive and fluid interface, support always willing to assist in problems that may appear.</p>
                </div>
                <div class="outcomes_para">
                  <p class="text-dark">Easy to use, intuitive and fluid interface, support always willing to assist in problems that may appear.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</div>
@endsection
@section('scripts')
<script>
    function subscription_purchase(id,price,currenSessionPrice,encodeId){
       // window.location.href="{{url('/user/subscription-submit')}}/"+id;

    //    const gourl = "<?=url('user/subscription-submit')?>/"+id;
    const gourl = "<?=url('/order-summary')?>?product="+encodeId;
       if(parseFloat(price) < parseFloat(currenSessionPrice)){
            swal({
                title: 'Are you sure?',
                text: 'Choose your subscription package wisely, If you buy this package previous will be deactivated. Your Next journey depends on it.',
                icon: 'warning',
                buttons: ["Cancel", "Continue"],
                }).then(function(value) {
                if (value) {
                window.location.href = gourl;
                }
            });
        }else{
            window.location.href=gourl;
        }
    }
</script>
@endsection
