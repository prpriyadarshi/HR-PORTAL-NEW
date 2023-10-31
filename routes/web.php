<?php

use App\Livewire\EmpLogin;
use App\Livewire\Feeds;
use App\Livewire\HelpDesk;
use App\Livewire\Home;
use App\Livewire\Peoples;
use App\Livewire\ProfileInfo;
use App\Livewire\Settings;
use App\Livewire\Review;
use App\Livewire\Tasks;

use App\Livewire\Itdeclaration;
use App\Livewire\Itstatement1;
use App\Livewire\Payroll;
use App\Livewire\SalarySlips;
use App\Livewire\PlanA;
use App\Livewire\Documents;
 use App\Livewire\Declaration;
use App\Livewire\Downloadform;
use App\Livewire\Documentcenter;
use App\Livewire\Investment;
use App\Livewire\LeaveApply;
use App\Livewire\LeavePage;
use App\Livewire\Reimbursement;
use App\Livewire\LeaveBalances;



use App\Livewire\HolidayCalender;

use App\Livewire\LeaveHistory;

use App\Livewire\ViewDetails;



use App\Livewire\LeaveCalender;



use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'checkAuth'], function () {
    Route::get('/emplogin', EmpLogin::class)->name('emplogin');
    Route::get('/CreateCV', function () {
        return view('create_cv_view');
    });
    Route::get('/Jobs', function () {
        return view('jobs_view');
    });
});
Route::middleware(['auth:emp'])->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/ProfileInfo', ProfileInfo::class)->name('profile.info');
    Route::get('/Feeds', Feeds::class);
    Route::get('/PeoplesList', Peoples::class);
    Route::get('/HelpDesk', HelpDesk::class);
    Route::get('/Settings', Settings::class);
    Route::get('/review', Review::class)->name('review');
    Route::get('/tasks', Tasks::class)->name('task');
    Route::get('/plan-C', PlanA::class)->name('plan-a');
 
Route::get('/payslip', Payroll::class);
Route::get('/slip', SalarySlips::class);
Route::get('/itdeclaration', Itdeclaration::class);
Route::get('/formdeclaration', Declaration::class);

Route::get('/itstatement', Itstatement1::class);
Route::get('/document', Documentcenter::class);
 Route::get('/reimbursement', Reimbursement::class);
Route::get('/investment', Investment::class);
Route::get('/documents', Documents::class);



    Route::get('/leave-page', LeavePage::class)->name('leave-page');



    Route::get('/leave-apply', LeaveApply::class)->name('leave-apply');



    Route::get('/holiday-calender', HolidayCalender::class)->name('holiday-calender');



    Route::get('/leave-balances', LeaveBalances::class)->name('leave-balances');



    Route::get('/salary-revision', SalaryRevisions::class)->name('salary-revision');



    Route::get('/leave-page', LeavePage::class)->name('leave-page');



    Route::get('/leave-apply', LeaveApply::class)->name('leave-apply');



    Route::get('/holiday-calender', HolidayCalender::class)->name('holiday-calender');



    Route::get('/view-details', ViewDetails::class)->name('view-details');

    Route::get('/leave-balances', LeaveBalances::class)->name('leave-balances');

    Route::get('/leave-calender', LeaveCalender::class)->name('leave-calender');



    Route::get('/salary-revision', SalaryRevisions::class)->name('salary-revision');
});
Route::get('/your-download-route', function () {
    return view('download-pdf');
});
Route::get('/downloadform', function () {
    return view('downloadform');
});
