<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book_sessions;
use App\Models\SessionHistory;
use Carbon\Carbon;
use App\Models\UserSubscriptionModel;

class AdminDashboardController extends Controller
{
    public function dashboardIndex(Request $request){
        $totalUser = User::where('role','user')->get()->count();
        $totalSessionBook = Book_sessions::count();
        $totalPendingSession = SessionHistory::where('package_status','active')->where('status','Pending')->get()->count();
        $totalCompleteSession = SessionHistory::where('package_status','active')->where('status','Completed')->get()->count();
        $totalProcessingSession = SessionHistory::where('package_status','active')->where('status','Processing')->get()->count();

        $currentMonthTotal249SessionBook = Book_sessions::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
        ->where('options','1')->get()->count();
        $currentMonthTotal499SessionBook = Book_sessions::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
        ->where('options','2')->get()->count();
        $currentMonthTotalFreeSessionBook = Book_sessions::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
        ->where('options','3')->get()->count();


        $currentMonthTotal13449Subscription = UserSubscriptionModel::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
        ->where('package_id',1)->get()->count();

        $currentMonthTotal6449Subscription = UserSubscriptionModel::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
        ->where('package_id',2)->get()->count();

        $currentMonthTotal449Subscription = UserSubscriptionModel::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
        ->where('package_id',3)->get()->count();

        ////////// search data for chart ///////////////

        if ($request->ajax()) {
            if($request->section == 'session'){
                $startDate = date('Y-m-d',strtotime($request->startDate)).' 00:00:00';
                $endDate = date('Y-m-d',strtotime($request->endDate)).' 23:59:59';

                $currentMonthTotal249SessionBook = Book_sessions::whereBetween('created_at', [$startDate, $endDate])
                ->where('options','1')->get()->count();
                $currentMonthTotal499SessionBook = Book_sessions::whereBetween('created_at', [$startDate, $endDate])
                ->where('options','2')->get()->count();
                $currentMonthTotalFreeSessionBook = Book_sessions::whereBetween('created_at', [$startDate, $endDate])
                ->where('options','3')->get()->count();
                return response()->json(['currentMonthTotal249SessionBook'=>$currentMonthTotal249SessionBook,'currentMonthTotal499SessionBook'=>$currentMonthTotal499SessionBook,'currentMonthTotalFreeSessionBook'=>$currentMonthTotalFreeSessionBook]);
            }else if($request->section == 'subscription'){
                $startDate = date('Y-m-d',strtotime($request->startDate)).' 00:00:00';
                $endDate = date('Y-m-d',strtotime($request->endDate)).' 23:59:59';

                $currentMonthTotal13449Subscription = UserSubscriptionModel::whereBetween('created_at', [$startDate, $endDate])
                ->where('package_id',1)->get()->count();
                $currentMonthTotal6449Subscription = UserSubscriptionModel::whereBetween('created_at', [$startDate, $endDate])
                ->where('package_id',2)->get()->count();
                $currentMonthTotal449Subscription = UserSubscriptionModel::whereBetween('created_at', [$startDate, $endDate])
                ->where('package_id',3)->get()->count();
                return response()->json(['currentMonthTotal13449Subscription'=>$currentMonthTotal13449Subscription,'currentMonthTotal6449Subscription'=>$currentMonthTotal6449Subscription,'currentMonthTotal449Subscription'=>$currentMonthTotal449Subscription]);
            }
        }


        $currentYear = date('Y');
        $monthlyData = [];
        for($iM =1;$iM<=12;$iM++){
            $month = date('F', mktime(0, 0, 0, $iM, 10));
            $num_padded = sprintf("%02d", $iM);

            $totalUserMonthWise = User::whereYear('created_at', '=', $currentYear)
              ->whereMonth('created_at', '=', $num_padded)
              ->where('role','user')->get()->count();

            $monthlyData[$iM]['month'] = $month;
            $monthlyData[$iM]['count'] = $totalUserMonthWise;
            $monthlyData[$iM]['color'] = ($iM % 2 == 0)?'b87333':'gold';
        }
        return view('admin.Dashboard.dashboard',compact(['totalUser','totalSessionBook','totalPendingSession','totalCompleteSession','totalProcessingSession','currentMonthTotal249SessionBook','currentMonthTotal499SessionBook','currentMonthTotalFreeSessionBook','currentMonthTotal13449Subscription','currentMonthTotal6449Subscription','currentMonthTotal449Subscription','monthlyData']));
    }
}
