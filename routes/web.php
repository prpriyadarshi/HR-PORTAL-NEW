<?php

use App\Livewire\Dashboard;
use App\Livewire\EmpLogin;
use App\Livewire\Feeds;
use App\Livewire\Home;
use App\Livewire\ProfileInfo;
use Illuminate\Support\Facades\Route;


Route::get('/emplogin', EmpLogin::class)->name('emplogin');
Route::get('/', Dashboard::class);
Route::get('/Home', Home::class);
Route::get('/ProfileInfo', ProfileInfo::class)->name('profile.info');
Route::get('/Feeds', Feeds::class);
