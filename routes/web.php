<?php

use App\Livewire\EmpLogin;
use App\Livewire\Feeds;
use App\Livewire\HelpDesk;
use App\Livewire\Home;
use App\Livewire\PeopleLists;
use App\Livewire\ProfileInfo;
use App\Livewire\Settings;
use App\Livewire\Review;
use App\Livewire\Task;
use App\Livewire\LeaveApply;
use App\Livewire\LeavePage;
use App\Livewire\HolidayCalender;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'checkAuth'], function () {
    Route::get('/emplogin', EmpLogin::class)->name('emplogin');
});

Route::middleware(['auth:emp'])->group(function () {
Route::get('/', Home::class)->name('home');
Route::get('/ProfileInfo', ProfileInfo::class)->name('profile.info');
Route::get('/Feeds', Feeds::class);
Route::get('/PeoplesList', PeopleLists::class);
Route::get('/HelpDesk', HelpDesk::class);

Route::get('/Settings', Settings::class);
Route::get('/review', Review::class)->name('review');
Route::get('/task', Task::class)->name('task');

Route::get('/leave-page', LeavePage::class)->name('leave-page');
Route::get('/leave-apply', LeaveApply::class)->name('leave-apply');
Route::get('/holiday-calender', HolidayCalender::class)->name('holiday-calender');

});







