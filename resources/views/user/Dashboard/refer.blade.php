@extends('user.Dashboard.sidebar')
@section('title') Refer and Earn @endsection
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
          @include('user.Dashboard.update-pro')
            <div class="page-header">
              <h3 class="page-title"> Refar and Earn</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/Dashboard/dash.html">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Refar and earn</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card dash_card">
                  <div class="card-body refer_card">
                    <div class="row">
                      <div class="col-12 referEarn_heading_box bg_primary">
                        <div class="row align-items-center">
                          <div class="col-lg-8 col-md-6 text-center">
                            <h1 class="refr_heading">Enjoy the convenience</h1>
                            <p>Refer your friends and earn unlimited Amaz on gift vouchers.</p>
                            <div class="refer_btn">
                              <a href="#refPop" data-bs-toggle="modal" data-bs-target="#refPop" class="refer_btn_link">refer now</a>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <img src="{{asset('assets/images/rear-earn.png')}}" alt="" class="img-fluid">
                          </div>
                        </div>
                      </div>
                      <!-- Refar popup -->


                      <div class="col-sm-6 col-md-4 col-lg-4 refer_point_store_box">
                        <div class="row">
                          <div class="col-lg-12"></div>
                        </div>
                        <div class="refer_view_btn text-right">
                          <a href="#inviteModal" data-bs-toggle="modal" data-bs-target="#inviteModal" class="refer_view_btn_link">view all</a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                          <i class="bi bi-envelope-heart"></i>

                        <span>{{$getDataMailReferCount}}</span>
                        <span>INVITED</span>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-4 refer_point_store_box">
                        <div class="refer_view_btn text-right">
                          <a href="#regModal" data-bs-toggle="modal" data-bs-target="#regModal" class="refer_view_btn_link">view all</a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                          <i class="bi bi-card-checklist"></i>
                          <i class="bi bi-pen-fill pen"></i>
                          <span>{{$referReg}}</span>
                        <span>REGISTERED</span>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-4 refer_point_store_box">
                        <div class="refer_view_btn text-right">
                          <a href="#enroleModal" data-bs-toggle="modal" data-bs-target="#enroleModal" class="refer_view_btn_link">view all</a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                          <i class="bi bi-award-fill"></i>
                          <span>{{$referReg}}</span>
                        <span>ENROLLED</span>
                        </div>
                      </div>
                      <div class="col-lg-12 how_work">
                        <div class="text-center">
                          <h1>How it works</h1>
                          <p>Refer a friend and you both get INR 500</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4 col-md-4 work_details_box">
                        <img src="{{asset('assets/images/announce.png')}}" alt="" class="img-fluid">
                        <h3>Refer a Friend</h3>
                        <p>Chat, tweet, email, or share. Pick your channel and share your referral code</p>
                      </div>
                      <div class="col-lg-4 col-md-4 work_details_box">
                        <img src="{{asset('assets/images/announce.png')}}" alt="" class="img-fluid">
                        <h3>Your Friend Enrols</h3>
                        <p>Your friend enrols in any Mindler career guidance program using your referral code</p>
                      </div>
                      <div class="col-lg-4 col-md-4 work_details_box">
                        <img src="{{asset('assets/images/announce.png')}}" alt="" class="img-fluid">
                        <h3>You Both Earn Rewards</h3>
                        <p>Your friend gets INR 500 off on their fee, and you get an INR 500 Amazon voucher</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 terms_box text-left">
                        <h3>Terms & Conditions:</h3>
                        <ul class="terms_list">
                          <li>You cannot refer yourself</li>
                          <li>Offer valid on authentic and paid signups only</li>
                          <li>The offer is valid only for new and non-enrolled users</li>
                          <li>The voucher is tendered when your referral has signed up for a paid career planning service</li>
                          <li>Offer may vary at the discretion of the company</li>
                          <li>All other website terms appl</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Refar Modal -->

          <div class="modal fade refmodref" id="refPop" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-md">
              <div class="modal-content ref_mdal_box">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ref_mdal_box">
                  <div class="caption_top">
                    <div class="row">
                      <div class="col-lg-12">
                        <img src="{{asset('assets/images/refar_.png')}}" alt="" class="img-fluid">
                        <h5>Refer your friends and get INR 500 Amazon gift voucher!</h5>
                        <p>When your friends buy using your referral code they get INR 500 off and you get an INR 500 Amazon voucher</p>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-md-8 all_refar_link_box">
                        <div class="row">
                          <div class="col-md-8 refar_link_box">
                            <div class="link_ref_box">
                              <span>Copy Link</span>
                              <input type="text" readonly value="{{url('refer-user/'.Auth::guard('user')->user()->code)}}" id="refLinkInput" class="form-control" >
                            </div>
                            <button onclick="copyCode()"class="btn btn-primary">Copy text</button>
                          </div>
                          <div class="col-md-4 refar_link_box">
                            <div class="link_ref_box">
                              <span>Copy Code</span>
                              <input readonly type="text" value="{{Auth::guard('user')->user()->code}}" id="refInput" class="form-control" >
                            </div>
                            <button onclick="myFunction()"class="btn btn-primary">Copy text</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="link_ref_box ref_social_box">
                          <p class="social_para">Share on Social Media:</p>
                          <a href=""><img src="{{asset('assets/images/tweeter.png')}}" alt="" class="img-fluid" width="20"/>
                          <a href=""><img src="{{asset('assets/images/facebook.png')}}" alt="" class="img-fluid" width="20"/>
                          <a href=""><img src="{{asset('assets/images/whatsApp.png')}}" alt="" class="img-fluid" width="20"/>
                          <a href=""><img src="{{asset('assets/images/linkedin.png')}}" alt="" class="img-fluid" width="20"/>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#refPopref" data-bs-toggle="modal">Send via mail</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade refmodref" id="refPopref" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-md">
              <div class="modal-content ref_mdal_box">
                <div class="modal-header">
                  <button class="btn btn-primary" data-bs-target="#refPop" data-bs-toggle="modal">Back</button>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{url('/user/send-refer-mail')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <input type="text" placeholder="Name" name="mailer_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Mail" name="mailer_mail" class="form-control" required>
                    </div>
                    <!-- <div class="form-group">
                      <input type="tel" placeholder="Mobile" class="form-control" required>
                    </div> -->
                    <div class="form-group">
                      <input type="text" name="subject" class="form-control" placeholder="Subject: Referral Code - Invitation to Join Futurelit" disabled>
                    </div>
                    <div class="msg_refer_box">
                      <p>I discovered my perfect career with Mindler. You can, too!</p>
                      <p>Mindler helps you make sense of the thousands of career options out there to select the perfect one. I think you should give it a go.</p>
                      <p>Use my referral link below to get Rs. 500 off when you enroll into any Mindler career guidance program or simply use this code: basl6A in the cart page.</p>
                      <p>You can also try out a free assessment and get a 15-min counselling call before you enroll.</p>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                  </form>
                </div>
              </div>
            </div>
          </div>


          <div class="modal fade upgrade_box" id="enroleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">ENROLLED USERS LIST</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body store_box">
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="position-sticky top-0">
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Date & Time</th>
                            </tr>
                          </thead>
                          <tbody>
                          @if($referReg > 0)
                            @foreach ($data['referList'] as $referRegUser)
                            <tr>
                              <td>{{$referRegUser['name']}}</td>
                              <td>{{$referRegUser['email']}}</td>
                              <td>{{$referRegUser['dateTime']}}</td>
                            </tr>
                            @endforeach
                            @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                   </div>
                </div>
              </div>
            </div>
          </div>


          <div class="modal fade upgrade_box" id="regModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">REGISTERED USERS LIST</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body store_box">
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="position-sticky top-0">
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Date & Time</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if($referReg > 0)
                            @foreach ($data['referList'] as $referRegUser)
                            <tr>
                              <td>{{$referRegUser['name']}}</td>
                              <td>{{$referRegUser['email']}}</td>
                              <td>{{$referRegUser['dateTime']}}</td>
                            </tr>
                            @endforeach
                            @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                   </div>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade upgrade_box" id="inviteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">INVITED LISTS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body store_box">
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="position-sticky top-0">
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Date & Time</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if($getDataMailReferCount > 0)
                            @foreach ($getDataMailRefer as $getDataMailReferValue)
                            <tr>
                              <td>{{$getDataMailReferValue->refer_name}}</td>
                              <td>{{$getDataMailReferValue->refer_email}}</td>
                              <td>{{date('l jS F Y h:i A',strtotime($getDataMailReferValue->created_at))}}</td>
                            </tr>
                            @endforeach
                            @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                   </div>
                </div>
              </div>
            </div>
          </div>


@endsection
@section('scripts')
<script src="{{asset('js/script.js')}}"></script>
@endsection
