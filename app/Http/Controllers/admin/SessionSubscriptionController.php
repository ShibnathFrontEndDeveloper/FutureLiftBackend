<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Helpers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use App\Models\CounsellingPrice;

class SessionSubscriptionController extends Controller
{
    public function indexSubscriptionPackage($show){
        if($show == "list"){
            $package = CounsellingPrice::get();
            return view('admin.Dashboard.subscription-package',compact(['package']));
        }else if($show == "add"){
            return view('admin.Dashboard.subscription-package');
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function subscriptionPackageAddFun(Request $request){
        $validator = Validator::make($request->all(), [
            'plan_name' => 'required',
            'plan_price' => 'required',
            'session_count' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        if(count($request->facility_content) == 0){
            Toastr::error('Please add facility content!','error');
            return back()->withInput();
        }

        $subscription = new CounsellingPrice();
        $subscription->plan_name = $request->plan_name;
        $subscription->plan_price = $request->plan_price;
        $subscription->session_count = $request->session_count;
        $subscription->description = $request->description;
        $subscription->facility = json_encode($request->facility_content);
        $subscription->session_has = ($request->session_count > 0)?'yes':'no';
        $subscription->save();

        Toastr::success('Subscription Package added successfully','success');
        return Redirect('/admin/subscription-package/list');
    }
    public function indexSubscriptionPackageEdit($show,$id){
        if($show == "edit"){
            $package = CounsellingPrice::find($id);
            return view('admin.Dashboard.subscription-package',compact(['package']));
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function subscriptionPackageEditFun(Request $request){
        $validator = Validator::make($request->all(), [
            'plan_name' => 'required',
            'plan_price' => 'required',
            'session_count' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        if(count($request->facility_content) == 0){
            Toastr::error('Please add facility content!','error');
            return back()->withInput();
        }

        $subscription = CounsellingPrice::find($request->editId);
        $subscription->plan_name = $request->plan_name;
        $subscription->plan_price = $request->plan_price;
        $subscription->session_count = $request->session_count;
        $subscription->description = $request->description;
        $subscription->facility = json_encode($request->facility_content);
        $subscription->session_has = ($request->session_count > 0)?'yes':'no';
        $subscription->save();

        Toastr::success('Subscription Package updated successfully','success');
        return Redirect('/admin/subscription-package/list');
    }
}
