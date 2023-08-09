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
use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\HelpForm;
use App\Models\QueryForm;

class HomeController extends Controller
{
    public function indexHome(){
        $allSession = Futurelit_session::get();
        $faq = Faq::where('type','home')->get();
        $studentTestimonial = Testimonial::where('type','student')->where('category','home')->get();
        $parentTestimonial = Testimonial::where('type','parent')->where('category','home')->get();
        return view('user.home',compact(['allSession','faq','studentTestimonial','parentTestimonial']));
    }
    public function demoRegistration(Request $request){
        $validator = Validator::make($request->all(), [
            'reg_email' => 'required',
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $exits = User::where('email',$request->reg_email)->where('role','user')->get()->count();

        if($exits > 0){
            Toastr::error('Your email is already existed try to login your account','error');
            return back()->withInput();
        }

        return Redirect('/login-signup?reg='.$request->reg_email);
    }
    public function booksessionFunction(Request $request){
        // print_r($request->all());
        // echo date('H:i:s',strtotime($request->schedule_time));
        // die();
        $validator = Validator::make($request->all(), [
            'candidate_name' => 'required',
            'candidate_email' => 'required',
            'candidate_phone' => 'required',
            'candidate_city' => 'required',
            'options' => 'required',
            'schedule_date' => 'required',
            'schedule_time' => 'required'
        ]);

        if ($validator->fails()) {
        	Toastr::error('All fields are mandatory','error');
        	return back()->withInput();
        }

        try {
            $sessionPrice = Helpers::getSessionPrice($request->options);
            Session::put('session_book_data',$request->all());
            if($sessionPrice == 0){

                $timeFormat = date('H:i:s',strtotime($request->schedule_time));
                $dateFormat = date('Y-m-d',strtotime($request->schedule_date));

                $book = new Book_sessions();
                $book->candidate_name = $request->candidate_name;
                $book->candidate_email = $request->candidate_email;
                $book->candidate_phone = $request->candidate_phone;
                $book->candidate_city = $request->candidate_city;
                $book->options = $request->options;
                $book->schedule_date_time = $dateFormat.' '.$timeFormat;
                $book->save();

                Toastr::success('Book session Successfully','success');
                return back();
            }else{

                $payment = PaytmWallet::with('receive');
                $payment->prepare([
                'order' => rand(),
                'user' => rand(10,1000),
                'mobile_number' => $request->candidate_phone,
                'email' => $request->candidate_email,
                'amount' => $sessionPrice,
                'callback_url' => url('/payment-callback'),
                ]);
                return $payment->receive();

            }

        } catch (Exception $e) {
            Toastr::error('something went wrong','error');
        	return back()->withInput();
        }

    }
    public function paymentCallbackFunction(Request $request){
        $transaction = PaytmWallet::with('receive');
        $response = $transaction->response();
        echo "<pre>";
        print_r($transaction);
        print_r($response);
    }
    public function indexHelp(){
        $faq = Faq::where('type','help')->get();
        return view('user.Dashboard.help',compact(['faq']));
    }
    public function indexEightTenCoun(){
        $faq = Faq::get();
        $parentTestimonial = Testimonial::where('type','parent')->where('category','eight_ten')->get();
        return view('user.eight-ten-counselling',compact(['faq','parentTestimonial']));
    }
    public function indexTenTwelveCoun(){
        $faq = Faq::get();
        $studentTestimonial = Testimonial::where('type','student')->where('category','eleven_twelve')->get();
        $parentTestimonial = Testimonial::where('type','parent')->where('category','eleven_twelve')->get();
        return view('user.ten-twelve-counselling',compact(['faq','studentTestimonial','parentTestimonial']));
    }
    public function indexCollegeGraduateCoun(){
        $faq = Faq::get();
        $parentTestimonial = Testimonial::where('type','parent')->where('category','graduation')->get();
        return view('user.college-graduate-counselling',compact(['faq','parentTestimonial']));
    }
    public function indexPersonalityTestCoun(){
        $faq = Faq::where('type','personality')->get();
        return view('user.personality-test',compact(['faq']));
    }
    public function indexInterestTestCoun(){
        $faq = Faq::where('type','interest')->get();
        return view('user.interest-test',compact(['faq']));
    }
    public function indexIqTestCoun(){
        $faq = Faq::where('type','iq')->get();
        return view('user.iqtest',compact(['faq']));
    }
    public function indexAptitudeTestCoun(){
        $faq = Faq::where('type','aptitude')->get();
        return view('user.aptitude-test',compact(['faq']));
    }
    public function indexForgetPassword(){
        return view('user.forget-password');
    }
    public function forgetPasswordSubmitFun(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required'
        ]);

        if ($validator->fails()) {
        	Toastr::error('Email field are mandatory','error');
        	return back()->withInput();
        }

        $exits = User::where('email',$request->email)->where('role','user');
        if($exits->get()->count() == 0){
            Toastr::error('Email id does not exist','error');
        	return back()->withInput();
        }

        $exits = $exits->first();

        $uniqueCode = Helpers::uniqueCode(80);
        $uniqueCode2 = Helpers::uniqueCode(90);
        $Iddecode = base64_encode(base64_encode($exits->id));
        $linkGenerate = base64_encode($uniqueCode);
        $url = url('/password-set/'.$Iddecode.'/'.$linkGenerate.'/'.$uniqueCode2);

        $subject = "Forget Your Password";

        $html = "";
        $html .= '<p>Hello '.$exits->name.'</p>';
        $html .= '<p>Your password reset link : <a href="'.$url.'">'.$url.'</a></p>';

        $mailSend = Helpers::phpMailerMailSend($request->email,$exits->name,$subject,$html);

        Toastr::success('We have e-mailed your password reset link','success');
        return back();
    }
    public function passwordSetFun($id,$link,$linkT){
       $idDecode = base64_decode(base64_decode($id));
       return view('user.password-set',compact(['idDecode']));
    }
    public function setResetPasswordFun(Request $request){
        $update = User::find($request->id);
        $update->password = Hash::make($request->password);
        $update->save();

        Toastr::success('Password reset successfully','success');
        return Redirect('/login-signup');
    }
    public function indexTermsCondition(){
        return view('user.terms-condition');
    }
    public function indexPolicy(){
        return view('user.policy');
    }
    public function indexAbout(){
        return view('user.about');
    }
    public function submitHelpFormFun(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'course_type' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $helpForm = new HelpForm();
        $helpForm->name = $request->name;
        $helpForm->email = $request->email;
        $helpForm->phone_number = $request->phone_number;
        $helpForm->course_type = $request->course_type;
        $helpForm->comment = $request->comment;
        $helpForm->save();

        Toastr::success('Form submited successfully','success');
        return back();
    }
    public function submitQueryFormFun(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $queryForm = new QueryForm();
        $queryForm->name = $request->name;
        $queryForm->email = $request->email;
        $queryForm->message = $request->message;
        $queryForm->save();

        Toastr::success('Form submited successfully','success');
        return back();
    }
}
