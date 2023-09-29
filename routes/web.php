<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserlistController;
use App\Http\Controllers\AccessoriesController;
use App\Livewire\AssetList;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/listuser', [UserlistController::class, 'index']);
Route::get('/asset', AssetList::class);
Route::get('/accessories', [AccessoriesController::class, 'show']);