<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Helpers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use App\Models\Coupon;

class CouponController extends Controller
{
    public function indexCoupon($show){
        if($show == "list"){
            $list = Coupon::get();
            return view('admin.Dashboard.coupon',compact(['list']));
        }else if($show == "add"){
            return view('admin.Dashboard.coupon');
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function couponAddFun(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'coupon_code' => 'required',
            'description' => 'required',
            'total_no_of_user' => 'required',
            'type' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'coupon_amount' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();

        }
        $coupon = new Coupon();
        $coupon->title = $request->title;
        $coupon->coupon_code = $request->coupon_code;
        $coupon->description = $request->description;
        $coupon->total_no_of_user = $request->total_no_of_user;
        $coupon->type = $request->type;
        $coupon->coupon_amount = $request->coupon_amount;
        $coupon->from_date = date('Y-m-d',strtotime($request->from_date));
        $coupon->to_date = date('Y-m-d',strtotime($request->to_date));
        $coupon->save();
        Toastr::success('Coupon added successfully','success');
        return Redirect('/admin/coupon/list');
    }
    public function indexcouponEdit($show,$id){
        if($show == "edit"){
            $data = Coupon::find($id);
            return view('admin.Dashboard.coupon',compact(['data']));
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function couponEditFun(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'coupon_code' => 'required',
            'description' => 'required',
            'total_no_of_user' => 'required',
            'type' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'coupon_amount' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $coupon = Coupon::find($request->editId);;
        $coupon->title = $request->title;
        $coupon->coupon_code = $request->coupon_code;
        $coupon->description = $request->description;
        $coupon->total_no_of_user = $request->total_no_of_user;
        $coupon->type = $request->type;
        $coupon->coupon_amount = $request->coupon_amount;
        $coupon->from_date = date('Y-m-d',strtotime($request->from_date));
        $coupon->to_date = date('Y-m-d',strtotime($request->to_date));
        $coupon->save();
        Toastr::success('Coupon updated successfully','success');
        return Redirect('/admin/coupon/list');
    }
    public function couponDeleteFun($id){
        Coupon::where('id',$id)->delete();
        Toastr::success('Coupon deleted successfully','success');
        return Redirect('/admin/coupon/list');
    }
}
