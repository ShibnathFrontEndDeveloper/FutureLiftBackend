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
use App\Models\Futurelit_session;
use App\Models\Book_sessions;
use PaytmWallet;
use Session;
use App\Models\User_information;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function indexProfile(){
        $data = User_information::where('userId',Auth::guard('user')->user()->id)->first();
        $dataCount = User_information::where('userId',Auth::guard('user')->user()->id)->get()->count();
        return view('user.Dashboard.profile',compact(['data','dataCount']));
    }
    // public function personalInfoSaveFunction(Request $request){
    //     $exits = User_information::where('userId',Auth::guard('user')->user()->id)->get()->count();
    //     if($exits > 0){
    //         $lastData = User_information::find($request->infoId);

    //         if($request->has('profile_image')){
    //             $imageName = time().'_'.rand(999,9999).'.'.$request->profile_image->extension();
    //             $request->profile_image->move(public_path('assets/user_images'), $imageName);
    //         }else{
    //             $imageName = $lastData->profile_image;
    //         }

    //         $user = User::find(Auth::guard('user')->user()->id);
    //         $user->name = $request->name;
    //         $user->profile_image = $imageName;
    //         $user->save();


    //         $user_information = User_information::find($request->infoId);
    //         $user_information->father_name = $request->father_name;
    //         $user_information->mother_name = $request->mother_name;
    //         $user_information->profile_image = $imageName;
    //         $user_information->dob = $request->dob;
    //         $user_information->city = $request->city;
    //         $user_information->gender = $request->gender;
    //         $user_information->college = $request->college;
    //         $user_information->university = $request->university;
    //         $user_information->course = $request->course;
    //         $user_information->year_of_passing = $request->year_of_passing;
    //         $user_information->father_guardian_name = $request->father_guardian_name;
    //         $user_information->mother_guardian_name = $request->mother_guardian_name;
    //         $user_information->father_profession = $request->father_profession;
    //         $user_information->mother_profession = $request->mother_profession;
    //         $user_information->recent_subject = (!empty($request->recent_subject))?json_encode($request->recent_subject):NULL;
    //         $user_information->recent_score = (!empty($request->recent_score))?json_encode($request->recent_score):NULL;
    //         $user_information->previous_subject = (!empty($request->previous_subject))?json_encode($request->previous_subject):NULL;
    //         $user_information->previous_score = (!empty($request->previous_score))?json_encode($request->previous_score):NULL;
    //         $user_information->save();

    //         Toastr::success('Profile updated successfully','success');
    //         return Redirect('/user-profile');


    //     }else{

    //         if($request->has('profile_image')){
    //             $imageName = time().'_'.rand(999,9999).'.'.$request->profile_image->extension();
    //             $request->profile_image->move(public_path('assets/user_images'), $imageName);
    //         }else{
    //             $imageName = NULL;
    //         }

    //         $user = User::find(Auth::guard('user')->user()->id);
    //         $user->name = $request->name;
    //         $user->profile_image = $imageName;
    //         $user->save();


    //         $user_information = new User_information();
    //         $user_information->father_name = $request->father_name;
    //         $user_information->userId = Auth::guard('user')->user()->id;
    //         $user_information->mother_name = $request->mother_name;
    //         $user_information->profile_image = $imageName;
    //         $user_information->dob = $request->dob;
    //         $user_information->city = $request->city;
    //         $user_information->gender = $request->gender;
    //         $user_information->college = $request->college;
    //         $user_information->university = $request->university;
    //         $user_information->course = $request->course;
    //         $user_information->year_of_passing = $request->year_of_passing;
    //         $user_information->father_guardian_name = $request->father_guardian_name;
    //         $user_information->mother_guardian_name = $request->mother_guardian_name;
    //         $user_information->father_profession = $request->father_profession;
    //         $user_information->mother_profession = $request->mother_profession;
    //         $user_information->recent_subject = (!empty($request->recent_subject))?json_encode($request->recent_subject):NULL;
    //         $user_information->recent_score = (!empty($request->recent_score))?json_encode($request->recent_score):NULL;
    //         $user_information->previous_subject = (!empty($request->previous_subject))?json_encode($request->previous_subject):NULL;
    //         $user_information->previous_score = (!empty($request->previous_score))?json_encode($request->previous_score):NULL;
    //         $user_information->save();

    //         Toastr::success('Profile updated successfully','success');
    //         return Redirect('/user-profile');
    //     }
    // }
    public function personalInfoSaveFunction(Request $request){

            $user_information = User_information::find($request->infoId);
            $user_information->recent_subject = (!empty($request->recent_subject))?json_encode($request->recent_subject):NULL;
            $user_information->recent_score = (!empty($request->recent_score))?json_encode($request->recent_score):NULL;
            $user_information->previous_subject = (!empty($request->previous_subject))?json_encode($request->previous_subject):NULL;
            $user_information->previous_score = (!empty($request->previous_score))?json_encode($request->previous_score):NULL;
            $user_information->save();

            Toastr::success('Profile updated successfully','success');
            return Redirect('/user-profile');

            $notificationContent = "Profile Update Successful! Your profile is now complete and up-to-date. Thank you for providing all the necessary information. Your profile is a reflection of your journey keep shining!";
            Helpers::addUserNotification(Auth::guard('user')->user()->id,'profile_update','Profile Updated','profile',$notificationContent);



    }
    public function stepOneSubmitFunction(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'dob' => 'required',
            'city' => 'required',
            'gender' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	// foreach ($validator->errors()->getMessages() as $key => $value) {
        	// 	Toastr::error($value[0],'error');
        	// }
        	$result = [
                "status" => false,
                "message" => 'All fields are required!'
            ];

            return response(json_encode($result),200);
        }

        if($request->gender == 'undefined'){
            $result = [
                "status" => false,
                "message" => 'All fields are required!'
            ];

            return response(json_encode($result),200);
        }





        $lastData = User_information::find($request->infoId);
        if($request->file != ''){
            if($request->has('file')){
                $imageName = time().'_'.rand(999,9999).'.'.$request->file->extension();
                $request->file->move(public_path('assets/user_images'), $imageName);
            }else{
                $imageName = $lastData->profile_image;
            }
        }else{
            $imageName = $lastData->profile_image;
        }


        $user = User::find(Auth::guard('user')->user()->id);
        $user->name = $request->name;
        $user->profile_image = $imageName;
        $user->save();




        $user_information = User_information::find($request->infoId);
        $user_information->father_name = $request->father_name;
        $user_information->mother_name = $request->mother_name;
        $user_information->profile_image = $imageName;
        $user_information->dob = $request->dob;
        $user_information->city = $request->city;
        $user_information->gender = $request->gender;
        $user_information->save();

        $result = [
            "status" => true
        ];

        return response(json_encode($result),200);


    }
    public function stepTwoSubmitFunction(Request $request){
        $validator = Validator::make($request->all(), [
            'college' => 'required',
            'university' => 'required',
            'course' => 'required',
            'year_of_passing' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	// foreach ($validator->errors()->getMessages() as $key => $value) {
        	// 	Toastr::error($value[0],'error');
        	// }
        	$result = [
                "status" => false,
                "message" => 'All fields are required!'
            ];

            return response(json_encode($result),200);
        }


        $user_information = User_information::find($request->infoId);
        $user_information->college = $request->college;
        $user_information->university = $request->university;
        $user_information->course = $request->course;
        $user_information->year_of_passing = $request->year_of_passing;
        $user_information->save();

        $result = [
            "status" => true
        ];

        return response(json_encode($result),200);

    }
    public function stepThreeSubmitFunction(Request $request){
        $validator = Validator::make($request->all(), [
            'father_guardian_name' => 'required',
            'mother_guardian_name' => 'required',
            'father_profession' => 'required',
            'mother_profession' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	// foreach ($validator->errors()->getMessages() as $key => $value) {
        	// 	Toastr::error($value[0],'error');
        	// }
        	$result = [
                "status" => false,
                "message" => 'All fields are required!'
            ];

            return response(json_encode($result),200);
        }

        $user_information = User_information::find($request->infoId);
        $user_information->father_guardian_name = $request->father_guardian_name;
        $user_information->mother_guardian_name = $request->mother_guardian_name;
        $user_information->father_profession = $request->father_profession;
        $user_information->mother_profession = $request->mother_profession;
        $user_information->save();

        $result = [
            "status" => true
        ];

        return response(json_encode($result),200);
    }
    public function updatePhoneNumberFun(Request $request){
        $validator = Validator::make($request->all(), [
            'phoneNumber' => 'required',
            'password' => 'required',
            'state' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $user = User::find(Auth::guard('user')->user()->id);
        $user->phone = $request->phoneNumber;
        $user->state = $request->state;
        $user->password = Hash::make($request->password);;
        $user->save();

        return Redirect('/user-dashboard');
    }
}
