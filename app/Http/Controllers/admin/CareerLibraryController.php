<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Helpers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use App\Models\CareerLibraryCategory;
use App\Models\CareerLibraryDetails;
use Illuminate\Support\Str;

class CareerLibraryController extends Controller
{
    public function indexLibraryCategory($show){
        if($show == "list"){
            $list = CareerLibraryCategory::get();
            return view('admin.Dashboard.career-library-category',compact(['list']));
        }else if($show == "add"){
            return view('admin.Dashboard.career-library-category');
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function CareerLibraryCategoryAddFun(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $CareerLibraryCategoryAdd = new CareerLibraryCategory();
        $CareerLibraryCategoryAdd->name = $request->name;
        $CareerLibraryCategoryAdd->slug = Str::slug($request->name);
        $CareerLibraryCategoryAdd->save();
        Toastr::success('Career Library Category added successfully','success');
        return Redirect('/admin/career-library-category/list');
    }
    public function indexCareerLibraryCategoryEdit($show,$id){
        if($show == "edit"){
            $data = CareerLibraryCategory::find($id);
            return view('admin.Dashboard.career-library-category',compact(['data']));
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function CareerLibraryCategoryEditFun(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $CareerLibraryCategoryAdd = CareerLibraryCategory::find($request->editId);;
        $CareerLibraryCategoryAdd->name = $request->name;
        $CareerLibraryCategoryAdd->slug = Str::slug($request->name);
        $CareerLibraryCategoryAdd->save();
        Toastr::success('Career Library Category updated successfully','success');
        return Redirect('/admin/career-library-category/list');
    }
    public function CareerLibraryCategoryDeleteFun($id){
        CareerLibraryCategory::where('id',$id)->delete();
        Toastr::success('Career Library Category deleted successfully','success');
        return Redirect('/admin/career-library-category/list');
    }
    public function indexLibrary($show){
        if($show == "list"){
            $list = CareerLibraryDetails::get();
            return view('admin.Dashboard.career-library',compact(['list']));
        }else if($show == "add"){
            $allCategory = CareerLibraryCategory::get();
            return view('admin.Dashboard.career-library',compact(['allCategory']));
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function CareerLibraryAddFun(Request $request){
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'thumbnail' => 'required',
            'title' => 'required',
            'summery_content' => 'required',
            'summery_image' => 'required',
            'skill_content' => 'required',
            // 'skill_image' => 'required',
            'occupational_content' => 'required',
            // 'occupational_image' => 'required',
            // 'entrance_exam_content' => 'required',
            // 'entrance_exam_image' => 'required',
            'industry_trends_content' => 'required',
            'industry_trends_image' => 'required',
            // 'work_description_content' => 'required',
            'pros_and_cons_content' => 'required',
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        if(count($request->career_op_title) == 0 ||
        count($request->career_op_content) == 0 ||
        count($request->career_stream) == 0 ||
        count($request->career_graduation) == 0 ||
        count($request->career_after_graduation) == 0 ||
        count($request->career_post_graduation) == 0 ||
        count($request->landing_indtitute_university) == 0 ||
        count($request->landing_indtitute_location) == 0 ||
        count($request->landing_indtitute_website) == 0 ||
        count($request->abroad_indtitute_college) == 0 ||
        count($request->abroad_indtitute_location) == 0 ||
        count($request->abroad_indtitute_website) == 0 ||
        count($request->entrance_college) == 0 ||
        count($request->entrance_tentative_date) == 0 ||
        count($request->entrance_important_elements) == 0 ||
        count($request->entrance_website) == 0
        ){
            Toastr::error('All fields are mandatory!','error');
            return back();
        }

        if(Helpers::anyArrayFieldNullChecking($request->career_op_title) ||
        Helpers::anyArrayFieldNullChecking($request->career_op_content) ||
        Helpers::anyArrayFieldNullChecking($request->career_stream) ||
        Helpers::anyArrayFieldNullChecking($request->career_graduation) ||
        Helpers::anyArrayFieldNullChecking($request->career_after_graduation) ||
        Helpers::anyArrayFieldNullChecking($request->career_post_graduation) ||
        Helpers::anyArrayFieldNullChecking($request->landing_indtitute_university) ||
        Helpers::anyArrayFieldNullChecking($request->landing_indtitute_location) ||
        Helpers::anyArrayFieldNullChecking($request->landing_indtitute_website) ||
        Helpers::anyArrayFieldNullChecking($request->abroad_indtitute_college) ||
        Helpers::anyArrayFieldNullChecking($request->abroad_indtitute_location) ||
        Helpers::anyArrayFieldNullChecking($request->abroad_indtitute_website) ||
        Helpers::anyArrayFieldNullChecking($request->entrance_college) ||
        Helpers::anyArrayFieldNullChecking($request->entrance_tentative_date) ||
        Helpers::anyArrayFieldNullChecking($request->entrance_important_elements) ||
        Helpers::anyArrayFieldNullChecking($request->entrance_website)
        ){
            Toastr::error('All fields are mandatory!','error');
            return back();
        }


        if($request->has('thumbnail')){
            $thumbnailName = time().'_'.rand(999,9999).'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('assets/career_library'), $thumbnailName);
        }else{
            $thumbnailName = NULL;
        }

        if($request->has('summery_image')){
            $summery_imageName = time().'_'.rand(999,9999).'.'.$request->summery_image->extension();
            $request->summery_image->move(public_path('assets/career_library'), $summery_imageName);
        }else{
            $summery_imageName = NULL;
        }

        if($request->has('skill_image')){
            $skill_imageName = time().'_'.rand(999,9999).'.'.$request->skill_image->extension();
            $request->skill_image->move(public_path('assets/career_library'), $skill_imageName);
        }else{
            $skill_imageName = NULL;
        }

        if($request->has('occupational_image')){
            $occupational_imageName = time().'_'.rand(999,9999).'.'.$request->occupational_image->extension();
            $request->occupational_image->move(public_path('assets/career_library'), $occupational_imageName);
        }else{
            $occupational_imageName = NULL;
        }

        if($request->has('entrance_exam_image')){
            $entrance_exam_imageName = time().'_'.rand(999,9999).'.'.$request->entrance_exam_image->extension();
            $request->entrance_exam_image->move(public_path('assets/career_library'), $entrance_exam_imageName);
        }else{
            $entrance_exam_imageName = NULL;
        }

        if($request->has('industry_trends_image')){
            $industry_trends_imageName = time().'_'.rand(999,9999).'.'.$request->industry_trends_image->extension();
            $request->industry_trends_image->move(public_path('assets/career_library'), $industry_trends_imageName);
        }else{
            $industry_trends_imageName = NULL;
        }
        $career_opportunities = [];
        foreach ($request->career_op_title as $career_op_titlekey => $career_op_titlevalue) {
            $career_opportunities[$career_op_titlekey]['career_op_title'] = $career_op_titlevalue;
            $career_opportunities[$career_op_titlekey]['career_op_content'] = (isset($request->career_op_content[$career_op_titlekey]))?$request->career_op_content[$career_op_titlekey]:'';
        }

        $career_artificial = [];
        foreach ($request->career_stream as $career_streamkey => $career_streamvalue) {
            $career_artificial[$career_streamkey]['career_stream'] = $career_streamvalue;
            $career_artificial[$career_streamkey]['career_graduation'] = (isset($request->career_graduation[$career_streamkey]))?$request->career_graduation[$career_streamkey]:'';
            $career_artificial[$career_streamkey]['career_after_graduation'] = (isset($request->career_after_graduation[$career_streamkey]))?$request->career_after_graduation[$career_streamkey]:'';
            $career_artificial[$career_streamkey]['career_post_graduation'] = (isset($request->career_post_graduation[$career_streamkey]))?$request->career_post_graduation[$career_streamkey]:'';
        }

        $landing_indtitute = [];
        foreach ($request->landing_indtitute_university as $landing_indtitute_universitykey => $landing_indtitute_universityvalue) {
            $landing_indtitute[$landing_indtitute_universitykey]['landing_indtitute_university'] = $landing_indtitute_universityvalue;
            $landing_indtitute[$landing_indtitute_universitykey]['landing_indtitute_location'] = (isset($request->landing_indtitute_location[$landing_indtitute_universitykey]))?$request->landing_indtitute_location[$landing_indtitute_universitykey]:'';
            $landing_indtitute[$landing_indtitute_universitykey]['landing_indtitute_website'] = (isset($request->landing_indtitute_website[$landing_indtitute_universitykey]))?$request->landing_indtitute_website[$landing_indtitute_universitykey]:'';
        }

        $abroad_indtitute = [];
        foreach ($request->abroad_indtitute_college as $abroad_indtitute_collegekey => $abroad_indtitute_collegevalue) {
            $abroad_indtitute[$abroad_indtitute_collegekey]['abroad_indtitute_college'] = $abroad_indtitute_collegevalue;
            $abroad_indtitute[$abroad_indtitute_collegekey]['abroad_indtitute_location'] = (isset($request->abroad_indtitute_location[$abroad_indtitute_collegekey]))?$request->abroad_indtitute_location[$abroad_indtitute_collegekey]:'';
            $abroad_indtitute[$abroad_indtitute_collegekey]['abroad_indtitute_website'] = (isset($request->abroad_indtitute_website[$abroad_indtitute_collegekey]))?$request->abroad_indtitute_website[$abroad_indtitute_collegekey]:'';
        }

        $entrance_college = [];
        foreach ($request->entrance_college as $entrance_collegekey => $entrance_collegevalue) {
            $entrance_college[$entrance_collegekey]['entrance_college'] = $entrance_collegevalue;
            $entrance_college[$entrance_collegekey]['entrance_tentative_date'] = (isset($request->entrance_tentative_date[$entrance_collegekey]))?$request->entrance_tentative_date[$entrance_collegekey]:'';
            $entrance_college[$entrance_collegekey]['entrance_important_elements'] = (isset($request->entrance_important_elements[$entrance_collegekey]))?$request->entrance_important_elements[$entrance_collegekey]:'';
            $entrance_college[$entrance_collegekey]['entrance_website'] = (isset($request->entrance_website[$entrance_collegekey]))?$request->entrance_website[$entrance_collegekey]:'';

        }




        $CareerLibrary = new CareerLibraryDetails();
        $CareerLibrary->category = $request->category;
        $CareerLibrary->thumbnail = $thumbnailName;
        $CareerLibrary->title = $request->title;
        $CareerLibrary->summery_content = $request->summery_content;
        $CareerLibrary->summery_image = $summery_imageName;
        $CareerLibrary->skill_content = $request->skill_content;
        $CareerLibrary->skill_image = $skill_imageName;
        $CareerLibrary->occupational_content = $request->occupational_content;
        $CareerLibrary->occupational_image = $occupational_imageName;
        $CareerLibrary->entrance_exam_content = json_encode($entrance_college);
        $CareerLibrary->entrance_exam_image = $entrance_exam_imageName;
        $CareerLibrary->industry_trends_content = $request->industry_trends_content;
        $CareerLibrary->industry_trends_image = $industry_trends_imageName;
        $CareerLibrary->career_opportunities = json_encode($career_opportunities);
        $CareerLibrary->career_artificial = json_encode($career_artificial);
        $CareerLibrary->landing_indtitute = json_encode($landing_indtitute);
        $CareerLibrary->abroad_indtitute = json_encode($abroad_indtitute);
        $CareerLibrary->slug = Str::slug($request->title);
        $CareerLibrary->work_description_content = $request->work_description_content;
        $CareerLibrary->pros_and_cons_content = $request->pros_and_cons_content;
        $CareerLibrary->save();

        Toastr::success('Career Library added successfully','success');
        return Redirect('/admin/career-library/list');

    }
    public function indexCareerLibraryEdit($show,$id){
        if($show == "edit"){
            $allCategory = CareerLibraryCategory::get();
            $data = CareerLibraryDetails::find($id);
            return view('admin.Dashboard.career-library',compact(['data','allCategory']));
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function CareerLibraryEditFun(Request $request){
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'title' => 'required',
            'summery_content' => 'required',
            'skill_content' => 'required',
            'occupational_content' => 'required',
            // 'entrance_exam_content' => 'required',
            'industry_trends_content' => 'required',
            // 'work_description_content' => 'required',
            'pros_and_cons_content' => 'required',
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        if(count($request->career_op_title) == 0 ||
        count($request->career_op_content) == 0 ||
        count($request->career_stream) == 0 ||
        count($request->career_graduation) == 0 ||
        count($request->career_after_graduation) == 0 ||
        count($request->career_post_graduation) == 0 ||
        count($request->landing_indtitute_university) == 0 ||
        count($request->landing_indtitute_location) == 0 ||
        count($request->landing_indtitute_website) == 0 ||
        count($request->abroad_indtitute_college) == 0 ||
        count($request->abroad_indtitute_location) == 0 ||
        count($request->abroad_indtitute_website) == 0 ||
        count($request->entrance_college) == 0 ||
        count($request->entrance_tentative_date) == 0 ||
        count($request->entrance_important_elements) == 0 ||
        count($request->entrance_website) == 0
        ){
            Toastr::error('All fields are mandatory!','error');
            return back();
        }


        if(Helpers::anyArrayFieldNullChecking($request->career_op_title) ||
        Helpers::anyArrayFieldNullChecking($request->career_op_content) ||
        Helpers::anyArrayFieldNullChecking($request->career_stream) ||
        Helpers::anyArrayFieldNullChecking($request->career_graduation) ||
        Helpers::anyArrayFieldNullChecking($request->career_after_graduation) ||
        Helpers::anyArrayFieldNullChecking($request->career_post_graduation) ||
        Helpers::anyArrayFieldNullChecking($request->landing_indtitute_university) ||
        Helpers::anyArrayFieldNullChecking($request->landing_indtitute_location) ||
        Helpers::anyArrayFieldNullChecking($request->landing_indtitute_website) ||
        Helpers::anyArrayFieldNullChecking($request->abroad_indtitute_college) ||
        Helpers::anyArrayFieldNullChecking($request->abroad_indtitute_location) ||
        Helpers::anyArrayFieldNullChecking($request->abroad_indtitute_website) ||
        Helpers::anyArrayFieldNullChecking($request->entrance_college) ||
        Helpers::anyArrayFieldNullChecking($request->entrance_tentative_date) ||
        Helpers::anyArrayFieldNullChecking($request->entrance_important_elements) ||
        Helpers::anyArrayFieldNullChecking($request->entrance_website)
        ){
            Toastr::error('All fields are mandatory!','error');
            return back();
        }

        $lastData = CareerLibraryDetails::find($request->editId);


        if($request->has('thumbnail')){
            $thumbnailName = time().'_'.rand(999,9999).'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('assets/career_library'), $thumbnailName);
        }else{
            $thumbnailName = $lastData->thumbnail;
        }

        if($request->has('summery_image')){
            $summery_imageName = time().'_'.rand(999,9999).'.'.$request->summery_image->extension();
            $request->summery_image->move(public_path('assets/career_library'), $summery_imageName);
        }else{
            $summery_imageName = $lastData->summery_image;
        }

        if($request->has('skill_image')){
            $skill_imageName = time().'_'.rand(999,9999).'.'.$request->skill_image->extension();
            $request->skill_image->move(public_path('assets/career_library'), $skill_imageName);
        }else{
            $skill_imageName = $lastData->skill_image;
        }

        if($request->has('occupational_image')){
            $occupational_imageName = time().'_'.rand(999,9999).'.'.$request->occupational_image->extension();
            $request->occupational_image->move(public_path('assets/career_library'), $occupational_imageName);
        }else{
            $occupational_imageName = $lastData->occupational_image;
        }

        if($request->has('entrance_exam_image')){
            $entrance_exam_imageName = time().'_'.rand(999,9999).'.'.$request->entrance_exam_image->extension();
            $request->entrance_exam_image->move(public_path('assets/career_library'), $entrance_exam_imageName);
        }else{
            $entrance_exam_imageName = $lastData->entrance_exam_image;
        }

        if($request->has('industry_trends_image')){
            $industry_trends_imageName = time().'_'.rand(999,9999).'.'.$request->industry_trends_image->extension();
            $request->industry_trends_image->move(public_path('assets/career_library'), $industry_trends_imageName);
        }else{
            $industry_trends_imageName = $lastData->industry_trends_image;
        }


        $career_opportunities = [];
        foreach ($request->career_op_title as $career_op_titlekey => $career_op_titlevalue) {
            $career_opportunities[$career_op_titlekey]['career_op_title'] = $career_op_titlevalue;
            $career_opportunities[$career_op_titlekey]['career_op_content'] = (isset($request->career_op_content[$career_op_titlekey]))?$request->career_op_content[$career_op_titlekey]:'';
        }

        $career_artificial = [];
        foreach ($request->career_stream as $career_streamkey => $career_streamvalue) {
            $career_artificial[$career_streamkey]['career_stream'] = $career_streamvalue;
            $career_artificial[$career_streamkey]['career_graduation'] = (isset($request->career_graduation[$career_streamkey]))?$request->career_graduation[$career_streamkey]:'';
            $career_artificial[$career_streamkey]['career_after_graduation'] = (isset($request->career_after_graduation[$career_streamkey]))?$request->career_after_graduation[$career_streamkey]:'';
            $career_artificial[$career_streamkey]['career_post_graduation'] = (isset($request->career_post_graduation[$career_streamkey]))?$request->career_post_graduation[$career_streamkey]:'';
        }

        $landing_indtitute = [];
        foreach ($request->landing_indtitute_university as $landing_indtitute_universitykey => $landing_indtitute_universityvalue) {
            $landing_indtitute[$landing_indtitute_universitykey]['landing_indtitute_university'] = $landing_indtitute_universityvalue;
            $landing_indtitute[$landing_indtitute_universitykey]['landing_indtitute_location'] = (isset($request->landing_indtitute_location[$landing_indtitute_universitykey]))?$request->landing_indtitute_location[$landing_indtitute_universitykey]:'';
            $landing_indtitute[$landing_indtitute_universitykey]['landing_indtitute_website'] = (isset($request->landing_indtitute_website[$landing_indtitute_universitykey]))?$request->landing_indtitute_website[$landing_indtitute_universitykey]:'';
        }

        $abroad_indtitute = [];
        foreach ($request->abroad_indtitute_college as $abroad_indtitute_collegekey => $abroad_indtitute_collegevalue) {
            $abroad_indtitute[$abroad_indtitute_collegekey]['abroad_indtitute_college'] = $abroad_indtitute_collegevalue;
            $abroad_indtitute[$abroad_indtitute_collegekey]['abroad_indtitute_location'] = (isset($request->abroad_indtitute_location[$abroad_indtitute_collegekey]))?$request->abroad_indtitute_location[$abroad_indtitute_collegekey]:'';
            $abroad_indtitute[$abroad_indtitute_collegekey]['abroad_indtitute_website'] = (isset($request->abroad_indtitute_website[$abroad_indtitute_collegekey]))?$request->abroad_indtitute_website[$abroad_indtitute_collegekey]:'';
        }

        $entrance_college = [];
        foreach ($request->entrance_college as $entrance_collegekey => $entrance_collegevalue) {
            $entrance_college[$entrance_collegekey]['entrance_college'] = $entrance_collegevalue;
            $entrance_college[$entrance_collegekey]['entrance_tentative_date'] = (isset($request->entrance_tentative_date[$entrance_collegekey]))?$request->entrance_tentative_date[$entrance_collegekey]:'';
            $entrance_college[$entrance_collegekey]['entrance_important_elements'] = (isset($request->entrance_important_elements[$entrance_collegekey]))?$request->entrance_important_elements[$entrance_collegekey]:'';
            $entrance_college[$entrance_collegekey]['entrance_website'] = (isset($request->entrance_website[$entrance_collegekey]))?$request->entrance_website[$entrance_collegekey]:'';

        }


        $CareerLibrary = CareerLibraryDetails::find($request->editId);
        $CareerLibrary->category = $request->category;
        $CareerLibrary->thumbnail = $thumbnailName;
        $CareerLibrary->title = $request->title;
        $CareerLibrary->summery_content = $request->summery_content;
        $CareerLibrary->summery_image = $summery_imageName;
        $CareerLibrary->skill_content = $request->skill_content;
        $CareerLibrary->skill_image = $skill_imageName;
        $CareerLibrary->occupational_content = $request->occupational_content;
        $CareerLibrary->occupational_image = $occupational_imageName;
        $CareerLibrary->entrance_exam_content = json_encode($entrance_college);
        $CareerLibrary->entrance_exam_image = $entrance_exam_imageName;
        $CareerLibrary->industry_trends_content = $request->industry_trends_content;
        $CareerLibrary->industry_trends_image = $industry_trends_imageName;
        $CareerLibrary->career_opportunities = json_encode($career_opportunities);
        $CareerLibrary->career_artificial = json_encode($career_artificial);
        $CareerLibrary->landing_indtitute = json_encode($landing_indtitute);
        $CareerLibrary->abroad_indtitute = json_encode($abroad_indtitute);
        $CareerLibrary->slug = Str::slug($request->title);
        $CareerLibrary->work_description_content = $request->work_description_content;
        $CareerLibrary->pros_and_cons_content = $request->pros_and_cons_content;
        $CareerLibrary->save();

        Toastr::success('Career Library updated successfully','success');
        return Redirect('/admin/career-library/list');
    }
    public function CareerLibraryDeleteFun($id){
        CareerLibraryDetails::where('id',$id)->delete();
        Toastr::success('Career Library deleted successfully','success');
        return Redirect('/admin/career-library/list');
    }
}
