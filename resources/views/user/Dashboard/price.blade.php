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
                  <div class="col-lg-4 col-md-6 price_box mb-5">
                      <div class="cord_pice">
                          <div class="card-body">
                              <h1 class="price_heading">Free</h1>
                              <p class="text-dark text-center">Enjoy the Career Guidance and Mentorship from our Expert</p>
                              <div class="price_save_box">
                                <div class="offer_tag">
                                  <span>₹900.00</span>
                                  <h5>Save 100%</h5>
                                </div>
                                <h1 class="text-dark text-center">00.00</h1>
                              </div>
                              <div class="rate_box">
                                  <p class="mb-0">Active</p>
                              </div>
                              <div class="feature_dtls_box mb-3">
                                <h4 class="text-dark">Career Library</h4>
                                <div class=" d-flex align-items-center">
                                  <span class="mdi mdi-check"></span>
                                  <h3>500+ Premium <span>Career Content</span> </h3>
                                </div>
                                <div class=" d-flex align-items-center">
                                  <span class="mdi mdi-check"></span>
                                  <h3>500+ Premium <span>Career Content</span> </h3>
                                </div>
                                <div class=" d-flex align-items-center">
                                  <span class="mdi mdi-check"></span>
                                  <h3>500+ Premium <span>Career Content</span> </h3>
                                </div>
                                <div class=" d-flex align-items-center">
                                  <span class="mdi mdi-check"></span>
                                  <h3>500+ Premium <span>Career Content</span> </h3>
                                </div>
                                <div class=" d-flex align-items-center">
                                <span class="mdi mdi-close"></span>
                                  <h3>500+ Premium <span>Career Content</span> </h3>
                                </div>
                              </div>
                              <!-- 2nd item -->
                              <div class="feature_dtls_box mb-3 disabled">
                                <h4 class="text-dark">Face-to-Face Sessions <span class="mdi mdi-lock"></span></h4>
                                <div class=" d-flex align-items-center">
                                  <span class="mdi mdi-close"></span>
                                  <h3>500+ Premium <span>Career Content</span> </h3>
                                </div>
                                <div class=" d-flex align-items-center">
                                  <span class="mdi mdi-close"></span>
                                  <h3>500+ Premium <span>Career Content</span> </h3>
                                </div>
                                <div class=" d-flex align-items-center">
                                  <span class="mdi mdi-close"></span>
                                  <h3>500+ Premium <span>Career Content</span> </h3>
                                </div>
                                <div class=" d-flex align-items-center">
                                  <span class="mdi mdi-close"></span>
                                  <h3>500+ Premium <span>Career Content</span> </h3>
                                </div>
                                <div class=" d-flex align-items-center">
                                <span class="mdi mdi-close"></span>
                                  <h3>500+ Premium <span>Career Content</span> </h3>
                                </div>
                              </div>
                              <!-- 3rd item -->
                              <div class="feature_dtls_box mb-3 disabled">
                                <h4 class="text-dark">30 Pages Report card <span class="mdi mdi-lock"></span></h4>
                                <div class=" d-flex align-items-center">
                                  <span class="mdi mdi-close"></span>
                                  <h3>500+ Premium <span>Career Content</span> </h3>
                                </div>
                                <div class=" d-flex align-items-center">
                                  <span class="mdi mdi-close"></span>
                                  <h3>500+ Premium <span>Career Content</span> </h3>
                                </div>
                                <div class=" d-flex align-items-center">
                                  <span class="mdi mdi-close"></span>
                                  <h3>500+ Premium <span>Career Content</span> </h3>
                                </div>
                                <div class=" d-flex align-items-center">
                                  <span class="mdi mdi-close"></span>
                                  <h3>500+ Premium <span>Career Content</span> </h3>
                                </div>
                                <div class=" d-flex align-items-center">
                                <span class="mdi mdi-close"></span>
                                  <h3>500+ Premium <span>Career Content</span> </h3>
                                </div>
                              </div>
                          </div>
                          <div class="foutcoems">
                          <h3 class="text-dark text-center outcomeText d-lg-none d-sm-block">Outcomes <span class="mdi mdi-checkbox-marked-circle-outline"></span></h3>
                            <div class="outComes_box">
                              <div class="card">
                                <div class="outcomes_parabox">
                                  <div class="outcomes_para">
                                    <p class="text-dark">Easy to use, intuitive and fluid interface, support always willing to assist in problems that may appear.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
              <!--First box end  -->

              <!-- Second box -->
                <div class="col-lg-4 col-md-6 price_box mb-5">
                    <div class="cord_pice popoler_pricebox">
                      <div class="tag_part">
                        <h3>Most Populer</h3>
                      </div>
                      <div class="card-body">
                          <h1 class="price_heading">Career Navigator</h1>
                          <p class="text-dark text-center">Enjoy the Career Guidance and Mentorship from our Expert</p>
                          <div class="price_save_box">
                            <div class="offer_tag">
                              <span>₹9999.00</span>
                              <h5>Save 50%</h5>
                            </div>
                            <h1 class="text-dark text-center">4999.00</h1>
                          </div>
                          <div class="rate_box inactive">
                              <p class="mb-0">Explore</p>
                          </div>
                          <div class="feature_dtls_box mb-3">
                            <h4 class="text-dark">Career Library</h4>
                            <div class=" d-flex align-items-center">
                              <span class="mdi mdi-check"></span>
                              <h3>500+ Premium <span>Career Content</span> </h3>
                            </div>
                            <div class=" d-flex align-items-center">
                              <span class="mdi mdi-check"></span>
                              <h3>500+ Premium <span>Career Content</span> </h3>
                            </div>
                            <div class=" d-flex align-items-center">
                              <span class="mdi mdi-check"></span>
                              <h3>500+ Premium <span>Career Content</span> </h3>
                            </div>
                            <div class=" d-flex align-items-center">
                              <span class="mdi mdi-check"></span>
                              <h3>500+ Premium <span>Career Content</span> </h3>
                            </div>
                            <div class=" d-flex align-items-center">
                            <span class="mdi mdi-close"></span>
                              <h3>500+ Premium <span>Career Content</span> </h3>
                            </div>
                          </div>
                          <!-- 2nd item -->
                          <div class="feature_dtls_box mb-3 ds_non">
                            <h4 class="text-dark">Face-to-Face Sessions <span class="mdi mdi-lock"></span></h4>
                            <div class=" d-flex align-items-center">
                              <span class="mdi mdi-check"></span>
                              <h3>500+ Premium <span>Career Content</span> </h3>
                            </div>
                            <div class=" d-flex align-items-center">
                              <span class="mdi mdi-check"></span>
                              <h3>500+ Premium <span>Career Content</span> </h3>
                            </div>
                            <div class=" d-flex align-items-center">
                              <span class="mdi mdi-check"></span>
                              <h3>500+ Premium <span>Career Content</span> </h3>
                            </div>
                            <div class=" d-flex align-items-center">
                              <span class="mdi mdi-check"></span>
                              <h3>500+ Premium <span>Career Content</span> </h3>
                            </div>
                            <div class=" d-flex align-items-center">
                              <span class="mdi mdi-check"></span>
                              <h3>500+ Premium <span>Career Content</span> </h3>
                            </div>
                          </div>
                          <!-- 3rd item -->
                          <div class="feature_dtls_box mb-3 disabled">
                            <h4 class="text-dark">30 Pages Report card <span class="mdi mdi-lock"></span></h4>
                            <div class=" d-flex align-items-center">
                              <span class="mdi mdi-close"></span>
                              <h3>500+ Premium <span>Career Content</span> </h3>
                            </div>
                            <div class=" d-flex align-items-center">
                              <span class="mdi mdi-close"></span>
                              <h3>500+ Premium <span>Career Content</span> </h3>
                            </div>
                            <div class=" d-flex align-items-center">
                              <span class="mdi mdi-close"></span>
                              <h3>500+ Premium <span>Career Content</span> </h3>
                            </div>
                            <div class=" d-flex align-items-center">
                              <span class="mdi mdi-close"></span>
                              <h3>500+ Premium <span>Career Content</span> </h3>
                            </div>
                            <div class=" d-flex align-items-center">
                            <span class="mdi mdi-close"></span>
                              <h3>500+ Premium <span>Career Content</span> </h3>
                            </div>
                          </div>
                      </div>
                      <div class="mt-5">
                      <h3 class="text-dark text-center outcomeText">Outcomes <span class="mdi mdi-checkbox-marked-circle-outline"></span></h3>
                        <div class="outComes_box">
                          <div class="card">
                            <div class="outcomes_parabox">
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
              <!-- Second box end -->
              <!-- Third box -->
                <div class="col-lg-4 col-md-6 price_box mb-5">
                    <div class="cord_pice popoler_pricebox">
                        <div class="card-body">
                            <h1 class="price_heading">Career Pro-Plus</h1>
                            <p class="text-dark text-center">Level-up your Career with more powerful Resources and enhanced fea ures</p>
                            <div class="price_save_box">
                              <div class="offer_tag">
                                <span>₹14999.00</span>
                                <h5>Save 30%</h5>
                              </div>
                              <h1 class="text-dark text-center">9999.00</h1>
                            </div>
                            <div class="rate_box inactive">
                                <p class="mb-0">Explore</p>
                            </div>
                            <div class="feature_dtls_box mb-3">
                              <h4 class="text-dark">Career Library</h4>
                              <div class=" d-flex align-items-center">
                                <span class="mdi mdi-check"></span>
                                <h3>500+ Premium <span>Career Content</span> </h3>
                              </div>
                              <div class=" d-flex align-items-center">
                                <span class="mdi mdi-check"></span>
                                <h3>500+ Premium <span>Career Content</span> </h3>
                              </div>
                              <div class=" d-flex align-items-center">
                                <span class="mdi mdi-check"></span>
                                <h3>500+ Premium <span>Career Content</span> </h3>
                              </div>
                              <div class=" d-flex align-items-center">
                                <span class="mdi mdi-check"></span>
                                <h3>500+ Premium <span>Career Content</span> </h3>
                              </div>
                              <div class=" d-flex align-items-center">
                              <span class="mdi mdi-close"></span>
                                <h3>500+ Premium <span>Career Content</span> </h3>
                              </div>
                            </div>
                            <!-- 2nd item -->
                            <div class="feature_dtls_box mb-3 ds_non">
                              <h4 class="text-dark">Face-to-Face Sessions <span class="mdi mdi-lock"></span></h4>
                              <div class=" d-flex align-items-center">
                                <span class="mdi mdi-check"></span>
                                <h3>500+ Premium <span>Career Content</span> </h3>
                              </div>
                              <div class=" d-flex align-items-center">
                                <span class="mdi mdi-check"></span>
                                <h3>500+ Premium <span>Career Content</span> </h3>
                              </div>
                              <div class=" d-flex align-items-center">
                                <span class="mdi mdi-check"></span>
                                <h3>500+ Premium <span>Career Content</span> </h3>
                              </div>
                              <div class=" d-flex align-items-center">
                                <span class="mdi mdi-check"></span>
                                <h3>500+ Premium <span>Career Content</span> </h3>
                              </div>
                              <div class=" d-flex align-items-center">
                                <span class="mdi mdi-check"></span>
                                <h3>500+ Premium <span>Career Content</span> </h3>
                              </div>
                            </div>
                            <!-- 3rd item -->
                            <div class="feature_dtls_box mb-3  ds_non">
                              <h4 class="text-dark">30 Pages Report card <span class="mdi mdi-lock"></span></h4>
                              <div class=" d-flex align-items-center">
                                  <span class="mdi mdi-check"></span>
                                <h3>500+ Premium <span>Career Content</span> </h3>
                              </div>
                              <div class=" d-flex align-items-center">
                                  <span class="mdi mdi-check"></span>
                                <h3>500+ Premium <span>Career Content</span> </h3>
                              </div>
                              <div class=" d-flex align-items-center">
                                  <span class="mdi mdi-check"></span>
                                <h3>500+ Premium <span>Career Content</span> </h3>
                              </div>
                              <div class=" d-flex align-items-center">
                                  <span class="mdi mdi-check"></span>
                                <h3>500+ Premium <span>Career Content</span> </h3>
                              </div>
                              <div class=" d-flex align-items-center">
                                <span class="mdi mdi-check"></span>
                                <h3>500+ Premium <span>Career Content</span> </h3>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="foutcoems">
                    <h3 class="text-dark text-center outcomeText d-lg-none d-sm-block">Outcomes <span class="mdi mdi-checkbox-marked-circle-outline"></span></h3>
                      <div class="outComes_box">
                        <div class="card">
                          <div class="outcomes_parabox">
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
              <!-- Third box end -->

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
