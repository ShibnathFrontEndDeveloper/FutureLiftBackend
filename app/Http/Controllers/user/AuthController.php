<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Helpers;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\ReferHistory;
use Session;
use App\Models\User_information;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function indexAuth(){
        return view('user.login-signup');
    }
    public function signupFunction(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'state' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }


        $exits = User::where('email',$request->email)->where('role','user')->get()->count();

        if($exits > 0){
            Toastr::error('User already exists','error');
            return back()->withInput();
        }

        if($request->refer_code != ''){
            $exitsRefer = User::where('code',$request->refer_code)->where('role','user')->get()->count();
            if($exitsRefer == 0){
                Toastr::error('Invalid Refer code!','error');
                return back()->withInput();
            }
        }


        $first_name = Helpers::split_name($request->name);
        $my_referral_code = strtolower(str_replace(' ','',$first_name[0])).Helpers::uniqueCode(5);


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->state = $request->state;
        $user->code = $my_referral_code;
        $user->save();


        $user_information = new User_information();
        $user_information->userId = $user->id;
        $user_information->save();


        if($request->refer_code != ''){
            $referId = User::where('code',$request->refer_code)->where('role','user')->first();
            $refer_history = new ReferHistory();
            $refer_history->userId = $user->id;
            $refer_history->referId = $referId->id;
            $refer_history->save();

            Session::forget('refer_session_code');
        }

        $remember = true;
        if(Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password , 'role' => 'user'],$remember)){
            Toastr::success('Login Successfully','success');
            return Redirect('/user-dashboard');
    	}

        // Toastr::success('Signup Successfully','success');
        // return Redirect('/login-signup');
    }
    public function loginFunction(Request $request){
        $validator = Validator::make($request->all(), [
            'userEmail' => 'required',
            'userPassword' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $remember = true;
        if(Auth::guard('user')->attempt(['email' => $request->userEmail, 'password' => $request->userPassword , 'role' => 'user'],$remember)){
            Toastr::success('Login Successfully','success');
            return Redirect('/user-dashboard');
    	}else{
            Toastr::error('User email and password mismatch','Please try again');
    		return redirect()->back();
    	}
    }
    public function logoutFunction(Request $request){
        Auth::guard('user')->logout();
        $request->session()->flush();
        Toastr::success('Logout Successfully','success');
        return Redirect('/');
    }
    public function directLogin($request){
        $remember = true;
        if(Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password , 'role' => 'user'],$remember)){
            Toastr::success('Login Successfully','success');
            return Redirect('/user-dashboard');
    	}
    }
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
        $userData = Socialite::driver('facebook')->user();
        $exits = User::where('email',$userData->email)->where('role','user');
        if($exits->get()->count() > 0){
            $exitData = $exits->first();
            $remember = true;
            $pass = "bkqmk2u50psss";
            if(Auth::guard('user')->attempt(['email' => $exitData->email, 'password' => $pass , 'role' => 'user'],$remember)){
                Toastr::success('Login Successfully','success');
                return Redirect('/user-dashboard');
            }else{
                Toastr::error('User already exists with this email id','success');
                return Redirect('/login-signup');
            }
        }else{
            $first_name = Helpers::split_name($userData->name);
            $my_referral_code = strtolower(str_replace(' ','',$first_name[0])).Helpers::uniqueCode(5);

            $pass = "bkqmk2u50psss";

            $user = new User();
            $user->name = $userData->name;
            $user->email = $userData->email;
            $user->password = Hash::make($pass);
            $user->code = $my_referral_code;
            $user->register_on = 'facebook';
            $user->save();


            $user_information = new User_information();
            $user_information->userId = $user->id;
            $user_information->save();

            $remember = true;
            if(Auth::guard('user')->attempt(['email' => $user->email, 'password' => $pass , 'role' => 'user'],$remember)){
                Toastr::success('Login Successfully','success');
                return Redirect('/user-dashboard');
            }

        }
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        $userData = Socialite::driver('google')->user();
        $exits = User::where('email',$userData->email)->where('role','user');
        if($exits->get()->count() > 0){
            $exitData = $exits->first();
            $remember = true;
            $pass = "bkqmk2u50psss";
            if(Auth::guard('user')->attempt(['email' => $exitData->email, 'password' => $pass , 'role' => 'user'],$remember)){
                Toastr::success('Login Successfully','success');
                return Redirect('/user-dashboard');
            }else{
                Toastr::error('User already exists with this email id','success');
                return Redirect('/login-signup');
            }
        }else{
            $first_name = Helpers::split_name($userData->name);
            $my_referral_code = strtolower(str_replace(' ','',$first_name[0])).Helpers::uniqueCode(5);

            $pass = "bkqmk2u50psss";

            $user = new User();
            $user->name = $userData->name;
            $user->email = $userData->email;
            $user->password = Hash::make($pass);
            $user->code = $my_referral_code;
            $user->register_on = 'google';
            $user->save();


            $user_information = new User_information();
            $user_information->userId = $user->id;
            $user_information->save();

            $remember = true;
            if(Auth::guard('user')->attempt(['email' => $user->email, 'password' => $pass , 'role' => 'user'],$remember)){
                Toastr::success('Login Successfully','success');
                return Redirect('/user-dashboard');
            }
        }

    }
    public function indexChangePassword(){
        return view('user.Dashboard.change-password');
    }
    public function updatePasswordFun(Request $request){
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        if (!(Hash::check($request->old_password, Auth::guard('user')->user()->password))) {
            Toastr::error('Old password is not correct','error');
            return back()->withInput();
        }

        $user = User::find(Auth::guard('user')->user()->id);
        $user->password = Hash::make($request->password);
        $user->save();

        Toastr::success('Password Updated Successfully','success');
        return Redirect('/user-dashboard');

    }
}
