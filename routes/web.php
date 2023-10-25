<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Asset\Assetlist;
use App\Livewire\Asset\Assetupdate;
use App\Livewire\User\Userlist;
use App\Livewire\User\Userupdate;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccessoriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/asset', Assetlist::class);
Route::get('/asset/formupdateasset/{id}', Assetupdate::class);
Route::get('/listuser', Userlist::class);
Route::get('/listuser/formupdateuser/{id}', Userupdate::class);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/accessories', [AccessoriesController::class, 'show']);