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
use App\Models\CounsellingPrice;



class PriceController extends Controller
{
    public function indexPrice(){
        $allPrice = CounsellingPrice::get();
        return view('user.Dashboard.price',compact(['allPrice']));
    }
}
