<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Helpers;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\ReferHistory;
use App\Models\ReferMailHistory;
use App\Models\UserSubscriptionModel;

class ReferController extends Controller
{
    public function indexRefer(){
        $getData = ReferHistory::where('referId',Auth::guard('user')->user()->id)->orderBy('id','DESC')->get();
        $getDataMailRefer = ReferMailHistory::where('userId',Auth::guard('user')->user()->id)->orderBy('id','DESC')->get();
        $data = [];
        $Edata = [];
        $referId = [];
        $referReg = $getData->count();
        $getDataMailReferCount = $getDataMailRefer->count();
        if($referReg > 0){
            foreach ($getData as $key => $value) {
                $referId[] = $value->userId;
                $userDetails = Helpers::getUserDetails($value->userId);
                $data['referList'][$key]['name'] = $userDetails->name;
                $data['referList'][$key]['email'] = $userDetails->email;
                $data['referList'][$key]['dateTime'] = date('l jS F Y h:i A',strtotime($value->created_at));

                $getSubData = UserSubscriptionModel::where('userId',$value->userId)->where('status','active');
                if($getSubData->get()->count() > 0){
                    $userDetails = Helpers::getUserDetails($value->userId);
                    $Edata['enroleList'][$key]['name'] = $userDetails->name;
                    $Edata['enroleList'][$key]['email'] = $userDetails->email;
                    $Edata['enroleList'][$key]['dateTime'] = date('l jS F Y h:i A',strtotime($value->created_at));
                }
            }

        }
        return view('user.Dashboard.refer',compact(['referReg','data','getDataMailReferCount','getDataMailRefer','Edata']));
    }
    public function referCodeFunction($code){
        $exitsRefer = User::where('code',$code)->where('role','user')->get()->count();
        if($exitsRefer == 0){
            Toastr::error('Invalid Refer code!','error');
            return back()->withInput();
        }
        Session::put('refer_session_code',$code);
        Toastr::success('Refer Code Applied!','success');
        return Redirect('/login-signup');
    }
    public function referMailSend(Request $request){
        $validator = Validator::make($request->all(), [
            'mailer_name' => 'required',
            'mailer_mail' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $referLink = url('refer-user/'.Auth::guard('user')->user()->code);

        $subject = "Join Me on FUTURE LIFT - Unlock Your Career Potential!";

        $referMail = new ReferMailHistory();
        $referMail->refer_email = $request->mailer_mail;
        $referMail->refer_name = $request->mailer_name;
        $referMail->userId = Auth::guard('user')->user()->id;
        $referMail->save();

        // $html = '';
        // $html .= Helpers::referMailContent($request->mailer_name,$referLink,Auth::guard('user')->user()->code);
        // $mailSend = Helpers::phpMailerMailSend($request->mailer_mail,$request->mailer_name,$subject,$html);

        Helpers::referMailContent($request->mailer_name,$referLink,Auth::guard('user')->user()->code,$request->mailer_mail,$subject);

        Toastr::success('Mail sent successfully','success');
        return Redirect('/refer-and-earn');

    }
}
