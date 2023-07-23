<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function indexUser($show){
        if($show == "list"){
            $userList = User::where('role','user')->orderBy('created_at','DESC')->get();
            return view('admin.Dashboard.user',compact(['userList']));
        }else{
            return view('admin.Dashboard.404');
        }
    }
}
