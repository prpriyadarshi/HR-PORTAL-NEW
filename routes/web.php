<?php

use App\Livewire\EmpLogin;
use App\Livewire\Feeds;
use App\Livewire\HelpDesk;
use App\Livewire\Home;
use App\Livewire\Peoples;
use App\Livewire\ProfileInfo;
use App\Livewire\Settings;
use App\Livewire\Review;
use App\Livewire\Task;
use App\Livewire\Itdeclaration;
use App\Livewire\Itstatement1;
use App\Livewire\Payroll;
use App\Livewire\Payslip;
use App\Livewire\PlanA;
use App\Livewire\Documents;
use App\Livewire\Documentcenter;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'checkAuth'], function () {
    Route::get('/emplogin', EmpLogin::class)->name('emplogin');
});

Route::middleware(['auth:emp'])->group(function () {
Route::get('/', Home::class)->name('home');
Route::get('/ProfileInfo', ProfileInfo::class)->name('profile.info');
Route::get('/Feeds', Feeds::class);
Route::get('/PeoplesList', Peoples::class);
Route::get('/HelpDesk', HelpDesk::class);

Route::get('/Settings', Settings::class);
Route::get('/review', Review::class)->name('review');
Route::get('/task', Task::class)->name('task');

Route::get('/payslip', Payroll::class);
Route::get('/slip', Payslip::class);
Route::get('/itdeclaration', Itdeclaration::class);
Route::get('/itstatement', Itstatement1::class);
Route::get('/document', Documentcenter::class);
Route::get('/documents', Documents::class);
Route::get('/delegatesddb', function(){
    return view('delegate');
});
Route::get('/plan-A', PlanA::class)->name('plan-a');
});




Route::get('/your-download-route', function(){
    return view('download-pdf');
});
Route::get('/v2/employee/addemployeworkflowdelegates', function(){
    return view('submitdelegate');
});


