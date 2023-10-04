<?php

use App\Livewire\EmpLogin;
use App\Livewire\Feeds;
use App\Livewire\HelpDesk;
use App\Livewire\Home;
use App\Livewire\PeopleLists;
use App\Livewire\ProfileInfo;
use App\Livewire\Review;
use App\Livewire\Task;
use Illuminate\Support\Facades\Route;



Route::get('/emplogin', EmpLogin::class)->name('emplogin');
Route::get('/', Home::class)->name('home');
Route::get('/ProfileInfo', ProfileInfo::class)->name('profile.info');
Route::get('/Feeds', Feeds::class);
Route::get('/PeoplesList', PeopleLists::class);
Route::get('/HelpDesk', HelpDesk::class);

    Route::get('/emplogin', EmpLogin::class)->name('emplogin');
    Route::get('/', Home::class)->name('home');
    Route::get('/ProfileInfo', ProfileInfo::class)->name('profile.info');
    Route::get('/Feeds', Feeds::class);
    Route::get('/review', Review::class)->name('review');
    Route::get('/task', Task::class)->name('task');

