<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Futurelift User @yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('Dashboard/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('Dashboard/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('Dashboard/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('Dashboard/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('Dashboard/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Dashboard/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('toaster/toastr.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('Dashboard/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('Dashboard/assets/images/favicon.png')}}" />
    @yield('csss')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{url('/')}}"><img src="{{asset('Dashboard/assets/images/logo_blak.png/')}}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="{{url('/')}}" style="color:#6a1ddf; font-weight: 800;">F</a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{App\Helpers::imageCheck()}}" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{ App\Helpers::getFirstname()  }}</h5>
                  <span>Kind of Member</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="{{url('/user-profile')}}" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{url('/change-password')}}" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('user-dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('user-profile')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">My Profile</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">My Assessment</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">My Resources</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/blog')}}">Blog Career</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">My Session</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/session')}}"> Sessions</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/refer-and-earn')}}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Refer Friend</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/help')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Help</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="{{url('/')}}"style="color:#6a1ddf; font-weight: 800;">F</a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize" id="tggle_memu">
              <span class="mdi mdi-menu"></span>
            </button>
            @php
                $currenSession = App\Helpers::getCurrentPackage();
            @endphp
            @if ($currenSession != '')
            <ul class="navbar-nav navbar-nav-right">
                <li class="package-li">
                    <div class="package-header">
                        <span>Current Package : {{$currenSession}}</span>
                    </div>
                </li>
            </ul>
            @endif
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                @php
                    $notification = App\Helpers::getUserNotificationList(Auth::guard('user')->user()->id);
                @endphp
                @if (count($notification) > 0)
                @foreach ($notification as $notificationKey => $notificationValue)
                  <a class="dropdown-item preview-item" href="{{url('/notification?highlight='.$notificationValue->id)}}">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        {!!App\Helpers::notificationTypeWiseIcon($notificationValue->type)!!}
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">{{$notificationValue->title}}</p>
                      <p class="text-muted ellipsis mb-0"> {{$notificationValue->content}} </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  @endforeach
                  @else
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-timer-sand-empty"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Notification Not Found</p>
                    </div>
                  </a>
                  @endif
                  <p class="p-3 mb-0 text-center" style="cursor:pointer;" onclick="window.location.href=`{{url('/notification')}}`">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="{{App\Helpers::imageCheck()}}" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::guard('user')->user()->name  }}</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="{{url('/user-profile')}}">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" onclick="logoutUser();">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1" >Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>

        @yield('content')


        <div class="modal popup_box" id="missingPhonePopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content ref_mdal_box">
                    <div class="modal-header">
                        <h1 class="modal-title season_header" id="exampleModalLabel">HI {{strtoupper(Auth::guard('user')->user()->name)}}! </br>Just one last step.</h1>
                    </div>
                    <form action="{{url('/updatePhoneNumber')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row g-5">
                                <div class="col-lg-12 ">
                                    <label for="">Enter Your Phone Number</label>
                                    <input type="number" required name="phoneNumber" pattern="^[6789]\d{9,9}$" id="" class="form-control">
                                </div>
                                <div class="col-lg-12 ">
                                    <label for="">Enter Your State</label>
                                    <select id="Select State" class="form-control" name="state" required>
                                        <option value="">Select State</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Andaman and Nicobar Islands">
                                        Andaman and Nicobar Islands
                                        </option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli">
                                        Dadar and Nagar Haveli
                                        </option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 ">
                                    <label for="">Enter Your Password</label>
                                    <input type="password" required name="password" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary upgrade_btn">Go to My Dashboard</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>








        <div id="ftco-loader" class="show fullscreen pre-loader" style="display: none;">
				<div class="loader-position">
					<img src="{{asset('assets/images/loader.gif')}}" alt="Preloader">
				</div>
			</div>
        <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Future Lift</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="https://www.websolveinfo.com/" target="_blank"> </a></span>
            </div>
          </footer>
          <!-- partial -->
        </div>

        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('Dashboard/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('Dashboard/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('Dashboard/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('Dashboard/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('Dashboard/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('Dashboard/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('Dashboard/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('Dashboard/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('Dashboard/assets/js/misc.js')}}"></script>
    <script src="{{asset('Dashboard/assets/js/settings.js')}}"></script>
    <script src="{{asset('Dashboard/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->

    <!-- End custom js for this page -->
    <script src="{{asset('toaster/toastr.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    {!! Toastr::message() !!}


    <script>
        var BASE_URL = "{{url('/')}}";
        function logoutUser(){
            const url = "<?=url('user/logout')?>";
            swal({
                title: 'Are you sure?',
                text: 'Logout of your account?',
                icon: 'warning',
                buttons: ["Cancel", "Logout"],
                }).then(function(value) {
                if (value) {
                window.location.href = url;
                }
            });
        }


    //     $('button[type="submit"]').click(function() {
    //         $('.modal').modal('hide');
    //         $("#ftco-loader").show();
    //   });
    </script>

    <script>
      let header = document.getElementById('tggle_memu');
      let main_panel = document.getElementById('main_pannel');
      header.onclick =()=>{
        main_panel.classList.toggle('pannel_length');
      }
    </script>
    @if (!Auth::guard('user')->user()->phone)
        <script>
            $("#missingPhonePopup").modal({backdrop: 'static', keyboard: false});
        </script>
    @endif
    @yield('scripts')
  </body>
</html>
