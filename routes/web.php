<?php
 
use App\Livewire\ApprovedDetails;
use App\Livewire\AddEmployeeDetails;
use App\Livewire\UpdateEmployeeDetails;
use App\Livewire\Delegates;
use App\Livewire\EmpLogin;
use App\Livewire\EmployeesReview;
use App\Livewire\Everyone;
use App\Livewire\Feeds;

 
use App\Livewire\Attendance;
use App\Livewire\AuthChecking;
use App\Livewire\GoogleLogins;
use App\Livewire\LeaveCalender;
use App\Livewire\LeaveHistory;
use App\Livewire\LeavePending;
use App\Livewire\Payslip;
use App\Livewire\Regularisation;
 
use App\Livewire\RegularisationPending;
use App\Livewire\EmployeeSwipes;
use App\Livewire\AttendanceMusterData;
use App\Livewire\AttendanceMuster;
use App\Livewire\AttendenceMasterDataNew;
use App\Livewire\EmployeeSwipesData;
use App\Livewire\HelpDesk;
use App\Livewire\Home;
use App\Livewire\Peoples;
use App\Livewire\ProfileInfo;
use App\Livewire\ReviewLeave;
use App\Livewire\ReviewRegularizations;
use App\Livewire\SalaryRevisions;
use App\Livewire\Settings;
use App\Livewire\Review;
use App\Livewire\Tasks;
// use App\Livewire\Loan;
use App\Livewire\Itdeclaration;
use App\Livewire\Itstatement1;
use App\Livewire\Payroll;
use App\Livewire\SalarySlips;
use App\Livewire\PlanA;
use App\Livewire\Documents;
use App\Livewire\Declaration;
use App\Livewire\DocForms;
use App\Livewire\Downloadform;
use App\Livewire\Documentcenter;
use App\Livewire\DocumentCenterLetters;
use App\Livewire\EmpList;
use App\Livewire\Investment;
use App\Livewire\LeaveApply;
use App\Livewire\LeavePage;
 
// use App\Livewire\SalaryRevisions;
use App\Livewire\Reimbursement;
use App\Livewire\LeaveBalances;
use App\Livewire\WhoIsInChart;
use App\Livewire\LeaveCancel;
use App\Livewire\TeamOnLeave;
use App\Livewire\HolidayCalender;
use App\Livewire\HomeDashboard;
use App\Livewire\LeaveBalanaceAsOnADay;
use App\Livewire\LetterRequests;
use App\Livewire\TeamOnLeaveChart;
 
use App\Livewire\ViewDetails;
use App\Livewire\ViewDetails1;
use App\Livewire\ListOfAppliedJobs;
use App\Livewire\RegularisationHistory;
use App\Livewire\TeamOnAttendance;
use App\Livewire\TeamOnAttendanceChart;
use App\Livewire\ViewPendingDetails;
use Illuminate\Support\Facades\Route;
 
 
 
Route::group(['middleware' => 'checkAuth'], function () {
 
    Route::get('/emplogin', EmpLogin::class)->name('emplogin');
 
 
 
 
 
    Route::get('/CompanyLogin', function () {
        return view('company_login_view');
    });
 
 
    Route::get('/login', [GoogleLogins::class, 'redirectToGoogle'])->name('login');
    Route::get('/auth/google/callback', [GoogleLogins::class, 'handleGoogleCallback'])->name('auth/google/callback');
    Route::get('/Jobs', function () {
        return view('jobs_view');
    });
    Route::get('/CreateCV', function () {
        return view('create_cv_view');
    });
});
Route::get('/Login&Register', function () {
    return view('login_and_register_view');
});
 
 
 
Route::middleware(['auth:web'])->group(function () {
    Route::get('/CreateCV', function () {
        return view('create_cv_view');
    });
    Route::get('/Jobs', function () {
        return view('jobs_view');
    });
 
 
    Route::get('/AllNotifications', function () {
        return view('all-notifications_view');
    });
    Route::get('/NotificationList{jobId}', function ($jobId) {
        return view('notification_list_view', compact('jobId'));
    })->name('job-interview-details');
 
    Route::get('/UserProfile', function () {
        return view('user_profile_view');
    });
    Route::get('/full-job-view/{jobId}', function ($jobId) {
        return view('full_job_details_view', compact('jobId'));
    })->name('full-job-view');
 
    Route::get('/AppliedJobs', function () {
        return view('applied_jobs_view');
    });
    Route::get('/list-of-applied-jobs', ListOfAppliedJobs::class)->name('list-of-applied-jobs');
    Route::get('/Companies', function () {
        return view('companies_view');
    });
    Route::get('/company-based-jobs/{companyId}', function ($companyId) {
        return view('company_based_jobs_view', compact('companyId'));
    })->name('company-based-jobs');
    Route::get('/VendorScreen', function () {
        return view('vendor_screen_view');
    });
});
 
 
 
Route::middleware(['auth:com'])->group(function () {
    Route::get('/PostJobs', function () {
        return view('post_jobs_view');
    });
 
 
    Route::get('/VendorsSubmittedCVs', function () {
        return view('vendors-submitted-cvs');
    });
    Route::get('/JobSeekersAppliedJobs', function () {
        return view('job-seekers-applied-jobs');
    });
 
    Route::get('/empregister', function () {
        return view('emp-register-view');
    });
    // Route::get('/emplist', EmpList::class)->name('emplist');
    Route::get('/emplist', function () {
        return view('emp-list-view');
    });
 
   Route::get('/emp-update/{empId}', function ($empId) {
    return view('emp-update-view', compact('empId'));
})->name('emp-update');
 
 
});
 
Route::middleware(['auth:hr'])->group(function () {
    Route::get('/hrPage', AuthChecking::class)->name('home');
    Route::get('/home-dashboard', HomeDashboard::class)->name('admin-home');
    Route::get('/letter-requests', LetterRequests::class)->name('letter-requests');
    Route::get('/add-employee-details/{employee?}', AddEmployeeDetails::class)->name('add-employee-details');
    Route::get('/update-employee-details', UpdateEmployeeDetails::class)->name('update-employee-details');
});
 
Route::middleware(['auth:finance'])->group(function () {
    Route::get('/financePage', AuthChecking::class)->name('home');
});
 
Route::middleware(['auth:it'])->group(function () {
    Route::get('/itPage', AuthChecking::class)->name('home');
});
 
 
Route::middleware(['auth:emp'])->group(function () {

    Route::get('/', Home::class)->name('home');
    Route::get('/doc-forms', DocForms::class);
    Route::get('/LeaveBalanceAsOnADay', LeaveBalanaceAsOnADay::class);
 
    // Attendance Routes
    Route::get('/Attendance', Attendance::class)->name('Attendance');
    Route::get('/whoisinchart', WhoIsInChart::class)->name('whoisinchart');
    Route::get('/regularisation', Regularisation::class)->name('regularisation');
    Route::get('/regularisation-pending/{id}', RegularisationPending::class)->name('regularisation-pending');
    Route::get('/regularisation-history/{id}', RegularisationHistory::class)->name('regularisation-history');
    Route::get('/employee-swipes', EmployeeSwipes::class)->name('employee-swipes');
    Route::get('/employee-swipes-data', EmployeeSwipesData::class)->name('employee-swipes-data');
    Route::get('/attendance-muster', AttendanceMuster::class)->name('attendance-muster');
    Route::get('/attendance-muster-data', AttendenceMasterDataNew::class)->name('attendance-muster-data');
    Route::get('/ProfileInfo', ProfileInfo::class)->name('profile.info');
    Route::get('/Settings', Settings::class);

    //Feeds Module
    Route::get('/Feeds', Feeds::class);
    Route::get('/everyone', Everyone::class);
 
    //People module
    Route::get('/PeoplesList', Peoples::class);
 
 
    //Helpdesk module
    Route::get('/HelpDesk', HelpDesk::class);
 
 
    // Related salary module and ITdeclaration Document center
    Route::get('/payslip', Payroll::class);
    Route::get('/slip', SalarySlips::class);
    Route::get('/itdeclaration', Itdeclaration::class);
    Route::get('/team-on-attendance-chart', TeamOnAttendanceChart::class);
    Route::get('/itstatement', Itstatement1::class);
    Route::get('/document', Documentcenter::class);
    Route::get('/documents', Documents::class);
    Route::get('/team-on-leave-chart', TeamOnLeaveChart::class);
    Route::get('/salary-revision', SalaryRevisions::class)->name('salary-revision');
 
    Route::get('/plan-A', PlanA::class)->name('plan-a');
 
 
 
 
 
 
 
    Route::get('/leave-page', LeavePage::class)->name('leave-page');
 
 
 
    Route::get('/leave-apply', LeaveApply::class)->name('leave-apply');
 
 
 
    Route::get('/holiday-calender', HolidayCalender::class)->name('holiday-calender');
 
 
 
    Route::get('/leave-balances', LeaveBalances::class)->name('leave-balances');
 
 
 
 
 
 
 
    Route::get('/leave-page', LeavePage::class)->name('leave-page');
 
 
 
    Route::get('/leave-apply', LeaveApply::class)->name('leave-apply');
    Route::get('/approved-details/{leaveRequestId}', ApprovedDetails::class)->name('approved-details');
 
    Route::get('/holiday-calender', HolidayCalender::class)->name('holiday-calender');
    Route::get('/document-center-letters', DocumentCenterLetters::class);
 
 
    Route::get('/view-pending-details', ViewPendingDetails::class)->name('view-pending-details');
    Route::get('/delegates', Delegates::class);
 
    Route::get('/view-details/{leaveRequestId}', ViewDetails::class)->name('view-details');
 
    Route::get('/leave-balances', LeaveBalances::class)->name('leave-balances');
    Route::get('/leave-cancel', LeaveCancel::class)->name('leave-cancel');
    Route::get('/leave-calender', LeaveCalender::class)->name('leave-calender');
   
    Route::get('/leave-history/{leaveRequestId}', LeaveHistory::class)->name('leave-history');
    Route::get('/leave-pending/{leaveRequestId}', LeavePending::class)->name('leave-pending');
 
    Route::get('/team-on-leave', TeamOnLeave::class)->name('team-on-leave');
    Route::get('/salary-revision', SalaryRevisions::class)->name('salary-revision');
    Route::get('/plan-C', PlanA::class)->name('plan-a');
    Route::get('/formdeclaration', Declaration::class);
    Route::get('/itstatement', Itstatement1::class);
    Route::get('/document', Documentcenter::class);
    Route::get('/reimbursement', Reimbursement::class);
    Route::get('/investment', Investment::class);
    Route::get('/documents', Documents::class);
    Route::get('/tasks', Tasks::class);
 
 
 
    Route::get('/leave-page', LeavePage::class)->name('leave-page');
    Route::get('/approved-details/{leaveRequestId}', ApprovedDetails::class)->name('approved-details');
    Route::get('/view-details/{leaveRequestId}', ViewDetails::class)->name('view-details');
    Route::get('/leave-apply', LeaveApply::class)->name('leave-apply');
    Route::get('/holiday-calender', HolidayCalender::class)->name('holiday-calender');
    Route::get('/leave-balances', LeaveBalances::class)->name('leave-balances');
    Route::get('/leave-cancel', LeaveCancel::class)->name('leave-cancel');
    Route::get('/leave-calender', LeaveCalender::class)->name('leave-calender');
    Route::get('/leave-history/{leaveRequestId}', LeaveHistory::class)->name('leave-history');
    Route::get('/leave-pending/{leaveRequestId}', LeavePending::class)->name('leave-pending');
    Route::get('/team-on-leave', TeamOnLeave::class)->name('team-on-leave');
    Route::get('/team-on-leave-chart', TeamOnLeaveChart::class)->name('team-on-leave-chart');
   
 
    // TODO module
    Route::get('/tasks', Tasks::class)->name('task');
    Route::get('/employees-review', EmployeesReview::class)->name('employees-review');
    Route::get('/review-leave', ReviewLeave::class)->name('ReviewLeave');
    Route::get('/view-details1', ViewDetails1::class)->name('view-details1');
    Route::get('/review-regularizations', ReviewRegularizations::class)->name('review-regularizations');
});
 
 
Route::get('/itform', function () {
    return view('itform');
});
//Download routes
Route::get('/your-download-route', function () {
    return view('download-pdf');
});
Route::get('/downloadform', function () {
    return view('downloadform');
});
 
