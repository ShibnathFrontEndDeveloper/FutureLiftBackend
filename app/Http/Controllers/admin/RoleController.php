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
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Role;
use App\Models\MenuAccess;
use App\Models\Menu;

class RoleController extends Controller
{
    public function indexRole($show){
        if($show == "list"){
            $role = Role::get();
            return view('admin.Dashboard.role',compact(['role']));
        }else if($show == "add"){
            return view('admin.Dashboard.role');
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function roleAddFun(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $role = new Role();
        $role->name = $request->name;
        $role->save();

        Toastr::success('Role added successfully','success');
        return Redirect('/admin/role/list');
    }
    public function indexRoleEdit($show,$id){
        if($show == "edit"){
            $role = Role::find($id);
            return view('admin.Dashboard.role',compact(['role']));
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function roleEditFun(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $role = Role::find($request->editId);
        $role->name = $request->name;
        $role->save();

        Toastr::success('Role updated successfully','success');
        return Redirect('/admin/role/list');
    }
    public function indexMenuAccess($show,$id){
        if($show == "list"){
            $role = Role::find($id);
            $menuaccess = MenuAccess::where('roleId',$id);
            $menu = Menu::get();
            return view('admin.Dashboard.menu-access',compact(['role','menuaccess','menu']));
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function roleWiseMenuAccess(Request $request){
        if(count($request->menuIdAttr) == 0){
            Toastr::error('Select atleast one menu','error');
            return back();
        }

        $exits = MenuAccess::where('roleId',$request->roleId)->get()->count();

        if($exits > 0){
            MenuAccess::where('roleId',$request->roleId)->update([
                "menuId" => implode(',',$request->menuIdAttr)
            ]);
        }else{
            $menuAccess = new MenuAccess();
            $menuAccess->roleId = $request->roleId;
            $menuAccess->menuId = implode(',',$request->menuIdAttr);
            $menuAccess->save();
        }

        Toastr::success('Menu accees added successfully','success');
        return Redirect('/admin/menu-access/list/'.$request->roleId);


    }
}
