<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Helpers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use App\Models\Faq;

class FaqController extends Controller
{
    public function indexFaq($show){
        if($show == "list"){
            $faq = Faq::get();
            return view('admin.Dashboard.faq',compact(['faq']));
        }else if($show == "add"){
            return view('admin.Dashboard.faq');
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function faqAddFun(Request $request){
        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'answer' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->type = $request->type;
        $faq->save();
        Toastr::success('Faq added successfully','success');
        return Redirect('/admin/faq/list');
    }
    public function indexFaqEdit($show,$id){
        if($show == "edit"){
            $faq = Faq::find($id);
            return view('admin.Dashboard.faq',compact(['faq']));
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function faqEditFun(Request $request){
        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'answer' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }
        $faq = Faq::find($request->editId);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->type = $request->type;
        $faq->save();
        Toastr::success('Faq updated successfully','success');
        return Redirect('/admin/faq/list');
    }
    public function faqDeleteFun($id){
        Faq::where('id',$id)->delete();
        Toastr::success('Faq deleted successfully','success');
        return Redirect('/admin/faq/list');
    }
}
