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
            $sessionList = SessionHistory::where('package_status','active')->orderByRaw("FIELD(status , 'Pending','Active','Completed','Processing') DESC")->get();
            return view('admin.Dashboard.counselling-session',compact(['sessionList']));
        }else{
            return view('admin.Dashboard.404');
        }
    }
    public function markDoneCounselling($id,$userId,$package_id){
        $update = SessionHistory::find($id);
        $update->status = "Completed";
        $update->save();

        if($update){
            $nextId = $this->getNextCounsellingId($userId,$package_id);
            if($nextId != ""){
                $updateStatus = SessionHistory::find($nextId);
                $updateStatus->status = "Active";
                $updateStatus->save();
            }
        }
        Toastr::success('Counselling session updated successfully','success');
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
}
