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
use App\Models\Coupon;
use App\Models\CouponHistory;


class SubscriptionController extends Controller
{
    public function subscriptionSubmitFunction(Request $request){
        $subId = $request->subId;
        $payment_config = json_decode(Helpers::ccAvenuePaymentConfig());
        $userExitsPackage = UserSubscriptionModel::where('userId', Auth::guard('user')->user()->id)->where('status','active');
        if($userExitsPackage->get()->count() > 0){
            $subData = $userExitsPackage->first();
            if($subData->package_id == $subId){
                Toastr::warning('You are already subscribe in this plan','warning');
                return back();
            }
        }
            Session::put('paymentReqDetails',$request->all());
            $getCoun = CounsellingPrice::find($subId);
            $userDetails = User_information::where('userId',Auth::guard('user')->user()->id)->first();
            $fieldData = [
                "tid" => $subId.time().uniqid(mt_rand(999,9999)),
                "merchant_id" => $payment_config->MERCHANT_ID,
                "order_id" => 'SUB_'.$subId.date('ymdhi').mt_rand(1000,9999),
                "amount" => sprintf('%0.2f', $getCoun->plan_price),
                "currency" => "INR",
                "redirect_url" => url('/user/subscription-success'),
                "cancel_url" => url('/user/subscription-failed'),
                "language" => "EN",
                "billing_name" => Auth::guard('user')->user()->name,
                "billing_address" => $userDetails->city,
                "billing_city" => $userDetails->city,
                "billing_state" => Auth::guard('user')->user()->state,
                "billing_country" => "India",
                "billing_tel" => Auth::guard('user')->user()->phone,
                "billing_email" => Auth::guard('user')->user()->email,
            ];


            Helpers::ccAvenuePaymentFunction($fieldData);




    }
    public function subscriptionSuccessFunction(Request $request){
        echo "<pre>";
        print_r($request->all());

    }
    // public function subscriptionSuccessFunction(Request $request){
    //     $subId = $request->subId;
    //     $userExitsPackage = UserSubscriptionModel::where('userId', Auth::guard('user')->user()->id)->where('status','active');
    //     if($userExitsPackage->get()->count() > 0){
    //         $subData = $userExitsPackage->first();
    //         if($subData->package_id == $subId){
    //             Toastr::warning('You are already subscribe in this plan','warning');
    //             return back();
    //         }

    //         $user_subcription_update = UserSubscriptionModel::find($subData->id);
    //         $user_subcription_update->status = 'inactive';
    //         $user_subcription_update->save();

    //         $user_subcription = new UserSubscriptionModel();
    //         $user_subcription->userId = Auth::guard('user')->user()->id;
    //         $user_subcription->package_id = $subId;
    //         $user_subcription->save();

    //         $getCoun = CounsellingPrice::find($subId);

    //         $userSessionHas = SessionHistory::where('userId', Auth::guard('user')->user()->id)->where('package_id',$subData->package_id)->where('package_status','active');

    //         if($userSessionHas->get()->count() > 0){
    //             $sesion_history_update = SessionHistory::where('userId', Auth::guard('user')->user()->id)->where('package_id',$subData->package_id)->where('package_status','active')->update([
    //                 "package_status" => 'inactive'
    //             ]);
    //         }

    //         if($getCoun->session_count > 0){
    //             for ($i=0; $i < $getCoun->session_count; $i++){
    //                 $sesion_history = new SessionHistory();
    //                 $sesion_history->userId = Auth::guard('user')->user()->id;
    //                 $sesion_history->package_id = $subId;
    //                 $sesion_history->status = ($i==0)?'Active':'Pending';
    //                 $sesion_history->save();
    //             }

    //         }

    //     }else{
    //         $user_subcription = new UserSubscriptionModel();
    //         $user_subcription->userId = Auth::guard('user')->user()->id;
    //         $user_subcription->package_id = $subId;
    //         $user_subcription->save();

    //         $getCoun = CounsellingPrice::find($subId);

    //         if($getCoun->session_count > 0){
    //             for ($i=0; $i < $getCoun->session_count; $i++){
    //                 $sesion_history = new SessionHistory();
    //                 $sesion_history->userId = Auth::guard('user')->user()->id;
    //                 $sesion_history->package_id = $subId;
    //                 $sesion_history->status = ($i==0)?'Active':'Pending';
    //                 $sesion_history->save();
    //             }

    //         }
    //     }
    //     if($request->couponId !=''){
    //         $couponHistory = new CouponHistory();
    //         $couponHistory->couponId = $request->couponId;
    //         $couponHistory->userId = Auth::guard('user')->user()->id;
    //         $couponHistory->productId = $subId;
    //         $couponHistory->save();
    //     }



    //     $notificationContent = "Welcome to Your Journey of Growth! You're now subscribed to our counseling sessions. Get ready to embark on a path of self-discovery and empowerment. We're here to support you every step of the way. Your transformation begins now!";
    //     Helpers::addUserNotification(Auth::guard('user')->user()->id,'book_counselling_session','Subscribe Counselling Session','session',$notificationContent);


    //     Toastr::success('Subscription updated successfully','success');
    //     return Redirect('/user-dashboard');

    // }
    public function subscriptionFailedFunction(Request $request){
        echo "<pre>";
        print_r($request->all());
    }
    public function indexOrderSummary(Request $request){
        $id = $request->query('product');
        $idDecode = Helpers::base64url_decode($id);
        $getCoun = CounsellingPrice::find($idDecode);
        if(!$getCoun){
            $getCoun = [];
        }
        return view('user.order-summary',compact(['getCoun']));
    }
    public function couponReqFun(Request $request){
        $coupon = Coupon::where('coupon_code',$request->couponCode)->first();
        if($coupon){
            $today = date('Y-m-d');
            $expire = Coupon::where('coupon_code',$request->couponCode)
            ->whereDate('from_date','<=', $today)
            ->whereDate('to_date','>=', $today)
            ->get()->count();
            if($expire > 0){
                $couponHistory = CouponHistory::where('couponId',$coupon->id)->get()->count();
                if($couponHistory < (int)$coupon->total_no_of_user){
                    $discountAmount = 0;
                    $totalAmount = 0;
                    $coupon_amount = (int)$coupon->coupon_amount;
                    if($coupon->type == "percentage"){
                        $discountAmount = ($coupon_amount / 100) * (int)$request->productPrice;
                        $totalAmount = (int)$request->productPrice - $discountAmount;
                    }else{
                        $discountAmount = $coupon_amount;
                        $totalAmount = (int)$request->productPrice - $discountAmount;
                    }
                    $data = [
                        "status" => true,
                        "message" => $coupon->description,
                        "data" => [
                            "discountAmount" => round($discountAmount,2),
                            "totalAmount" => round($totalAmount,2),
                            "couponId" => $coupon->id
                        ],
                    ];
                    return json_encode($data);
                }else{
                    $data = [
                        "status" => false,
                        "message" => "Coupon has been expired!"
                    ];
                    return json_encode($data);
                }
            }else{
                $data = [
                    "status" => false,
                    "message" => "Coupon has been expired!"
                ];
                return json_encode($data);
            }
        }else{
            $data = [
                "status" => false,
                "message" => "Invalid Coupon Code!"
            ];
            return json_encode($data);
        }

    }
}
