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

class HomeController extends Controller
{
    public function indexHome(){
        $allSession = Futurelit_session::get();
        return view('user.home',compact(['allSession']));
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
        // die();
        $validator = Validator::make($request->all(), [
            'candidate_name' => 'required',
            'candidate_email' => 'required',
            'candidate_phone' => 'required',
            'candidate_city' => 'required',
            'options' => 'required',
            'schedule_date_time' => 'required'
        ]);

        if ($validator->fails()) {
        	Toastr::error('All fields are mandatory','error');
        	return back()->withInput();
        }

        try {
            $sessionPrice = Helpers::getSessionPrice($request->options);
            Session::put('session_book_data',$request->all());
            if($sessionPrice == 0){

                $book = new Book_sessions();
                $book->candidate_name = $request->candidate_name;
                $book->candidate_email = $request->candidate_email;
                $book->candidate_phone = $request->candidate_phone;
                $book->candidate_city = $request->candidate_city;
                $book->options = $request->options;
                $book->schedule_date_time = date('Y-m-d H:i:s',strtotime($request->schedule_date_time));
                $book->save();

                Toastr::success('Book session Successfully','success');
                return Redirect('/');
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
}
