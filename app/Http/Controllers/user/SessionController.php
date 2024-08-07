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
use App\Models\LanguageModel;

class SessionController extends Controller
{
    public function indexSession(){
        $userSubscription = UserSubscriptionModel::where('userId',Auth::guard('user')->user()->id)->where('status','active')->first();
        $sessionHas = UserSubscriptionModel::where('userId',Auth::guard('user')->user()->id)->where('status','active')->get()->count();
        $language = LanguageModel::where('status','Active')->get();
        if($sessionHas > 0){
            $sessionBookData = SessionHistory::where('userId', Auth::guard('user')->user()->id)->where('package_id',$userSubscription->package_id)->where('package_status','active');
            $sessionData = CounsellingPrice::find($userSubscription->package_id);
            $sessionHas = $sessionBookData->get()->count();
            $allData = $sessionBookData->get();
        }else{
            $sessionData = [];
            $allData = [];
        }
        return view('user.Dashboard.session',compact(['sessionHas','sessionData','allData','language']));
    }
    public function bookCareerSessionFun(Request $request){
        $validator = Validator::make($request->all(), [
            'schedule_date' => 'required',
            'schedule_time' => 'required',
            'session_language' => 'required',
            'short_question' => 'required'
        ]);

        if ($validator->fails()) {
        	Toastr::error('All fields are mandatory','error');
        	return back()->withInput();
        }

        $timeFormat = date('H:i:s',strtotime($request->schedule_time));
        $dateFormat = date('Y-m-d',strtotime($request->schedule_date));

        SessionHistory::where('id',$request->sessionId)->update([
            "session_date_time" => $dateFormat.' '.$timeFormat,
            "status" => 'Processing',
            "session_language" => $request->session_language,
            "short_question" => $request->short_question
        ]);

        $userFind = User::find(Auth::guard('user')->user()->id);


        // $html = '';
        // $html .= Helpers::sessionCreateEmailContent($userFind->name,$request->sessionCount,date('d/m/Y',strtotime($dateFormat)),date('h:i A',strtotime($timeFormat)));
        // $subject = "Career Counseling Session Scheduled";

        // $mailSend = Helpers::phpMailerMailSend($userFind->email,$userFind->name,$subject,$html);

        $notificationContent = "Career Counseling Session Scheduled! Your session has been successfully booked. We're excited to assist you on your career journey. Get ready to gain valuable insights and clarity. We look forward to our upcoming session!";
        Helpers::addUserNotification(Auth::guard('user')->user()->id,'book_counselling_career_session','Schedule Counselling Career Session','career_session_booked',$notificationContent);

        Toastr::success('Session booked Successfully','success');
        return Redirect('/session');
    }
    public function updatebookCareerSessionFun(Request $request){
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
            "counselor_query" => NULL,
        ]);

        $notificationContent = "Session Update: Reschedule Request We understand plans change. If you need to reschedule your upcoming session, click here to find a time that works better for you. We're here to accommodate and support your needs. Thank you for your flexibility!";
        Helpers::addUserNotification(Auth::guard('user')->user()->id,'book_counselling_career_session','Reschedule Counselling Career Session','career_session_booked',$notificationContent);

        Toastr::success('Session updated Successfully','success');
        return Redirect('/session');
    }
}
