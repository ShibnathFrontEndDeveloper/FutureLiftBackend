<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
	<title>Futurelift || ADMIN :: Login</title>
	<link rel="icon" href="{{asset('images/fav.png')}}" type="image/x-icon"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('css/admin-login.css')}}">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="{{asset('toaster/toastr.min.css')}}">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container">
	    <div class="log_open">
	        <div class="col-lg-6 me-5">
				<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
				<lottie-player src="https://assets3.lottiefiles.com/packages/lf20_zfydw4bk.json"  background="transparent"  speed="1"  style="width: 512px; height: 512px;"  loop  autoplay></lottie-player>
			</div>
	        <div class="col-lg-6 form-pos">
	            <div class="d-flex justify-content-center">
					<div class="user_card">
						<div class="d-flex justify-content-center">
							<div class="brand_logo_container">
								<img src="{{asset('/Dashboard/assets/images/logo_blak.png')}}" style="width:100%">
							</div>
						</div>

						<div class="<?=(request()->input('otp'))?'':'d-flex'?> justify-content-center form_container main-form" style="<?=(request()->input('otp'))?'display:none':'display:block'?>">
							<form name="login-form" action="{{url('/admin/adminLogin')}}" method="post">
								@csrf
								<div class="input-group mb-3">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fas fa-user"></i></span>
									</div>
									<input type="text" class="form-control input_user" name="userName" value="{{old('userName')}}" placeholder="Email">
								</div>
								<div class="input-group mb-2">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fas fa-key"></i></span>
									</div>
									<input type="password" class="form-control input_pass" name="password" value="{{old('password')}}" placeholder="Password">
								</div>
								<div class="d-flex justify-content-center mt-3 login_container">
									<button type="submit" name="button" class="btn login_btn">Login</button>
								</div>
							</form>
						</div>


						<div class=" justify-content-center form_container otpCheck" style="<?=(request()->input('otp'))?'display:block':'display:none'?>">
							<form name="login-form" action="{{url('/checkEmailForgotPassword')}}" method="post">
								@csrf
								<div class="input-group mb-3">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fa fa-envelope"></i></span>
									</div>
									<input type="number" class="form-control input_user" name="otp" id="otp" value="" placeholder="Enter OTP">
								</div>
								<div class="d-flex justify-content-center mt-3 login_container">
									<button type="button" name="button" class="btn login_btn" onclick="otpValid()">Submit</button>
								</div>
							</form>
						</div>

						<div class=" justify-content-center form_container emailCheck" style="display: none;">
							<form name="login-form" action="{{url('/checkEmailForgotPassword')}}" method="post">
								@csrf
								<div class="input-group mb-3">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fa fa-envelope"></i></span>
									</div>
									<input type="text" class="form-control input_user" name="email" id="email" value="" placeholder="Enter Email Address">
								</div>
								<div class="d-flex justify-content-center mt-3 login_container">
									<button type="submit" name="button" class="btn login_btn">Submit</button>
								</div>
							</form>
						</div>

						<div class=" justify-content-center form_container password-change" style="display: none;">
							<form name="login-form" action="{{url('/forgotPasswordAdmin')}}" method="post">
								@csrf
								<div class="input-group mb-3">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fas fa-key"></i></span>
									</div>
									<input type="password" class="form-control input_user" required="required" name="newPassword" id="newPassword" value="" placeholder="Enter New Password">
								</div>
								<div class="d-flex justify-content-center mt-3 login_container">
									<button type="submit" name="button" class="btn login_btn">Submit</button>
								</div>
							</form>
						</div>

						<div class="mt-4 forgot">
							<div class=" justify-content-center links text-center">
								<a href="{{url('/admin/forget-password')}}">Forgot your password?</a>
							</div>
						</div>
						<div class="mt-4 login-in" style="display: none;">
							<div class=" justify-content-center links text-center">
								<a href="#" onclick="openLogin()">Login</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	      		</div>
	      		<div class="modal-body">
	      		</div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        		<button type="button" class="btn btn-primary">Save changes</button>
	      		</div>
	    	</div>
	  	</div>
	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('toaster/toastr.min.js')}}"></script>
	<script type="text/javascript">


		function openEmailCheck(){
			$(".emailCheck").addClass('d-flex');
			$(".main-form").removeClass('d-flex')
			$(".main-form").hide('show');
			$(".emailCheck").show('show');
			$(".login-in").show('slow');
			$(".forgot").hide('slow');
		}
		function openLogin(){
			window.location.reload();
		}

		function otpValid(){
			if($("#otp").val() !=''){
				var otpVal = '<?=Session::get('adminForgotOtp')?>';
				if(otpVal == $("#otp").val()){
					$(".otpCheck").hide();
					$(".password-change").show();
				}else{
					alert('Please Enter the valid OTP');
				}
			}
		}


	</script>
    {!! Toastr::message() !!}


</body>
</html>
