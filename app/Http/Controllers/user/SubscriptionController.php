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


class SubscriptionController extends Controller
{
    public function subscriptionSubmitFunction($subId){
        $userExitsPackage = UserSubscriptionModel::where('userId', Auth::guard('user')->user()->id)->where('status','active');
        if($userExitsPackage->get()->count() > 0){
            $subData = $userExitsPackage->first();
            if($subData->package_id == $subId){
                Toastr::warning('You are already subscribe in this plan','warning');
                return back();
            }

            $user_subcription_update = UserSubscriptionModel::find($subData->id);
            $user_subcription_update->status = 'inactive';
            $user_subcription_update->save();

            $user_subcription = new UserSubscriptionModel();
            $user_subcription->userId = Auth::guard('user')->user()->id;
            $user_subcription->package_id = $subId;
            $user_subcription->save();

            $getCoun = CounsellingPrice::find($subId);

            $userSessionHas = SessionHistory::where('userId', Auth::guard('user')->user()->id)->where('package_id',$subData->package_id)->where('package_status','active');

            if($userSessionHas->get()->count() > 0){
                $sesion_history_update = SessionHistory::where('userId', Auth::guard('user')->user()->id)->where('package_id',$subData->package_id)->where('package_status','active')->update([
                    "package_status" => 'inactive'
                ]);
            }

            if($getCoun->session_count > 0){
                for ($i=0; $i < $getCoun->session_count; $i++){
                    $sesion_history = new SessionHistory();
                    $sesion_history->userId = Auth::guard('user')->user()->id;
                    $sesion_history->package_id = $subId;
                    $sesion_history->status = ($i==0)?'Active':'Pending';
                    $sesion_history->save();
                }

            }

        }else{
            $user_subcription = new UserSubscriptionModel();
            $user_subcription->userId = Auth::guard('user')->user()->id;
            $user_subcription->package_id = $subId;
            $user_subcription->save();

            $getCoun = CounsellingPrice::find($subId);

            if($getCoun->session_count > 0){
                for ($i=0; $i < $getCoun->session_count; $i++){
                    $sesion_history = new SessionHistory();
                    $sesion_history->userId = Auth::guard('user')->user()->id;
                    $sesion_history->package_id = $subId;
                    $sesion_history->status = ($i==0)?'Active':'Pending';
                    $sesion_history->save();
                }

            }
        }




        Toastr::success('Subscription updated successfully','success');
        return Redirect('/user-dashboard');

    }
}
