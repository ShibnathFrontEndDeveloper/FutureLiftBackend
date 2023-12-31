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
    public function index404(){
        return view('admin.Dashboard.404');
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
            if(Auth::guard('admin')->user()->status == 'active'){
                Toastr::success('Login Successfully','success');
                return Redirect('/admin/admin-dashboard');
            }else{
                Auth::guard('admin')->logout();
                Toastr::error('Your account has been deactivated','Account Deactivate');
    		    return redirect()->back();
            }
    	}else{
            Toastr::error('Email and password mismatch','Please try again');
    		return redirect()->back();
    	}
    }
    public function adminLogout(){
        Auth::guard('admin')->logout();
        Toastr::success('Logout Successfully','success');
        return Redirect('/admin/login');
    }
    public function adminForgetPasswordIndex(){
        return view('admin.forget-password');
    }
    public function submitForgetPasswordAdminFun(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required'
        ]);

        if ($validator->fails()) {
        	Toastr::error('Email field are mandatory','error');
        	return back()->withInput();
        }

        $exits = User::where('email',$request->email)->where('role','admin');
        if($exits->get()->count() == 0){
            Toastr::error('Email id does not exist','error');
        	return back()->withInput();
        }

        $exits = $exits->first();

        $uniqueCode = Helpers::uniqueCode(80);
        $uniqueCode2 = Helpers::uniqueCode(90);
        $Iddecode = base64_encode(base64_encode($exits->id));
        $linkGenerate = base64_encode($uniqueCode);

        $url = url('/admin/new-password-set/'.$Iddecode.'/'.$linkGenerate.'/'.$uniqueCode2);

        $html = '';
        $html .= Helpers::forgotPasswordEmailContent($exits->name,$url);
        $subject = "Password Reset Instructions for FUTURE LIFT Admin";
        $mailSend = Helpers::phpMailerMailSend($request->email,$exits->name,$subject,$html);

        Toastr::success('We have e-mailed your password reset link','success');
        return back();


    }
    public function adminNewPasswordIndex($id,$link,$linkT){
      $idDecode = base64_decode(base64_decode($id));
      return view('admin.reset-password',compact(['idDecode']));
    }
    public function newPasswordSubmitAdminFun(Request $request){
        $update = User::find($request->id);
        $update->password = Hash::make($request->password);
        $update->save();

        Toastr::success('Password reset successfully','success');
        return Redirect('/admin/login');
    }
    public function adminChangePasswordIndex($show){
        if($show == "add"){
            return view('admin.Dashboard.change-password');
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function adminChangePasswordFun(Request $request){
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

        if (!(Hash::check($request->old_password, Auth::guard('admin')->user()->password))) {
            Toastr::error('Old password is not correct','error');
            return back()->withInput();
        }

        $user = User::find(Auth::guard('admin')->user()->id);
        $user->password = Hash::make($request->password);
        $user->save();

        Toastr::success('Password Updated Successfully','success');
        return Redirect('/admin/admin-dashboard');
    }
}
