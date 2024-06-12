<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Futurelift Admin @yield('title')</title>
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
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('Dashboard/assets/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css" rel="stylesheet"/>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('Dashboard/assets/images/favicon.png')}}" />
    <style>
        .content-wrapper{
            color:#000000 !important;
        }
        select.form-control,
        select.asColorPicker-input,
        .dataTables_wrapper select,
        .jsgrid .jsgrid-table .jsgrid-filter-row select,
        .select2-container--default select.select2-selection--single,
        .select2-container--default .select2-selection--single select.select2-search__field,
        select.typeahead,
        select.tt-query,
        select.tt-hint{
            border: 1px solid !important;
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
        .lib-admin-design{
            padding: 12px;
            border: 1px solid #00000047;
        }
        .ref_mdal_box {
            background: #fff;
            color: rgba(0, 0, 0, 0.5);
            overflow-y: scroll;
            height: 350px;
        }
    </style>
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
                  <img class="img-xs rounded-circle " src="{{(Auth::guard('admin')->user()->profile_image)?asset('assets/user_images/'.Auth::guard('admin')->user()->profile_image):asset('assets/images/no-user.png')}}" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{ Auth::guard('admin')->user()->name  }}</h5>
                </div>
              </div>

            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          @php
              $roleMenu = App\Helpers::userIdWiseMenu(Auth::guard('admin')->user()->id);
          @endphp
          @if (count($roleMenu) > 0)
            @foreach ($roleMenu as $roleMenuKey => $roleMenuValue)
            @if(App\Helpers::userIdWiseRoleName(Auth::guard('admin')->user()->id) != 'Counselor')
            <li class="nav-item menu-items {{Request::is($roleMenuValue->url)?'active':''}}">
                <a class="nav-link" href="{{url($roleMenuValue->url)}}">
                <span class="menu-icon">
                    <?=$roleMenuValue->icon?>
                </span>
                <span class="menu-title">{{$roleMenuValue->name}}</span>
                </a>
            </li>
            @endif
            @endforeach
          @endif
          @if(App\Helpers::userIdWiseRoleName(Auth::guard('admin')->user()->id) == 'Counselor')
            <li class="nav-item menu-items {{Request::is('admin/admin-dashboard')?'active':''}}">
                <a class="nav-link" href="{{url('/admin/admin-dashboard')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items {{Request::is('admin/my-profile')?'active':''}}">
                <a class="nav-link" href="{{url('/admin/my-profile')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-account-settings"></i>
                </span>
                <span class="menu-title">My Profile</span>
                </a>
            </li>
            <li class="nav-item menu-items {{Request::is('admin/counselling-session/list')?'active':''}}">
                <a class="nav-link" href="{{url('/admin/counselling-session/list')}}">
                <span class="menu-icon">
                <svg width="148" height="127" viewBox="0 0 148 127" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M116.332 92.4069C116.07 92.3807 115.755 92.3807 115.466 92.4069C109.22 92.197 104.26 87.0793 104.26 80.7806C104.26 74.3506 109.456 69.1279 115.912 69.1279C122.342 69.1279 127.565 74.3506 127.565 80.7806C127.539 87.0793 122.579 92.197 116.332 92.4069Z" stroke="#D71D5C" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M103.21 102.091C96.8585 106.343 96.8585 113.272 103.21 117.497C110.427 122.326 122.263 122.326 129.481 117.497C135.832 113.245 135.832 106.317 129.481 102.091C122.29 97.2886 110.453 97.2886 103.21 102.091Z" stroke="#D71D5C" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M31.0156 84.0207L35.2091 88.2141L47.7894 75.6338" stroke="#D71D5C" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M64.5068 84.0205H93.8609" stroke="#D71D5C" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M31.0156 44.881L35.2091 49.0745L47.7894 36.4941" stroke="#D71D5C" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M64.5068 44.8809H93.8609" stroke="#D71D5C" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M95.02 0H30C13.4315 0 0 13.4315 0 30V95.02C0 111.589 13.4315 125.02 30 125.02H94V120.02H30C16.1929 120.02 5 108.827 5 95.02V30C5 16.1929 16.1929 5 30 5H95.02C108.827 5 120.02 16.1929 120.02 30V63H125.02V30C125.02 13.4315 111.589 0 95.02 0Z" fill="#D71D5C"/>
                </svg>
                </span>
                <span class="menu-title">Counselling Session</span>
                </a>
            </li>
            <li class="nav-item menu-items {{Request::is('admin/my-holiday/list')?'active':''}}">
                <a class="nav-link" href="{{url('/admin/my-holiday/list')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-format-list-checks"></i>
                </span>
                <span class="menu-title">My Holiday</span>
                </a>
            </li>
            <li class="nav-item menu-items {{Request::is('admin/my-earning-history')?'active':''}}">
                <a class="nav-link" href="{{url('/admin/my-earning-history')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-shield"></i>
                </span>
                <span class="menu-title">My Earning History</span>
                </a>
            </li>
            <li class="nav-item menu-items {{Request::is('admin/admin-help')?'active':''}}">
                <a class="nav-link" href="{{url('/admin/admin-help')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-help-circle-outline"></i>
                </span>
                <span class="menu-title">Help</span>
                </a>
            </li>
          @endif
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">My Resources</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../blog.html">Blog Career</a></li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item menu-items">
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
          </li> -->
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
            <button class="navbar-toggler navbar-toggler align-self-center navbar_target" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>

            <ul class="navbar-nav navbar-nav-right">

              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="{{asset('assets/images/no-user.png')}}" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::guard('admin')->user()->name  }}</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <!-- <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a> -->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="{{url('/admin/change-password/add')}}">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-onepassword  text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1" >Change Password</p>
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
    <script src="{{asset('Dashboard/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
    <script src="{{asset('toaster/toastr.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
    {!! Toastr::message() !!}


    <script>
        var BASE_URL = "{{url('/admin')}}";
        function logoutUser(){
            const url = "<?=url('admin/logout')?>";
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
        $('.picker_input').datepicker({
            dateFormat: 'dd-mm-yy'
        });


    //     $('button[type="submit"]').click(function() {
    //         $('.modal').modal('hide');
    //         $("#ftco-loader").show();
    //   });


    let navbar_target = document.querySelector('.navbar_target');

    let mainBodyPannel = document.querySelector('.main-panel');
    navbar_target.onclick = ()=>{

      mainBodyPannel.classList.toggle('main_body_margin');
    }







    </script>
    @yield('scripts')
  </body>
</html>
