<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\UserRole;

class UserController extends Controller
{
    public function indexUser($show){
        if($show == "list"){
            $userList = User::orderBy('created_at','DESC')->get();
            return view('admin.Dashboard.user',compact(['userList']));
        }else if($show == 'add'){
            $role = Role::get();
            return view('admin.Dashboard.user',compact(['role']));
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function userAddFun(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'password' => 'required',
            // 'metting_link' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $exits = User::where('email',$request->email)->where('role','admin')->get()->count();
        if($exits > 0){
            Toastr::error('User email already exists','error');
            return back()->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->metting_link = $request->metting_link;
        $user->role = 'admin';
        $user->password = Hash::make($request->password);
        $user->save();


        $userRole = new UserRole();
        $userRole->userId = $user->id;
        $userRole->roleId = $request->role;
        $userRole->save();


        Toastr::success('User added successfully','success');
        return Redirect('/admin/user/list');
    }
    public function indexUserEdit($show,$id){
        if($show == "edit"){
            $user = User::find($id);
            $role = Role::get();
            $currentRole = UserRole::where('userId',$id)->first();
            return view('admin.Dashboard.user',compact(['user','role','currentRole']));
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function userEditFun(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'role' => 'required',
            // 'metting_link' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $user = User::find($request->editId);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->status = $request->status;
        $user->metting_link = $request->metting_link;
        $user->save();

        UserRole::where('userId',$request->editId)->update([
            "roleId" => $request->role
        ]);

        Toastr::success('User updated successfully','success');
        return Redirect('/admin/user/list');
    }
}
