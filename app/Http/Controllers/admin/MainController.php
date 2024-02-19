<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book_sessions;
use App\Models\CounsellingPrice;
use App\Models\UserSubscriptionModel;
use App\Models\SessionHistory;
use Session;
use App\Helpers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use App\Models\User_information;
use App\Models\HelpForm;
use App\Models\QueryForm;
use App\Models\SubscribeEmail;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use App\Models\UserRole;
use App\Models\HelpFaqCategory;
use App\Models\CouncelorDetails;

class MainController extends Controller
{
    public function indexBookSession($show){
        if($show == "list"){
            $sessionList = Book_sessions::orderBy('schedule_date_time','DESC')->get();
            return view('admin.Dashboard.book-session',compact(['sessionList']));
        }else{
            return view('admin.Dashboard.404');
        }
    }
    public function indexCounsellingSession($show){
        if($show == "list"){
            $roleName = Helpers::userIdWiseRoleName(Auth::guard('admin')->user()->id);
            if($roleName == 'Admin' || $roleName == 'Super Admin'){
                $sessionList = SessionHistory::where('package_status','active')->orderByRaw("FIELD(status , 'Pending','Active','Completed','Processing') DESC")->get();
            }else{
                $sessionList = SessionHistory::where('package_status','active')->where('assign_user',Auth::guard('admin')->user()->id)->orderByRaw("FIELD(status , 'Pending','Active','Completed','Processing') DESC")->get();
            }


            $role = Role::where('name','Counselor')->first();
            $counselorList = [];
            if($role){
                $roleWiseUser = UserRole::select('userId')->where('roleId',$role->id)->pluck('userId');
                if($roleWiseUser){
                    $counselorList = User::whereIn('id',$roleWiseUser)->get();
                }
            }


            return view('admin.Dashboard.counselling-session',compact(['sessionList','counselorList']));
        }else{
            return view('admin.Dashboard.404');
        }
    }
    public function markDoneCounselling(Request $request){
        $id = $request->id;
        $userId = $request->userId;
        $package_id = $request->package_id;

        $validator = Validator::make($request->all(), [
            'counselling_report' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back();
        }


        $update = SessionHistory::find($id);
        $update->status = "Completed";
        $update->counselling_report = $request->counselling_report;
        $update->save();

        if($update){
            $nextId = $this->getNextCounsellingId($userId,$package_id);
            if($nextId != ""){
                $updateStatus = SessionHistory::find($nextId);
                $updateStatus->status = "Active";
                $updateStatus->save();
            }
        }

        $notificationContent = "Career Counseling Session Completed! Your counseling session has concluded, and we hope it was a fruitful experience for you. If you have any more questions or need ongoing support, feel free to reach out. Your career success is our priority!";
        Helpers::addUserNotification($userId,'counselling_session_complete','Counselling Session Completed','career_session_complete',$notificationContent);

        Toastr::success('Counselling session updated successfully','success');
        return Redirect('/admin/counselling-session/list');
    }

    public function assignCounselorSession(Request $request){
        $validator = Validator::make($request->all(), [
            'assign_user' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error('Please select counselor!','error');
        	}
        	return back();
        }

        $update = SessionHistory::find($request->id);
        $update->assign_user = $request->assign_user;
        $update->save();

        Toastr::success('Counselling session assign successfully','success');
        return Redirect('/admin/counselling-session/list');
    }

    public function getNextCounsellingId($userId,$package_id){
        $id = "";
        $session = SessionHistory::where('package_status','active')->where('userId',$userId)->where('package_id',$package_id)->where('status','Pending')->first();
        if($session){
            $id = $session->id;
        }
        return $id;
    }
    public function sessionCompleteFun(Request $request){
       $update =  Book_sessions::find($request->id);
       $update->status = "Complete";
       $update->remarks = $request->remarks;
       $update->save();

       Toastr::success('Session updated successfully','success');
       return Redirect('/admin/book-session/list');

    }
    public function indexUserDetails($show,$id){
        if($show == "details"){
            $userInfo = User_information::where('userId',$id)->first();
            $user = User::find($id);
            $userSubscription = UserSubscriptionModel::where('userId',$id)->where('status','active');
            $userSubscriptionCount = $userSubscription->get()->count();
            $userSubscriptionData = $userSubscription->first();
            $userSessionHistory = SessionHistory::where('userId',$id)->where('package_status','active');
            $userSessionHistoryCount = $userSessionHistory->get()->count();
            $userSessionHistoryData = $userSessionHistory->get();
            return view('admin.Dashboard.user-details',compact(['userInfo','user','userSubscriptionCount','userSubscriptionData','userSessionHistoryCount','userSessionHistoryData']));
        }else{
            return view('admin.Dashboard.404');
        }
    }
    public function formIndex($show){
        if($show == "queryForm"){
            $check = Helpers::accessHasCheck([10]);
            if($check == false){
                return view('admin.Dashboard.404');
            }
            $query = QueryForm::orderBy('id','DESC')->get();
            return view('admin.Dashboard.site-form',compact(['query']));
        }else if($show == "helpForm"){
            $check = Helpers::accessHasCheck([9]);
            if($check == false){
                return view('admin.Dashboard.404');
            }
            $help = HelpForm::orderBy('id','DESC')->get();
            return view('admin.Dashboard.site-form',compact(['help']));
        }else{
            return view('admin.Dashboard.404');
        }
    }
    public function deleteQueryFormFun($id){
        $query = QueryForm::where('id',$id)->delete();
        Toastr::success('Data deleted successfully','success');
        return back();
    }
    public function deleteHelpFormFun($id){
        $help = HelpForm::where('id',$id)->delete();
        Toastr::success('Data deleted successfully','success');
        return back();
    }
    public function subscribeEmailIndex($show){
        if($show == "list"){
            $data = SubscribeEmail::orderBy('id','DESC')->get();
            return view('admin.Dashboard.subscribe-email',compact(['data']));
        }else{
            return view('admin.Dashboard.404');
        }
    }
    public function subscribeEmailDeleteFun($id){
        $query = SubscribeEmail::where('id',$id)->delete();
        Toastr::success('Data deleted successfully','success');
        return back();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function uploadCkeditor(Request $request){
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
    public function indexHelpFaqCategory($show){
        if($show == "list"){
            $category = HelpFaqCategory::orderBy('id','DESC')->get();
            return view('admin.Dashboard.help-faq-category',compact(['category']));
        }else if($show == "add"){
            return view('admin.Dashboard.help-faq-category');
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function helpFaqCategoryAddFun(Request $request){
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

        $category = HelpFaqCategory::where('name',$request->name)->get()->count();
        if($category > 0){
            Toastr::error('This category allready exists','error');
            return back()->withInput();
        }

        $category = new HelpFaqCategory();
        $category->name = $request->name;
        $category->save();
        Toastr::success('Category added successfully','success');
        return Redirect('/admin/help-faq-category/list');
    }
    public function indexHelpFaqCategoryEdit($show,$id){
        if($show == "edit"){
            $data = HelpFaqCategory::find($id);
            return view('admin.Dashboard.help-faq-category',compact(['data']));
        }
        else{
            return view('admin.Dashboard.404');
        }
    }
    public function helpFaqCategoryEditFun(Request $request){
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
        $category = HelpFaqCategory::where('name',$request->name)->where('id','!=',$request->editId)->get()->count();
        if($category > 0){
            Toastr::error('This category allready exists','error');
            return back()->withInput();
        }

        $category = HelpFaqCategory::find($request->editId);
        $category->name = $request->name;
        $category->save();
        Toastr::success('Category updated successfully','success');
        return Redirect('/admin/help-faq-category/list');
    }
    public function helpFaqCategoryDeleteFun($id){
        HelpFaqCategory::where('id',$id)->delete();
        Toastr::success('Category deleted successfully','success');
        return Redirect('/admin/help-faq-category/list');
    }
    public function myProfileIndex(){
        $user = User::select('name','id','email','phone','profile_image')->where('id',Auth::guard('admin')->user()->id)->first();
        $details = CouncelorDetails::where('userId',(Auth::guard('admin')->user()->id))->first();
        return view('admin.Dashboard.my-profile',compact(['user','details']));
    }
    public function adminUpdateProfileFun(Request $request){
        $user = User::find(Auth::guard('admin')->user()->id);
        if($request->has('profile_image')){
            $imageName = time().'_'.rand(999,9999).'.'.$request->profile_image->extension();
            $request->profile_image->move(public_path('assets/user_images'), $imageName);
        }else{
            $imageName = $user->profile_image;
        }

        $userUpdate = User::find(Auth::guard('admin')->user()->id);
        $userUpdate->profile_image = $imageName;
        $userUpdate->phone = $request->phone;
        $userUpdate->name = $request->name;
        $userUpdate->save();


        $qualification = [];
        if(count($request->qualification_type) > 0 && !Helpers::anyArrayFieldNullChecking($request->qualification_type)){
            foreach ($request->qualification_type as $qualification_typekey => $qualification_typevalue) {
                $qualification[$qualification_typekey]['qualification_type'] = $qualification_typevalue;
                $qualification[$qualification_typekey]['passed_year'] = (isset($request->passed_year[$qualification_typekey]))?$request->passed_year[$qualification_typekey]:'';
            }
        }


        $userDetails = CouncelorDetails::where('userId',(Auth::guard('admin')->user()->id))->first();
        if($userDetails){
            $userDetails->bio = $request->bio;
            $userDetails->qualification = (count($qualification) > 0)?json_encode($qualification):NULL;
            $userDetails->certificate = $request->certificate;
            $userDetails->specialization = $request->specialization;
            $userDetails->save();
        }else{
            $userDetails = new CouncelorDetails();
            $userDetails->userId = Auth::guard('admin')->user()->id;
            $userDetails->bio = $request->bio;
            $userDetails->qualification = (count($qualification) > 0)?json_encode($qualification):NULL;
            $userDetails->certificate = $request->certificate;
            $userDetails->specialization = $request->specialization;
            $userDetails->save();
        }
        Toastr::success('Profile updated successfully','success');
        return Redirect('/admin/my-profile');
    }
}
