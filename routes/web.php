<?php

use App\Livewire\EmpLogin;
use App\Livewire\Feeds;
use App\Livewire\Home;
use App\Livewire\ProfileInfo;
use App\Livewire\LeavePage;
use App\Livewire\LeavePending;
use App\Livewire\LeaveApply;
use App\Livewire\LeaveHistory;
use App\Livewire\ViewDetails;
use App\Livewire\LeaveBalances;
use App\Livewire\LeaveCalender;
use App\Livewire\HolidayCalender;
use Illuminate\Support\Facades\Route;

    Route::get('/emplogin', EmpLogin::class)->name('emplogin');
    Route::get('/', Home::class)->name('home');
    Route::get('/ProfileInfo', ProfileInfo::class)->name('profile.info');
    Route::get('/Feeds', Feeds::class);
    Route::get('/leave-page', LeavePage::class);
    Route::get('/leave-pending', LeavePending::class);
    Route::get('/leave-apply', LeaveApply::class);
    Route::get('/leave-history', LeaveHistory::class);
    Route::get('/view-details', ViewDetails::class);
    Route::get('/leave-balances', LeaveBalances::class);
    Route::get('/leave-calender', LeaveCalender::class);
    Route::get('/holiday-calender', HolidayCalender::class);
