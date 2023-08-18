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
        $profileCompleteStat = $this->profileCompletePercentage();
        $profilePercentage = $profileCompleteStat['percentage'];
        $profileField = $profileCompleteStat['totalField'];
        $profileComplete = $profileCompleteStat['completed'];
        $latestBlog = Blog::orderBy('id', 'DESC')->limit(3)->get();
        return view('user.Dashboard.dashboard',compact(['profilePercentage','profileField','profileComplete','latestBlog']));
    }
    public function profileCompletePercentage(){
        $dataCount = User_information::where('userId',Auth::guard('user')->user()->id)->get()->count();
        $totalField = 19;
        $percentage = 0;
        $completed = 0;
        $personal = 0;
        $education = 0;
        $family = 0;
        $academic = 0;
        if($dataCount > 0){
            $data = User_information::where('userId',Auth::guard('user')->user()->id)->first();
            if($data->father_name){
                $completed = $completed + 1;
                $personal = $personal + 1;
            }
            if($data->mother_name){
                $completed = $completed + 1;
                $personal = $personal + 1;
            }
            if($data->profile_image){
                $completed = $completed + 1;
                $personal = $personal + 1;
            }
            if($data->dob){
                $completed = $completed + 1;
                $personal = $personal + 1;
            }
            if($data->city){
                $completed = $completed + 1;
                $personal = $personal + 1;
            }
            if($data->gender){
                $completed = $completed + 1;
                $personal = $personal + 1;
            }
            if($data->college){
                $completed = $completed + 1;
                $education = $education + 1;
            }
            if($data->university){
                $completed = $completed + 1;
                $education = $education + 1;
            }
            if($data->course){
                $completed = $completed + 1;
                $education = $education + 1;
            }
            if($data->year_of_passing){
                $completed = $completed + 1;
                $education = $education + 1;
            }
            if($data->father_guardian_name){
                $completed = $completed + 1;
                $family = $family + 1;
            }
            if($data->mother_guardian_name){
                $completed = $completed + 1;
                $family = $family + 1;
            }
            if($data->father_profession){
                $completed = $completed + 1;
                $family = $family + 1;
            }
            if($data->mother_profession){
                $completed = $completed + 1;
                $family = $family + 1;
            }
            if($data->recent_subject){
                if($this->nullCheckingProfileField($data->recent_subject)){
                    $completed = $completed + 1;
                    $academic = $academic + 1;
                }
            }
            if($data->recent_score){
                if($this->nullCheckingProfileField($data->recent_score)){
                    $completed = $completed + 1;
                    $academic = $academic + 1;
                }
            }
            if($data->previous_subject){
                if($this->nullCheckingProfileField($data->previous_subject)){
                    $completed = $completed + 1;
                    $academic = $academic + 1;
                }
            }
            if($data->previous_score){
                if($this->nullCheckingProfileField($data->previous_score)){
                    $completed = $completed + 1;
                    $academic = $academic + 1;
                }
            }
        }
        $user = User::find(Auth::guard('user')->user()->id);
        if($user->name){
            $completed = $completed + 1;
            $personal = $personal + 1;
        }

        ///// each tab 25%

        if($personal == 7){
            $percentage = $percentage + 25;
        }
        if($education == 4){
            $percentage = $percentage + 25;
        }
        if($family == 4){
            $percentage = $percentage + 25;
        }
        if($academic == 4){
            $percentage = $percentage + 25;
        }


        //$percentage = ($completed / $totalField) * 100;

        $setData = [
            "percentage" => $percentage,
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
