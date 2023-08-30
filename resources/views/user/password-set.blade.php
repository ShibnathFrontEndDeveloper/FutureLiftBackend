<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('user.includes.favicon')
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{asset('css/login&signupForm.css')}}" />
    <title>Forget Password Form</title>
    <link rel="stylesheet" href="{{asset('css/login_signupForm.css')}}" />
    <link rel="stylesheet" href="{{asset('toaster/toastr.min.css')}}">
  </head>
  <body>
    <div class="container sign-in-mode">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="{{url('/setResetPassword')}}" class="sign-in-form" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$idDecode}}">
            <h2 class="title">Set New Password</h2>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" value="" placeholder="Enter New Password" required autocomplete="off"/>
            </div>
            <input type="submit" value="Submit" class="btn solid" />
          </form>

        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
                Welcome back! Sign into continue.
            </p>
            <button class="btn transparent" onclick="window.location.href=`{{url('/login-signup')}}`">Sign in</button>
          </div>
          <img src="{{asset('assets/images/log1.svg')}}" class="image" alt="" />
        </div>
      </div>
    </div>







    <script
      src="https://code.jquery.com/jquery-3.6.1.js"
      integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
      crossorigin="anonymous"
    ></script>
    <!-- <script src="{{asset('js/login_signupForm.js')}}"></script> -->
    <script src="{{asset('toaster/toastr.min.js')}}"></script>
    {!! Toastr::message() !!}
  </body>
</html>
