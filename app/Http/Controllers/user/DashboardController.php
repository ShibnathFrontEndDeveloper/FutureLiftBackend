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

class DashboardController extends Controller
{
    public function indexDashboard(){
        $profileCompleteStat = $this->profileCompletePercentage();
        $profilePercentage = $profileCompleteStat['percentage'];
        $profileField = $profileCompleteStat['totalField'];
        $profileComplete = $profileCompleteStat['completed'];
        return view('user.Dashboard.dashboard',compact(['profilePercentage','profileField','profileComplete']));
    }
    public function profileCompletePercentage(){
        $dataCount = User_information::where('userId',Auth::guard('user')->user()->id)->get()->count();
        $totalField = 19;
        $completed = 0;
        if($dataCount > 0){
            $data = User_information::where('userId',Auth::guard('user')->user()->id)->first();
            if($data->father_name){
                $completed = $completed + 1;
            }
            if($data->mother_name){
                $completed = $completed + 1;
            }
            if($data->profile_image){
                $completed = $completed + 1;
            }
            if($data->dob){
                $completed = $completed + 1;
            }
            if($data->city){
                $completed = $completed + 1;
            }
            if($data->gender){
                $completed = $completed + 1;
            }
            if($data->college){
                $completed = $completed + 1;
            }
            if($data->university){
                $completed = $completed + 1;
            }
            if($data->course){
                $completed = $completed + 1;
            }
            if($data->year_of_passing){
                $completed = $completed + 1;
            }
            if($data->father_guardian_name){
                $completed = $completed + 1;
            }
            if($data->mother_guardian_name){
                $completed = $completed + 1;
            }
            if($data->father_profession){
                $completed = $completed + 1;
            }
            if($data->mother_profession){
                $completed = $completed + 1;
            }
            if($data->recent_subject){
                if($this->nullCheckingProfileField($data->recent_subject)){
                    $completed = $completed + 1;
                }
            }
            if($data->recent_score){
                if($this->nullCheckingProfileField($data->recent_score)){
                    $completed = $completed + 1;
                }
            }
            if($data->previous_subject){
                if($this->nullCheckingProfileField($data->previous_subject)){
                    $completed = $completed + 1;
                }
            }
            if($data->previous_score){
                if($this->nullCheckingProfileField($data->previous_score)){
                    $completed = $completed + 1;
                }
            }
        }
        $user = User::find(Auth::guard('user')->user()->id);
        if($user->name){
            $completed = $completed + 1;
        }

        $percentage = ($completed / $totalField) * 100;

        $setData = [
            "percentage" => round($percentage),
            "completed" => $completed,
            "totalField" => $totalField
        ];

        return $setData;
    }
    public function nullCheckingProfileField($fieldData){
        $field = false;
        foreach(json_decode($fieldData,true) as $key => $value){
            if($value!=null){
                $field = true;
                break;
            }
        }
        return $field;
    }
}
