<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book_sessions;
use App\Models\SessionHistory;

class AdminDashboardController extends Controller
{
    public function dashboardIndex(){
        $totalUser = User::where('role','user')->get()->count();
        $totalSessionBook = Book_sessions::count();
        $totalPendingSession = SessionHistory::where('package_status','active')->where('status','Pending')->get()->count();
        $totalCompleteSession = SessionHistory::where('package_status','active')->where('status','Completed')->get()->count();
        $totalProcessingSession = SessionHistory::where('package_status','active')->where('status','Processing')->get()->count();
        return view('admin.Dashboard.dashboard',compact(['totalUser','totalSessionBook','totalPendingSession','totalCompleteSession','totalProcessingSession']));
    }
}
