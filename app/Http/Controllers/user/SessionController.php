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
use App\Models\UserSubscriptionModel;
use App\Models\SessionHistory;

class SessionController extends Controller
{
    public function indexSession(){
        $userSubscription = UserSubscriptionModel::where('userId',Auth::guard('user')->user()->id)->where('status','active')->first();
        $sessionHas = UserSubscriptionModel::where('userId',Auth::guard('user')->user()->id)->where('status','active')->get()->count();
        if($sessionHas > 0){
            $sessionBookData = SessionHistory::where('userId', Auth::guard('user')->user()->id)->where('package_id',$userSubscription->package_id)->where('package_status','active');
            $sessionData = CounsellingPrice::find($userSubscription->package_id);
            $sessionHas = $sessionBookData->get()->count();
            $allData = $sessionBookData->get();
        }else{
            $sessionData = [];
            $allData = [];
        }
        return view('user.Dashboard.session',compact(['sessionHas','sessionData','allData']));
    }
    public function bookCareerSessionFun(Request $request){
        $validator = Validator::make($request->all(), [
            'schedule_date' => 'required',
            'schedule_time' => 'required'
        ]);

        if ($validator->fails()) {
        	Toastr::error('All fields are mandatory','error');
        	return back()->withInput();
        }

        $timeFormat = date('H:i:s',strtotime($request->schedule_time));
        $dateFormat = date('Y-m-d',strtotime($request->schedule_date));

        SessionHistory::where('id',$request->sessionId)->update([
            "session_date_time" => $dateFormat.' '.$timeFormat,
            "status" => 'Processing'
        ]);

        Toastr::success('Session booked Successfully','success');
        return Redirect('/session');
    }
}
