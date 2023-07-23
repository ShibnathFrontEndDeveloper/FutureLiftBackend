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
}
