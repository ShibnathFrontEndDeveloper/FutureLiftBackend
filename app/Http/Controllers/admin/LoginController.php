<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Helpers;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function adminLoginIndex(){
        return view('admin.login');
    }
    public function submitLogin(Request $request){
        $validator = Validator::make($request->all(), [
            'userName' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $remember = true;
        if(Auth::guard('admin')->attempt(['email' => $request->userName, 'password' => $request->password , 'role' => 'admin'],$remember)){
            Toastr::success('Login Successfully','success');
            return Redirect('/admin/admin-dashboard');
    	}else{
            Toastr::error('Admin email and password mismatch','Please try again');
    		return redirect()->back();
    	}
    }
    public function adminLogout(){
        Auth::guard('admin')->logout();
        Toastr::success('Logout Successfully','success');
        return Redirect('/admin/login');
    }
}
