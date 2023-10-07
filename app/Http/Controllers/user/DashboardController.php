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
use App\Models\User_information;
use App\Models\Blog;

class DashboardController extends Controller
{
    public function indexDashboard(){
        $profileCompleteStat = Helpers::profileCompletePercentage();
        $profilePercentage = $profileCompleteStat['percentage'];
        $profileField = $profileCompleteStat['totalField'];
        $profileComplete = $profileCompleteStat['completed'];
        $latestBlog = Blog::orderBy('id', 'DESC')->limit(3)->get();
        return view('user.Dashboard.dashboard',compact(['profilePercentage','profileField','profileComplete','latestBlog']));
    }


}
