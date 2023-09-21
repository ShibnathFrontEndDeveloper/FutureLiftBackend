<div class="container">
<nav class="navbar d-flex justify-content-around">
    <div class="container-fluid row">
      <div class="header-left-content d-flex align-items-center col-6">
        <button class="navbar-toggler-xl" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <i class="fa-solid fa-bars"></i>
        </button>
        <a href="{{url('/')}}" class="logo"><img src="{{asset('assets/images/new_blak_logo.webp')}}" alt="" class="img-fluid"></a>
      </div>
      <div class="header-right-content col-6 d-flex justify-content-end careerPadding">
      <button type="button" class="btn btn-primary position-relative book_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Book Session
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill ">
          Free
          <span class="visually-hidden">unread messages</span>
        </span>
      </button>
      @if(Auth::guard('user')->check())
      <div class="login_box ">
          <a href="{{url('user-dashboard')}}" class="logLink">Dashboard</a>
      </div>
      @else
      <div class="login_box ">
          <a href="javascript:void(0)" onclick="logInform()" class="logLink">Login</a>
      </div>
      @endif
    </div>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <a href="{{url('/')}}" class="logo"><img src="{{asset('assets/images/new_blak_logo.webp')}}" alt="" class="img-fluid"></a>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1">
            <li class="nav-item">
              <a class="nav-link active px-2" aria-current="page" href="{{url('/')}}"><p>HOME</p></a>
            </li>
            <li class="nav-item dropdown sidemenu-a">
              <a class="nav-link dropdown-toggle d-flex align-items-center px-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <p class="heading">EXPLORE SOMETHING DIFFERENT</p>
                <i class="fa-solid fa-angle-right mx-1 mb-1 rotateIcon"></i>
              </a>
              <ul class="dropdown-menu show">
                <li class="px-0 d-flex align-items-center px-1">
                  <a class="dropdown-item px-0" href="{{url('/personality-test')}}">PERSONALITY TEST</a>
                  <i class="fa fa-angle-right mx-1 mt-1"></i>
                </li>
                <hr class="subheading-border">
                <li class="px-0 d-flex align-items-center px-1">
                  <a class="dropdown-item px-0" href="{{url('/interest-test')}}">INTEREST TEST</a>
                  <i class="fa fa-angle-right mx-1 mt-1"></i>
                </li>
                <hr class="subheading-border">
                <li class="px-0 d-flex align-items-center px-1">
                  <a class="dropdown-item px-0" href="{{url('/iq-test')}}">IQ TEST</a>
                  <i class="fa fa-angle-right mx-1 mt-1"></i>
                </li>
                <hr class="subheading-border">
                <li class="px-0 d-flex align-items-center px-1">
                  <a class="dropdown-item px-0" href="{{url('/aptitude-test')}}">APTITUDE TEST</a>
                  <i class="fa fa-angle-right mx-1 mt-1"></i>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown sidemenu-a">
              <a class="nav-link dropdown-toggle d-flex align-items-center px-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <p class="heading">CAREER COUNSELING</p>
                <i class="fa-solid fa-angle-right mx-1 mb-1 rotateIcon"></i>
              </a>
              <ul class="dropdown-menu">
                <li class="px-0 d-flex align-items-center px-1">
                  <a class="dropdown-item px-0" href="{{url('/eight-ten-counselling')}}">For 8th or 10th Class</a>
                  <i class="fa fa-angle-right mx-1 mt-1"></i>
                </li>
                <hr class="subheading-border">
                <li class="px-0 d-flex align-items-center px-1">
                  <a class="dropdown-item px-0" href="{{url('/ten-twelve-counselling')}}">For 11th or 12th Class</a>
                  <i class="fa fa-angle-right mx-1 mt-1"></i>
                </li>
                <hr class="subheading-border">
                <li class="px-0 d-flex align-items-center px-1">
                  <a class="dropdown-item px-0" href="{{url('/college-graduate-counselling')}}">For Graduate</a>
                  <i class="fa fa-angle-right mx-1 mt-1"></i>
                </li>
                <hr class="subheading-border">
                <!-- <li class="px-0 d-flex align-items-center px-1">
                  <a class="dropdown-item px-0" href="#">For Working Professional</a>
                  <i class="fa fa-angle-right mx-1 mt-1"></i>
                </li> -->
              </ul>
            </li>

            <!-- <li class="nav-item dropdown sidemenu-a">
              <a class="nav-link dropdown-toggle d-flex align-items-center px-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <p class="heading">EXPLORE SCHOLARSHIP</p>
                <i class="fa-solid fa-angle-right mx-1 mb-1 rotateIcon"></i>
              </a>
              <ul class="dropdown-menu">
                <li class="px-0 d-flex align-items-center px-1">
                  <a class="dropdown-item px-0" href="#">FUTURE LIFT SCHOLARSHIP</a>
                  <i class="fa fa-angle-right mx-1 mt-1"></i>
                </li>
                <hr class="subheading-border">
                <li class="px-0 d-flex align-items-center px-1">
                  <a class="dropdown-item px-0" href="#">GOVERNMENT SCHOLARSHIP</a>
                  <i class="fa fa-angle-right mx-1 mt-1"></i>
                </li>
                <hr class="subheading-border">
                <li class="px-0 d-flex align-items-center px-1">
                  <a class="dropdown-item px-0" href="#">PRIVATE SCHOLARSHIP</a>
                  <i class="fa fa-angle-right mx-1 mt-1"></i>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown sidemenu-a">
              <a class="nav-link dropdown-toggle d-flex align-items-center px-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <p class="heading">EDUCATION NEWS</p>
                <i class="fa-solid fa-angle-right mx-1 mb-1 rotateIcon"></i>
              </a>
              <ul class="dropdown-menu"></ul>
            </li> -->
            <li class="nav-item dropdown sidemenu-a">
              <a class="nav-link dropdown-toggle d-flex align-items-center px-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <p class="heading">FUTURE LIFT BLOG</p>
                <i class="fa-solid fa-angle-right mx-1 mb-1 rotateIcon"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/blog')}}">Blog</a></li>
              </ul>
            </li>
            <!-- <li class="px-2 py-1 d-flex align-items-center justify-content-between">
              <p style="color: green; font-weight: 600">REFER AND EARN</p>
              <img src="{{asset('assets/images/newBadge.png')}}" alt="" style="max-width: 40px">
            </li> -->
            <li class="my-2 sidemenu-social p-2">
              <p style="color: white">CONNECT WITH US</p>
              <div class="sidemenu-social-icon">
                <a href="https://www.facebook.com/Future-Lift-Education-PVT-LTD-112127913993548/"><i class="fab fa-facebook-square pe-1 py-1"></i></a>
                <a href="https://www.instagram.com/invites/contact/?i=2nxyq2sxhhyi&amp;utm_content=7k4l34c"><i class="fab fa-instagram-square pe-1 py-1"></i></a>
                <a href=" https://twitter.com/Futurelift_edu?s=09"><i class="fab fa-twitter-square pe-1 py-1"></i></a>
                <a href="https://youtube.com/channel/UCvY_1Aon-HqSHzqWwvIU2zQ"><i class="fab fa-youtube-square pe-1 py-1"></i></a>
                <a href="https://www.linkedin.com/company/futurelift-duication"><i class="fab fa-linkedin pe-1 py-1"></i></a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>
<script
      src="https://code.jquery.com/jquery-3.6.1.js"
      integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
      crossorigin="anonymous"
    ></script>
<script>
  $(document).ready(function () {
    $(".dropdown-toggle").click(function (e) {
      $(this).find(".rotateIcon").toggleClass("openDrop");
      $(this).find(".heading").toggleClass("headings-color");
      e.preventDefault();
      e.stopPropagation();
      $(document).click(function () {
        $(".rotateIcon").removeClass("openDrop");
        $(".heading").removeClass("headings-color");
      });
    });
  });
  function sighUpform() {
    localStorage.setItem("display", "signUp");
  }
  function logInform() {
    localStorage.setItem("display", "signIn");
    window.location.href="<?=url('login-signup')?>";
  }
</script>
