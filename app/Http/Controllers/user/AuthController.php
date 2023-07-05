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

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->state = $request->state;
        $user->save();

        Toastr::success('Signup Successfully','success');
        return Redirect('/login-signup');
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
}
