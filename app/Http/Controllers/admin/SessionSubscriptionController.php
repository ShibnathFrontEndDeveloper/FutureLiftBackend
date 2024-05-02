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
        // echo "<pre>";
        // print_r($request->all());
        // die();

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

        // if(count($request->facility_content) == 0){
        //     Toastr::error('Please add facility content!','error');
        //     return back()->withInput();
        // }


        $career_library_details = [];
        foreach ($request->career_library_details_content as $career_library_details_contentkey => $career_library_details_contentvalue) {
            $career_library_details[$career_library_details_contentkey]['career_library_details_content'] = $career_library_details_contentvalue;
            $career_library_details[$career_library_details_contentkey]['career_library_details_content_lock'] = ($request->career_library_details_content_lock[$career_library_details_contentkey] == 'yes')?'yes':'no';
        }


        $face_to_face_details = [];
        foreach ($request->face_to_face_details_content as $face_to_face_details_contentkey => $face_to_face_details_contentvalue) {
            $face_to_face_details[$face_to_face_details_contentkey]['face_to_face_details_content'] = $face_to_face_details_contentvalue;
            $face_to_face_details[$face_to_face_details_contentkey]['face_to_face_details_content_lock'] = ($request->face_to_face_details_content_lock[$face_to_face_details_contentkey] == 'yes')?'yes':'no';
        }


        $page_report_details = [];
        foreach ($request->page_report_details_content as $page_report_details_contentkey => $page_report_details_contentvalue) {
            $page_report_details[$page_report_details_contentkey]['page_report_details_content'] = $page_report_details_contentvalue;
            $page_report_details[$page_report_details_contentkey]['page_report_details_content_lock'] = ($request->page_report_details_content_lock[$page_report_details_contentkey] == 'yes')?'yes':'no';
        }

        $chat_with_expert_details = [];
        foreach ($request->chat_with_expert_content as $chat_with_expert_contentkey => $chat_with_expert_contentvalue) {
            $chat_with_expert_details[$chat_with_expert_contentkey]['chat_with_expert_content'] = $chat_with_expert_contentvalue;
            $chat_with_expert_details[$chat_with_expert_contentkey]['chat_with_expert_content_lock'] = ($request->chat_with_expert_content_lock[$chat_with_expert_contentkey] == 'yes')?'yes':'no';
        }

        $career_classes_details = [];
        foreach ($request->career_classes_content as $career_classes_contentkey => $career_classes_contentvalue) {
            $career_classes_details[$career_classes_contentkey]['career_classes_content'] = $career_classes_contentvalue;
            $career_classes_details[$career_classes_contentkey]['career_classes_content_lock'] = ($request->career_classes_content_lock[$career_classes_contentkey] == 'yes')?'yes':'no';
        }

        $admission_application_details = [];
        foreach ($request->admission_application_content as $admission_application_contentkey => $admission_application_contentvalue) {
            $admission_application_details[$admission_application_contentkey]['admission_application_content'] = $admission_application_contentvalue;
            $admission_application_details[$admission_application_contentkey]['admission_application_content_lock'] = ($request->admission_application_content_lock[$admission_application_contentkey] == 'yes')?'yes':'no';
        }

        if($request->isMostPopuler == 'yes'){
            $subUpdate = CounsellingPrice::where('plan_name','!=','')->update([
                "isMostPopuler" => 'no'
            ]);
        }



        $subscription = new CounsellingPrice();
        $subscription->plan_name = $request->plan_name;
        $subscription->plan_price = $request->plan_price;
        $subscription->session_count = $request->session_count;
        $subscription->description = $request->description;
        $subscription->discount_percentage = $request->discount_percentage;
        $subscription->before_discount_amount = $request->before_discount_amount;
        $subscription->career_library_details = json_encode($career_library_details);
        $subscription->face_to_face_details = json_encode($face_to_face_details);
        $subscription->page_report_details = json_encode($page_report_details);
        $subscription->chat_with_expert_details = json_encode($chat_with_expert_details);
        $subscription->career_classes_details = json_encode($career_classes_details);
        $subscription->admission_application_details = json_encode($admission_application_details);
        $subscription->outcome = $request->outcome;
        $subscription->career_library_details_lock = (isset($request->career_library_details_lock))?'no':'yes';
        $subscription->face_to_face_details_lock = (isset($request->face_to_face_details_lock))?'no':'yes';
        $subscription->page_report_details_lock = (isset($request->page_report_details_lock))?'no':'yes';
        $subscription->chat_with_expert_lock = (isset($request->chat_with_expert_lock))?'no':'yes';
        $subscription->career_classes_lock = (isset($request->career_classes_lock))?'no':'yes';
        $subscription->admission_application_lock = (isset($request->admission_application_lock))?'no':'yes';
        $subscription->session_has = ($request->session_count > 0)?'yes':'no';
        $subscription->isMostPopuler = $request->isMostPopuler;
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
        // echo "<pre>";
        // print_r($request->all());
        // die();
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

        // if(count($request->facility_content) == 0){
        //     Toastr::error('Please add facility content!','error');
        //     return back()->withInput();
        // }


        $career_library_details = [];
        foreach ($request->career_library_details_content as $career_library_details_contentkey => $career_library_details_contentvalue) {
            $career_library_details[$career_library_details_contentkey]['career_library_details_content'] = $career_library_details_contentvalue;
            $career_library_details[$career_library_details_contentkey]['career_library_details_content_lock'] = ($request->career_library_details_content_lock[$career_library_details_contentkey] == 'yes')?'yes':'no';
        }


        $face_to_face_details = [];
        foreach ($request->face_to_face_details_content as $face_to_face_details_contentkey => $face_to_face_details_contentvalue) {
            $face_to_face_details[$face_to_face_details_contentkey]['face_to_face_details_content'] = $face_to_face_details_contentvalue;
            $face_to_face_details[$face_to_face_details_contentkey]['face_to_face_details_content_lock'] = ($request->face_to_face_details_content_lock[$face_to_face_details_contentkey] == 'yes')?'yes':'no';
        }


        $page_report_details = [];
        foreach ($request->page_report_details_content as $page_report_details_contentkey => $page_report_details_contentvalue) {
            $page_report_details[$page_report_details_contentkey]['page_report_details_content'] = $page_report_details_contentvalue;
            $page_report_details[$page_report_details_contentkey]['page_report_details_content_lock'] = ($request->page_report_details_content_lock[$page_report_details_contentkey] == 'yes')?'yes':'no';
        }

        $chat_with_expert_details = [];
        foreach ($request->chat_with_expert_content as $chat_with_expert_contentkey => $chat_with_expert_contentvalue) {
            $chat_with_expert_details[$chat_with_expert_contentkey]['chat_with_expert_content'] = $chat_with_expert_contentvalue;
            $chat_with_expert_details[$chat_with_expert_contentkey]['chat_with_expert_content_lock'] = ($request->chat_with_expert_content_lock[$chat_with_expert_contentkey] == 'yes')?'yes':'no';
        }

        $career_classes_details = [];
        foreach ($request->career_classes_content as $career_classes_contentkey => $career_classes_contentvalue) {
            $career_classes_details[$career_classes_contentkey]['career_classes_content'] = $career_classes_contentvalue;
            $career_classes_details[$career_classes_contentkey]['career_classes_content_lock'] = ($request->career_classes_content_lock[$career_classes_contentkey] == 'yes')?'yes':'no';
        }

        $admission_application_details = [];
        foreach ($request->admission_application_content as $admission_application_contentkey => $admission_application_contentvalue) {
            $admission_application_details[$admission_application_contentkey]['admission_application_content'] = $admission_application_contentvalue;
            $admission_application_details[$admission_application_contentkey]['admission_application_content_lock'] = ($request->admission_application_content_lock[$admission_application_contentkey] == 'yes')?'yes':'no';
        }

        if($request->isMostPopuler == 'yes'){
            $subUpdate = CounsellingPrice::where('plan_name','!=','')->update([
                "isMostPopuler" => 'no'
            ]);
        }


        $subscription = CounsellingPrice::find($request->editId);
        $subscription->plan_name = $request->plan_name;
        $subscription->plan_price = $request->plan_price;
        $subscription->session_count = $request->session_count;
        $subscription->description = $request->description;
        $subscription->discount_percentage = $request->discount_percentage;
        $subscription->before_discount_amount = $request->before_discount_amount;
        $subscription->career_library_details = json_encode($career_library_details);
        $subscription->face_to_face_details = json_encode($face_to_face_details);
        $subscription->page_report_details = json_encode($page_report_details);
        $subscription->chat_with_expert_details = json_encode($chat_with_expert_details);
        $subscription->career_classes_details = json_encode($career_classes_details);
        $subscription->admission_application_details = json_encode($admission_application_details);
        $subscription->outcome = $request->outcome;
        $subscription->career_library_details_lock = (isset($request->career_library_details_lock))?'no':'yes';
        $subscription->face_to_face_details_lock = (isset($request->face_to_face_details_lock))?'no':'yes';
        $subscription->page_report_details_lock = (isset($request->page_report_details_lock))?'no':'yes';
        $subscription->chat_with_expert_lock = (isset($request->chat_with_expert_lock))?'no':'yes';
        $subscription->career_classes_lock = (isset($request->career_classes_lock))?'no':'yes';
        $subscription->admission_application_lock = (isset($request->admission_application_lock))?'no':'yes';
        $subscription->session_has = ($request->session_count > 0)?'yes':'no';
        $subscription->isMostPopuler = $request->isMostPopuler;
        $subscription->save();

        Toastr::success('Subscription Package updated successfully','success');
        return Redirect('/admin/subscription-package/list');
    }
}
