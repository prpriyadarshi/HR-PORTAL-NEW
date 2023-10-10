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
Route::get('/tasks', Tasks::class)->name('task');
});






