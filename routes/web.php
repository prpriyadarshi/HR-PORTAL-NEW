<?php

use App\Livewire\Dashboard;
use App\Livewire\EmpLogin;
use App\Livewire\Feeds;
use App\Livewire\Home;
use App\Livewire\ProfileInfo;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'checkAuth'], function () {
     Route::get('/emplogin', EmpLogin::class)->name('emplogin');
});

// Route::get('/emplogin', EmpLogin::class)->name('emplogin');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', Dashboard::class)->name('dash');
    Route::get('/Home', Home::class)->name('home');
    Route::get('/ProfileInfo', ProfileInfo::class)->name('profile.info');
    Route::get('/Feeds', Feeds::class);
});

