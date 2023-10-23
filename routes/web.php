<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserlistController;
use App\Http\Controllers\AccessoriesController;
use App\Livewire\Assetlist;
use App\Livewire\Assetupdate;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/listuser', [UserlistController::class, 'render']);
Route::get('/asset', Assetlist::class);
Route::get('/accessories', [AccessoriesController::class, 'show']);
// Route::get('/asset/formupdate', Assetupdate::class);