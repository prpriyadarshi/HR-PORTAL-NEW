<?php

use App\Livewire\EmpLogin;
use App\Livewire\Home;
use App\Livewire\ProfileInfo;
use Illuminate\Support\Facades\Route;


Route::get('/',Home::class);
Route::get('/ProfileInfo',ProfileInfo::class)->name('profile.info');
Route::get('/emplogin',EmpLogin::class)->name('emplogin');
