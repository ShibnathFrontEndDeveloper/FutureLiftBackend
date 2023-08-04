<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{asset('css/login&signupForm.css')}}" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="{{asset('css/login_signupForm.css')}}" />
    <link rel="stylesheet" href="{{asset('toaster/toastr.min.css')}}">
  </head>
  <body>
    <div class="container {{(Session::has('refer_session_code'))?'sign-up-mode':''}}">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="{{url('/user/login')}}" class="sign-in-form" method="post">
            @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name="userEmail" value="{{old('userEmail')}}" placeholder="UserName" required autocomplete="off"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
                <input class="password" type="password" placeholder="Password" name="userPassword" required/>
              <i
                class="fas fa-eye-slash togglePassword"
                style="position: absolute; right: 1rem"
              ></i>
            </div>
            <div class="container2">
              <a href="{{url('/forget-password')}}" class="p2">Forgot Password?</a>
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <!-- <a href="{{url('login/facebook')}}" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a> -->
              <a href="{{url('login/google')}}" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>
          <form action="{{url('/user/signup')}}" class="sign-up-form" name="RegForm" method="post">
            @csrf
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input
                type="text"
                placeholder="Full Name"
                name="name"
                value="{{old('name')}}"
                required
              />
            </div>
            <div class="input-field">
              <i class="fas fa-mobile"></i>
              <input
                type="mobile"
                pattern="^[6789]\d{9,9}$"
                placeholder="Mobile No."
                name="phone"
                value="{{old('phone')}}"
                required
              />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              @if(request()->get('reg'))
              <input
                type="email"
                placeholder="Email I'd"
                name="email"
                value="{{request()->get('reg')}}"
                required
              />
              @else
              <input
                type="email"
                placeholder="Email I'd"
                name="email"
                value="{{old('email')}}"
                required
              />
              @endif
            </div>
            <div class="input-field">
              <i class="fas fa-city"></i>
              <select id="Select State" name="state" required>
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
            <div class="input-field">
            <i class="fas fa-sitemap"></i>
            @if(Session::has('refer_session_code'))
              <input
                type="text"
                placeholder="Enter Refer Code"
                name="refer_code"
                value="{{Session::get('refer_session_code')}}"
              />
            @else
            <input
                type="text"
                placeholder="Enter Refer Code"
                name="refer_code"
                value="{{old('refer_code')}}"
              />
            @endif
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input
                class="password"
                type="password"
                placeholder="Create Password"
                name="password"
                required
              />
              <i
                class="fas fa-eye-slash togglePassword"
                style="position: absolute; right: 1rem"
              ></i>
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <!-- <a href="{{url('login/facebook')}}" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a> -->
              <a href="{{url('login/google')}}" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Welcome to Future Lift, create your account and get access about
              our education Library!
            </p>
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="{{asset('assets/images/log1.svg')}}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>Welcome back! Sign into continue.</p>
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <img src="{{asset('assets/images/register.svg')}}" class="image" alt="" />
        </div>
      </div>
    </div>







    <script
      src="https://code.jquery.com/jquery-3.6.1.js"
      integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
      crossorigin="anonymous"
    ></script>
    <script src="{{asset('js/login_signupForm.js')}}"></script>
    <script src="{{asset('toaster/toastr.min.js')}}"></script>
    {!! Toastr::message() !!}
  </body>
</html>
