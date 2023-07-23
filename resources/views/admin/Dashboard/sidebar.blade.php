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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('Dashboard/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('Dashboard/assets/images/favicon.png')}}" />
    <style>
        .content-wrapper{
            color:#000000 !important;
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
                  <img class="img-xs rounded-circle " src="{{asset('assets/images/no-user.png')}}" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Admin</h5>
                </div>
              </div>

            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link {{Request::is('admin/admin-dashboard')?'active':''}}" href="{{url('admin/admin-dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items {{Request::is('admin/user/list')?'active':''}}">
            <a class="nav-link" href="{{url('admin/user/list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Users List</span>
            </a>
          </li>
          <li class="nav-item menu-items {{Request::is('admin/book-session/list')?'active':''}}">
            <a class="nav-link {{Request::is('admin/book-session/list')?'active':''}}" href="{{url('admin/book-session/list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Book Session</span>
            </a>
          </li>
          <li class="nav-item menu-items {{Request::is('admin/counselling-session/list')?'active':''}}">
            <a class="nav-link {{Request::is('admin/counselling-session/list')?'active':''}}" href="{{url('admin/counselling-session/list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Counselling Session</span>
            </a>
          </li>
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
            <a class="navbar-brand brand-logo-mini" href="../index.html"style="color:#6a1ddf; font-weight: 800;">F</a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>

            <ul class="navbar-nav navbar-nav-right">

              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="{{asset('assets/images/no-user.png')}}" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Admin</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
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
    //     $('button[type="submit"]').click(function() {
    //         $('.modal').modal('hide');
    //         $("#ftco-loader").show();
    //   });







    </script>
    @yield('scripts')
  </body>
</html>
