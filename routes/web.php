<?php

use App\Livewire\EmpLogin;
use App\Livewire\Home;
use App\Livewire\ProfileInfo;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'checkAuth'], function () {
    Route::get('/emplogin',EmpLogin::class)->name('emplogin');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get("/", \App\Livewire\Home::class)->name('home');
    Route::get('/ProfileInfo',ProfileInfo::class)->name('profile.info');
});
