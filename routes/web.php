<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserlistController;
use App\Http\Controllers\AccessoriesController;
use App\Http\Controllers\AssetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/listuser', [UserlistController::class, 'render']);
Route::get('/asset', [AssetController::class, 'render']);
Route::get('/accessories', [AccessoriesController::class, 'show']);