<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Helpers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function indexTestimonial($show){
        if($show == "list"){
            $testimonial = Testimonial::get();
            return view('admin.Dashboard.testimonial',compact(['testimonial']));
        }else if($show == "add"){
            return view('admin.Dashboard.testimonial');
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function testimonialAddFun(Request $request){
        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'name' => 'required',
            'image' => 'required',
            'rating' => 'required',
            'content' => 'required',
            'category' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        if($request->has('image')){
            $imageName = time().'_'.rand(999,9999).'.'.$request->image->extension();
            $request->image->move(public_path('assets/testimonial_images'), $imageName);
        }else{
            $imageName = NULL;
        }

        $testimonial = new Testimonial();
        $testimonial->type = $request->type;
        $testimonial->name = $request->name;
        $testimonial->image = $imageName;
        $testimonial->rating = (int)$request->rating;
        $testimonial->content = $request->content;
        $testimonial->category = $request->category;
        $testimonial->save();

        Toastr::success('Testimonial added successfully','success');
        return Redirect('/admin/testimonial/list');

    }
    public function indexTestimonialEdit($show,$id){
        if($show == "edit"){
            $testimonial = Testimonial::find($id);
            return view('admin.Dashboard.testimonial',compact(['testimonial']));
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function testimonialEditFun(Request $request){
        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'name' => 'required',
            'rating' => 'required',
            'content' => 'required',
            'category' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $lastData = Testimonial::find($request->editId);
        if($request->has('image')){
            $imageName = time().'_'.rand(999,9999).'.'.$request->image->extension();
            $request->image->move(public_path('assets/testimonial_images'), $imageName);
        }else{
            $imageName = $lastData->image;
        }

        $testimonial = Testimonial::find($request->editId);
        $testimonial->type = $request->type;
        $testimonial->name = $request->name;
        $testimonial->image = $imageName;
        $testimonial->rating = (int)$request->rating;
        $testimonial->content = $request->content;
        $testimonial->category = $request->category;
        $testimonial->save();

        Toastr::success('Testimonial updated successfully','success');
        return Redirect('/admin/testimonial/list');

    }
    public function testimonialDeleteFun($id){
        Testimonial::where('id',$id)->delete();
        Toastr::success('Testimonial deleted successfully','success');
        return Redirect('/admin/testimonial/list');
    }
}
