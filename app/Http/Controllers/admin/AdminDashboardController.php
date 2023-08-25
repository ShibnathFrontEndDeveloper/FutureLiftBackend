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
    public function dashboardIndex(){
        $totalUser = User::where('role','user')->get()->count();
        $totalSessionBook = Book_sessions::count();
        $totalPendingSession = SessionHistory::where('package_status','active')->where('status','Pending')->get()->count();
        $totalCompleteSession = SessionHistory::where('package_status','active')->where('status','Completed')->get()->count();
        $totalProcessingSession = SessionHistory::where('package_status','active')->where('status','Processing')->get()->count();
        $currentMonthTotalSessionBook = Book_sessions::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
        ->get()->count();
        $currentMonthTotalSubscription = UserSubscriptionModel::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
        ->get()->count();
        $currentYear = date('Y');
        $monthlyData = [];
        for($iM =1;$iM<=12;$iM++){
            $month = date('F', mktime(0, 0, 0, $iM, 10));
            $num_padded = sprintf("%02d", $iM);

            $totalUser = User::whereYear('created_at', '=', $currentYear)
              ->whereMonth('created_at', '=', $num_padded)
              ->where('role','user')->get()->count();

            $monthlyData[$iM]['month'] = $month;
            $monthlyData[$iM]['count'] = $totalUser;
            $monthlyData[$iM]['color'] = ($iM % 2 == 0)?'b87333':'gold';
        }
        return view('admin.Dashboard.dashboard',compact(['totalUser','totalSessionBook','totalPendingSession','totalCompleteSession','totalProcessingSession','currentMonthTotalSessionBook','currentMonthTotalSubscription','monthlyData']));
    }
}
